<<<<<<< HEAD
<?php

namespace Faker\Test\Provider\es_ES;

use Faker\Generator;
use Faker\Provider\es_ES\Payment;

class PaymentTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Payment($faker));
        $this->faker = $faker;
    }

    public function testVAT()
    {
        $vat = $this->faker->vat();

        $this->assertTrue($this->isValidCIF($vat));
    }

    /**
     * Validation taken from https://github.com/amnesty/drupal-nif-nie-cif-validator/
     * @link https://github.com/amnesty/drupal-nif-nie-cif-validator/blob/master/includes/nif-nie-cif.php
     */
    function isValidCIF($docNumber)
    {
        $fixedDocNumber = strtoupper($docNumber);

        return $this->isValidCIFFormat($fixedDocNumber);
    }

    function isValidCIFFormat($docNumber)
    {
        return $this->respectsDocPattern($docNumber, '/^[PQSNWR][0-9][0-9][0-9][0-9][0-9][0-9][0-9][A-Z0-9]/')
                ||
               $this->respectsDocPattern($docNumber, '/^[ABCDEFGHJUV][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]/');
    }

    function respectsDocPattern($givenString, $pattern)
    {
        $isValid = FALSE;
        $fixedString = strtoupper($givenString);
        if (is_int(substr($fixedString, 0, 1))) {
            $fixedString = substr("000000000" . $givenString, -9);
        }
        if (preg_match($pattern, $fixedString)) {
            $isValid = TRUE;
        }
        return $isValid;
    }

}
=======
<?php

namespace Faker\Test\Provider\es_ES;

use Faker\Generator;
use Faker\Provider\es_ES\Payment;

class PaymentTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Payment($faker));
        $this->faker = $faker;
    }

    public function testVAT()
    {
        $vat = $this->faker->vat();

        $this->assertTrue($this->isValidCIF($vat));
    }

    /**
     * Validation taken from https://github.com/amnesty/drupal-nif-nie-cif-validator/
     * @link https://github.com/amnesty/drupal-nif-nie-cif-validator/blob/master/includes/nif-nie-cif.php
     */
    function isValidCIF($docNumber)
    {
        $fixedDocNumber = strtoupper($docNumber);

        return $this->isValidCIFFormat($fixedDocNumber);
    }

    function isValidCIFFormat($docNumber)
    {
        return $this->respectsDocPattern($docNumber, '/^[PQSNWR][0-9][0-9][0-9][0-9][0-9][0-9][0-9][A-Z0-9]/')
                ||
               $this->respectsDocPattern($docNumber, '/^[ABCDEFGHJUV][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]/');
    }

    function respectsDocPattern($givenString, $pattern)
    {
        $isValid = FALSE;
        $fixedString = strtoupper($givenString);
        if (is_int(substr($fixedString, 0, 1))) {
            $fixedString = substr("000000000" . $givenString, -9);
        }
        if (preg_match($pattern, $fixedString)) {
            $isValid = TRUE;
        }
        return $isValid;
    }

}
>>>>>>> 835f7a65a58323b31c7c768b7b23e8e4b12d368f
