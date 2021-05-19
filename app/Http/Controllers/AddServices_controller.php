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

          

        if ($request->hasFile('simage')) 
        {

            $request->validate([
                'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);

        $getname=request('sname');
        $getdesc=request('sdesc');
        $getrate=request('srate');
        $getimage=$request->file('simage');
        $name=$getimage->getClientOriginalName();
        $getimage->move(public_path('assets/imgages'), $name);
       // $getstdate=request('start_date'); 
       // $getenddate=request('end_date'); 
        $getsttime=request('start_time'); 
        $getendtime=request('end_time'); 
        $getduration=request('duration'); 

        $service = new AddServicesModel();

        $service->sname=$getname;
        $service->sdesc=$getdesc;
        $service->srate=$getrate;
        $service->simage=$name;
        $service->start_date=$today;
        $service->end_date='2021-12-31';
        $service->start_time=$getsttime;
        $service->end_time=$getendtime;
        $service->duration=$getduration;

         $service->save();

        return redirect('/admin/addservices')->with('success','Added Successfully');
      }
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
        
        if($request->hasFile('simage')) 
        {
            $request->validate([
                'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);
        
        $getname=request('sname');
        $getdesc=request('sdesc');
        $getrate=request('srate');
        $getimage=$request->file('simage'); 
        $name=$getimage->getClientOriginalName();
        $getimage->move(public_path('assets/service_imgages'), $name); 
        //$getstdate=request('start_date'); 
       // $getenddate=request('end_date'); 
        $getsttime=request('start_time'); 
        $getendtime=request('end_time'); 
        $getduration=request('duration'); 

        $service = AddServicesModel::find($id);

        $service->sname=$getname;
        $service->sdesc=$getdesc;
        $service->srate=$getrate;
        $service->simage=$name;
       // $service->start_date=$getstdate;
       // $service->end_date=$getenddate;
        $service->start_time=$getsttime;
        $service->end_time=$getendtime;
        $service->duration=$getduration;
        $service->save();
    }
        return redirect('/admin/viewservices');
           
     
    }
  
}
