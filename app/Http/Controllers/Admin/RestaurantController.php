<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Restaurant;
use App\Consumable;
use Redirect;
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
        $restaurants = Restaurant::get()->all();
        return view('admin.restaurant.index')
        ->with('restaurants', $restaurants);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        try
        {
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

        return Redirect::back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($user_id)
    {

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
        return view('admin.restaurant.edit')
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
       $restaurant = Restaurant::findOrFail($id);
       $restaurant->name = $request->name;
       $restaurant->KVK = $request->KVK;
       $restaurant->address = $request->address;
       $restaurant->zipcode = $request->zipcode;
       $restaurant->city = $request->city;
       $restaurant->phone = $request->phone;
       $restaurant->email = $request->email;
       $restaurant->is_open = $request->is_open;
       $restaurant->is_closed = $request->is_closed;
       $restaurant->save();

       return Redirect::back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $restaurant = Restaurant::findOrFail($id);
        $restaurant->delete();
        return redirect()->back();
    }
}
