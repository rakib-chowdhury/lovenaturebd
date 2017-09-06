<?php

namespace App\Http\Controllers;


use App\model\Company_info;
use App\model\Contact_info;
use App\model\Hotel;
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

class Transport_booking extends Controller
{
    public function show()
    {
        $data['contact_info'] = Contact_info::all();
        $data['company_info'] = Company_info::all();
        $data['country'] = Country::all();
        $data['hotel'] = Hotel::with('hasCountry')->get();
        $data['transport'] = Transport::all();
        //echo '<pre>';print_r($data);die();
        return view('vantage.pages.home.transport', $data);
    }
}
