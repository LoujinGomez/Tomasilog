<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\OrderItem; 
class OrderMenuController extends Controller
{
    /**
     * Update the status of an order.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $orderId
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateStatus(Request $request, $orderId)
{
    // Validate the input
    $request->validate([
        'status' => 'required|in:Pending,Confirmed,Ready', // Ensure status is valid
    ]);

    // Find the order by ID
    $order = Order::findOrFail($orderId);

    // Update the status
    $order->status = $request->input('status');
    $order->save();

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Order status updated successfully!');
}




    public function checkout(Request $request)
{
    // Validate incoming request
    $request->validate([
        'cart' => 'required|array|min:1',
        'cart.*.name' => 'required|string',
        'cart.*.price' => 'required|numeric',
        'cart.*.quantity' => 'required|integer|min:1',
        'total_price' => 'required|numeric',
    ]);

    // Get authenticated user
    $user = auth()->user();

    // Generate order summary
    $summary = collect($request->cart)->map(function ($item) {
        return "{$item['quantity']}x {$item['name']} (₱{$item['price']})";
    })->implode(', ');

    // Create the order
    $order = Order::create([
        'user_id' => $user->id,
        'total_price' => $request->total_price,
        'status' => 'Pending',
        'summary' => $summary, // Save the summary
    ]);

    // Save each item in the order
    foreach ($request->cart as $item) {
        OrderItem::create([
            'order_id' => $order->id,
            'item_name' => $item['name'],
            'item_price' => $item['price'],
            'quantity' => $item['quantity'],
        ]);
    }

    return response()->json(['message' => 'Order placed successfully!', 'order' => $order], 200);
}

public function history()
{
    // Get the authenticated user
    $user = auth()->user();

    // Fetch orders for this user only
    $orders = Order::where('user_id', $user->id)->latest()->get();

    // Pass the orders to the view
    return view('history', compact('orders')); // Use 'history' instead of 'user.history'
}

}
