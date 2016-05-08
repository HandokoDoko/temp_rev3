<?php

namespace Faker\Provider;

<<<<<<< HEAD
class Company extends Base
=======
class Company extends \Faker\Provider\Base
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
{
    protected static $formats = array(
        '{{lastName}} {{companySuffix}}',
    );

    protected static $companySuffix = array('Ltd');

<<<<<<< HEAD
    protected static $jobTitleFormat = array(
        '{{word}}',
    );

=======
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
    /**
     * @example 'Acme Ltd'
     */
    public function company()
    {
        $format = static::randomElement(static::$formats);

        return $this->generator->parse($format);
    }

    /**
     * @example 'Ltd'
     */
    public static function companySuffix()
    {
        return static::randomElement(static::$companySuffix);
    }
<<<<<<< HEAD

    /**
     * @example 'Job'
     */
    public function jobTitle()
    {
        $format = static::randomElement(static::$jobTitleFormat);

        return $this->generator->parse($format);
    }
=======
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
}
