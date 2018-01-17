<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 15:47
 */

namespace Metinet\Domain;


class Participant
{
    private $firstName;
    private $lastName;
    private $phoneNumber;
    private $mail;


    public function __construct(string $lastName, string $firstName, int $phoneNumber, string $mail)
    {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->phoneNumber = $phoneNumber;
        $this->$mail = $mail;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @return int
     */
    public function getPhoneNumber(): int
    {
        return $this->phoneNumber;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }



    public function checkMail(){
        // Vérifie que le champ de l'email n est pas vide et qu il a le format correct
    }

    public function checkPhoneNumber(){
        // Vérifie que le numéro entré compte bien 10 chiffres commencant par 06 ou 07
    }

}