<?php

namespace Faker\Provider\en_NZ;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    /**
     * An array of en_NZ landline phone number formats
     * @var array
     */
    protected static $formats = array(
        // National Calls
<<<<<<< HEAD
        '{{areaCode}}{{beginningNumber}}######',
        '{{areaCode}} {{beginningNumber}}## ####'
=======
        '{{area_code}}{{beginning_number}}######',
        '{{area_code}} {{beginning_number}}## ####'
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
    );

    /**
     * An array of en_NZ mobile (cell) phone number formats
     * @var array
     */
    protected static $mobileFormats = array(
        // Local
        '02########',
        '02#########',
        '02# ### ####',
        '02# #### ####'
    );

    /**
     * An array of toll free phone number formats
     * @var array
     */
    protected static $tollFreeFormats = array(
        '0508######',
        '0508 ######',
        '0508 ### ###',
        '0800######',
        '0800 ######',
        '0800 ### ###',
    );

    /**
     * An array of en_NZ landline area codes
     * @var array
     */
    protected static $areaCodes = array(
        '02', '03', '04', '06', '07', '09'
    );

    /**
     * An array of en_NZ landline beginning numbers
     * @var array
     */
    protected static $beginningNumbers = array(
        '2', '3', '4', '5', '6', '7', '8', '9'
    );

    /**
<<<<<<< HEAD
=======
     * Return a en_NZ landline phone number
     * @return string
     */
    public static function phoneNumber()
    {
        $format = static::numerify(static::randomElement(static::$formats));

        $withAreaCode = str_replace('{{area_code}}', static::areaCode(), $format);

        return str_replace('{{beginning_number}}', static::beginningNumber(), $withAreaCode);
    }

    /**
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
     * Return a en_NZ mobile phone number
     * @return string
     */
    public static function mobileNumber()
    {
        return static::numerify(static::randomElement(static::$mobileFormats));
    }

    /**
     * Return a en_NZ toll free phone number
     * @return string
     */
    public static function tollFreeNumber()
    {
        return static::numerify(static::randomElement(static::$tollFreeFormats));
    }

    /**
     * Return a en_NZ landline area code
     * @return string
     */
    public static function areaCode()
    {
        return static::numerify(static::randomElement(static::$areaCodes));
    }

    /**
     * Return a en_NZ landline beginning number
     * @return string
     */
    public static function beginningNumber()
    {
        return static::numerify(static::randomElement(static::$beginningNumbers));
    }
}
