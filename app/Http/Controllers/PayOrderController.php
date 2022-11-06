<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Billing\BankPaymentGateway;
use App\Billing\PaymentGatewayContract;
use App\Orders\OrderDetails;

class PayOrderController extends Controller
{
    public function store(OrderDetails $orderDetails, PaymentGatewayContract $paymentGateway)
    {
        $orders = $orderDetails->all();
        
        dd($paymentGateway->charge(2500));
    }
}
