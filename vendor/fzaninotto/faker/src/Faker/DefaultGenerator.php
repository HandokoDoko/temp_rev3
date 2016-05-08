<?php

namespace Faker;

/**
 * This generator returns a default value for all called properties
 * and methods. It works with Faker\Generator\Base->optional().
 */
class DefaultGenerator
{
<<<<<<< HEAD
    protected $default;
=======
    protected $default = null;
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e

    public function __construct($default = null)
    {
        $this->default = $default;
    }

<<<<<<< HEAD
    /**
     * @param string $attribute
     */
=======
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
    public function __get($attribute)
    {
        return $this->default;
    }

<<<<<<< HEAD
    /**
     * @param string $method
     * @param array $attributes
     */
=======
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
    public function __call($method, $attributes)
    {
        return $this->default;
    }
}
