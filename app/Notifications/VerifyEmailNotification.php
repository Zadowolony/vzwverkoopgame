<?php

namespace App\Notifications;

use App\Mail\VerifyEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\URL;

class VerifyEmailNotification extends Notification
{
    use Queueable;



    public function via($notifiable)
    {
        return ['mail'];
    }

   // App\Notifications\VerifyEmailNotification
public function toMail($notifiable)
{
    $verificationUrl = URL::temporarySignedRoute(
        'verification.verify',
        now()->addMinutes(60),
        ['id' => $notifiable->getKey(), 'hash' => sha1($notifiable->getEmailForVerification())]
    );

    // Maak een nieuwe instantie van je VerifyEmail Mailable
    return (new VerifyEmail($verificationUrl, $notifiable->name))
    ->to($notifiable->email);

}
}