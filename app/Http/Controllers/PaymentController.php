<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;


class PaymentController extends Controller
{

    public function show($orderId)
    {
        $order = Order::with('destination')->findOrFail($orderId);
        return view('user.payment.show', compact('order'));
    }

    public function callback(Order $order)
    {


            $order->status = 'approved';
            $order->save();

            return response()->json(['status' => 'success', 'message' => 'Transaction status updated']);
    }


    public function success($orderId)
    {
        $order = Order::with('destination')->findOrFail($orderId);
        return view('user.payment.success', compact('order'));
    }

    public function pending($orderId)
    {
        $order = Order::with('destination')->findOrFail($orderId);
        return view('user.payment.pending', compact('order'));
    }
}
