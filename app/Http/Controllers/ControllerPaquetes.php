<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Imagen;
use App\Models\Paquete;
use Illuminate\Http\Request;

class ControllerPaquetes extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paquetes = Paquete::all(); 

        return view('admin.index', compact('paquetes'));
        // return view("admin.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "crear";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $paquete = new Paquete();
        $paquete->nombre = $request->nombre;
        $paquete->precio = $request->precio;
        $paquete->descripcion = $request->descripcion;
        $paquete->save();
        // Subir y guardar las imágenes

        $paqueteId = $paquete->id;
        

         
        if ($request->hasFile('imagenes')) {
            foreach ($request->file('imagenes') as $imagenArchivo) {
                $nombreImagen = time() . '_' . $imagenArchivo->getClientOriginalName();
                $ruta = $imagenArchivo->storeAs('assets/img', $nombreImagen, 'public'); // Guardar en public/assets/img
        
                // Crear un nuevo registro en la tabla 'imagenes' asociado al paquete
                $imagen = new Imagen(); // Reemplaza 'Imagen' con el nombre de tu modelo Imagen
                $imagen->imagen_url = $ruta; // Reemplaza 'imagen_url' con el nombre de tu columna de imágenes
                $imagen->paquete_id = $paqueteId; // Asociar la imagen con el ID del paquete
                $imagen->save();
            }
        }
       

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "mostrar";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "editar";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $paquete = Paquete::find($id);
        $paquete->nombre = $request->nombre;
        $paquete->precio = $request->precio;
        $paquete->descripcion = $request->descripcion;
        $paquete->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $paquete = Paquete::find($id)->delete();
        return redirect()->back();
    }
}
