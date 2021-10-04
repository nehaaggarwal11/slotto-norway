<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Newsletter extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $subject, $email_content;

	public function __construct($subject, $email_content)
	{
	    $this->subject = $subject;
		$this->email_content = $email_content;
	}

	public function build()
	{
		return $this->view('emails.newsletter', [
		    'subject' => $this->subject,
		    'email_content' => $this->email_content,
        ]);
	}
}
