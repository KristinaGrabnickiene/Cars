<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
Use App\Owner;


class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all();
        return view("cars", ["cars"=>$cars] );
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

            // Kreipiames i modeli NewsItem
            /* Modelio dokumentacija :
            https://laravel.com/docs/5.6/eloquent
            */
        $cars = Car::find($id);
        
        $allOwners = Owner::where("car_id", $id)->get();
       
        return view('carsItem', [
            "carsItem" => $cars,
            "owners" => $allOwners
       ]);
        
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
        $cars = Car::find($id);
        if(count($cars)>0 ){
            return view ("edit", [ "cars"=> $cars ]);
        }else{
            return view ("cars", [ "cars"=> $cars ]);
        }
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
