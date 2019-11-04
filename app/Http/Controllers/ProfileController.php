<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Redirect;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(Auth::id());
            return view('profile')->with('user', $user);
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
        $user = User::findOrFail($id);
        return view('profile.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        // first try
        //  $this->validate(request(), [
        //     'first_name' => 'required',
        //     'last_name' => 'required',
        //     'address' => 'required',
        //     'zipcode' => 'required',
        //     'city' => 'required',
        //     'phone' => 'required',
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required|min:6|confirmed'
        // ]);

        //  try {
        //      DB::beginTransaction();

        //      $user = Auth::user();
        //      $user->first_name = $request->first_name;
        //      $user->last_name = $request->last_name;
        //      $user->address = $request->address;
        //      $user->zipcode = $request->zipcode;
        //      $user->city = $request->city;
        //      $user->password = bcrypt($request->password);
        //      $user->phone = $request->phone;
        //      $user->email = $request->email;
        //      $user->save();

        //      DB::commit();
        //      return Redirect()->route('profile', ['user' => $user->id])
        //      ->with('Your profile have been updated');

        //  }
        //      catch(Exception $e) {
        //          DB::rollback();

        //      }


        // second try
        // $user = User::where('id', $user->id)
        //     ->update([
        //         'first_name'=> $request->input('first_name'),
        //         'last_name'=> $request->input('last_name'),
        //         'address'=> $request->input('address'),
        //         'zipcode'=> $request->input('zipcode'),
        //         'password'=> bcrypt($request->input(['password'])),
        //         'phone'=> $request->input('phone'),
        //         'email'=> $request->input('email'),
        //     ]);

        // if($user){
        //     return redirect()->route('profile', ['user'=> $user->id])
        //     ->with('success' , 'user updated succesfully');
        // }
        //     //redirect
        //     return back()->withInput();


        // third try
        $user = User::where('id', $user->id);
        $user->first_name = request('first_name');
        $user->last_name = request('last_name');
        $user->address = request('address');
        $user->zipcode = request('zipcode');
        $user->phone = request('phone');
        $user->email = request('email');
        $user->save();

        return redirect()->route('profile.index');

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
