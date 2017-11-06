<<<<<<< HEAD
<?php

namespace Faker\Provider\el_CY;

class Company extends \Faker\Provider\Company
{
    protected static $companySuffix = array(
        'ΛΤΔ',
        'Δημόσια εταιρεία',
        '& Υιοι',
        '& ΣΙΑ',
    );

    protected static $formats = array(
        '{{lastName}} {{companySuffix}}',
        '{{lastName}}-{{lastName}}',
    );
}
=======
<?php

namespace Faker\Provider\el_CY;

class Company extends \Faker\Provider\Company
{
    protected static $companySuffix = array(
        'ΛΤΔ',
        'Δημόσια εταιρεία',
        '& Υιοι',
        '& ΣΙΑ',
    );

    protected static $formats = array(
        '{{lastName}} {{companySuffix}}',
        '{{lastName}}-{{lastName}}',
    );
}
>>>>>>> 835f7a65a58323b31c7c768b7b23e8e4b12d368f
