<?php

namespace HackbartPR\TemplateMethod\Discounts;

use HackbartPR\Budget;
use HackbartPR\TemplateMethod\Discounts\Discount;

class Amount extends Discount
{
    const AMOUNT_VALUE = 5;
    const DISC_PORC = 0.1;

    protected function shouldDiscount(Budget $budget): bool
    {
        return $budget->amount > self::AMOUNT_VALUE;
    }

    protected function discount(Budget $budget): float
    {
        return $budget->value * self::DISC_PORC;
    }
}