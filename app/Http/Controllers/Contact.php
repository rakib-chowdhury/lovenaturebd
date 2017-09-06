<?php

namespace App\Http\Controllers;

use App\model\Contact_info;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Request;
use DB;
use Mail;
use App\Mail\Send_mail;

class Contact extends Controller
{
	public function contact_info_edit(){
		$data['contact_info'] = Contact_info::all();
        return view('vantage.pages.admin.contact.contact', $data);
	}
	public function contact_info_edit_post(Request $request){
		$id=$request->input('id');
        $validator = Validator::make($request->all(), [            
            'address' => 'required',
            'address_bn' => 'required',
            'package_info' => 'required',
            'package_info_bn' => 'required',
            'air_ticket_info' => 'required',
            'air_ticket_info_bn' => 'required',
            'email' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect('contact/edit/'.$id)
                ->withInput($request->all())
                ->withErrors($validator->errors());
        } else {            
            $p['address'] = $request->input('address');
            $p['address_bn'] = $request->input('address_bn');
            $p['package_info'] = $request->input('package_info');
            $p['package_info_bn'] = $request->input('package_info_bn');
            $p['air_ticket_info'] = $request->input('air_ticket_info');
            $p['air_ticket_info_bn'] = $request->input('air_ticket_info_bn');
            $p['email'] = $request->input('email');
            Contact_info::where('id',$id)->update($p);

            return redirect('contact/edit');
        }
	}
    public function send_mail(Request $r)
    {
        $data['email'] = $r->input('email');
        $data['name'] = $r->input('name');
        $data['phone'] = $r->input('phone');
        $data['messages'] = $r->input('message');
        //echo '<pre>'; print_r($data); die();

        Mail::to('support@lovenaturebd.com')->send(new Send_mail($data));
        return redirect('/')->with('success', 'Message has been send.');
    }
}
