<?php

namespace Olotu\Recipients;

use Illuminate\Notifications\Notifiable;

abstract class Recipient
{
    use Notifiable;

    protected $email;
}