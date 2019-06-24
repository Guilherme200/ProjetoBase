<?php

namespace App\Notifications;

use Illuminate\Auth\Notifications\VerifyEmail as Verify;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Mail\VerifyEmail as EmailVerify;

class VerifyEmail extends Verify implements ShouldQueue
{
    use Queueable;

    public function toMail($notifiable)
    {
        if (static::$toMailCallback) {
            return call_user_func(static::$toMailCallback, $notifiable);
        }

        return (new EmailVerify($this->verificationUrl($notifiable)))
            ->to($notifiable);
    }
}
