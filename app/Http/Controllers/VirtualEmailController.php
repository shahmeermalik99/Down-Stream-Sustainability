<?php

namespace App\Http\Controllers;

use App\Models\VirtualEmail;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class VirtualEmailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // echo $request->email;
        $request->validate([
            'email' => 'required'
        ]);   
        
       $data = VirtualEmail::where('email',$request->email)->first();  
        if($data){
           return response()->json(205);
        }
        if(!empty($request->email))
        {
            $email = new VirtualEmail();
            $email->email = $request->email;
            $email->save();
            if($email)
            {
               return response()->json(200); 
            }   
        } 
        else
        {
            return response()->json(404);  
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    
    
}
