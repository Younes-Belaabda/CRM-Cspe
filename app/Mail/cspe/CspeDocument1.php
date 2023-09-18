<?php

namespace App\Mail\cspe;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Contrat;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Attachment;

class CspeDocument1 extends Mailable
{
    use Queueable, SerializesModels;

    public $contrat , $pdf;

    /**
     * Create a new message instance.
     */
    public function __construct($contrat , $pdf)
    {
        $this->contrat = $contrat;
        $this->pdf = $pdf;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from     : new Address('support@cspe.me', 'CSPE'),
            subject  : 'Votre contrat CSPE n\'attend plus que votre signature',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.cspe.document-1',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [
            Attachment::fromData(fn () => $this->pdf->output(),  $this->contrat->rum . '.pdf')
                    ->withMime('application/pdf'),
        ];
    }
}
