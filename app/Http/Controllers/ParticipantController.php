<?php

namespace App\Http\Controllers;

use App\Models\Participants;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    public function welcome(){


        return view('participants.welcome');
    }

    public function index(){
        $empty = null;

        $participants = Participants::get();
        return view('participants.index', compact('participants', 'empty'));
    }

 
        public function store(Request $request)
{
    try {
        $request->validate([
            'last_name' => 'required|max:255',
            'email' => 'required',
            'phone_number' => 'required',
        ]);

        $quantity = $request->quantity;

        for ($i = 1; $i <= $quantity; $i++) {
            $seat = Participants::where('seat_type', $request->seat_type)->orderBy('seat_number', 'desc')->first();

            if ($seat == null) {
                $request['seat_number'] = 1;
                Participants::create($request->all());
            } else {
                if ($seat->seat_number < 250) {
                    if ($seat == null) {
                        $request['seat_number'] = 1;
                    } else {
                        $request['seat_number'] = $seat->seat_number + 1;
                    }
                    Participants::create($request->all());
                } else {
                    return back()->with('message', 'Failed');
                }
            }
        }

        return back()->with('success', 'Successful');
    } catch (\Exception $e) {
        // Handle exceptions here
        return back()->with('message', 'An error occurred: ' . $e->getMessage());
    }
}

    public function edit(Participants $participant)
    {
    //    return view('participant.edit', ['participants' => $participant]);
    }

    public function view(Participants $participant)
    {
        $participants = Participants::get();
       
        
        return view('participants.view', ['participant' => $participant]);

    }    

    public function destroy(Participants $participant)
    {
        $participant->delete();
    
        return redirect()->route('participants.index')->with('success', 'Participant deleted successfully');
    }

    

    public function qr(Participants $participant)
    {
        $participants = Participants::get();
        return view('participants.qr', ['participant' => $participant]);

    }    
}
