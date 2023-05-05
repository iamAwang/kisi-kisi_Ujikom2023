<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

use App\Models\Hotel;
use App\Models\Booking;


class HotelController extends Controller
{
    // create & read
    public function index()
    {
        // $hotels = Hotel::all();
        $hotels = Hotel::paginate(5);
        // $hotels = Hotel::simplepaginate(5); biar ga ada panah besar
        // untuk previous dan next all nya diganti paginate
        return view('hotel',compact(['hotels']));
    }

    public function create(){
        return view ('form_hotel');
    }

    public function store(Request $request)
    {
        Hotel::create([
            'name'=>$request->name,
            'address'=>$request->address,
            'rate'=>$request->rating
        ]);
        return redirect('/hotel');
    }

    public function edit($id)
    {
        $edit = Hotel::find($id);
        // $hotel = Hotel::find($id); pakai variable $hotel boleh jg pakai variable $edit
        return view('form_hotel',compact(['edit']));
        // return view('form_hotel',compact(['hotel']));
    }

    public function update(Request $request,$id)
    {
        $hotel=Hotel::find($id);
        $hotel->name=$request->name;
        $hotel->address=$request->address;
        $hotel->rate=$request->rating;
        $hotel->save();
        return redirect('hotel');
    }

    public function delete($id)
    {
        $hotel=Hotel::find($id);
        // $name=$hotel->name;
        $hotel->delete();
        return redirect('hotel');
    }

// Bagian Booking
// Bagian Booking
// Bagian Booking
// Bagian Booking
// Bagian Booking
// Bagian Booking

    public function indexBooking()
    {
        $bookings = Booking::simplepaginate(5);
        return view('booking',compact(['bookings']));
    }

    public function create_booking(){
        $hotels = Hotel::all();
        return view ('form_booking',compact(['hotels']));
    }

    public function store_booking(Request $request)
    {
        Booking::create([
            'hotel_id'=>$request->hotel,
            // 'user_id'=>auth()->id(),
            'user_id'=>Auth::user()->id,
            'booking_date'=>Carbon::now(),
            'checkin_date'=>$request->checkin_date,
            'status'=>1
        ]);
        return redirect('/booking');
    }

    public function editBooking($id)
    {
        $edit = Booking::find($id);
        $hotels = Hotel::all();
        return view('form_booking',compact(['edit','hotels']));
    }

    public function updateBooking(Request $request, $id)
    {
        $booking = Booking::find($id);
        $booking->hotel_id=$request->hotel;
        $booking->checkin_date=$request->checkin_date;
        $booking->save();
        return redirect('booking');
    }

    public function deleteBooking($id)
    {
        $booking = Booking::find($id);
        $booking->delete();
        return redirect('booking');
    }

    public function createParallax()
    {
        return view('parallax');
    }

    public function createAnimatedBackground()
    {
        return view('animated_background');
    }

    public function createMath()
    {
        return view('math');
    }
}
