<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Consumable;
use App\Order;
use App\User;
use DB;
use Auth;
use Redirect;
use Session;

class ConsumableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index(Request $request, $restaurantId)
    public function index(Request $request)
    {

        $consumable = Consumable::get()->all();
        return view('consumable')
            ->with('consumable', $consumable);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'title' => 'required|string|max:255',
        //     'price' => 'string|max:25|unique:restaurant',
        //     'category' => 'required|string|max:255',
        //     'photo' => 'string|max:255'
        // ]);
        try
        {
            DB::beginTransaction();
            $consumable = new Consumable;

            $consumable->title = $request->title;
            $consumable->price = $request->price;
            $consumable->category = $request->category;
            $consumable->restaurant_id = $request->restaurant_id;
            // $consumable->id = Auth()->user()->id;

            $consumable->save();
            // dd($consumable);
            DB::commit();

            return redirect()->back()->with('message ', 'A new consumable has been maded.');

        }

        catch(Exception $e)
        {
            DB::rollback();
            dd($e->getMessage());
        }

        return view('restaurant.show')
            ->with('consumable', $consumable);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consumable = Consumable::find($id);

        return view('restaurant.show')
            ->with('consumable', $consumable);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $consumable = Consumable::find($id);
        return view('consumable.edit')
            ->with('consumable', $consumable);
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
        $consumable = Consumable::find($id);
        $consumable->update([
            'title'=> $request->input('title'),
            'price'=> $request->input('price'),
            'category'=> $request->input('category'),
        ]);

        if($consumable){
            return redirect::back()
            ->with('success' , 'consumable updated succesfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $consumable_id)
    {
        $consumable = Consumable::findOrFail($consumable_id);
        $consumable->delete();
        return redirect("/");
    }

    public function addToCart($id)
    {
        // Store the ID of the consumable in the consumable array in the session cookie
        session()->push('consumables', $id);
        // Look up the name of the consumable so it can be added to the cart
        $name = Consumable::where('id', $id)->get()[0]['title'];
        return $name;
    }

    public function pay($restaurant_id)
    {
        // Retrieve all the consumables and the total price
        $items = session()->get('consumables');

        $order = new Order();
        $order->user_id = Auth::id();
        $order->restaurant_id = $restaurant_id;
        $order->save();

        // Attach each consumable to the order
        foreach ($items as $item) {
            $order->consumables()->attach($item);
        }

        return redirect()->route('order.show', ['user_id' => Auth::id()]);
    }

    public function order($id)
    {
        // Get the current logged in user with his restaurants and orders
        $user = User::where('id', $id)->with('restaurants', 'orders')->get()[0];
        // Create an empty orders array
        $orders = [];
        if (count($user->orders)) {
            foreach ($user->orders as $key => $order) {
              // Push the consumables of each order to the orders array
            array_push($orders, Order::where('id', $order->id)->with('consumables')->get()[0]);
          }
        }
        // dd($orders);
        return view('order.show',[
           'user' => $user,
           'orders' => $orders
        ]);
     }
}
