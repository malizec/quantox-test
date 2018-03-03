<?php

namespace App;

use App\Person;

/**
* Extend Person class and create Woman object
*/
class Woman extends Person
{
    
    function __construct($gender, $fname, $lname, $age, $nationality)
    {
        parent::__construct($gender, $fname, $lname, $age, $nationality);
    }

    /**
    * Create new message only for Woman 
    */
    public function getMessage()
    {
        return '<br/> Pssssssss..... Woman is in house :-D';   
    }

    /**
    * Some other methods only for Woman Person
    */
    public function getWomansStuff()
    {
        return '<br/> Make up.... :-D';
    }
}
