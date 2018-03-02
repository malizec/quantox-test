<?php

namespace App;

/**
* Create basic stuff for new person like
* @param string     $gender         male or female
* @param string     $fname          add new Person First Name
* @param string     $lname          add new Person Last Name
* @param integer    $age            add new Person age
* @param string     $nationality    add new Person nationality
*/
class Person
{

    protected $gender;
    protected $fname;
    protected $lname;
    protected $age;
    protected $nationality;

    /*
    * Build new Person object
     */
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
    * return Full Info about new Person
    */
    public function getFullInfo()
    {
        return $this->getInfo() . '<br/> Age: ' . $this->age . '<br/> Nationality: ' . $this->nationality;
    }
}