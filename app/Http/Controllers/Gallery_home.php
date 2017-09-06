<?php

namespace App\Http\Controllers;


use App\model\Company;
use App\model\Video;
use App\model\GalleryPic;
use App\model\Country;
use App\model\Package;
use App\model\Contact_info;
use App\model\Company_info;
use DB;

class Gallery_home extends Controller
{
    public function show()
    {
        $data['contact_info'] = Contact_info::all();
        $data['company_info'] = Company_info::all();
        $data['country'] = GalleryPic::with('hasCountry')->where('status', 1)->get()->groupBy('country_id');
        //echo '<pre>';dd($data['country']);die();
        return view('vantage.pages.home.gallery', $data);
    }
    public function details_show($id)
    {
        $data['contact_info'] = Contact_info::all();
        $data['company_info'] = Company_info::all();
        $data['country'] = Country::where('id',$id)->get();
        //echo '<pre>';dd($data['country']);die();
        $data['gallery_details'] = GalleryPic::with('hasCountry')->get()->where('country_id',$id);
        //echo '<pre>';dd($data['country']);die();
        return view('vantage.pages.home.gallery_details', $data);
    }

    public function show_package_list($country_id)
    {
        $data['contact_info'] = Contact_info::all();
        $data['country'] = Country::all();
        $data['package'] = Package::with('hasCountry')->where('country_id', $country_id)->get();
        // echo '<pre>';dd($data['package']);die();
        return view('vantage.pages.home.view_packages', $data);
    }

    public function show_package_details($id)
    {
        $data['contact_info'] = Contact_info::all();
        $data['country'] = Country::all();
        $data['package'] = Package::with('hasCountry')->where('id', $id)->get();
        //echo '<pre>';dd($data['package']);die();
        return view('vantage.pages.home.details_tours_attractions', $data);
    }
    public function show_video_gallery()
    {
        $data['contact_info'] = Contact_info::all();
        $data['company_info'] = Company_info::all();
        $data['video'] = Video::all();
        //echo '<pre>';dd($data['country']);die();
        return view('vantage.pages.home.video_gallery', $data);
    }
}
