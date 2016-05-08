<?php

namespace Faker\ORM\CakePHP;

use Cake\ORM\TableRegistry;
<<<<<<< HEAD
=======
use Faker\Guesser\Name as NameGuesser;
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e

class EntityPopulator
{
    protected $class;
    protected $connectionName;
    protected $columnFormatters = [];
    protected $modifiers = [];

    public function __construct($class)
    {
        $this->class = $class;
    }

<<<<<<< HEAD
    /**
     * @param string $name
     */
=======
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
    public function __get($name)
    {
        return $this->{$name};
    }

<<<<<<< HEAD
    /**
     * @param string $name
     */
=======
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
    public function __set($name, $value)
    {
        $this->{$name} = $value;
    }

    public function mergeColumnFormattersWith($columnFormatters)
    {
        $this->columnFormatters = array_merge($this->columnFormatters, $columnFormatters);
    }

    public function mergeModifiersWith($modifiers)
    {
        $this->modifiers = array_merge($this->modifiers, $modifiers);
    }

<<<<<<< HEAD
    /**
     * @return array
     */
=======
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
    public function guessColumnFormatters($populator)
    {
        $formatters = [];
        $class = $this->class;
        $table = $this->getTable($class);
        $schema = $table->schema();
        $pk = $schema->primaryKey();
        $guessers = $populator->getGuessers() + ['ColumnTypeGuesser' => new ColumnTypeGuesser($populator->getGenerator())];
        $isForeignKey = function ($column) use ($table) {
            foreach ($table->associations()->type('BelongsTo') as $assoc) {
                if ($column == $assoc->foreignKey()) {
                    return true;
                }
            }
            return false;
        };


        foreach ($schema->columns() as $column) {
            if ($column == $pk[0] || $isForeignKey($column)) {
                continue;
            }

            foreach ($guessers as $guesser) {
                if ($formatter = $guesser->guessFormat($column, $table)) {
                    $formatters[$column] = $formatter;
                    break;
                }
            }
        }

        return $formatters;
    }

<<<<<<< HEAD
    /**
     * @return array
     */
    public function guessModifiers()
=======
    public function guessModifiers($populator)
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
    {
        $modifiers = [];
        $table = $this->getTable($this->class);

        $belongsTo = $table->associations()->type('BelongsTo');
        foreach ($belongsTo as $assoc) {
            $modifiers['belongsTo' . $assoc->name()] = function ($data, $insertedEntities) use ($assoc) {
                $table = $assoc->target();
                $foreignModel = $table->alias();

                $foreignKeys = [];
                if (!empty($insertedEntities[$foreignModel])) {
                    $foreignKeys = $insertedEntities[$foreignModel];
                } else {
                    $foreignKeys = $table->find('all')
                    ->select(['id'])
                    ->map(function ($row) {
                        return $row->id;
                    })
                    ->toArray();
                }

                if (empty($foreignKeys)) {
                    throw new \Exception(sprintf('%s belongsTo %s, which seems empty at this point.', $this->getTable($this->class)->table(), $assoc->table()));
                }

                $foreignKey = $foreignKeys[array_rand($foreignKeys)];
<<<<<<< HEAD
=======
                $primaryKey = $table->primaryKey();
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
                $data[$assoc->foreignKey()] = $foreignKey;
                return $data;
            };
        }

        // TODO check if TreeBehavior attached to modify lft/rgt cols

        return $modifiers;
    }

<<<<<<< HEAD
    /**
     * @param array $options
     */
=======
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
    public function execute($class, $insertedEntities, $options = [])
    {
        $table = $this->getTable($class);
        $entity = $table->newEntity();

        foreach ($this->columnFormatters as $column => $format) {
            if (!is_null($format)) {
                $entity->{$column} = is_callable($format) ? $format($insertedEntities, $table) : $format;
            }
        }

        foreach ($this->modifiers as $modifier) {
            $entity = $modifier($entity, $insertedEntities);
        }

        if (!$entity = $table->save($entity, $options)) {
            throw new \RuntimeException("Failed saving $class record");
        }

        $pk = $table->primaryKey();
<<<<<<< HEAD
        if (is_string($pk)) {
            return $entity->{$pk};
        }

        return $entity->{$pk[0]};
=======
        return $entity->{$pk};
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
    }

    public function setConnection($name)
    {
        $this->connectionName = $name;
    }

    protected function getTable($class)
    {
        $options = [];
        if (!empty($this->connectionName)) {
            $options['connection'] = $this->connectionName;
        }
        return TableRegistry::get($class, $options);
    }
}
