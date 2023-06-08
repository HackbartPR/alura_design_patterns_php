<?php

require_once __DIR__ . '/vendor/autoload.php';

use HackbartPR\Budget;
use HackbartPR\ChainOfResponsability\DiscountCalculator;
use HackbartPR\Strategy\TaxCalculator;
use HackbartPR\Strategy\Taxes\Icms;
use HackbartPR\Strategy\Taxes\Iss;

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
