<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ConfirmNewsletter extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $email, $subject, $email_content;

	public function __construct($email, $subject, $email_content)
	{
		$this->email = $email;
	    $this->subject = $subject;
		$this->email_content = $email_content;
	}

	public function build()
	{
		return $this->view('emails.confirm-newsletter', [
		    'email' => $this->email,
		    'subject' => $this->subject,
		    'email_content' => $this->email_content,
        ]);
	}
}
