<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Consumable;
use App\Order;
use DB;
use Auth;
use Redirect;
use Session;

class ConsumableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // dd('test');
        $consumable = Consumable::get()->all();

        return view('admin.consumable.index')
            ->with('consumable', $consumable);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
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

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        $consumable = Consumable::find($id);
        return view('admin.consumable.edit')
            ->with('consumable', $consumable);
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
        $consumable = Consumable::find($id);

        $consumable->update([
            'title'=> $request->input('title'),
            'price'=> $request->input('price'),
            'category'=> $request->input('category'),
        ]);

        if($consumable){
            // return redirect()->route('restaurant.show', ['consumable'=> $consumable->id])
            return redirect::back()
            ->with('success' , 'consumable updated succesfully');
        }
            //redirect
            // return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $consumable = Consumable::findOrFail($id);

        $consumable->delete();

        return redirect()->back();
    }
}
