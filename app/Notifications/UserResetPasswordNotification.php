<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class UserResetPasswordNotification extends Notification
{
    use Queueable;

    public $token;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($token)
    {
        $this->token = $token;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->from(env('SITE_CONTACT_MAIL'), env('SITE_CONTACT_NAME'))
            ->subject('Recuperar contraseña')
            ->greeting('¡Hola!')
            ->line('Si has olvidado tu contraseña, da click en el botón siguiente para generar una nueva contraseña.')
            ->action('Recuperar contraseña', route('password.reset', $this->token))
            ->line('Si no solicitaste un cambio de contraseña, informanos de inmediato.')
            ->view('emails.mailTemplate');
    }

    /*->markdown('auth.emails.reset')
    ->subject('Recuperar contraseña')
    ->from(env('CONTACT_MAIL'),env('CONTACT_NAME'))
    ->greeting('¡Hola!')
    ->line('Si has olvidado tu contraseña, da click en el botón siguiente para generar una nueva contraseña.')
    ->action('Recuperar contraseña', route('password.reset', $this->token))
    ->line('Si no solicitaste un cambio de contraseña, informanos de inmediato.');*/

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
