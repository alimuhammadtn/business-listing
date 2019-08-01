<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Listings;

class ListingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createlist');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

         $this->validate($request,['name'=>'required',
         'address'=>'required',
         'web'=>'required']);


        $listing            = new Listings;

        $listing->name      = $request->input('name');

        $listing->address   = $request->input('address');

        $listing->web       = $request->input('web');

        $listing->phone     = $request->input('phone');

        $listing->bio       = $request->input('bio');

        $listing->user_id   = auth()->user()->id; 

        $listing->save();

        return redirect('/dashboard')->with('success','Business created');
        
         
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
        $listings =Listings::find($id); 
        return view('edit')->with('listings',$listings);
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
        $this->validate($request,['name'=>'required','address'=>'required','phone'=>'required']);
        
        $listings = Listings::find($id);

        $listings->name     = $request->input('name');

        $listings->address  = $request->input('address');

        $listings->web      = $request->input('web');

        $listings->phone    = $request->input('phone');

        $listings->bio      = $request->input('bio');

        $listings->user_id  = auth()->user()->id;

        $listings->save();

        return redirect('/dashboard')->with('success','Business Updated');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $listings = Listings::find($id);
        $listings->delete();

        return redirect('/dashboard')->with('success','business Deleted');

    }
}
