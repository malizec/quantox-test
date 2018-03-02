<?php

namespace App;

/**
* Create new person
*/
class Person
{

    protected $gender;
    protected $fname;
    protected $lname;
    protected $age;
    protected $nationality;

    public function __construct($gender, $fname, $lname, $age, $nationality)
    {
        $this->gender = $gender;
        $this->fname = $fname;
        $this->lname = $lname;
        $this->age = $age;
        $this->nationality = $nationality;
    }

    /**
    * return Short Info about new Person
    */
    public function getInfo()
    {
        return 'First Name: '.$this->fname . ' <br/> Last Name: ' .  $this->lname;
    }

    /**
    * return Full Info about new PersonS
    */
    public function getFullInfo()
    {
        return $this->getInfo() . '<br/> Age: ' . $this->age . '<br/> Nationality: ' . $this->nationality;
    }
}