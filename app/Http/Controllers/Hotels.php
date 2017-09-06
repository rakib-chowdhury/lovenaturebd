<?php

namespace App\Http\Controllers;


use App\model\Company;
use App\model\Hotel;
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

class Hotels extends Controller
{
    public function show()
    {
        $data['country'] = Country::all();
        $data['hotel'] = Hotel::with('hasCountry')->with('hasHotel')->get();
       // $data['hotel_bn'] = Hotel_bn::with('hasCountry')->get();
        //echo '<pre>';print_r($data);die();
        //dd($data['hotel']);die();
        return view('vantage.pages.admin.hotel.show', $data);
    }

    public function add()
    {
       // $data['company'] = Company::all();
        $data['country'] = Country::all();
        $data['hotel'] = Hotel::with('hasCountry')->get();
        $data['hotel_bn'] = Hotel_bn::with('hasCountry')->get();
        //dd($data['hotel_bn']);die();
        return view('vantage.pages.admin.hotel.add', $data);
    }

    public function add_post(Request $request){
        $validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:JPEG,PNG,JPG,GIF,jpeg,png,jpg,gif,svg|max:5120',
            'country_name' => 'required',
            'city_name' => 'required',
            'hotel_name' => 'required',
            'hotel_category' => 'required',
            'room_category' => 'required',
            'room_facility' => 'required',
            'room_price' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect('hotel/add')
                ->withInput($request->all())
                ->withErrors($validator->errors());
        } else {
            $p = new Hotel();
            $p->country_id = $request->input('country_name');
            $p->city_name = $request->input('city_name');
            $p->hotel_name= $request->input('hotel_name');
            $p->image = '';
            $p->hotel_category = $request->input('hotel_category');
            $p->room_category = $request->input('room_category');
            $p->room_facility = $request->input('room_facility');
            $p->room_price = $request->input('room_price');
            $p->status = '1';
            $p->created_at = date('Y-m-d');
            //echo '<pre>';dd($p);die();
            $p->save();

            $q = new Hotel_bn();
            $q->country_id = $request->input('country_name');
            $q->city_name = $request->input('city_name_bn');
            $q->hotel_name= $request->input('hotel_name_bn');
            $q->hotel_id = $p->id;
            $q->image = '';
            $q->hotel_category = $request->input('hotel_category_bn');
            $q->room_category = $request->input('room_category_bn');
            $q->room_facility = $request->input('room_facility_bn');
            $q->room_price = $request->input('room_price');
            $q->status = '1';
            $q->created_at = date('Y-m-d');
            //echo '<pre>';dd($p);die();
            $q->save();

            $imageName = 'hotel_' . $p->id . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images/hotel/'), $imageName);

            Hotel::where('id', $p->id)->update(['image' => $imageName]);
            Hotel_bn::where('id', $q->id)->update(['image' => $imageName]);

            return redirect('hotel/show');
        }
    }

    public function delete($id)
    {
        DB::table('hotel_info')->where('id', '=', $id)->delete();
        DB::table('hotel_info_bn')->where('id', '=', $id)->delete();
        return redirect('hotel/show');
    }

    public function edit($id)
    {
        $data['country'] = Country::all();
        $data['hotel'] = Hotel::with('hasCountry')->where('id', $id)->get();
        $data['hotel_bn'] = Hotel_bn::with('hasCountry')->where('id',$id)->get();
        //dd($data['hotel_bn']);die();
        return view('vantage.pages.admin.hotel.edit', $data);
    }

    public function edit_post(Request $request){
        $id=$request->input('id');
        $isImg=$request->input('isImg');
        if($isImg==0){
            $validator = Validator::make($request->all(), [
                'country_name' => 'required',
                'hotel_name' => 'required',
                'city_name' => 'required',
                'hotel_category' => 'required',
                'room_category' => 'required',
                'room_facility' => 'required',
                'room_price' => 'required',
            ]);
        }else{
            $validator = Validator::make($request->all(), [
                'image' => 'required|image|mimes:JPEG,PNG,JPG,GIF,jpeg,png,jpg,gif,svg|max:5120',
                'country_name' => 'required',
                'city_name' => 'required',
                'hotel_name' => 'required',
                'hotel_category' => 'required',
                'room_category' => 'required',
                'room_facility' => 'required',
                'room_price' => 'required',
            ]);
        }

        if ($validator->fails()) {
            return redirect('hotel/add')
                ->withInput($request->all())
                ->withErrors($validator->errors());
        } else {
            $p['country_id'] = $request->input('country_name');
            $p['city_name'] = $request->input('city_name');
            $p['hotel_name']= $request->input('hotel_name');
            $p['hotel_category'] = $request->input('hotel_category');
            $p['room_category'] = $request->input('room_category');
            $p['room_facility'] = $request->input('room_facility');
            $p['room_price'] = $request->input('room_price');
            //dd($p);die();
            Hotel::where('id', $id)->update($p);

            if($isImg==1){
                $imageName = 'hotel_' . $id . '.' . $request->image->getClientOriginalExtension();
                $request->image->move(public_path('images/hotel/'), $imageName);
                Hotel::where('id', $id)->update(['image' => $imageName]);
                Hotel_bn::where('id', $id)->update(['image' => $imageName]);
            }
            return redirect('hotel/show');
        }
    }
}
