<?php

namespace HackbartPR\TemplateMethod\Discounts;

use HackbartPR\Budget;
use HackbartPR\TemplateMethod\Discounts\Discount;

class Price extends Discount
{
    const MIN_PRICE = 500;
    const DISC_PORC = 0.05;

    protected function shouldDiscount(Budget $budget): bool
    {
        return $budget->value > self::MIN_PRICE;
    }

    protected function discount(Budget $budget): float
    {
        return $budget->value * self::DISC_PORC;
    }
}