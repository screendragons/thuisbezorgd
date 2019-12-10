<?php

namespace App\Http\Controllers;

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
        // $orders = Order::where('user_id', Auth::id())->with('consumables')->get();

        // dd($orders);

        // return view('showorder')->with('orders', $orders);

        // $consumable = Consumable::get();
        // return view('order')->with('consumable', $consumable);

        // Get the current logged in user with his restaurants and orders
        $user = User::where('id', Auth::id())->with('restaurants', 'orders')->get()[0];
        // Create an empty orders array
        $orders = [];
        if (count($user->orders)) {
            foreach ($user->orders as $key => $order) {
              // Push the consumables of each order to the orders array
            array_push($orders, Order::where('id', $order->id)->with('consumables')->get()[0]);
          }
        }
        // dd($orders);
        return view('showorder',[
           'user' => $user,
           'orders' => $orders
        ]);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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

    // tutorial
    public function order(Request $request, $id)
    {
        $consumable = Consumable::find($id);
    }
}
