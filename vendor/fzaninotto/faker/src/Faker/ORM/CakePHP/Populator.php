<?php

namespace Faker\ORM\CakePHP;

class Populator
{

    protected $generator;
    protected $entities = [];
    protected $quantities = [];
    protected $guessers = [];

<<<<<<< HEAD
    /**
     * @param \Faker\Generator $generator
     */
=======
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
    public function __construct(\Faker\Generator $generator)
    {
        $this->generator = $generator;
    }

<<<<<<< HEAD
    /**
     * @return \Faker\Generator
     */
=======
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
    public function getGenerator()
    {
        return $this->generator;
    }

<<<<<<< HEAD
    /**
     * @return array
     */
=======
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
    public function getGuessers()
    {
        return $this->guessers;
    }

<<<<<<< HEAD
    /**
     * @return $this
     */
=======
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
    public function removeGuesser($name)
    {
        if ($this->guessers[$name]) {
            unset($this->guessers[$name]);
        }
        return $this;
    }

<<<<<<< HEAD
    /**
     * @return $this
     * @throws \Exception
     */
=======
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
    public function addGuesser($class)
    {
        if (!is_object($class)) {
            $class = new $class($this->generator);
        }

        if (!method_exists($class, 'guessFormat')) {
            throw new \Exception('Missing required custom guesser method: ' . get_class($class) . '::guessFormat()');
        }

        $this->guessers[get_class($class)] = $class;
        return $this;
    }

<<<<<<< HEAD
    /**
     * @param array $customColumnFormatters
     * @param array $customModifiers
     * @return $this
     */
=======
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
    public function addEntity($entity, $number, $customColumnFormatters = [], $customModifiers = [])
    {
        if (!$entity instanceof EntityPopulator) {
            $entity = new EntityPopulator($entity);
        }

        $entity->columnFormatters = $entity->guessColumnFormatters($this);
        if ($customColumnFormatters) {
            $entity->mergeColumnFormattersWith($customColumnFormatters);
        }

        $entity->modifiers = $entity->guessModifiers($this);
        if ($customModifiers) {
<<<<<<< HEAD
            $entity->mergeModifiersWith($customModifiers);
=======
            $entity->mergeModifiers($customModifiers);
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
        }

        $class = $entity->class;
        $this->entities[$class] = $entity;
        $this->quantities[$class] = $number;
        return $this;
    }

<<<<<<< HEAD
    /**
     * @param array $options
     * @return array
     */
=======
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
    public function execute($options = [])
    {
        $insertedEntities = [];

        foreach ($this->quantities as $class => $number) {
            for ($i = 0; $i < $number; $i++) {
                $insertedEntities[$class][] = $this->entities[$class]->execute($class, $insertedEntities, $options);
            }
        }

        return $insertedEntities;
    }
}
