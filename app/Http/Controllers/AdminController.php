<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Restaurant;
use DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $users = User::get()->all();
      return view('admin.admin')
        ->with('users', $users);

      $restaurants = Restaurant::get()->all();
      return view('admin.admin')
        ->with('restaurants', $restaurants);
    }

    public function indexUser()
    {
      $users = User::get()->all();

      return view('admin.user.index')
        ->with('users', $users);
    }

    public function indexRestaurant()
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
        return view('restaurant.create');

        // return view('register');
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
    public function editUser($id)
    {
      $user = User::findOrFail($id);

      return view('admin.user.edit')
          ->with('user', $user);
    }

    public function editRestaurant($id)
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
    public function updateUser(Request $request, $id)
    {

      // $validatedData = $request->validate([
      //     'name' => 'required|string|max:255',
      //     'address' => 'required|string|max:255',
      //     'zipcode' => 'required|string|min:6|max:6',
      //     'phone' => 'required|string|min:10|max:10',
      //     'email' => 'required|email|max:255',
      // ]);

      try {
        DB::beginTransaction();

        $user = User::findOrFail($id);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->address = $request->address;
        $user->zipcode = $request->zipcode;
        $user->city = $request->city;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->is_admin = ($request->is_admin) ? 1 : 0;

        $user->save();

        DB::commit();

        return redirect()->back()->with('message', 'Gebruiker aangepast.');
      }

      catch(Exception $e) {
        DB::rollback();
        dd($e->getMessage());
      }
    }

    public function updateRestaurant(Request $request, $id)
    {
      try {
        DB::beginTransaction();

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

        DB::commit();

        return redirect()->back()->with('message', 'Restaurant aangepast.');
      }

      catch(Exception $e) {
        DB::rollback();
        dd($e->getMessage());
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($consumable_id);
        $user = User::findOrFail($id);

        $user->delete();
        // return view("admin.admin");
        return redirect()->back();


        $restaurant = Restaurant::findOrFail($id);

        $restaurant->delete();
        // return view("admin.admin");
        return redirect()->back();
    }
}
