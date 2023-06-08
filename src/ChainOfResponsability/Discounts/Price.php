<?php

namespace HackbartPR\ChainOfResponsability\Discounts;

use HackbartPR\Budget;
use HackbartPR\ChainOfResponsability\Discounts\Discount;

class Price extends Discount
{
    const MIN_PRICE = 500;
    const DISC_PORC = 0.05;

    public function calculate(Budget $budget): float
    {
        if ($budget->value > self::MIN_PRICE) {
            return $budget->value * self::DISC_PORC;
        }

        return $this->next->calculate($budget);
    }
}