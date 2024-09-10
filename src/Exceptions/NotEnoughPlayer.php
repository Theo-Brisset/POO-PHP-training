<?php

namespace App\Domain\MatchMaker\Exceptions;

class ExceptionSetStatus extends \RuntimeException
{
    public $message = "Impossible d'update le status";
}