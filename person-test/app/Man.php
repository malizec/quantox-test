<?php

namespace App;

use App\Person;

/**
* Man class
*/
class Man extends Person
{
    
    function __construct($gender, $fname, $lname, $age, $nationality)
    {
        parent::__construct($gender, $fname, $lname, $age, $nationality);
    }

    /**
    * getMessage
    */
    public function getMessage()
    {
        return '<br/> No Woman No Cry :-D';   
    }

    /**
    * Some other methods only for Man Person
    */
    public function getMansStuff()
    {
        return '<br/> Beer and PES :-D';
    }
}