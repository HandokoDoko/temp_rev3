<?php

namespace Illuminate\Database\Console\Migrations;

use Illuminate\Console\Command;

class BaseCommand extends Command
{
    /**
     * Get the path to the migration directory.
     *
     * @return string
     */
    protected function getMigrationPath()
    {
<<<<<<< HEAD
        return $this->laravel->databasePath().DIRECTORY_SEPARATOR.'migrations';
=======
        return $this->laravel->databasePath().'/migrations';
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
    }
}
