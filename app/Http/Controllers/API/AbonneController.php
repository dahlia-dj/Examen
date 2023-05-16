<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Abonne;
use Illuminate\Http\Request;

class AbonneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ab = Abonne::all();

        return response()->json([
            'status' => true,
            'ab' => $ab
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nom' => 'required',
            'prenom' => 'required|max:20',
            'age' => 'required',
            'sexe'=> 'required',
            'profession'=> 'required',    
            'rue'=> 'required',
            'code_postal'=> 'required',
            'ville'=> 'required',
            'pays'=> 'required',
            'tel'=> 'required|max:20',
            'email'=> 'required',
            'id_motivation'=> 'required',
        ]);

        try {
            DB::beginTransaction();
            $ab = Abonne::create([
                'nom' => $request->nom,
                'prenom' => $request->prenom,
                'age' => $request->age,
                'sexe'=> $request->sexe,
                'profession'=> $request->profession,    
                'rue'=> $request->rue,
                'code_postal' => $request->code_postal,
                'ville'=> $request->ville,
                'pays'=> $request->pays,
                'tel'=> $request->tel,
                'email'=> $request->email,
                'id_motivation'=> $request->id_motivation
        
            ]);
            DB::commit();
            return response()->json($ab, 201);
        } catch (\Throwable $th) {
            return response()->json("{'error: Imposible de sauvegarder un abonne'}", 404);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Abonne $abonne)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nom' => 'required',
            'num_cni' => 'required|max:20',
            'age' => 'required',
            'sexe'=> 'required',
            'statut'=> 'required',    
            'id_region'=> 'required',
            'login'=> 'required',
            'pwd'=> 'required',
            'email'=> 'required',
            'etat'=> 'required',
            'tel'=> 'required|max:20',
        ]);
        try {
            $ab = Abonne::find($id);
            $ab->update($request->all());
            return response()->json("{'Modification réussie de labonne'}", 200);
             
        } catch (Throwable $error) {
            return response()->json("{'error: Impossible de mettre a jour labonne'}", 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $ab=Abonne::find($id)->delete();
       
        return response()->json([
            'status' => true,
        ], 200);
    }
}
