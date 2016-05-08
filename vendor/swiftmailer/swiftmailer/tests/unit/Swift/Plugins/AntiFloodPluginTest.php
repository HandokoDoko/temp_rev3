<?php

class Swift_Plugins_AntiFloodPluginTest extends \PHPUnit_Framework_TestCase
{
    public function testThresholdCanBeSetAndFetched()
    {
        $plugin = new Swift_Plugins_AntiFloodPlugin(10);
        $this->assertEquals(10, $plugin->getThreshold());
        $plugin->setThreshold(100);
        $this->assertEquals(100, $plugin->getThreshold());
    }

    public function testSleepTimeCanBeSetAndFetched()
    {
        $plugin = new Swift_Plugins_AntiFloodPlugin(10, 5);
        $this->assertEquals(5, $plugin->getSleepTime());
        $plugin->setSleepTime(1);
        $this->assertEquals(1, $plugin->getSleepTime());
    }

    public function testPluginStopsConnectionAfterThreshold()
    {
        $transport = $this->_createTransport();
        $transport->expects($this->once())
                  ->method('start');
        $transport->expects($this->once())
                  ->method('stop');

        $evt = $this->_createSendEvent($transport);

        $plugin = new Swift_Plugins_AntiFloodPlugin(10);
<<<<<<< HEAD
        for ($i = 0; $i < 12; ++$i) {
=======
        for ($i = 0; $i < 12; $i++) {
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
            $plugin->sendPerformed($evt);
        }
    }

    public function testPluginCanStopAndStartMultipleTimes()
    {
        $transport = $this->_createTransport();
        $transport->expects($this->exactly(5))
                  ->method('start');
        $transport->expects($this->exactly(5))
                  ->method('stop');

        $evt = $this->_createSendEvent($transport);

        $plugin = new Swift_Plugins_AntiFloodPlugin(2);
<<<<<<< HEAD
        for ($i = 0; $i < 11; ++$i) {
=======
        for ($i = 0; $i < 11; $i++) {
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
            $plugin->sendPerformed($evt);
        }
    }

    public function testPluginCanSleepDuringRestart()
    {
        $sleeper = $this->getMock('Swift_Plugins_Sleeper');
        $sleeper->expects($this->once())
                ->method('sleep')
                ->with(10);

        $transport = $this->_createTransport();
        $transport->expects($this->once())
                  ->method('start');
        $transport->expects($this->once())
                  ->method('stop');

        $evt = $this->_createSendEvent($transport);

        $plugin = new Swift_Plugins_AntiFloodPlugin(99, 10, $sleeper);
<<<<<<< HEAD
        for ($i = 0; $i < 101; ++$i) {
=======
        for ($i = 0; $i < 101; $i++) {
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
            $plugin->sendPerformed($evt);
        }
    }

    // -- Creation Methods

    private function _createTransport()
    {
        return $this->getMock('Swift_Transport');
    }

    private function _createSendEvent($transport)
    {
        $evt = $this->getMockBuilder('Swift_Events_SendEvent')
                    ->disableOriginalConstructor()
                    ->getMock();
        $evt->expects($this->any())
            ->method('getSource')
            ->will($this->returnValue($transport));
        $evt->expects($this->any())
            ->method('getTransport')
            ->will($this->returnValue($transport));

        return $evt;
    }
}
