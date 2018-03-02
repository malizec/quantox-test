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
    public function __construct($gender=null, $fname=null, $lname=null, $age=null, $nationality=null)
    {
        $this->gender = $gender;
        $this->fname = $fname;
        $this->lname = $lname;
        $this->age = $age;
        $this->nationality = $nationality;
    }

    /**
    * Change or Insert new First Name
    */
    public function setFirstName($fname)
    {
        $this->fname = $fname;
    }

    /**
    * Change or Insert new Last Name
    */
    public function setLastName($lname)
    {
        $this->lname = $lname;
    }

    /**
    * Change or Insert new Name
    */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
    * Change or Insert new Name
    */
    public function setNationality($nationality)
    {
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

    /**
    * Return First Name
    */
    public function getFirstName()
    {
        return $this->fname;   
    }

    /**
    * Return Last Name
    */
    public function getLastName()
    {
        return $this->lname;   
    }

    /**
    * Return age
    */
    public function getAge()
    {
        return $this->age;   
    }

    /**
    * Return Nationality
    */
    public function getNationality()
    {
        return $this->nationality;   
    }
}