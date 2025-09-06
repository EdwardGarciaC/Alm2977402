<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         //Mostrar todos los productos
        return response()->json(Producto::all(),200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validar los datos        
$datos = $request->validate([
            'nombre'=>['required','string','max:100'],
            'descripcion'=>['nullable','string','max=225'],
            'precio'=>['required','integer','min:1000'],
            'cantidad'=>['required','integer' , 'min:1'],
        ]);    
        // Guardar datos en la DB
        $producto = Producto::create($datos);

        //Respuesta al usuario
        return response()->json([
            'success'=> true,
            'message'=>'Producto creado exitosamente',
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        //Para consultar un producto
        return response()->json($producto, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        //Validar los datos
        $datos = $request->validate([
            'nombre'=>['required','string','max:100'],
            'descripcion'=>['nullable','string','max=225'],
            'precio'=>['required','integer','min:1000'],
            'cantidad'=>['required','integer','min:1'],
        ]);    
        // Guardar datos en la DB
        $producto->update($datos);

        //Respuesta al usuario
        return response()->json([
            'success'=> true,
            'message'=>'Producto Actualizado exitosamente',
        ], 200); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        ////Solo es dar la respuesta
        $producto->delete();

        //respuesta al usuario
        return response()->json([
            'success'=>true,
            'message'=>'El producto ha sido eliminado exitosamente',
        ],204);
    }
}
