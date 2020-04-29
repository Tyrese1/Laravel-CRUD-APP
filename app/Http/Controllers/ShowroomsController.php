<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShowroomsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, $roomType = null)
    {
        //Collect records from database and format to JSON
        
        if (isset($roomType)) {
            $rooms =  Room::where('room_type_id', '=', $roomType)->get();
        } else { 
            $rooms = Room::get();
        }
        //render view from view template
        return view('rooms.index', ['rooms' => $rooms]);

    }
}
