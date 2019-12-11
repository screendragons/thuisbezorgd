<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Restaurant;
use App\Consumable;
use App\Order;
use Redirect;
use DB;
use Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // show users
        $users = User::get()->all();
        return view('admin.admin')
            ->with('users', $users);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('restaurant.create');

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

    public function update(Request $request, $id)
    {
        // Validation
        $validatedData = $request->validate([
          'first_name' => 'required|string|max:255',
          'last_name' => 'required|string|max:255',
          'address' => 'required|string|max:255',
          'zipcode' => 'required|string|min:6|max:7',
          'city' => 'required|email|max:255',
          'phone' => 'required|string|min:10|max:10',
          'email' => 'required|email|max:255',
        ]);

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

            return redirect()->back()->with('message', 'User updated.');
        }

        catch(Exception $e) {
            DB::rollback();
            dd($e->getMessage());
        }
    }

    public function edit($id)
    {

        $user = User::findOrFail($id);
        return view('admin.user.edit')
            ->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // public function update(Request $request, $id)
    // {

    // }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back();
    }
}
