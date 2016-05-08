<?php

namespace Faker\Provider\lv_LV;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
<<<<<<< HEAD
    /**
     * {@link} https://en.wikipedia.org/wiki/Telephone_numbers_in_Latvia
     **/
    protected static $formats = array(
        '########',
        '## ### ###',
        '+371 ########',
=======
    protected static $formats = array(
        '##-###-###',
        '##-######',
        '########',
        '+371 #######',
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
    );
}
