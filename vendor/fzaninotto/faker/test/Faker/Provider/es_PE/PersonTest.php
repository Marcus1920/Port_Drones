<<<<<<< HEAD
<?php

namespace Faker\Test\Provider\es_PE;

use Faker\Generator;
use Faker\Provider\es_PE\Person;

class PersonTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    public function setUp()
    {
        $faker = new Generator();
        $faker->seed(1);
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public function testDNI()
    {
        $dni = $this->faker->dni;
        $this->assertRegExp('/\A[0-9]{8}\Z/', $dni);
    }
}
=======
<?php

namespace Faker\Test\Provider\es_PE;

use Faker\Generator;
use Faker\Provider\es_PE\Person;

class PersonTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    public function setUp()
    {
        $faker = new Generator();
        $faker->seed(1);
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public function testDNI()
    {
        $dni = $this->faker->dni;
        $this->assertRegExp('/\A[0-9]{8}\Z/', $dni);
    }
}
>>>>>>> 835f7a65a58323b31c7c768b7b23e8e4b12d368f
