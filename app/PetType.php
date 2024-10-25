<?php

namespace App;

use App\Traits\EnumValuesToArray;

enum PetType: string
{
    use EnumValuesToArray;

    case DOG = 'DOG';
    case CAT = 'cat';
    case RABBIT = 'rabbit';
}
