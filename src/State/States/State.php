<?php

namespace HackbartPR\State\States;

use DomainException;
use HackbartPR\State\Budget;

abstract class State
{
    abstract function name(): string;

    /**
     * @throws \DomainException Este método pode retornar uma excessão.
     */
    public function getExtraDiscount(Budget $budget): float
    {
        throw new DomainException("O estado atual não permite gerar descontos!");
    }

    /**
     * @throws \DomainException Este método pode retornar uma excessão.
     */
    public function approve(Budget $budget): void
    {
        throw new DomainException("Este orçamento não pode ser aprovado!");
    }

    /**
     * @throws \DomainException Este método pode retornar uma excessão.
     */
    public function disapprove(Budget $budget): void
    {
        throw new DomainException("Este orçamento não pode ser reprovado!");
    }

    /**
     * @throws \DomainException Este método pode retornar uma excessão.
     */
    public function finalize(Budget $budget): void
    {
        throw new DomainException("Este orçamento não pode ser finalizado!");
    }
}