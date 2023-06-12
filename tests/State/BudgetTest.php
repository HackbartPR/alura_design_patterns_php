<?php

namespace HackbartPR\Tests\State;

use HackbartPR\State\Budget;
use HackbartPR\State\States\Approved;
use HackbartPR\State\States\Disapproved;
use HackbartPR\State\States\Finalized;
use HackbartPR\State\States\InProgress;
use PHPUnit\Framework\TestCase;

final class BudgetTest extends TestCase
{
    public function testStateShouldBeInProgress(): void
    {
        $budget = new Budget(100, 5);
        $expected = new InProgress();        

        $this->assertEquals($expected, $budget->state);
    }

    public function testBudgetShouldGetExtraDiscountFromInProgressState(): void
    {
        $budgetValue = 100;                
        $inProgressDiscPorc = 0.05;

        $budget = new Budget($budgetValue, 5);        
        $expected = $budgetValue * $inProgressDiscPorc;

        $this->assertEquals($expected, $budget->getExtraDiscount());
    }

    public function testStateShouldBeApproved(): void
    {
        $budget = new Budget(100, 5);
        $budget->approve();

        $expected = new Approved();        

        $this->assertEquals($expected, $budget->state);
    }

    public function testBudgetShouldGetExtraDiscountFromApprovedState(): void
    {
        $budgetValue = 100;                
        $inProgressDiscPorc = 0.02;

        $budget = new Budget($budgetValue, 5);
        $budget->approve();

        $expected = $budgetValue * $inProgressDiscPorc;

        $this->assertEquals($expected, $budget->getExtraDiscount());
    }

    public function testStateShouldBeDisapproved(): void
    {
        $budget = new Budget(100, 5);
        $budget->disapprove();

        $expected = new Disapproved();        

        $this->assertEquals($expected, $budget->state);
    }

    public function testBudgetShouldReturnDomainExceptionWhenGetExtraDiscountFromDisapprovedState(): void
    {
        $budget = new Budget(100, 5);
        $budget->disapprove();
                
        $this->expectException(\DomainException::class);
        $this->expectExceptionMessage("O estado atual não permite gerar descontos!");

        $budget->getExtraDiscount();        
    }

    public function testStateShouldBeFinalized(): void
    {
        $budget = new Budget(100, 5);
        $budget->disapprove();
        $budget->finalize();

        $expected = new Finalized();        

        $this->assertEquals($expected, $budget->state);
    }
    
    public function testBudgetShouldReturnDomainExceptionWhenGetExtraDiscountFromFinalizedState(): void
    {
        $budget = new Budget(100, 5);
        $budget->disapprove();
        $budget->finalize();

        $this->expectException(\DomainException::class);
        $this->expectExceptionMessage("O estado atual não permite gerar descontos!");

        $budget->getExtraDiscount();        
    }
    
    //implementar:    
    //aprovar pode finalizar
    //aprovar não pode reprovar
    //reprovar nao pode aprovar
    //Em progresso nao pode finalizar    
}