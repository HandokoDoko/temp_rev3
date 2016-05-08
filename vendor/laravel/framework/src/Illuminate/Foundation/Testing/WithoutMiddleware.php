<?php

namespace Illuminate\Foundation\Testing;

use Exception;

trait WithoutMiddleware
{
    /**
<<<<<<< HEAD
     * Prevent all middleware from being executed for this test class.
     *
=======
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
     * @throws \Exception
     */
    public function disableMiddlewareForAllTests()
    {
        if (method_exists($this, 'withoutMiddleware')) {
            $this->withoutMiddleware();
        } else {
            throw new Exception('Unable to disable middleware. CrawlerTrait not used.');
        }
    }
}
