<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\AddServicesModel;

use Carbon\Carbon;



class AddServices_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = AddServicesModel::all();
       return view('/admin/viewservices',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/addservices');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $today = Carbon::now()->format('Y-m-d');

            $request->validate([
                'simage' => 'mimes:jpeg,bmp,png', // Only allow .jpg, .bmp and .png file types.
                'sname' => 'required|min:2|max:32|regex:/^[A-Za-z\s]+$/'
            ]);

        $getname=request('sname');
        $getdesc=request('sdesc');
        $getrate=request('srate');
        $getimage=$request->file('simage');
        $name=$getimage->getClientOriginalName();
        $getimage->move(public_path('assets/imgages'), $name);
        $getduration=request('duration'); 

        $service = new AddServicesModel();

        $service->sname=$getname;
        $service->sdesc=$getdesc;
        $service->srate=$getrate;
        $service->simage=$name;
        $service->start_date=$today;
        $service->end_date='2021-12-31';
        $service->start_time='10:00';
        $service->end_time='19:00';
        $service->duration=$getduration;

         $service->save();

        return redirect('/admin/addservices')->with('success','Added Successfully');
      
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


     public function search(Request $request)
     {
         $getname = request('sname');
         $services = AddServicesModel::query()->where('sname','LIKE',"%{$getname}%")->get();
         return view('/admin/viewservices',compact('services'));
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    function delete($id)
    {
        $data = AddServicesModel::find($id);
        $data->delete();
        return redirect('/admin/viewservices');
    }

    public function edit($id)
    {
        $services = AddServicesModel::find($id);
        return view('/admin/editservices',compact('services'));
    }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
            $request->validate([
                'simage' => 'mimes:jpeg,bmp,png', // Only allow .jpg, .bmp and .png file types.
                'sname' => 'required|min:2|max:32|regex:/^[A-Za-z\s]+$/'
            ]);
        
        $getname=request('sname');
        $getdesc=request('sdesc');
        $getrate=request('srate');
        $getimage=$request->file('simage'); 
        $name=$getimage->getClientOriginalName();
        $getimage->move(public_path('assets/service_imgages'), $name);  
        $getduration=request('duration'); 

        $service = AddServicesModel::find($id);

        $service->sname=$getname;
        $service->sdesc=$getdesc;
        $service->srate=$getrate;
        $service->simage=$name;
        $service->duration=$getduration;
        $service->save();
        return redirect('/admin/viewservices')->with('success','Updated Successfully');
           
     
    }
  
}
