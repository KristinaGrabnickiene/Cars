<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
Use App\Owner;

class OwnersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $owners =  Owner::all();

        return view("owners.index", [
            "owners"=>$owners
            ] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $owners= Owner::all();
       return view ("owners.create", [ "owners"=> $owners,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $owners= new Owner;

        $owners->name = $request ->name;
        $owners->surname = $request ->surname;
        $owners->cars_id = $request ->cars_id;
        $owners->phone = $request ->phone;
        
        $owners->save();

        return redirect()->route("owners.index");
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

        $owners= Owner::find($id);
        return view ("owners.edit", [ "owners"=> $owners,
        ]);
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
        $owners = Owner::find($id);
        
        $owners->name = $request ->name;
        $owners->surname = $request ->surname;
        $owners->cars_id = $request ->cars_id;
        $owners->phone = $request ->phone;
        
        $owners->save();
       
        
        return redirect()->route("owners.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $owners = Owner::find($id);
        $owners->delete();

        return redirect()->route("owners.index");

    }
}
