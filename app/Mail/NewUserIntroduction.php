<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewUserIntroduction extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $subject = '新しいユーザーが追加されました！！！';
    public User $toUser;
    public User $newUser;

    /**
     * Create a new message instance.
     */
    public function __construct(User $toUser, user $newUser)
    {
        $this->toUser = $toUser;
        $this->newUser = $newUser;
    }


    /**
     * Get the message envelope.
     */
    // public function envelope(): Envelope
    // {
    //     return new Envelope(
    //         subject: "新しいユーザーが追加されました！！！",
    //     );
    // }

    /**
     * Get the message content definition.
     */
    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'email.new_user_introduction', // view.name
    //     );
    // }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    // public function attachments(): array
    // {
    //     return [];
    // }

    public function build()
    {
        return $this->markdown('email.new_user_introduction');
    }
}
