<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cart;
use App\Consumable;
use App\Order;
use App\Restaurant;
use App\User;
use Auth;


class OrderController extends Controller
{
    /**
     * Display a listin g of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::get()->all();
        return view('admin.order.index')
          ->with('orders', $orders);
        // dd($orders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Get the current logged in user with his restaurants and orders
        $restaurant = Restaurant::where('id', $id)->with('restaurants', 'orders')->get()[0];

        // Create an empty orders array
        $orders = [];
        if (count($restaurant->orders)) {
            foreach ($restaurant->orders as $key => $order) {
                // Push the consumables of each order to the orders array
                array_push($orders, Order::where('id', $order->id)->with('consumables')->get()[0]);
            }
        }

        // return order
        return view('admin.order.index',[
           'restaurant' => $restaurant,
           'orders' => $orders
       ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::findOrFail($id);
        return view('admin.order.edit')
          ->with('order', $order);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
