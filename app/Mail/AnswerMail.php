<?php

namespace Snaketec\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Snaketec\Models\General\Contact\Answer;

class AnswerMail extends Mailable
{
    use Queueable, SerializesModels;

    public $answer;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Answer $answer)
    {
        $this->answer = $answer;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('contato@lojapaperstore.com.br')
            ->view('emails.contacts.answered');
    }
}
