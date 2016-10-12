<?php

namespace App\Events;


use Symfony\Component\EventDispatcher\Event;

class UserSignedUp extends Event
{
    /**
     * @var $user
     */
    public $user;

    public function __construct($user)
    {
        $this->user = $user;
    }
}