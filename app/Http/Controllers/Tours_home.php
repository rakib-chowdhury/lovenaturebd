<?php

namespace App\Http\Controllers;


use App\model\Company_info;
use App\model\Contact_info;
use App\model\Hotel;
use App\model\Tour;
use App\model\Tour_bn;
use App\model\Transport;
use App\model\Hotel_bn;
use App\model\Country;
use App\model\ConditionTable;
use App\model\Package;
use App\model\Team;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

class Tours_home extends Controller
{
    public function show()
    {
//        $data['country'] = DB::table('tours_info')
//            ->join('country_flag', 'country_flag.id', '=', 'tours_info.country_id')
//            ->select(array('*','tours_info.country_id AS value_id'))
//            ->distinct()
//            ->where('status', '=', 1)
//            ->get(array('tours_info.country_id'));
        //echo '<pre>';dd($data['country']);die();
        $data['country'] = Tour::with('hasCountry')->get()->groupBy('country_id');
        //dd($data['country']);die();
        $data['contact_info'] = Contact_info::all();
        $data['company_info'] = Company_info::all();
        return view('vantage.pages.home.tours_attractions', $data);
    }
    public function show_list($id)
    {
        $data['country'] = Tour::with('hasCountry')->get()->groupBy('country_id');
        $data['contact_info'] = Contact_info::all();
        $data['company_info'] = Company_info::all();
        $data['tour'] = Tour::with('hasCountry')->with('hasImage')->where('country_id',$id)->get();
        $data['tour_bn'] = Tour_bn::with('hasCountry')->with('hasImage')->where('country_id',$id)->get();
        //dd($data['tour']);die();
        return view('vantage.pages.home.view_tours', $data);
    }
    public function show_details($id)
    {
        $data['country'] = Tour::with('hasCountry')->get()->groupBy('country_id');
        $data['contact_info'] = Contact_info::all();
        $data['company_info'] = Company_info::all();
        $data['tour'] = Tour::with('hasCountry')->with('hasImage')->where('id',$id)->get();
        $data['tour_bn'] = Tour_bn::with('hasCountry')->with('hasImage')->where('id',$id)->get();
        //dd($data['tour']);die();
        return view('vantage.pages.home.details_tours_attractions', $data);
    }
}
