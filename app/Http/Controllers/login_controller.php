<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\RegisterModel;

use App\Models\User;

use App\Models\BookingModel;

use Illuminate\Support\Facades\Hash;



class login_controller extends Controller
{
    

    public function index()
    {
        $registers = User::query()->where('usertype','LIKE',"customer")->get();
        return view('/admin/viewcustomers',compact('registers'));
    }

    public function search(Request $request)
    {
            $getname = request('cname');
            $registers = User::query()->where('cname','LIKE',"%{$getname}%")->get();
            return view('/admin/viewcustomers',compact('registers'));
        
    }

    public function gallery()
    {
        return view('/admin/gallery');
    }


     function login()
     {
         return view('auth.login');
     }

    public function register()
    {
        return view('auth.register');
    }

    function save(Request $request)
    {
        //return $request->input();

        $request->validate([ 

            'cname'=> 'required|min:2|max:32|regex:/^[A-Za-z\s]+$/',
            'cmob'=>'required|max:10|unique:register_models',
            'cemail'=>'required|email|unique:register_models',
            'cpass'=>'required_with:conpass|same:conpass|min:4|max:12',
            'conpass'=>'required',

        ]);
        
        $register = new RegisterModel;

        $user = new User();
        
        $register->cname = $request->cname;
        $register->cmob = $request->cmob;
        $register->cemail = $request->cemail;
        $register->cpass =Hash::make($request->cpass);
        $register->conpass =Hash::make($request->conpass);

        
        $user->cemail = $request->cemail;
        $user->cname = $request->cname;
        $user->cmob = $request->cmob;
        $user->cpass = Hash::make($request->cpass);
        $user->usertype = "customer";

        $save = $register->save();
        $user->save();

        if($save)
        {
            return back()->with('success','successfully registered');
        }
        else
            {
                return back()->with('fail','something went wrong');
            }
    
    }

    function check(Request $request)
    {
        //return $request->input();

         $request->validate([
        'cemail'=>'required|email',
        'cpass'=>'required|min:4|max:12',
       
        ]);

        $userInfo = User::where('cemail','=',$request->cemail)->first();
 
        if(!$userInfo)
        {
            return back()->with('fail','Email-id not recognized');
        }
        else  //checking password
        {
            if(Hash::check($request->cpass, $userInfo->cpass))
            {

                    if($userInfo->usertype=="admin")
                    {
                         $request->session()->put('LoggedUser',$userInfo->id);
                         return redirect('/admin/index');
                    }
                    else 
                    {
                        
                        $request->session()->put('LoggedUser',$userInfo->id);
                        return redirect('/customer/index');
                    }
            }
            else
            {
                return back()->with('fail','Incorrect Password');
            }
        }

    } 

    function logout()
    {
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/auth/login');
        }
    }

    public function dashboard(Request $request)
    {
        $data = ['LoggedUserInfo'=>User::where('id','=',session('LoggedUser'))->first()];
        return view('admin.index', $data);
    }

    public function customerIndex(Request $request)
    {
        $data = ['LoggedUserInfo'=>User::where('id','=',session('LoggedUser'))->first()];
        return view('customer.index', $data);
    }

    public function accept($id)
    {
        $book = BookingModel::find($id);
        $book->status = "Confirmed";

        $book->save();

        $bookings = BookingModel::all();
        return view('/admin/viewbookings',compact('bookings'));
    }

    public function decline($id)
    {
        $book = BookingModel::find($id);
        $book->status = "Declined";

        $book->save();

        $bookings = BookingModel::all();
        return view('/admin/viewbookings',compact('bookings'));

    }


}
 