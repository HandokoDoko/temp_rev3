<?php

namespace Faker\Provider;

<<<<<<< HEAD
use Faker\Calculator\Luhn;

class PhoneNumber extends Base
=======
class PhoneNumber extends \Faker\Provider\Base
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
{
    protected static $formats = array('###-###-###');

    /**
     * @example '555-123-546'
     */
<<<<<<< HEAD
    public function phoneNumber()
    {
        return static::numerify($this->generator->parse(static::randomElement(static::$formats)));
    }

    /**
     * @example +27113456789
     * @return string
     */
    public function e164PhoneNumber()
    {
        $formats = array('+#############');
        return static::numerify($this->generator->parse(static::randomElement($formats)));
    }

    /**
     * International Mobile Equipment Identity (IMEI)
     *
     * @link http://en.wikipedia.org/wiki/International_Mobile_Station_Equipment_Identity
     * @link http://imei-number.com/imei-validation-check/
     * @example '720084494799532'
     * @return int $imei
     */
    public function imei()
    {
        $imei = (string) static::numerify('##############');
        $imei .= Luhn::computeCheckDigit($imei);
        return $imei;
=======
    public static function phoneNumber()
    {
        return static::numerify(static::randomElement(static::$formats));
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
    }
}
