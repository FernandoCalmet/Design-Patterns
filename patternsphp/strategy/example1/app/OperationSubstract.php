<?php

declare(strict_types=1);

namespace App;

class OperationSubstract implements Strategy
{
    public function doOperation(int $num1, int $num2): int
    {
        return $num1 - $num2;
    }
}
