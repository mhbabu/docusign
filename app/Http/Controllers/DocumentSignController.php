<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\DocumentSignedMail;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Validation\Rule;

class DocumentSignController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function uploadFiles(Request $request) {
        try {
            $path = 'uploads/';
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
                $indexFile = fopen($path . "/index.html", "w");
                fclose($indexFile);
            }
    
            $filePaths = [];
    
            foreach ($request->file('file_data') as $file) {
                $fileName = uniqid(null, true) . '.' . $file->getClientOriginalExtension();
                $file->move($path, $fileName);
                $filePaths[] = url($path . '/' . $fileName);
            }
    
            // uploded files retrive or save in session array
            $uploadedFiles = $request->session()->get('uploaded_files', []);
            $uploadedFiles = array_merge($uploadedFiles, $filePaths);
            $request->session()->put('uploaded_files', $uploadedFiles);
    
            return response()->json(['status' => true, 'file_paths' => $filePaths]);
        } catch (\Exception $e) {
            return response()->json(['status' => false]);
        }
    }

    public function submit(Request $request)
    {
        $validatedData = $request->validate([
            'signature_status'  => ['required', Rule::in(['Digital Signature', 'Image Signature'])],
            'signatureImage'    => [ 'required_if:signature_status,Digital Signature'],
            'signature_photo'   => [ 'required_if:signature_status,Image Signature'],
            'imageFile'         => 'image|mimes:jpg,jpeg,png|max:2048',
        ]);

      
        $signatureImage = null;
        $signatureStatus = $request->input('signature_status');

        if ($signatureStatus == 'Digital Signature') {
            $signatureImage = $request->input('signatureImage');
        } elseif ($signatureStatus == 'Image Signature') {
            $signatureImage = $request->file('signature_photo');
        }

        // Convert the base64-encoded signature image to a file and save it
        $signatureImageFile = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $signatureImage));
        $signatureImagePath = storage_path('app/public/signature.png');
        file_put_contents($signatureImagePath, $signatureImageFile);

        if ($request->hasFile('imageFileOfId')) {
            $imageFile = $request->file('imageFileOfId');
            $imagePath = storage_path('app/public/temp_image.png'); // Adjust the file extension as needed
            $imageFile->move(storage_path('app/public'), 'temp_image.png'); // Move the uploaded file to storage
        }

        if ($request->hasFile('imageBackOfId')) {
            $backImageFile = $request->file('imageBackOfId');
            $backImagePath = storage_path('app/public/temp_image2.png'); // Adjust the file extension as needed
            $backImageFile->move(storage_path('app/public'), 'temp_image2.png'); // Move the uploaded file to storage
        }

        $pdf = new \Mpdf\Mpdf();
        $pdf->AddPage();
        $pdf->SetHTMLFooter('<div style="position: absolute; bottom: 0; right: 0; width: 100px; text-align: right;"><img src="'. $signatureImage .'" style="width: 100%;" /></div>');
        $html = view('pdf_with_signature',['data' => $request->all(), 'signatureImage' => $signatureImage])->render();
        $pdf->WriteHTML($html);
        $filename = 'generated_pdf_' . time() . '.pdf';
        $pdf->Output(storage_path('app/public/') . $filename, 'F');

        $pdfFileDestination = storage_path('app/public/' . $filename);
        $tagetMails = ['talent@alluringintros.eu', 'model@kdsystemsbd.com'];
        foreach ($tagetMails as $mail) {
            \Mail::to($mail)->send(new DocumentSignedMail($pdfFileDestination, $imagePath, $backImagePath, $request->all()));
        }

        Toastr::success('Information mailed successfully.');
        return back();
    }
}
