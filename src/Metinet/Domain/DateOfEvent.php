<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 14:06
 */

namespace Metinet\Domain;


class DateOfEvent
{

    private $dateOfEvent;

    private function __construct(string $dateOfEvent)
    {
        $dateOfEventhAsDateTime = \DateTimeImmutable::createFromFormat('Y-m-d H:i:s', sprintf('%s 23:59:59', $dateOfEvent));
        if ($dateOfEventhAsDateTime > new \DateTimeImmutable('now')) {

            throw InvalidDateOfBirth::mustNotBeInTheFuture();
        }

        $this->$dateOfEvent = $dateOfEventhAsDateTime;
    }
}