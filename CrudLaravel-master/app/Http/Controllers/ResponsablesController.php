<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Responsable;
class ResponsablesController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $responsables = Responsable::all();
      
        return view('responsables.index', compact('responsables'));
    }


    public function create()
    {
        //
    }
    
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
        //Create/crear
        $responsableObject = new Responsable;
        $responsableObject ->descripcion = $request->descripcion_text;
        $responsableObject ->responsable = $request->responsable_text;
        $responsableObject ->fecha_solicitud = $request->fecha_date;
        $responsableObject ->save();


       $responsables = Responsable::all();
       return view('responsables.index', compact('responsables'));
        }
        
     /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function edit($id)
     {
         $objectToUpdate = Responsable::find($id);
         return view('responsables.editar',compact('objectToUpdate'));
     }

    public function update(Request $request)
    {
         //update/actualizar
         $objectToUpdate = Responsable::find($request->id_responsable_hidden);
         $objectToUpdate->descripcion = $request->descripcion_text;
         $objectToUpdate->responsable = $request->responsable_text;
         $objectToUpdate->fecha_solicitud = $request->fecha_date;
         $objectToUpdate->save();
         
         $responsables = Responsable::all();
         return view('responsables.index', compact ('responsables'));
    }
    public function destroy($id_responsable)
    {
        //Delete/eliminar
        //borrar por id, puedo pasar uno o varios ids
        $objectToDelete = Responsable::destroy($id_responsable);
        $responsables = Responsable::all();

        return view('responsables.index', compact('responsables'));

    }
}