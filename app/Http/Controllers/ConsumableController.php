<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Consumable;
use App\Order;
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
    public function index(Request $request, $restaurantId)
    {
        //van Matthijs
        // return '<a href="'.route('consumables.show', ['consumable' => 1]).'">show</a>';


        $restaurant = Consumable::get()->all();

        return  view('restaurant')
            ->with('restaurant', $restaurant);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        try {
                DB::beginTransaction();
                $consumable = new Consumable;

                $consumable->title = $request->title;
                $consumable->price = $request->price;
                $consumable->category = $request->category;
                $consumable->restaurant_id = $request->restaurant_id;
                // $consumable->id = Auth()->user()->id;

                $consumable->save();
                DB::commit();
                return redirect()->back()->with('message', 'A new consumable has been maded.');

            }
            catch(Exception $e)
            {
                DB::rollback();
                dd($e->getMessage());
            }

        return redirect()->back();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'price' => 'string|max:25|unique:restaurant',
            'category' => 'required|string|max:255',
            'photo' => 'string|max:255'
        ]);
        try {
                DB::beginTransaction();
                $consumable = new Consumables;

                $consumable->title = $request->title;
                $consumable->price = $request->price;
                $consumable->category = $request->category;
                $consumable->restaurant_id = $request->restaurant_id;
                $consumable->id = Auth()->user()->id;

                $consumable->save();
                DB::commit();
                return redirect()->back()->with('message', 'A new consumable has been maded.');

            }
            catch(Exception $e)
            {
                DB::rollback();
                dd($e->getMessage());
            }

        return view('restaurant.show');
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

        return view('consumable')
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
            return view::make('consumable.edit')
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
         $this->validate(request(), [
            'title' => 'required',
            'category' => 'required',
            'price' => 'required',
            // 'zipcode' => 'required',
            // 'city' => 'required',
            // 'phone' => 'required',
            // 'email' => 'required|email|unique:users',
            // 'password' => 'required|min:6|confirmed'
        ]);
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
        $oldOrder = Session::has('order') ? Session::get('order') : null;
        $order = new Order($oldOrder);
        $order->add($consumable, $consumable->id);

        $request->session()->put('order', $order);
        dd($request->session()->get('order'));
        return redirect()->route('order.index');
    }
}
