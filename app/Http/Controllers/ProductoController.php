<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class ProductoController extends Controller
{
    public function index(){
        $producto = Productos::all();
        return view('productos.index', compact('producto'));
    }

    public function crear(){
        return view('productos.crear');
    }

    public function guardar(Request $request){
        $request->validate([
            'nombre' => 'Required',
            'descripcion' => 'Required',
            'precio' => 'Required|numeric',
        ]);
   
        Productos::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'precio' => $request->precio,
        ]);
        return redirect()->route('productos.index');
    }
}
