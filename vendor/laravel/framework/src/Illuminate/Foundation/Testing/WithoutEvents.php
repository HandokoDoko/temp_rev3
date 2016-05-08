<?php

namespace Illuminate\Foundation\Testing;

use Exception;

trait WithoutEvents
{
    /**
<<<<<<< HEAD
     * Prevent all event handles from being executed.
     *
=======
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
     * @throws \Exception
     */
    public function disableEventsForAllTests()
    {
        if (method_exists($this, 'withoutEvents')) {
            $this->withoutEvents();
        } else {
            throw new Exception('Unable to disable middleware. ApplicationTrait not used.');
        }
    }
}
