<?php

namespace App\Http\Controllers;

use App\Income;
use App\Order;
use Illuminate\Http\Request;

class MasterController extends Controller
{

    public function index() {

        return view('masters.index');
    }

    public function order() {
        $orders = Order::all();
        return view('masters.orders',[
            'orders' => $orders
        ]);
    }

    public function display() {
        $orders = Income::all();
        return view('masters.income',[
            'orders' => $orders
        ]);
    }

    public function delete($id){

        if($id != 0) {
            $order = Order::find($id);
            $order->delete($id);
        }
        return redirect()->back();
    }
}
