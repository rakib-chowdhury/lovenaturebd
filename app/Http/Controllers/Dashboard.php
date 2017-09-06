<?php

namespace App\Http\Controllers;


use App\model\Company_info;
use App\model\Contact_info;
use App\model\Hot_deal;
use App\model\Hotel;
use App\model\Tour;
use App\model\Video;
use App\model\Transport;
use App\model\Hotel_bn;
use App\model\Country;
use App\model\Package;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

class Dashboard extends Controller
{
    public function show()
    {
        $data['country'] = DB::table('tours_info')
            ->join('country_flag', 'country_flag.id', '=', 'tours_info.country_id')
            ->select(array('*','tours_info.country_id AS value_id'))
            ->distinct()
            ->where('status', '=', 1)
            ->get(array('tours_info.country_id'));
        //echo '<pre>';dd($data['country']);die();
        $data['package_info'] = Package::with('hasHotel.hasHotel')->with('hasImage')->get();
        //dd($data['package_info']);
        $data['hotel'] = Hotel::all();
        $data['transport'] = Transport::all();
        $data['tour'] = Tour::all();
        $data['hot_deal'] = Hot_deal::all();
        $data['video'] = Video::all();
        $data['contact_info'] = Contact_info::all();
        $data['company_info'] = Company_info::all();
        return view('vantage.pages.admin.dashboard.show', $data);
    }
}
