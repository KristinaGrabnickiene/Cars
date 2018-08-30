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
       
        $owners = Owner::all();
        
        return view("cars.index", [
        "cars"=>$cars,
        "owners"=> $owners
        ] );

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
            $cars = new Car;
    
            $cars->brand = $request ->brand;
            $cars->model = $request ->model;
            $cars->reg_number = $request ->reg_number;
            $cars->jpg = $request ->jpg;
            
            
            $cars->save();

            return redirect()->route("cars.index");
        }

        public function save(){
        //
        $cars = Car::all();
       return view ("cars.create", [ "cars"=> $cars ]);
        
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
        
        $allOwners = Owner::where("cars_id", $id)->get();

        
        return view('cars.show', [
            "carsItem" => $cars,
            "owners" => $allOwners,
           
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
    
        $cars = Car::find($id);     
        return view('cars.edit',[
                    "cars" => $cars,
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
            
        $cars = Car::find($id);
        
        $cars->brand = $request ->brand;
        $cars->model = $request ->model;
        $cars->reg_number = $request ->reg_number;
        $cars->jpg = $request ->jpg;
       
        
        $cars->save();

        return redirect()->route('cars.index');
    
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cars = Car::find($id);

        $cars->delete();

        return redirect()->route('cars.index');
        
    }
}
