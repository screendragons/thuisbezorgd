<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Createrestaurants;
use DB;
use App\Restaurants;

class CreaterestaurantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('createrestaurants');
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
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'KVK' => 'string|max:25|unique:restaurants',
            'address' => 'required|string|max:255',
            'zipcode' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|string|unique:restaurants,email|max:255',
            'photo' => 'string|max:255'
        ]);
        try {
                DB::beginTransaction();
                $restaurant = new Restaurants;

                $restaurant->name = $request->name;
                $restaurant->KVK = $request->KVK;
                $restaurant->address = $request->address;
                $restaurant->zipcode = $request->zipcode;
                $restaurant->city = $request->city;
                $restaurant->phone = $request->phone;
                $restaurant->email = $request->email;
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

        return view('restaurants');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'hallo <a href="'.route('consumables.index').'">Ga naar consumables</a>';
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
