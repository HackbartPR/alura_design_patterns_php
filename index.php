<?php

require_once __DIR__ . '/vendor/autoload.php';

use HackbartPR\Budget;
use HackbartPR\TaxCalculator;
use HackbartPR\Taxes\Icms;
use HackbartPR\Taxes\Iss;

$calculator = new TaxCalculator();
$icms = new Icms();
$iss = new Iss();
$budget = new Budget(100);

$amount = $calculator->calculate($budget, $icms);
echo $amount . PHP_EOL;