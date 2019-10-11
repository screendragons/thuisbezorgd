<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurants;
use App\Consumables;

class RestaurantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurant = Restaurants::get()->all();
        return view('restaurants')->with('restaurant', $restaurant);

        // $restaurant = Restaurant::where('is_open', '>', date('H:i'))
        //   ->where('is_closed', '>', date('H:i'))
        //   ->where(function($query) use ($request)){
        //     ->where('title', 'LIKE', '%'.$request->q.'%')
        //   }

        //   ->get();
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


    public function search(Request $request)
    {
        $search = $request->get('search');
        // $restaurants = DB::table('restaurants')->where('name', '%'.$search.'%');
        // return view('restaurants', ['restaurants' => $restaurants ]);
        $restaurant = Restaurants::where('name', 'LIKE', "%$search%")->get();
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($user_id)
    {
        $restaurant = Restaurants::with('consumables')->findOrFail($user_id);
        // $restaurants = Restaurants::all();

        return view('showrestaurant')
            ->with('restaurant', $restaurant);
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
