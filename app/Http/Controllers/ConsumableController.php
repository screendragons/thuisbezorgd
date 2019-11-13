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
        // try
        // {
        //     DB::beginTransaction();
        //     $consumable = new Consumable;

        //     $consumable->title = $request->title;
        //     $consumable->price = $request->price;
        //     $consumable->category = $request->category;
        //     $consumable->restaurant_id = $request->restaurant_id;
        //     // $consumable->id = Auth()->user()->id;

        //     $consumable->save();
        //     DB::commit();
        //     return redirect()->back()->with('message', 'A new consumable has been maded.');

        // }
        // catch(Exception $e)
        // {
        //     DB::rollback();
        //     dd($e->getMessage());
        // }

        // return redirect()->back();
        // return view('consumable.create');

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
        try {
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
        // $consumable = Consumable::find($id);
        // $consumable->update([
        //     'title'=> $request->input('title'),
        //     'category'=> $request->input('category'),
        //     'price'=> $request->input('price'),
        // ]);

        // if($consumable){
        //     return redirect()->route('restaurant.show', ['consumable'=> $consumable->id])
        //     ->with('success' , 'consumable updated succesfully');
        // }

        // //redirect
        // return back()->withInput();

        $consumable = Consumable::find($id);
        $consumable->update([
            'title'=> $request->input('title'),
            'price'=> $request->input('price'),
            'category'=> $request->input('category'),
        ]);

        if($consumable){
            return redirect()->route('restaurant.show', ['consumable'=> $consumable->id])
            ->with('success' , 'consumable updated succesfully');
        }
            //redirect
            // return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($restaurant_id, $consumable_id)
    {
        // $consumable = Consumable::where('id',$id)->first();

        // if ($consumable != null) {
        //    $consumable->delete();
        //    return redirect()->back();
        // }
        // return redirect()->back()->with(['message'=> 'Wrong ID!!']);
        // dd($consumable_id);
        $consumable = Consumable::findOrFail($consumable_id);

        $consumable->delete();

        // return redirect("/");
        return view("home");
    }

    // tutorial
    public function order(Request $request, $id)
    {
        // $consumable = Consumable::find($id);
        // $oldCart = Session::has('order') ? Session::get('cart') : null;
        // $order = new Order($oldOrder);
        // $order->add($consumable, $consumable->id);

        // $request->session()->put('cart', $cart);
        // dd($request->session()->get('cart'));
        // return redirect()->route('order.index');
    }
}
