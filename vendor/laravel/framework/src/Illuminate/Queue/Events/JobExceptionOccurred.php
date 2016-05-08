<?php

namespace Illuminate\Queue\Events;

class JobExceptionOccurred
{
    /**
     * The connection name.
     *
     * @var string
     */
    public $connectionName;

    /**
     * The job instance.
     *
<<<<<<< HEAD
     * @var \Illuminate\Contracts\Queue\Job
=======
     * @var \Illuminate\Contracts\Jobs\Job
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
     */
    public $job;

    /**
     * The data given to the job.
     *
     * @var array
     */
    public $data;

    /**
     * The exception instance.
     *
     * @var \Throwable
     */
    public $exception;

    /**
     * Create a new event instance.
     *
     * @param  string  $connectionName
<<<<<<< HEAD
     * @param  \Illuminate\Contracts\Queue\Job  $job
=======
     * @param  \Illuminate\Contracts\Jobs\Job  $job
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
     * @param  array  $data
     * @param  \Throwable  $exception
     * @return void
     */
    public function __construct($connectionName, $job, $data, $exception)
    {
        $this->job = $job;
        $this->data = $data;
        $this->exception = $exception;
        $this->connectionName = $connectionName;
    }
}
