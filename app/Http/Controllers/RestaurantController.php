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
        $restaurant = Restaurant::get()->all();
        return view('restaurant')->with('restaurant', $restaurant);

        // $restaurant = Restaurant::where('is_open', '>', date('H:i'))
        //   ->where('is_closed', '>', date('H:i'))
        //   ->where(function($query) use ($request)){
        //     ->where('title', 'LIKE', '%'.$request->q.'%')
        //   }

        //   ->get();


        // Openiningstijden
        $restaurants = Restaurant::where('is_open', '<', date('H:i:s'))
        ->where('is_closed', '>', date('H:i'))->get();
            return view('home', compact('restaurants'));
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
        $search = $request->get('search');
        // $restaurant = DB::table('restaurant')->where('name', '%'.$search.'%');
        // return view('restaurant', ['restaurant' => $restaurant ]);
        $restaurant = Restaurant::where('name', 'LIKE', "%$search%")->get();
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
}
