<?php

namespace DiscountsService\App\Discounts\Rules;

use DiscountsService\App\Discounts\CalculationInterface;

class ToolsCategory implements CalculationInterface
{
    public function getDiscount(array $order): float
    {
        return 0.00;
    }
}