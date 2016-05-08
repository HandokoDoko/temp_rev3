<?php

namespace Faker\ORM\CakePHP;

class ColumnTypeGuesser
{
    protected $generator;

    public function __construct(\Faker\Generator $generator)
    {
        $this->generator = $generator;
    }

<<<<<<< HEAD
    /**
     * @return \Closure|null
     */
=======
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
    public function guessFormat($column, $table)
    {
        $generator = $this->generator;
        $schema = $table->schema();

        switch ($schema->columnType($column)) {
            case 'boolean':
                return function () use ($generator) {
                    return $generator->boolean;
                };
            case 'integer':
<<<<<<< HEAD
                return function () {
                    return mt_rand(0, intval('2147483647'));
                };
            case 'biginteger':
                return function () {
                    return mt_rand(0, intval('9223372036854775807'));
=======
                return function () use ($generator) {
                    return $generator->randomNumber(10);
                };
            case 'biginteger':
                return function () use ($generator) {
                    return $generator->randomNumber(20);
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
                };
            case 'decimal':
            case 'float':
                return function () use ($generator) {
                    return $generator->randomFloat();
                };
            case 'uuid':
                return function () use ($generator) {
                    return $generator->uuid();
                };
            case 'string':
                $columnData = $schema->column($column);
                $length = $columnData['length'];
                return function () use ($generator, $length) {
                    return $generator->text($length);
                };
            case 'text':
                return function () use ($generator) {
                    return $generator->text();
                };
            case 'date':
            case 'datetime':
            case 'timestamp':
            case 'time':
                return function () use ($generator) {
                    return $generator->datetime();
                };

            case 'binary':
            default:
                return null;
        }
    }
}
