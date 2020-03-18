<?php


namespace App\Services;

use Illuminate\Support\Facades\Mail;

class MailSendingService 
{
	private $country;
	private $width;
	private $height;

	public function __construct($country, $width, $height)
	{
		$this->country = $country;
		$this->width = $width;
		$this->height = $height;
	}

	public function sendMessage($message, $email)
	{
		Mail::raw($message, function($message) use ($email){
			$message->to($email);
		});

		dump('new message has been sent'.' '. '['.$message.']');
	}
}