<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class EditprofileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('editprofile');
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
    public function edit($id)
    {
        //  $user = User::findOrFail($id);
        // return view('editprofile')->with('user', $user);
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
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'zipcode' => 'required',
            'city' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:users',
            // 'password' => 'required|min:6|confirmed'
        ]);

         try {
             DB::beginTransaction();

             $user = Auth::user();
             $user->first_name = $request->first_name;
             $user->last_name = $request->last_name;
             $user->address = $request->address;
             $user->zipcode = $request->zipcode;
             $user->city = $request->city;
             $user->password = bcrypt($request->password);
             $user->phone = $request->phone;
             $user->email = $request->email;
             $user->save();

             DB::commit();
             return redirect::back();

         }
             catch(Exception $e) {
                 DB::rollback();

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
        //
    }
}
