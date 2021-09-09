<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Reset_password extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $first_name;
    public $token;

    public function __construct($first_name, $token)
    {
        $this->first_name = $first_name;
        $this->token = $token;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $seller['first_name'] = $this->first_name;
        $seller['token'] = $this->token;

        return $this->from("mehrajemon1999@gmail.com", "chabi_kathi")
        ->subject('Password Reset Link')
        ->view('template.reset-password', ['seller' => $seller]);
    }
}