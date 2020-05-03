<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class OrderController extends Controller
{
    public function create(Request $request, Order $order)
    {
        if (isset($request)) {
            $name = $request->name;
            $telephone = $request->telephone;
//            var_dump($name,$telephone);

            $order->name = $name;
            $order->telephone = $telephone;
            $order->created_at = Carbon::now();
            $order->save();
        }
//        dd($request);
        return view('clients.index')->with('status', 'Good');
    }
}
