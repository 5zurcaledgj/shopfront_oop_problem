<?php

namespace AirlinePassengerManifest;

use AirlinePassengerManifest\Aircraft\Aircraft;
use AirlinePassengerManifest\Enum\Gender;
use AirlinePassengerManifest\Ticket\ITicket;
use Exception;

class Passenger implements IPassenger
{
    private $name;
    private $age;
    private $gender;
    private $ticket;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @return mixed
     */
    public function getTicket()
    {
        return $this->ticket;
    }


    public function __construct($name, $age, $gender)
    {
        if (Gender::FEMALE != $gender && Gender::MALE != $gender) {
            throw new \Exception('Invalid Gender');
        }

        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

    public function setTicket(ITicket $ticket) {
        $this->ticket = $ticket;
    }

    public function checkIn() {
        if (is_null($this->ticket)) {
            throw new Exception('Person has no ticket yet');
        }

        Aircraft::getInstance($this->ticket->getCompany(), $this->ticket->getBrand())
            ->addPassenger($this);
    }

    public function getSeatClass()
    {
        return $this->ticket->getSeatClass();
    }

    public function getSeatNumber()
    {
        // TODO: Implement getSeatNumber() method.
    }
}
