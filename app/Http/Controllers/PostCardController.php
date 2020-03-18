<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MailSendingService;
use App\Services\PostCard;

class PostCardController extends Controller
{
    public function ordinaryInstance()
    {
    	$postCards = new MailSendingService('us', 14, 14);
    	$postCards->sendMessage('Email has been sent', 'test@example.com');
    }
    public function basicFacade()
    {
    	PostCard::sendMessage('A simple implementation of facade', 'test@example.com');
    }
}
