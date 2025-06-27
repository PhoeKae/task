<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class ShopController extends Controller
{
    public function index()
    {
        $products = Product::where('quantity_available', '>', 0)->get();
        return view('shop.index', compact('products'));
    }

    public function show(Product $product)
    {
        return view('shop.show', compact('product'));
    }

    public function buy(Request $request, Product $product)
    {
        $user = Auth::user();
        $balance = Auth::user()->balance;

        // ✅ Only user role can buy
        if ($user->role !== 'User') {
            return redirect('/shop')->with('error', 'Only buyers can make purchases.');
        }

        // ✅ Validate quantity input
        $request->validate([
            'quantity_available' => 'required|integer|min:1|max:' . $product->quantity_available,
        ]);

        $quantity = (int) $request->input('quantity_available');
        $totalCost = $product->price * $quantity;


        // ✅ Check if user has enough balance
        if ($balance < $totalCost) {
            return back()->with('error', 'Insufficient balance to complete this purchase.');
        } else {
            $user->decrement('balance', $totalCost);
            $purchasedBottle = $product->decrement('quantity_available', $quantity);
        }

        // Save transaction
        Transaction::create([
            'user_id'      => $user->id,
            'product_id'   => $product->id,
            'quantity_purchased' => $quantity,
            'total_amount' => $totalCost,
        ]);

        return redirect()->route('shop.index')->with('success', 'You have purchased ' . $quantity . ' of ' . $product->name);
    }
}
