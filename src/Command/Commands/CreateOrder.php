<?php

namespace HackbartPR\Command\Commands;

use DateTimeImmutable;
use HackbartPR\Command\Budget;
use HackbartPR\Command\Order;

final class CreateOrder
{
    public static function execute(string $clientName, float $value, int $amount): void
    {
        $budget = new Budget($value, $amount);
        $order = new Order(new DateTimeImmutable('now'), $clientName, $budget);        

        self::sendEmail($order);
        self::saveLog($order);
    }

    private function sendEmail(Order $order): void
    {
        //envia email
    }

    private function saveLog(Order $order): void
    {
        //salva um log
    }
}