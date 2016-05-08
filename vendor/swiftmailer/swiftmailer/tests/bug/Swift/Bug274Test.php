<?php

class Swift_Bug274Test extends \PHPUnit_Framework_TestCase
{
<<<<<<< HEAD
    public function testEmptyFileNameAsAttachment()
=======
    public function testEmptyFileNameAsAttachement()
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
    {
        $message = new Swift_Message();
        $this->setExpectedException('Swift_IoException', 'The path cannot be empty');
        $message->attach(Swift_Attachment::fromPath(''));
    }

<<<<<<< HEAD
    public function testNonEmptyFileNameAsAttachment()
=======
    public function testNonEmptyFileNameAsAttachement()
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
    {
        $message = new Swift_Message();
        try {
            $message->attach(Swift_Attachment::fromPath(__FILE__));
        } catch (Exception $e) {
            $this->fail('Path should not be empty');
        }
    }
}
