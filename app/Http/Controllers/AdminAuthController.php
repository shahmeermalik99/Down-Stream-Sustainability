<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\VirtualEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminAuthController extends Controller
{
    //
    public function index()
    {
        return view('admin.login');
    }
    public function admin_login(Request $request)
    {

        // validate data
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        // login code
        $admin = Admin::where('email', $request->email)->first();
        if ($admin) {
            if (Hash::check($request->password, $admin->password)) {
                return view('admin.home');
            } else {
                return redirect()->back()->withError('Login details are not valid');
            }
        } else {
            return redirect()->back()->withError('Login details are not valid');
        }
    }

    public function admin_logout()
    {
        \Session::flush();
        Auth::logout();
        return redirect('admin/login');
    }

    public function home()
    {
        return view('admin.home');
    }

    public function view_email()
    {
        $virtual_email =  DB::table('virtual_emails')->paginate(10);
        return view('admin.email_list', compact('virtual_email'));
    }



    public function logged_user()
    {
        return view('admin.logged_user');
    }
    public function registered_user()
    {
        return view('admin.registered_user');
    }
    public function crawlingChange()
    {
        return view('admin.crawlerChange');
    }
}
