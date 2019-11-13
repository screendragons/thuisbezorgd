<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Restaurant;

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

    // public function editRestaurant($id)
    //     {
    //         $restaurant = Restaurant::findOrFail($id);

    //         return view('admin.restaurant.edit')
    //             ->with('restaurant', $restaurant);
    //     }

    // public function getAllRestaurant()
    //     {
    //         $restaurants = Restaurant::get()->all();
    //         return view('admin.restaurant.index')
    //             ->with('restaurants', $restaurants);
    //     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('restaurant.create');
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
