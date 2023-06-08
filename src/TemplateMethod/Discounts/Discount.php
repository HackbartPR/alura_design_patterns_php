<?php

namespace HackbartPR\TemplateMethod\Discounts;

use HackbartPR\Budget;

abstract class Discount
{
    public function __construct(
        protected Discount $next
    ){}

    public function calculate(Budget $budget): float
    {
        if ($this->shouldDiscount($budget)) {
            return $this->discount($budget);
        }

        return $this->sendToNext($budget);
    }
    
    private function sendToNext(Budget $budget): float
    {     
        return $this->next->calculate($budget);
    }

    protected abstract function shouldDiscount(Budget $budget): bool;

    protected abstract function discount(Budget $budget): float;

}