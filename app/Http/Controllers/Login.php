<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\Logins;
use App\model\Contact_info;
use App\model\Company_info;
use Session;

use App\Http\Requests;

class Login extends Controller
{
    public function show()
    {
        return view('vantage.pages.admin.lovenature_login');
    }

    public function login_check(Request $r)
    {
        $user_name = $r->input('user_name');
        $password = $r->input('password');
        $data['users'] = Logins::where('user_name', $user_name)
            ->where('password', $password)
            ->first();
        if ($data['users'] != null) {
            return redirect('home/dashboard');
        } else {
            return redirect('login')->with('error', 'Incorrect Email/Password Combination');
        }

    }

    public function change_password()
    {
        return view('vantage.pages.admin.password.change_pass');
    }

    public function update_password(Request $r)
    {
        $current_password = $r->input('current_password');
        $new_password = $r->input('new_password');
        $confirm_password = $r->input('confirm_password');
        if($new_password == $confirm_password)
        {
            $tmp = Logins::where('id', 1)->first();
            if ($tmp->password == $current_password) {
                Logins::where('id', 1)->update(['password' => $new_password]);
                return redirect('hotel_booking');
            } else {
                return redirect('login')->with('error', 'Current Password Does Not Match');
            }
        }
        else
        {
            echo 'New Password/Confirm Password Does Not Match';
        }
    }
}
