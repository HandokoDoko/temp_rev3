<?php

namespace Faker;

/**
 * Proxy for other generators, to return only unique values. Works with
 * Faker\Generator\Base->unique()
 */
class UniqueGenerator
{
    protected $generator;
    protected $maxRetries;
    protected $uniques = array();

<<<<<<< HEAD
    /**
     * @param Generator $generator
     * @param $maxRetries
     */
=======
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
    public function __construct(Generator $generator, $maxRetries)
    {
        $this->generator = $generator;
        $this->maxRetries = $maxRetries;
    }

    /**
     * Catch and proxy all generator calls but return only unique values
<<<<<<< HEAD
     * @param string $attribute
     * @return mixed
=======
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
     */
    public function __get($attribute)
    {
        return $this->__call($attribute, array());
    }

    /**
     * Catch and proxy all generator calls with arguments but return only unique values
<<<<<<< HEAD
     * @param string $name
     * @param array $arguments
     * @return mixed
=======
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
     */
    public function __call($name, $arguments)
    {
        if (!isset($this->uniques[$name])) {
            $this->uniques[$name] = array();
        }
        $i = 0;
        do {
            $res = call_user_func_array(array($this->generator, $name), $arguments);
            $i++;
            if ($i > $this->maxRetries) {
                throw new \OverflowException(sprintf('Maximum retries of %d reached without finding a unique value', $this->maxRetries));
            }
<<<<<<< HEAD
        } while (array_key_exists(serialize($res), $this->uniques[$name]));
        $this->uniques[$name][serialize($res)]= null;
=======
        } while (array_key_exists($res, $this->uniques[$name]));
        $this->uniques[$name][$res]= null;
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e

        return $res;
    }
}
