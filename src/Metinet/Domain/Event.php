<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 11:35
 */

namespace Metinet\Domain;


class Event
{
    private $title;
    private $description;
    private $room;
    private $startDate;
    private $endDate;
    private $nbParticipant;
    private $address;
    private $eventType; // private or public



    /**
 * Event constructor.
 * @param $title
 * @param $description
 * @param $room
 * @param $hour
 * @param $day
 * @param $nbParticipant
 */

    public function __construct(string $title, string $description, string $room, DateOfEvent $startDate, DateOfEvent $endDate, int $nbParticipant, string $address, string $eventType)
    {
        $this->title = $title;
        $this->description = $description;
        $this->room = $room;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->nbParticipant = $nbParticipant;
        $this->address = $address;
        $this->eventType = $eventType;
    }

    /**
     * @return mixed
     */
    public function getTitle() :string
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getDescription() : string
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getRoom() : string
    {
        return $this->room;
    }



    /**
     * @return mixed
     */
    public function getNbParticipant() :int
    {
        return $this->nbParticipant;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @return string
     */
    public function getEventType(): string
    {
        return $this->eventType;
    }

    /**
     * @return DateOfEvent
     */
    public function getStartDate(): DateOfEvent
    {
        return $this->startDate;
    }

    /**
     * @return DateOfEvent
     */
    public function getEndDate(): DateOfEvent
    {
        return $this->endDate;
    }


}

