<?php

namespace Faker\Provider\kk_KZ;

class Address extends \Faker\Provider\Address
{
    protected static $citySuffix = array('қаласы');

    protected static $regionSuffix = array('облысы');
    protected static $streetSuffix = array(
        'көшесі', 'даңғылы',
    );

    protected static $buildingNumber = array('###');
    protected static $postcode = array('0#####');
<<<<<<< HEAD
    // TODO list all country names in the world
=======
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
    protected static $country = array(
        'Қазақстан',
        'Ресей',
    );

    protected static $region = array(
        'Алматы',
        'Ақтау',
        'Ақтөбе',
        'Астана',
        'Атырау',
        'Байқоңыр',
        'Қарағанды',
        'Көкшетау',
        'Қостанай',
        'Қызылорда',
        'Маңғыстау',
        'Павлодар',
        'Петропавл',
        'Талдықорған',
        'Тараз',
        'Орал',
        'Өскемен',
        'Шымкент',
    );

    protected static $city = array(
        'Алматы',
        'Ақтау',
        'Ақтөбе',
        'Астана',
        'Атырау',
        'Байқоңыр',
        'Қарағанды',
        'Көкшетау',
        'Қостанай',
        'Қызылорда',
        'Маңғыстау',
        'Павлодар',
        'Петропавл',
        'Талдықорған',
        'Тараз',
        'Орал',
        'Өскемен',
        'Шымкент',
    );

    protected static $street = array(
        'Абай',
        'Гоголь',
        'Кенесары',
        'Бейбітшілік',
        'Достық',
        'Бұқар жырау',
    );

    protected static $addressFormats = array(
        "{{postcode}}, {{region}} {{regionSuffix}}, {{city}} {{citySuffix}}, {{street}} {{streetSuffix}}, {{buildingNumber}}",
    );

    protected static $streetAddressFormats = array(
        "{{street}} {{streetSuffix}}, {{buildingNumber}}"
    );

    public static function buildingNumber()
    {
        return static::numerify(static::randomElement(static::$buildingNumber));
    }

<<<<<<< HEAD
=======
    public function address()
    {
        $format = static::randomElement(static::$addressFormats);

        return $this->generator->parse($format);
    }

    public static function country()
    {
        return static::randomElement(static::$country);
    }

    public static function postcode()
    {
        return static::toUpper(static::bothify(static::randomElement(static::$postcode)));
    }

>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
    public static function regionSuffix()
    {
        return static::randomElement(static::$regionSuffix);
    }

    public static function region()
    {
        return static::randomElement(static::$region);
    }

<<<<<<< HEAD
=======
    public static function citySuffix()
    {
        return static::randomElement(static::$citySuffix);
    }

>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
    public function city()
    {
        return static::randomElement(static::$city);
    }

<<<<<<< HEAD
=======
    public static function streetSuffix()
    {
        return static::randomElement(static::$streetSuffix);
    }

>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
    public static function street()
    {
        return static::randomElement(static::$street);
    }
}
