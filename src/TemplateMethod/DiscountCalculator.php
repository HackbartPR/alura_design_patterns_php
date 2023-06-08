<?php

namespace HackbartPR\TemplateMethod;

use HackbartPR\Budget;
use HackbartPR\TemplateMethod\Discounts\Amount;
use HackbartPR\TemplateMethod\Discounts\NoDiscount;
use HackbartPR\TemplateMethod\Discounts\Price;

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