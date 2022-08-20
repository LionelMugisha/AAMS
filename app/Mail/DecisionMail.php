<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DecisionMail extends Mailable
{
    use Queueable, SerializesModels;

    public $change;
    public $changes;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($change)
    {
        $this->change=$change;
    }

    public function deny($changes)
    {
        $this->changes=$changes;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('admin.email.index');
    }
}
