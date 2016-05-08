<?php

namespace Faker\Test\Provider;

use Faker\Generator;
use Faker\Provider\Barcode;

class BarcodeTest extends \PHPUnit_Framework_TestCase
{
    private $faker;

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Barcode($faker));
        $faker->seed(0);
        $this->faker = $faker;
    }

    public function testEan8()
    {
        $code = $this->faker->ean8();
        $this->assertRegExp('/^\d{8}$/i', $code);
<<<<<<< HEAD
        $codeWithoutChecksum = substr($code, 0, -1);
        $checksum = substr($code, -1);
        $this->assertEquals(TestableBarcode::eanChecksum($codeWithoutChecksum), $checksum);
=======
        $codeWitoutChecksum = substr($code, 0, -1);
        $checksum = substr($code, -1);
        $this->assertEquals(TestableBarcode::eanChecksum($codeWitoutChecksum), $checksum);
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
    }

    public function testEan13()
    {
        $code = $this->faker->ean13();
        $this->assertRegExp('/^\d{13}$/i', $code);
<<<<<<< HEAD
        $codeWithoutChecksum = substr($code, 0, -1);
        $checksum = substr($code, -1);
        $this->assertEquals(TestableBarcode::eanChecksum($codeWithoutChecksum), $checksum);
=======
        $codeWitoutChecksum = substr($code, 0, -1);
        $checksum = substr($code, -1);
        $this->assertEquals(TestableBarcode::eanChecksum($codeWitoutChecksum), $checksum);
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
    }
}

class TestableBarcode extends Barcode
{
    public static function eanChecksum($input)
    {
        return parent::eanChecksum($input);
    }
}
