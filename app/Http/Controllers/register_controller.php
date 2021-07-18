<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\LoginModel;

use App\Models\AddServicesModel;

use App\Models\BookingModel;

use Illuminate\Support\Facades\Hash;


class register_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = AddServicesModel::all();
        return view('/customer/viewservices',compact('services'));
    }

    public function viewservices()
    {
        $services = AddServicesModel::all();
        return view('/viewservices',compact('services'));

    }

    public function searchservice(Request $request)
    {
        $getname = request('sname');
        $services = AddServicesModel::query()->where('sname','LIKE',"%{$getname}%")->get();
        return view('/viewservices',compact('services'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */ 

    
    public function create()
    {
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
   /* public function store(Request $request)
    {
       
       
    } */


    public function search(Request $request)
     {
         $getname = request('sname');
         $services = AddServicesModel::query()->where('sname','LIKE',"%{$getname}%")->get();
         return view('/customer/viewservices',compact('services'));
     }

     public function myBookings(Request $request)
     {
        $customerid =$request->session()->get('LoggedUser');
        $bookings = BookingModel::with('service')->where('customer_id','=',$customerid)->get();
        return view('/customer/mybookings',compact('bookings'));
     }

     function delete($id)
    {
       $book = BookingModel::find($id);
       $book->delete();
       return redirect('/customer/mybookings');
    }

    public function viewProfile(Request $request)
    {
            
            $custid = $request->session()->get('LoggedUser');
            $customer = User::find($custid);
            return view("/customer/profile",['customer'=>$customer]);
    }
       
    public function profileEdit($id)
    {
        $customers = User::find($id);
        return view('/customer/editprofile',compact('customers'));
    } 


    public function updateProfile(Request $request, $id)
    {

        $getemail = request('cemail');
        $getmobile = request('cmob');

        $customer = User::find($id);

        $customer->cemail = $getemail;
        $customer->cmob = $getmobile;
        $customer->save();

        return redirect('/customer/profile')->with('success','Updated Successfully');

    }  

    public function changePass($id)
    {
        $customers = User::find($id);
        return view('/customer/changepass',compact('customers'));
    } 

    public function updatePass(Request $request,$id)
    {
        $getpass = request('cpass');

        $customer = User::find($id);
        $customer->cpass =Hash::make($request->cpass);
        $customer->save();

        return redirect('/customer/profile')->with('success','Password changed');
    }

   
}
