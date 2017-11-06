<<<<<<< HEAD
<?php

namespace Faker\Test\Provider\es_ES;

use Faker\Generator;
use Faker\Provider\es_ES\Text;

class TextTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Text($faker));
        $this->faker = $faker;
    }

    public function testText()
    {
        $this->assertNotSame('', $this->faker->realtext(200, 2));
    }
}
=======
<?php

namespace Faker\Test\Provider\es_ES;

use Faker\Generator;
use Faker\Provider\es_ES\Text;

class TextTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Text($faker));
        $this->faker = $faker;
    }

    public function testText()
    {
        $this->assertNotSame('', $this->faker->realtext(200, 2));
    }
}
>>>>>>> 835f7a65a58323b31c7c768b7b23e8e4b12d368f
