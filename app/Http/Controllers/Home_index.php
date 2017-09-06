<?php

namespace App\Http\Controllers;

use App\model\About;
use App\model\Video;
use App\model\Contact_info;
use App\model\Company_info;
use App\model\Gallery_sub_cat;
use App\model\All_pics;
use App\model\Company;
use App\model\Address;
use App\model\GalleryCat;
use App\model\Package;
use App\model\Package_bn;
use Symfony\Component\HttpFoundation\Request;
use Mail;
use Session;

class Home_index extends Controller
{
    public function home()
    {
        if(session()->has('language')){

        }else{
            session::put('language', 'bn');
        }
        $data['video'] = Video::all();
        $data['package'] = Package::with('hasImage')->where('status', 1)->get();
        $data['package_bn'] = Package_bn::with('hasImage')->where('status', 1)->get();
        //echo '<pre>';dd($data['package']);die();
        $data['contact_info'] = Contact_info::all();
        $data['company_info'] = Company_info::all();
        return view('vantage.pages.home.index', $data);
    }
    public function set_lang(Request $r)
    {
        $v=$r->input('val');
        
        session::put('language', $v);

        return session('language');
    }
    public function show_about()
    {
        $data['about_us'] = About::all();
        $data['contact_info'] = Contact_info::all();
        $data['company_info'] = Company_info::all();
        return view('vantage.pages.home.about_us', $data);
    }
    public function search(Request $r)
    {
        $data['contact_info'] = Contact_info::all();
        $data['company_info'] = Company_info::all();
        $data['showDiv']=0;
        if($r->input('submit')==1){
            $data['package'] = Package::with('hasImage')->where('package_code',$r->input('p_code'))->first();
            $data['package_bn'] = Package_bn::with('hasImage')->where('package_code',$r->input('p_code'))->first(); //dd($data);
            $data['showDiv']=1;
        }
        //echo '<pre>';dd($data['package']);die();
        return view('vantage.pages.home.search', $data);
    }



}
