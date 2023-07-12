<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class SendEmailController extends Controller
{
    //
    public function send(Request $request, $id)
    {
        $user = Users::where('id', '=', $id)->first();
        if ($user) {
            $string = url('/scanGuestQrCode/' . $user->id);
            // add the string in the Google Chart API URL
            $google_chart_api_url = "https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=" . $string . "&choe=UTF-8";
            $user_update = Users::where('id', $user->id)->first();
            // dd($user_update);
            // ->update([
            //     $user_update->qr_link = $google_chart_api_url, 
            //     ]);
            // dd($user_update);
            $user_update->qr_link = $google_chart_api_url;
            $time = Carbon::now();
            $user_update->sent_email_time = $time->toTimeString();
            $user_update->email_status = '1';
            $user_update->save();
            
            if($user_update){
            
                // Send Mail to Customers
                $data = [
                    'name' => $user_update->name,
                    'email' => $user_update->email,
                    'qr_link' => $user_update->qr_link
                ];
                $user['to'] =  $user->email;
                Mail::send('mails.confirmation_mail', $data, function ($messages) use ($user) {
                    $messages->to($user['to'], 'email');
                    $messages->subject('Downstream Sustainability Day 2023 Confirmation Email', $user['to']);
                });
                }
                return redirect()->back();
                }
        
        return redirect()->back();
    }
}
