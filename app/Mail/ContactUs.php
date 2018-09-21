<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactUs extends Mailable {
	use Queueable, SerializesModels;

	public $body;
	public $email;
	public $name;


	/**
	 * Create a new message instance.
	 *
	 * @return void
	 */
	public function __construct($message, $email, $name) {
		$this->body = $message;
		$this->email = $email;
		$this->name = $name;
	}

	/**
	 * Build the message.
	 *
	 * @return $this
	 */
	public function build() {
		return $this->from('aliciaderuijter@elcoop.io', 'contactformulier')
			->subject('Informatie aanvraag')
			->replyTo($this->email, $this->name)
			->view('mail');
	}
}
