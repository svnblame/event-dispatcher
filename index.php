<?php

require 'vendor/autoload.php';

use App\Listeners\SendThankYouEmail;
use App\Events\UserBecameForeverSubscriber;
use Symfony\Component\EventDispatcher\EventDispatcher;

$dispatcher = new EventDispatcher;

$listener = new SendThankYouEmail;
$dispatcher->addListener(UserBecameForeverSubscriber::class, [$listener, 'handle']);

// Somewhere in a controller where the user membership is upgraded......
$event = new UserBecameForeverSubscriber( (object) ['name' => 'Samantha'] );
$dispatcher->dispatch(UserBecameForeverSubscriber::class, $event);