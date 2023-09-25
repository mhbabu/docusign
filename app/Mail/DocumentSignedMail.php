<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DocumentSignedMail extends Mailable
{
    use Queueable, SerializesModels;

    public $pdfPath;
    public $imagePath;
    public $backImagePath;
    public $formData;

    
    public function __construct($pdfPath, $imagePath, $backImagePath, $formData)
    {
        $this->pdfPath = $pdfPath;
        $this->imagePath = $imagePath;
        $this->backImagePath = $backImagePath;
        $this->formData = $formData; // Pass the form data
    }

    public function build()
    {
        $pdfFileName = $this->formData['stage_first_name'] . "_" . $this->formData['stage_last_name'] . ".pdf" ;
        return $this->subject('Form Submission')
            ->attach($this->pdfPath, ['as' => $pdfFileName])
            ->attach($this->imagePath, ['as' => 'nid_image.png']) // Attach the image
            ->attach($this->backImagePath, ['as' => 'back_nid_image.png']) // Attach the image
            ->view('emails.document-signed', [
                'formData' => $this->formData // Pass the form data to the view
            ]);
    }

}
