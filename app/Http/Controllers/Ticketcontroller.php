<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
class Ticketcontroller extends Controller
{
    public function show(){

         $tickets=Ticket::all();


         return view('all_ticket',compact('tickets'));
    }

    public function store(Request $request){

           $ticket= new Ticket();
           $ticket->name=$request->name ;
           $ticket->save();

           return redirect()->back();
    }
}

