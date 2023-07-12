<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Users;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
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
        
        // $email = Email::where('email',$request->email)->first();
        //     if($email){
        //       $useremail = DB::table('users')->select('email')->where('email','=',$request->email)->first();
        //         if($useremail){
        //             return response()->json([
        //                 'message' => 'already',
        //             ]);
        //         }else{
        //             $user = new User();
        //             $user->name = $request->name;
        //             $user->email = $request->email;
        //             // $user->phone_number = $request->phone_number;
        //             $user->dropdown_menu = $request->dropdown_menu;
        //             $user->activity = $request->activity;
        //             $user->dinner = $request->dinner;
        //             $user->day_session = $request->day_session;
        //             $user->virtual_user_status = '0';
        //             $user->save();
        //             if($user){
        //                 return response()->json([
        //                 'status'=>200,
        //               ]);
        //             }
        //         }
        //         //   // Send Mail to Customers
        //         //   $data = [
        //         //     'name' => $user->name,
        //         // ];
        //         // $user['to'] = $user->email;
        //         // Mail::send('mails.registeration_mail', $data, function ($messages) use ($user) {
        //         //     $messages->to($user['to'], 'email');
        //         //     $messages->subject('Registeration Confirmed', $user['to']);
        //         // });
        //     }
        //     else{
        //         return response()->json([
        //             'status'=>400,
        //             'message' => 'Sorry your email is not eligible to register for this event. Please email admin@downstreamsustainability.com for further clarification.',
        //         ]);
        //     }
        
        $user = new Users;
        $user->name = $request->name;
        $user->email = $request->email;
        // $user->phone_number = $request->phone_number;
        $user->dropdown_menu = $request->dropdown_menu;
        $user->activity = $request->activity;
        $user->dinner = $request->dinner;
        $user->day_session = $request->day_session;
        $user->virtual_user_status = '0';
        $user->save();
        if ($user) {
            return response()->json([
                'status' => 200,
            ]);
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
    
    public function exhibition_hall()
    {
        return view('pages.exhibition_hall');
    }
    public function mainstage()
    {
        return view('pages.mainstage');
    }
    public function replay()
    {
        return view('pages.replay');
    }
    public function boot()
    {
        return view('pages.boot_10');
    }
    public function dbe()
    {
        return view('pages.dbe');
    }
    public function pcg()
    {
        return view('pages.pcg');
    }
    public function pdb()
    {
        return view('pages.pdb');
    }
    public function rmt()
    {
        return view('pages.rmt');
    }
    public function pdt()
    {
        return view('pages.pdt');
    }
    public function gpi()
    {
        return view('pages.gpi');
    }
    public function gsc()
    {
        return view('pages.gsc');
    }
    public function seed()
    {
        return view('pages.seed');
    }
    public function prpc()
    {
        return view('pages.prpc');
    }
    public function petrosains()
    {
        return view('pages.petrosains');
    }
    public function dbe_vcrg()
    {
        return view('pages.dbe_vcrg');
    }
    public function registerBigbash()
    {
        return view('register_bigbash');
    }
}
