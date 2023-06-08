<?php

namespace HackbartPR\TemplateMethod\Discounts;

use HackbartPR\Budget;
use HackbartPR\TemplateMethod\Discounts\Discount;

class NoDiscount extends Discount
{
    public function __construct()
    {}

    protected function shouldDiscount(Budget $budget): bool
    {
        return true;
    }

    protected function discount(Budget $budget): float
    {
        return 0;
    }
}