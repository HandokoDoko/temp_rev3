<?php

namespace Faker\Provider\zh_CN;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $operators = array(
<<<<<<< HEAD
        134, 135, 136, 137, 138, 139, 147, 150, 151, 152, 157, 158, 159, 178, 182, 183, 184, 187, 188, // china mobile
        130, 131, 132, 145, 155, 156, 175, 176, 185, 186, // china unicom
        133, 149, 153, 177, 180, 181, 189, // chinatelecom
        170, 171, // virtual operators
=======
        134, 135, 136, 137, 138, 139, 147, 150, 151, 152, 157, 158, 159, 182, 187, 188, // china mobile
        130, 131, 132, 145, 155, 156, 185, 186, 145, // china unicom
        133 , 153 , 180 , 181 , 189, // chinatelecom
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
    );

    protected static $formats = array('########');

<<<<<<< HEAD
    public function phoneNumber()
=======
    public static function phoneNumber()
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
    {
        $operators = static::randomElement(static::$operators);

        return $operators . static::numerify(static::randomElement(static::$formats));
    }
}
