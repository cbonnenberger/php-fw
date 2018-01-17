<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 14:09
 */

namespace Metinet\Domain;


class InvalidDateOfEvent extends \Exception
{

    public static function mustNotBeInTheFuture(): self
    {
        return new self('Date Of Birth cannot be in the future');
    }
}