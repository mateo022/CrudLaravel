<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;
class TicketsController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = Ticket::all();
      
        return view('tickets.index', compact('tickets'));
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
        $ticketsObject = new Ticket;
        $ticketsObject ->descripcion = $request->descripcion_text;
        $ticketsObject ->responsable = $request->responsable_text;
        $ticketsObject ->fecha_solicitud = $request->fecha_date;
        $ticketsObject ->save();


       $tickets = Ticket::all();
       return view('tickets.index', compact('tickets'));
        }
        
     /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function edit($id)
     {
         $objectToUpdate = Ticket::find($id);
         return view('tickets.editar',compact('objectToUpdate'));
     }

    public function update(Request $request)
    {
         //update/actualizar
         $objectToUpdate = Ticket::find($request->id_ticket_hidden);
         $objectToUpdate->descripcion = $request->descripcion_text;
         $objectToUpdate->responsable = $request->responsable_text;
         $objectToUpdate->fecha_solicitud = $request->fecha_date;
         $objectToUpdate->save();
         
         $tickets = Ticket::all();
         return view('tickets.index', compact ('tickets'));
    }
    public function destroy($id_Ticket)
    {
        //Delete/eliminar
        //borrar por id, puedo pasar uno o varios ids
        $objectToDelete = Ticket::destroy($id_Ticket);
        $tickets = Ticket::all();

        return view('tickets.index', compact('tickets'));

    }
}