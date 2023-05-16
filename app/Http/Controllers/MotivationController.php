<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facade\DB;
use \App\Models\Motivation;

class MotivationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("formulaire_motivation");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $liste = Motivation::all();
        return view("liste_motivation",compact('liste'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request ->validate([
            'intitule'=>'required',]);

        try{
            \DB::beginTransaction();
            $motivate = new Motivation;
            $motivate->intitule=$request->intitule;
            $motivate->save();
            \DB::commit(); 
            return view("formulaire_motivation");
        } catch(\Thowable $th){
            return back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            \DB::beginTransaction();
            $M = Motivation::find($id);
            \DB::commit(); 
            return view("update_motivation", compact("M"));
 
        } catch (\Throwable $th) {
            return back();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            \DB::beginTransaction();
            Motivation::find($request->id)->update(['intitule'=>$request->intitule]);
            \DB::commit(); 
        return redirect("/motivation_liste");

        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            \DB::beginTransaction();
            Motivation::find($id)->delete();
            \DB::commit(); 
            return redirect("/motivation_liste");
         } catch (\Throwable $th) {
            dd($th);
            return back();
         }  
    }
}
