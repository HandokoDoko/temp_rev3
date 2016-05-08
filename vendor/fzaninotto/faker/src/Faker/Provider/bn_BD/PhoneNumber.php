<?php

namespace Faker\Provider\bn_BD;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
<<<<<<< HEAD
    public function phoneNumber()
=======
    public static function phoneNumber()
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
    {
        $number = "+880";
        $number .= static::randomNumber(7);

        return Utils::getBanglaNumber($number);
    }
}
