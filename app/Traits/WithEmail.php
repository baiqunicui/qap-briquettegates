<?php

namespace App\Traits;

use PDF;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Mail;

trait WithEmail
{
    public function sendEmail($view, $data, $fromEmail, $fromName, $toEmail, $toName, $subject)
    {
        Mail::send(
            $view,
            ['data' => $data],
            function ($message) use ($fromEmail, $fromName, $toEmail, $toName, $subject) {
                $message
                    ->from($fromEmail, $fromName)
                    ->to($toEmail, $toName)
                    ->subject($subject);
            }
        );
    }

    public function sendEmailPdf($view, $data, $fromEmail, $fromName, $toEmail, $toName, $subject, $pdfview, $pdfFilename)
    {
        $pdf = PDF::loadView($pdfview, ['data' => $data]);

        Mail::send(
            $view,
            ['data' => $data],
            function ($message) use ($fromEmail, $fromName, $toEmail, $toName, $subject, $pdf, $pdfFilename) {
                $message
                    ->from($fromEmail, $fromName)
                    ->to($toEmail, $toName)
                    ->subject($subject)
                    ->attachData($pdf->output(), $pdfFilename);
            }
        );
    }
}
