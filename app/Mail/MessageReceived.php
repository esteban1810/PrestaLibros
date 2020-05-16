<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

use App\Libro;
use App\User;

class MessageReceived extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = 'Mensaje Recibido';
    public $msg;
    public $libro;
    public $user;
    public $miUser;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message, $libro_id, $user_id)
    {
        $this->libro=Libro::findOrFail($libro_id);
        $this->user=User::findOrFail($user_id);
        $this->msg=$message;
        $this->miUser=User::findOrFail(\Auth::id());
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('messages.received');
    }
}
