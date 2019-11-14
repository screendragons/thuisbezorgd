<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;
use App\Consumable;
use DB;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurant = Restaurant::get();
        return view('restaurant')->with('restaurant', $restaurant);

        // $restaurant = Restaurant::where('is_open', '>', date('H:i'))
        //   ->where('is_closed', '>', date('H:i'))
        //   ->where(function($query) use ($request)){
        //     ->where('title', 'LIKE', '%'.$request->q.'%')
        //   }

        //   ->get();

        // Openiningstijden
        $restaurant = Restaurant::where('is_open', '<', date('H:i:s'))
        ->where('is_closed', '>', date('H:i:s'))->get();
        return view('restaurant')->with('restaurant', $restaurant);

        // return view('restaurant', compact('restaurant'));
        return view('restaurant', compact('restaurant'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd('test');
        return view('restaurant.create');

    }

    public function search(Request $request)
    {
        $query = $request->get('query');
        // $restaurant = DB::table('restaurant')->where('name', '%'.$search.'%');
        // return view('restaurant', ['restaurant' => $restaurant ]);
        $restaurant = Restaurant::where('name', 'LIKE', "%".$query."%")->get();
           return view('search')->with('restaurant', $restaurant);
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
            'name' => 'required|string|max:255',
            'KVK' => 'string|max:25|unique:restaurant',
            'address' => 'required|string|max:255',
            'zipcode' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|string|unique:restaurant,email|max:255',
            'is_open' => 'required|string|max:255',
            'is_closed' => 'required|string|max:255',
            'photo' => 'string|max:255'
        ]);
        try {
                DB::beginTransaction();
                $restaurant = new Restaurant;

                $restaurant->name = $request->name;
                $restaurant->KVK = $request->KVK;
                $restaurant->address = $request->address;
                $restaurant->zipcode = $request->zipcode;
                $restaurant->city = $request->city;
                $restaurant->phone = $request->phone;
                $restaurant->email = $request->email;
                $restaurant->is_open = $request->is_open;
                $restaurant->is_closed = $request->is_closed;
                $restaurant->user_id = Auth()->user()->id;

                $restaurant->save();
                DB::commit();
                return redirect()->back()->with('message', 'Create restaurant has been maded.');

            }
            catch(Exception $e)
            {
                DB::rollback();
                dd($e->getMessage());
            }

        return view('restaurant');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($user_id)
    {
        $restaurant = Restaurant::with('consumable')->findOrFail($user_id);
        // $restaurant = Restaurant::all();

        return view('restaurant.show')
            ->with('restaurant', $restaurant);

         // return 'hallo <a href="'.route('consumable.index').'">Ga naar consumables</a>';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $restaurant = Restaurant::findOrFail($id);
        return view('restaurant.edit')
            ->with('restaurant', $restaurant);
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
        $restaurant = Restaurant::find($id);
        $restaurant->update([
            'name'=> $request->input('name'),
            'KVK'=> $request->input('KVK'),
            'address'=> $request->input('address'),
            'zipcode'=> $request->input('zipcode'),
            'city'=> $request->input('city'),
            'phone'=> $request->input('phone'),
            'email'=> $request->input('email'),
            'is_open'=> $request->input('is_open'),
            'is_closed'=> $request->input('is_closed')
        ]);

        if($restaurant){
            return redirect()->route('restaurant.show', ['restaurant'=> $restaurant->id])
            ->with('success' , 'restaurant updated succesfully');
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
    public function destroy($id)
    {
        // delete restaurant
        // $consumable = Consumable::findOrFail($id);
        $restaurant = Restaurant::findOrFail($id);

        // $consumable->delete();
        $restaurant->delete();

        // Find all restaurant consumables
        $consumables = Consumable::where('restaurant_id', $id)->get();
        foreach($consumables as $consumable) {
            $consumable->delete();
        }
        return redirect("/");

        // @foreach('consumable' as $consumable)
        //     $consumable = Consumable::where('restaurant_id', 'id')->get();

        //     $consumable->delete();
        // @endforeach
    }
}
