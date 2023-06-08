<?php

namespace HackbartPR\ChainOfResponsability\Discounts;

use HackbartPR\Budget;
use HackbartPR\ChainOfResponsability\Discounts\Discount;

class Amount extends Discount
{
    const AMOUNT_VALUE = 5;
    const DISC_PORC = 0.1;

    public function calculate(Budget $budget): float
    {
        if ($budget->amount > self::AMOUNT_VALUE) {
            return $budget->value * self::DISC_PORC;
        }

        return $this->next->calculate($budget);
    }
}