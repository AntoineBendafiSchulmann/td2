<?php

declare(strict_types=1);

namespace Iim\td2;

class Api
{
    public function getRandomNumber(): int
    {
        return random_int(0, 100);
    }

}
