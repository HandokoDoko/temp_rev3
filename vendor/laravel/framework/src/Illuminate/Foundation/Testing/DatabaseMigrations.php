<?php

namespace Illuminate\Foundation\Testing;

trait DatabaseMigrations
{
<<<<<<< HEAD
    /**
     * Define hooks to migrate the database before and after each test.
     *
     * @return void
     */
=======
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
    public function runDatabaseMigrations()
    {
        $this->artisan('migrate');

        $this->beforeApplicationDestroyed(function () {
            $this->artisan('migrate:rollback');
        });
    }
}
