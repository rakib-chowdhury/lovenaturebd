<?php

namespace App\Http\Controllers;


use App\model\Contact_info;
use App\model\Company_info;
use App\model\Hotel;
use App\model\Transport;
use App\model\Hotel_bn;
use App\model\Country;
use App\model\ConditionTable;
use App\model\Hot_deal;
use App\model\Hot_deal_bn;
use App\model\Team;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

class Hot_deals_home extends Controller
{
    public function show($id)
    {
        if ($id == 'most_economy') {
            $data['name'] = 'Most Economy Package';
            $data['name_bn'] = 'মোস্ট ইকোনমি';
            $data['country'] = Hot_deal::with('hasCountry')
                ->where('package_type_id', 1)
                ->get()
                ->groupBy('country_id');
        }elseif ($id == '12_months_installment') {
            $data['name'] = '12 Months Installment Package';
            $data['name_bn'] = '১২ মাসের কিস্তি';
            $data['country'] = Hot_deal::with('hasCountry')
                ->where('package_type_id', 2)
                ->get()
                ->groupBy('country_id');
        }elseif ($id == 'discount_offer') {
            $data['name'] = 'Discount Package';
            $data['name_bn'] = 'ডিসকাউন্ট অফার ';
            $data['country'] = Hot_deal::with('hasCountry')
                ->where('package_type_id', 3)
                ->get()
                ->groupBy('country_id');
        }elseif ($id == 'air_ticket_offer') {
            $data['name'] = 'Air Ticket Package';
            $data['name_bn'] = 'এয়ার টিকেট অফার';
            $data['country'] = Hot_deal::with('hasCountry')
                ->where('package_type_id', 4)
                ->get()
                ->groupBy('country_id');
        }
        $data['contact_info'] = Contact_info::all();
        $data['company_info'] = Company_info::all();
        return view('vantage.pages.home.hot_deals', $data);
    }

    public function show_package_list($country_id)
    {
        $data['company_info'] = Company_info::all();
        $data['country'] = Hot_deal::with('hasCountry')->get()->groupBy('country_id');
        $data['contact_info'] = Contact_info::all();
        $data['package'] = Hot_deal::with('hasCountry')->where('country_id', $country_id)->get();
        $data['package_bn'] = Hot_deal_bn::with('hasCountry')->where('country_id', $country_id)->get();
        //echo '<pre>';dd($data['country']);die();
        $data['contact_info'] = Contact_info::all();
        return view('vantage.pages.home.view_hot_deals', $data);
    }

    public function show_package_details($id)
    {
        $data['company_info'] = Company_info::all();
        $data['country'] = Country::all();
        $data['contact_info'] = Contact_info::all();
        $data['package'] = Hot_deal::with('hasCountry')->where('id', $id)->get();
        $data['package_bn'] = Hot_deal_bn::with('hasCountry')->where('id', $id)->get();
        //echo '<pre>';dd($data['package']);die();
        $data['contact_info'] = Contact_info::all();
        return view('vantage.pages.home.details_hot_deals', $data);
    }
}
