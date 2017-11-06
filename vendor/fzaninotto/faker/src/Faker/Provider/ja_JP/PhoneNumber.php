<<<<<<< HEAD
<?php

namespace Faker\Provider\ja_JP;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    /**
     * @link http://www.soumu.go.jp/main_sosiki/joho_tsusin/top/tel_number/number_shitei.html#kotei-denwa
     */
    protected static $formats = array(
        '080-####-####',
        '090-####-####',
        '0#-####-####',
        '0####-#-####',
        '0###-##-####',
        '0##-###-####',
        '0##0-###-###',
    );
}
=======
<?php

namespace Faker\Provider\ja_JP;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    /**
     * @link http://www.soumu.go.jp/main_sosiki/joho_tsusin/top/tel_number/number_shitei.html#kotei-denwa
     */
    protected static $formats = array(
        '080-####-####',
        '090-####-####',
        '0#-####-####',
        '0####-#-####',
        '0###-##-####',
        '0##-###-####',
        '0##0-###-###',
    );
}
>>>>>>> 835f7a65a58323b31c7c768b7b23e8e4b12d368f
