<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;
use App\Room;
use App\Post;

class HotelReservation1Controller extends Controller
{


    public function index()
    {
        return view('airways.hotelreservation1');
    }

    public function searchFlights(Request $request){


            return view('airways.flightresult', compact('flights'));
            // return View::make('airways.flightresult')->with('flights', $flights);
    }

    public function StorePost(Request $request){



        $data = Hotel::where('hotel_location','like','%'. $request->destination. '%')->paginate(2);
            $dest = $request->destination;
            $in = $request->checkin;
            $out = $request->checkout;
            $pass = $request->travelers;



            $room = Room::all();




        return view('airways.hotelreservation1',compact('data','in','dest','out','pass','room'));


    }





    public function read(Request $request){

        $hotelresult = new Hotel();
        // $data=$hotelresult->read();
        // $data = Hotel::paginate(1);
        $data =  Hotel::where('hotel_location', 'like', '%' . $request->destination . '%')
        ->paginate(2);
        $dest = $request->destination;
        $in = $request->checkin;
        $out = $request->checkout;
        $pass = $request->travelers;
        // var_dump($data);
        // dd($data);
        $room = Room::all();


        return view('airways.hotelreservation1',compact('data','in','dest','out','pass','room'));
    }
}
