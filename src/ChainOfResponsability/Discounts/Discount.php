<?php

namespace HackbartPR\ChainOfResponsability\Discounts;

use HackbartPR\Budget;

abstract class Discount
{
    public function __construct(
        protected Discount $next
    ){}

    public abstract function calculate(Budget $budget): float;
}