<?php

namespace Illuminate\Mail\Events;

class MessageSending
{
    /**
     * The Swift message instance.
     *
     * @var \Swift_Message
     */
    public $message;

    /**
     * Create a new event instance.
     *
<<<<<<< HEAD
     * @param  \Swift_Message  $message
=======
     * @param  \Swift_Message  $messagse
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
     * @return void
     */
    public function __construct($message)
    {
        $this->message = $message;
    }
}
