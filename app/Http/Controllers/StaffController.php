<?php

namespace App\Http\Controllers;

use App\Models\staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=staff::all();
        
        return view('index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,staff $atp)
    {
       
        $atp->create( [
            'name'=>$request->name,
            'subject'=>$request->subject,
            'email'=>$request->email,
            'date'=>$request->date,
            'image'=> $request->file('image')->store('mypic','public'),
            'status'=>$request->status,
        ]);
        
        return redirect('/sms')->with('msg','Created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(staff $staff,$id)
    {
        $data=$staff->find($id);
        return view('single',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(staff $staff,$id)
    {
        $data=$staff->find($id);
        return view('edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, staff $staff,$id)
    {
        $data=$staff->find($id);
       
   
     
        $data->update([
            'name'=>$request->name,
            'subject'=>$request->subject,
            'email'=>$request->email,
            'date'=>$request->date,
            'image'=> $request->file('image')->store('mypic','public'),
            'status'=>$request->status,
        ]
    );

        return redirect('/sms')->with('msg','updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(staff $staff,$id)
    {
        $data=$staff->find($id);
        $data->delete();
        return redirect('/sms')->with('msg','deleted successfully');
    }
}
