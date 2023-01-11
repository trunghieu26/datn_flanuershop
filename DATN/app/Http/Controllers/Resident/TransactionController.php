<?php

namespace App\Http\Controllers\Resident;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index(Request $request)
    {
        $input = $request->all();
        $input['user_id'] = $request->session()->get('user_id');
        Transaction::create($input);
        return response()->json([
            'bool'=>true,
        ]);
    }

    public function listTransaction(Request $request)
    {
        $user_id = $request->session()->get('user_id');
        $Order = Order::with('Product')->where('user_id', $user_id)->get();
        $Transaction = Transaction::select([
                    'transactions.id', 'transactions.amount', 
                    'transactions.amount','transactions.user_id',
                    'transactions.status',
                    'transactions.quantity',
                    'products.image',
                    'products.name',
                    'products.content'
                            ])->join('orders','transactions.order_id','orders.id')
                            ->join('products','products.id','orders.product_id')->get();
        $quantity = 0;
        foreach($Order as $d) {
            $quantity += $d->quantity;
        }
        return view('resident.transaction', compact('quantity','Transaction'));
    }
}
