<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 18/01/2018
 * Time: 11:12
 */

namespace Metinet\Domain;


class Account
{
    private $identifiant;
    private $password;


    public function __construct(string $identifiant, Password $password)
    {
        $this->identifiant = $identifiant;
        $this->password = $password;
    }

    public function getIdentifiant(): string
    {
        return $this->identifiant;
    }

    public function getPasseword(): Passeword
    {
        return $this->passeword;
    }


    public function connetion(){

    }

    public function registration(){ //inscription

    }





}