<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Destination;

class OrderController extends Controller
{
    public function create(Destination $destination)
    {
        return view('user.orders.create', compact('destination'));
    }

    public function store(Request $request, Destination $destination)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        $totalPrice = $destination->price * $request->input('quantity');

        $order = new Order;
        $order->user_id = auth()->id();
        $order->destination_id = $destination->id;
        $order->total_price = $totalPrice;
        $order->quantity = $request->input('quantity'); //new code
        $order->status = 'pending';
        $order->save();
        return redirect()->route('payment.show', $order->id);
    }

    public function orderHistory()
    {
        $orders = Order::where('user_id', auth()->id())->with('destination')->get();
        return view('user.orders.history', compact('orders'));
    }
}
