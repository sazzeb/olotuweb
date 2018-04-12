<?php

namespace Olotu\Notifications\Utilities;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class SupportAlert extends Notification
{
    use Queueable;
    
    public $from, $name, $subject, $message;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($from, $name, $subject, $message)
    {
        $this->from = $from;
        $this->name = $name;
        $this->subject = $subject;
        $this->message = $message;
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
                    ->greeting('Hello!')
                    ->subject($this->subject)
                    ->line('Support mail from ' . $this->name . '<' . $this->from . '>')
                    ->line($this->message)
                    ->line('Thank you!');
    }

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
