<?php

namespace HackbartPR\State;

use HackbartPR\State\States\InProgress;
use HackbartPR\State\States\State;

class Budget
{
    public function __construct
    (
        public float $value,
        public int $amount,
        public State $state = new InProgress()
    ){}

    /**
     * @throws \DomainException Este método pode retornar uma excessão.
     */
    public function getExtraDiscount(): float
    {
        return $this->state->getExtraDiscount($this);
    }
    
    public function state(): string
    {
        return $this->state->name();
    }

    /**
     * @throws \DomainException Este método pode retornar uma excessão.
     */
    public function approve(): void
    {
        $this->state->approve($this);
    }

    /**
     * @throws \DomainException Este método pode retornar uma excessão.
     */
    public function disapprove(): void
    {
        $this->state->disapprove($this);
    }

    /**
     * @throws \DomainException Este método pode retornar uma excessão.
     */
    public function finalize(): void
    {
        $this->state->finalize($this);
    }
}