<?php

namespace HackbartPR\Command;

use HackbartPR\Command\Budget;

class Order
{
    public function __construct(
        private \DateTimeInterface $deadLine,
        private string $clientName,
        private Budget $budget   
    ){}
    
    public function deadline(): \DateTimeInterface
    {
        return $this->deadLine;
    }

    public function clientName(): string
    {
        return $this->clientName;
    }

    public function budget(): Budget
    {
        return $this->budget;
    }
}