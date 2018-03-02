<?php

namespace App;

use App\Man;
use App\Woman;

/**
* 
*/
class PersonFactory
{
    
    /**
    * create new person from gender
    */
    public static function createPerson($gender, $fname, $lname, $age, $nationality)
    {
        if ($gender == 'male') {
            return new Man($gender, $fname, $lname, $age, $nationality);
        } elseif($gender == 'female') {
            return new Woman($gender, $fname, $lname, $age, $nationality);
        } else {
            return null;
        }
    }
}