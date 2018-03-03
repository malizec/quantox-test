<?php

namespace App;

use App\Person;

/**
* Extend Person class and create Man object
*/
class Man extends Person
{
    
    function __construct($gender, $fname, $lname, $age, $nationality)
    {
        parent::__construct($gender, $fname, $lname, $age, $nationality);
    }

    /**
    * Create new message only for Man 
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
