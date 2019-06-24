<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;

class VerifyEmail extends Mailable implements ShouldQueue
{
    use Queueable;

    public $url;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(String $url)
    {
        $this->url = $url;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject(__('email.subject.verify'))
            ->view('emails.verify')
            ->with([
                'url' => $this->url,
            ]);
    }
}
