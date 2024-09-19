<?php

namespace App\Services;

class PaymentService
{
    public function process($amount)
    {
        return "Processing a payment of $$amount";
    }
}
