<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Consumables;
use App\Restaurants;
use Auth;
use Redirect;
use DB;

class CreateconsumablesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('createconsumables');
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
        // $validatedData = $request->validate([
        //     'title' => 'required|string|max:255',
        //     'price' => 'string|max:25|unique:restaurants',
        //     'category' => 'required|string|max:255',
        //     'photo' => 'string|max:255'
        // ]);
        try {
                DB::beginTransaction();
                $consumable = new Consumables;

                $consumable->title = $request->title;
                $consumable->price = $request->price;
                $consumable->category = $request->category;
                $consumable->restaurants_id = $request->restaurants_id;
                $consumable->id = Auth()->user()->id;

                $consumable->save();
                DB::commit();
                return redirect()->back()->with('message', 'A new consumable has been maded.');

            }
            catch(Exception $e)
            {
                DB::rollback();
                dd($e->getMessage());
            }

        return view('createconsumables');
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
