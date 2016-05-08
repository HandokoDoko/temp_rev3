<?php

namespace Faker\Test\Provider;

use Faker\Generator;
use Faker\Provider\Address;

class AddressTest extends \PHPUnit_Framework_TestCase
{
    private $faker;

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Address($faker));
        $this->faker = $faker;
    }

    public function testLatitude()
    {
        $latitude = $this->faker->latitude();
        $this->assertInternalType('float', $latitude);
        $this->assertGreaterThanOrEqual(-90, $latitude);
        $this->assertLessThanOrEqual(90, $latitude);
    }

    public function testLongitude()
    {
        $longitude = $this->faker->longitude();
        $this->assertInternalType('float', $longitude);
        $this->assertGreaterThanOrEqual(-180, $longitude);
        $this->assertLessThanOrEqual(180, $longitude);
    }
<<<<<<< HEAD

    public function testCoordinate()
    {
        $coordinate = $this->faker->localCoordinates();
        $this->assertInternalType('array', $coordinate);
        $this->assertInternalType('float', $coordinate['latitude']);
        $this->assertGreaterThanOrEqual(-90, $coordinate['latitude']);
        $this->assertLessThanOrEqual(90, $coordinate['latitude']);
        $this->assertInternalType('float', $coordinate['longitude']);
        $this->assertGreaterThanOrEqual(-180, $coordinate['longitude']);
        $this->assertLessThanOrEqual(180, $coordinate['longitude']);
    }
=======
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
}
