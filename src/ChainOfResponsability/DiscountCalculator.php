<?php

namespace HackbartPR\ChainOfResponsability;

use HackbartPR\Budget;
use HackbartPR\ChainOfResponsability\Discounts\Amount;
use HackbartPR\ChainOfResponsability\Discounts\NoDiscount;
use HackbartPR\ChainOfResponsability\Discounts\Price;

class DiscountCalculator
{
    public function calculate(Budget $budget): float
    {
        $discount = new Amount(
                        new Price(
                            new NoDiscount()
        ));
        
        return $discount->calculate($budget);
    }
}