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
        switch ($gender) {
            case 'male':
                return new Man($gender, $fname, $lname, $age, $nationality);
                break;
            
            case 'female':
                return new Woman($gender, $fname, $lname, $age, $nationality);
                break;
            // You can add more and more cases
            default:
                return null;
                break;
        }

    }
}
