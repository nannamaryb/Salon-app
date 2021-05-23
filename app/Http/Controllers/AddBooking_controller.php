<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\BookingModel;

use App\Models\AddServicesModel;

use Carbon\Carbon;

class AddBooking_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = BookingModel::with('customer','service')->get();
        return view('/admin/viewbookings',compact('bookings'));
    }

    public function searchBooking(Request $request)
    {
            $getdate = request('date');
            $bookings = BookingModel::query()->where('date','LIKE',"%{$getdate}%")->get();
            return view('/admin/viewbookings',compact('bookings'));
        
    }


    static public function todaydate()
    {
        $date = Carbon::now('Asia/Kolkata')->format('d-m-y');
        return $date;
    }

    public function report()
    {

        $bookings = BookingModel::all();
        return view('/admin/bookingreport',compact('bookings'));
    }

    public function search(Request $request)
    {
            $getname = request('sname');
            $bookings = User::query()->where('sname','LIKE',"%{$getname}%")->get();
            return view('/customer/mybookings',compact('bookings'));
        
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/customer/booking');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        

                if($request->session()->has('LoggedUser'))
                {
                    $request->validate([
            
                        'time' => 'required|date_format:H:i',
                      ]); 

                    $booking = new BookingModel();
                
                    $getdate = request('date');
                    $gettime = request('time');
                    $booking->service_id = $id;
                    $booking->customer_id = $request->session()->get('LoggedUser');
                    $booking->date = $getdate;
                    $booking->time = $gettime;
                    $booking->status = 'Pending';

                    $booking->save();
                    
                  return redirect('/customer/viewservices')->with('success','Booking added Successfully');

                }

        return redirect('/customer/viewservices');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function booking($id)
    {
        
            $data =  AddServicesModel::find($id);
            return view('/customer/booking',['service'=>$data]);
    
    } 


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

}
