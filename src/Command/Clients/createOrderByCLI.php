<?php

use HackbartPR\Command\Commands\CreateOrder;

// Argumentos rercebidos da command line
$clientName = $argv[1];
$value = $argv[2];
$amount = $argv[3];

CreateOrder::execute($clientName, $value, $amount);


