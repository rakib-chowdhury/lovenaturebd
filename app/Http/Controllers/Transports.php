<?php

namespace App\Http\Controllers;


use App\model\Hotel;
use App\model\Country;
use App\model\Transport;
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

class Transports extends Controller
{
    public function show()
    {
        $data['country'] = Country::all();
        $data['hotel'] = Hotel::with('hasCountry')->get();
        $data['transport'] = Transport::all();
        //echo '<pre>';print_r($data);die();
        return view('vantage.pages.admin.transport.show', $data);
    }

    public function add()
    {
       // $data['company'] = Company::all();
        $data['country'] = Country::all();
        $data['hotel'] = Hotel::with('hasCountry')->get();
        return view('vantage.pages.admin.transport.add', $data);
    }

    public function add_post(Request $request){
        $validator = Validator::make($request->all(), [
            'country_name' => 'required',
            'start' => 'required',
            'start_bn' => 'required',
            'destination' => 'required',
            'destination_bn' => 'required',
            'transport_name' => 'required',
            'transport_name_bn' => 'required',
            'transport_category' => 'required',
            'transport_category_bn' => 'required',
            'transport_facility' => 'required',
            'transport_facility_bn' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect('transport/add')
                ->withInput($request->all())
                ->withErrors($validator->errors());
        } else {
            $p = new Transport();
            $p->country_id = $request->input('country_name');
            $p->start = $request->input('start');
            $p->start_bn = $request->input('start_bn');
            $p->destination = $request->input('destination');
            $p->destination_bn = $request->input('destination_bn');
            $p->transport_name= $request->input('transport_name');
            $p->transport_name_bn= $request->input('transport_name_bn');
            $p->transport_category = $request->input('transport_category');
            $p->transport_category_bn = $request->input('transport_category_bn');
            $p->transport_facility = $request->input('transport_facility');
            $p->transport_facility_bn = $request->input('transport_facility_bn');
            $p->vehicle_cost = $request->input('vehicle_cost');
            $p->status = '1';
            $p->created_at = date('Y-m-d');
            //echo '<pre>';dd($p);die();
            $p->save();

            return redirect('transport/show');
        }
    }

    public function delete($id)
    {
        DB::table('transport_info')->where('id', '=', $id)->delete();
        return redirect('transport/show');
    }

    public function edit($id)
    {
        $data['country'] = Country::all();
        $data['transport'] = Transport::with('hasCountry')->where('id', $id)->get();
        //echo '<pre>';print_r($data);die();
        return view('vantage.pages.admin.transport.edit', $data);
    }

    public function edit_post(Request $request){
        $id=$request->input('id');
        $isImg=$request->input('isImg');
            $validator = Validator::make($request->all(), [
                'country_name' => 'required',
                'start' => 'required',
                'start_bn' => 'required',
                'destination' => 'required',
                'destination_bn' => 'required',
                'transport_name' => 'required',
                'transport_name_bn' => 'required',
                'transport_category' => 'required',
                'transport_category_bn' => 'required',
                'transport_facility' => 'required',
                'transport_facility_bn' => 'required',
            ]);

        if ($validator->fails()) {
            return redirect('transport/add')
                ->withInput($request->all())
                ->withErrors($validator->errors());
        } else {
            $p['country_id'] = $request->input('country_name');
            $p['vehicle_cost'] = $request->input('vehicle_cost');
            $p['start'] = $request->input('start');
            $p['start_bn'] = $request->input('start_bn');
            $p['destination'] = $request->input('destination');
            $p['destination_bn'] = $request->input('destination_bn');
            $p['transport_name']= $request->input('transport_name');
            $p['transport_name_bn']= $request->input('transport_name_bn');
            $p['transport_category'] = $request->input('transport_category');
            $p['transport_category_bn'] = $request->input('transport_category_bn');
            $p['transport_facility'] = $request->input('transport_facility');
            $p['transport_facility_bn'] = $request->input('transport_facility_bn');
            //dd($p);die();
            Transport::where('id', $id)->update($p);

            return redirect('transport/show');
        }
    }
}
