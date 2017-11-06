<<<<<<< HEAD
<?php

namespace Faker\Provider\ar_SA;

class Payment extends \Faker\Provider\Payment
{
    /**
     * International Bank Account Number (IBAN)
     * @link http://en.wikipedia.org/wiki/International_Bank_Account_Number
     * @param  string  $prefix      for generating bank account number of a specific bank
     * @param  string  $countryCode ISO 3166-1 alpha-2 country code
     * @param  integer $length      total length without country code and 2 check digits
     * @return string
     */
    public static function bankAccountNumber($prefix = '', $countryCode = 'SA', $length = null)
    {
        return static::iban($countryCode, $prefix, $length);
    }
}
=======
<?php

namespace Faker\Provider\ar_SA;

class Payment extends \Faker\Provider\Payment
{
    /**
     * International Bank Account Number (IBAN)
     * @link http://en.wikipedia.org/wiki/International_Bank_Account_Number
     * @param  string  $prefix      for generating bank account number of a specific bank
     * @param  string  $countryCode ISO 3166-1 alpha-2 country code
     * @param  integer $length      total length without country code and 2 check digits
     * @return string
     */
    public static function bankAccountNumber($prefix = '', $countryCode = 'SA', $length = null)
    {
        return static::iban($countryCode, $prefix, $length);
    }
}
>>>>>>> 835f7a65a58323b31c7c768b7b23e8e4b12d368f
