<?php

namespace App\Http\Controllers;

use App\Ticket;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Str;
class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();

        return view('tickets.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        {
            $this->validate($request, [
                'total' => 'required',
                'category' => 'required',
                'taxtotal' => 'required'
            ]);

            $ticket = new Ticket([
                'total' => $request->input('total'),
                'user_id' => Auth::id(),
                'id' => strtoupper(Str::random(10)),
                'category_id' => $request->input('category'),
                'taxtotal' => $request->input('taxtotal'),
                ]);

            $ticket->save();
            //dd($ticket->id ."--".$ticket->user_id."--".$ticket->total."--".$ticket->category_id."--".$ticket->taxtotal);
            return redirect()->back()->with("status", "A ticket with ID: #$ticket->id has been opened.");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {
        //
    }
}
