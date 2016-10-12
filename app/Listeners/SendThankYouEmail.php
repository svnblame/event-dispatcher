<?php

namespace App\Listeners;


use App\Events\UserBecameForeverSubscriber;

class SendThankYouEmail
{
    public function handle(UserBecameForeverSubscriber $event)
    {
        var_dump('Sending thank you email to '. $event->user->name);
    }
}