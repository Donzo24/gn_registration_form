<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendForm extends Mailable
{
    use Queueable, SerializesModels;

    protected $file;
    protected $organisation;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($file, $organisation)
    {
        $this->file = $file;
        $this->organisation = $organisation;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.form')
        // ->subject("Request from {$this->organisation}")
        ->subject("Guinea Domain Registration request")
        ->attach($this->file, [
            'as' => 'gn.txt',
            'mime' => 'text/plain',
        ]);
    }
}
