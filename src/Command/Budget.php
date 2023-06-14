<?php

namespace HackbartPR\Command;

class Budget
{
    public function __construct
    (
        public float $value,
        public int $amount
    ){}
}