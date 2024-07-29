<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peliculas;

class PeliculasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peliculas = Peliculas::all();
        return response()->json($peliculas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $peliculas = new Peliculas();
            $peliculas->name = $validatedData['name'];
            $peliculas->description = $validatedData['description'];
            $peliculas->image = $validatedData['image'];
            $peliculas->save();
            return response()->json($peliculas, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $peliculas = Peliculas::find($id);
            if (!$peliculas) {
                return response()->json(['message' => 'Pelicula no encontrada'], 404);
            }
            return response()->json($peliculas);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $peliculas = Peliculas::find($id);
            if (!$peliculas) {
                return response()->json(['message' => 'Peliculas not found'], 404);
            }
            return response()->json($peliculas);
         $peliculas = Peliculas::find($id);
            if (!$peliculas) {
                return response()->json(['message' => 'Peliculas not found'], 404);
            }
            $peliculas->name = $validatedData['name'];
            $peliculas->description = $validatedData['description'];
            $peliculas->image = $validatedData['image'];
            $peliculas->save();
            return response()->json($peliculas);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $peliculas = Peliculas::find($id);
            if (!$peliculas) {
                return response()->json(['message' => 'Peliculas not found'], 404);
            }
            $peliculas->delete();
            return response()->json(null, 204);
    }
}
