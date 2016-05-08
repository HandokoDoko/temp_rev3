<?php

namespace Illuminate\Queue\Events;

class JobFailed
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
     * Create a new event instance.
     *
     * @param  string  $connectionName
<<<<<<< HEAD
     * @param  \Illuminate\Contracts\Queue\Job  $job
=======
     * @param  \Illuminate\Contracts\Jobs\Job  $job
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
     * @param  array  $data
     * @return void
     */
    public function __construct($connectionName, $job, $data)
    {
        $this->job = $job;
        $this->data = $data;
        $this->connectionName = $connectionName;
    }
}
