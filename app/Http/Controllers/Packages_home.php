<?php

namespace App\Http\Controllers;


use App\model\Company_info;
use App\model\Contact_info;
use App\model\Country;
use App\model\Package;
use App\model\Package_bn;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

class Packages_home extends Controller
{
    public function show($id)
    {
        $data['name'] = '';
        $data['name_bn'] = '';
        $data['country'] = Country::all();
        if ($id == 'regular_package') {
            $data['name'] = 'Regular Package';
            $data['name_bn'] = 'নিয়মিত প্যাকেজ';
            $data['country'] = Package::with('hasCountry')
                ->where('package_type_id', 1)
                ->get()
                ->groupBy('country_id');
        }elseif ($id == 'group_package') {
            $data['name'] = 'Group Package';
            $data['name_bn'] = 'গ্রূপ প্যাকেজ';
            $data['country'] = Package::with('hasCountry')
                ->where('package_type_id', 2)
                ->get()
                ->groupBy('country_id');
        }elseif ($id == 'festival_package') {
            $data['name'] = 'Festival Package';
            $data['name_bn'] = 'উৎসব প্যাকেজ';
            $data['country'] = Package::with('hasCountry')
                ->where('package_type_id', 3)
                ->get()
                ->groupBy('country_id');
        }elseif ($id == 'online_booking') {
            $data['name'] = 'Online Booking Package';
            $data['name_bn'] = 'অনলাইন বুকিং';
            $data['country'] = Package::with('hasCountry')
                ->where('package_type_id', 4)
                ->get()
                ->groupBy('country_id');
        }
        $data['contact_info'] = Contact_info::all();
        $data['company_info'] = Company_info::all();
        //echo '<pre>';dd($data['country']);die();
        return view('vantage.pages.home.packages', $data);
    }

    public function show_package_list($country_id)
    {
        $data['contact_info'] = Contact_info::all();
        $data['company_info'] = Company_info::all();
        $data['country'] = Package::with('hasCountry')->get()->groupBy('country_id');
        //echo '<pre>';dd($country_id);die();
        $data['package'] = Package::with('hasCountry')->where('country_id', $country_id)->get();
        //$data['package'] = Package::with('hasCountry')->where('country_id', $country_id)->get();
        $data['package_bn'] = Package_bn::with('hasCountry')->where('country_id', $country_id)->get();
        //echo '<pre>';dd($data['package']);die();
        return view('vantage.pages.home.view_packages', $data);
    }

    public function show_package_details($id)
    {
        $data['contact_info'] = Contact_info::all();
        $data['company_info'] = Company_info::all();
        $data['country'] = Country::all();
        $data['package'] = Package::with('hasCountry')->with('hasType')->with('hasHotel.hasHotel')->with('hasImage')->where('id', $id)->get();
        $data['package_bn'] = Package_bn::with('hasCountry')->with('hasType')->with('hasHotel.hasHotelBn')->with('hasImage')->where('id', $id)->get();
        //echo '<pre>';dd($data['package']);die();
        return view('vantage.pages.home.package_details', $data);
    }
    public function online_booking()
    {
        $data['contact_info'] = Contact_info::all();
        $data['company_info'] = Company_info::all();
        return view('vantage.pages.home.online_booking_details', $data);
    }
}
