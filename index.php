<?php

require_once __DIR__ . '/vendor/autoload.php';

use HackbartPR\Budget;
use HackbartPR\Strategy\Taxes\Iss;
use HackbartPR\Strategy\Taxes\Icms;
use HackbartPR\Strategy\TaxCalculator;
use HackbartPR\ChainOfResponsability\DiscountCalculator;
use HackbartPR\TemplateMethod\DiscountCalculator as DiscountCalculatorTemplate;

// Calcula Imposto => Strategy
$calculator = new TaxCalculator();
$icms = new Icms();
$iss = new Iss();
$budgetTax = new Budget(100, 0);

$tax = $calculator->calculate($budgetTax, $icms);
echo "Imposto: " . $tax . PHP_EOL;

//Calcula Desconto => Chain of Responsability
$budgetDiscAmount = new Budget(100, 6);
$calculatorDisc = new DiscountCalculator();

$discountAmount = $calculatorDisc->calculate($budgetDiscAmount);
echo "Desconto por quantidade: " . $discountAmount . PHP_EOL;

$budgetDiscPrice = new Budget(600, 5);
$discountPrice = $calculatorDisc->calculate($budgetDiscPrice);
echo "Desconto por quantidade: " . $discountPrice . PHP_EOL;

//Calcula Desconto => Template Method
$calculatorDiscTemp = new DiscountCalculatorTemplate();

$discountAmountTemplate = $calculatorDiscTemp->calculate($budgetDiscAmount);
echo "Desconto por quantidade (Template Method): " . $discountAmountTemplate . PHP_EOL;

$discountPriceTemplate = $calculatorDiscTemp->calculate($budgetDiscPrice);
echo "Desconto por quantidade (Template Method): " . $discountPriceTemplate . PHP_EOL;

//Calcula Desconto => State
$budgetState = new \HackbartPR\State\Budget(100, 10);
echo $budgetState->getExtraDiscount() . PHP_EOL;
$budgetState->approve();