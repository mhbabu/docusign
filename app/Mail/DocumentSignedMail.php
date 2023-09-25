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
        $modelName = $this->formData['stage_first_name'] ." ". $this->formData['stage_last_name'];
        $subject = "New Model Application Form - " . $modelName;
        $pdfFileName =  $modelName. ' - AIA Model Contract'. ".pdf" ;

        return $this->subject($subject)
            ->attach($this->pdfPath, ['as' => $pdfFileName])
            ->attach($this->imagePath, ['as' => 'nid_image.png'])
            ->attach($this->backImagePath, ['as' => 'back_nid_image.png'])
            ->view('emails.document-signed', ['formData' => $this->formData]);
    }

}
