<?php

namespace App\Http\Controllers;
use App\Services\PaymentService;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    protected $paymentService;

    public function __construct(PaymentService $paymentService)
    {
        // Injecting PaymentService into the controller
        $this->paymentService = $paymentService;
    }

    public function processPayment()
    {
        // Use the service to process payment
        $response = $this->paymentService->process(100);
        return $response;
    }

}
