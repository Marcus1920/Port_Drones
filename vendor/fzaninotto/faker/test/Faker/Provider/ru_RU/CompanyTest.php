<<<<<<< HEAD
<?php

namespace Faker\Test\Provider\ru_RU;

use Faker\Generator;
use Faker\Provider\ru_RU\Company;

class CompanyTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Company($faker));
        $this->faker = $faker;
    }

    public function testINN()
    {
        $this->assertRegExp('/^[0-9]{10}$/', $this->faker->inn);
        $this->assertEquals("77", substr($this->faker->inn("77"), 0, 2));
        $this->assertEquals("02", substr($this->faker->inn(2), 0, 2));
    }

    public function testKPP()
    {
        $this->assertRegExp('/^[0-9]{9}$/', $this->faker->kpp);
        $this->assertEquals("01001", substr($this->faker->kpp, -5, 5));
        $inn = $this->faker->inn;
        $this->assertEquals(substr($inn, 0, 4), substr($this->faker->kpp($inn), 0, 4));
    }
}
=======
<?php

namespace Faker\Test\Provider\ru_RU;

use Faker\Generator;
use Faker\Provider\ru_RU\Company;

class CompanyTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Company($faker));
        $this->faker = $faker;
    }

    public function testINN()
    {
        $this->assertRegExp('/^[0-9]{10}$/', $this->faker->inn);
        $this->assertEquals("77", substr($this->faker->inn("77"), 0, 2));
        $this->assertEquals("02", substr($this->faker->inn(2), 0, 2));
    }

    public function testKPP()
    {
        $this->assertRegExp('/^[0-9]{9}$/', $this->faker->kpp);
        $this->assertEquals("01001", substr($this->faker->kpp, -5, 5));
        $inn = $this->faker->inn;
        $this->assertEquals(substr($inn, 0, 4), substr($this->faker->kpp($inn), 0, 4));
    }
}
>>>>>>> 835f7a65a58323b31c7c768b7b23e8e4b12d368f
