<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
class SecretMessage extends  Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build(): SecretMessage
    {
        $link = $this->data['link'];

        return $this->view('emails.secret')->with([
            'link' => $link,
        ]);
    }
}
