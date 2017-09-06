<?php

namespace App\Http\Controllers;

use App\model\Country;
use App\model\Package;
use App\model\Package_hotel;
use App\model\Hotel;
use App\model\Hotel_bn;
use App\model\Package_type;
use App\model\Package_bn;
use App\model\Package_images;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Request;
use DB;

class Packages extends Controller
{
    public function show()
    {
        $data['Country'] = Country::all();
        $data['package_info'] = Package::with('hasHotel.hasHotel')->with('hasImage')->get();
        //dd($data['package_info']);
        $data['hotel'] = Hotel::all();
        $data['hotel_bn'] = Hotel_bn::all();
        return view('vantage.pages.admin.package.show',$data);
    }
    public function add(){
        $data['country'] = Country::all();
        $data['hotel'] = Hotel::all();
        $data['hotel_bn'] = Hotel_bn::all();
        $data['package_type'] = Package_type::all();
        return view('vantage.pages.admin.package.add',$data);
    }
    public function type_add(){
        return view('vantage.pages.admin.package.type_add');
    }
    public function type_add_post(Request $request){
        $validator = Validator::make($request->all(), [
            'package_type_name' => 'required',
            'package_type_name_bn' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect('hot_deals/type_add')
                ->withInput($request->all())
                ->withErrors($validator->errors());
        } else {
            $p = new Package_type();
            $p->package_type_name = $request->input('package_type_name');
            $p->package_type_name_bn = $request->input('package_type_name_bn');
            $p->created_at = date('Y-m-d');
            //echo '<pre>';print_r($p);die();
            $p->save();

            return redirect('package/add');
        }
    }
    public function add_post(Request $request){
//        echo '<pre>';print_r($_FILES);
//        $tmpImg=$_FILES['image'];
//        print_r($tmpImg); die();
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'title_bn' => 'required',
            'country_name' => 'required',
            'package_type_name' => 'required',
            'city_name' => 'required',
            'city_name_bn' => 'required',
            'hotel_name' => 'required',
            'package_price' => 'required',
            'package_name' => 'required',
            'package_name_bn' => 'required',
            'package_code' => 'required',
            'package_description' => 'required',
            'package_description_bn' => 'required',
            'category' => 'required',
            'category_bn' => 'required',
            'tour_details' => 'required',
            'tour_details_bn' => 'required',
            'important_notes' => 'required',
            'important_notes_bn' => 'required',
            'terms_conditions' => 'required',
            'terms_conditions_bn' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect('package/add')
                ->withInput($request->all())
                ->withErrors($validator->errors());
        } else {
            $p = new Package();
            $p->title = $request->input('title');
            $p->country_id = $request->input('country_name');
            $p->package_type_id = $request->input('package_type_name');
            $p->city_name = $request->input('city_name');
            $p->package_price = $request->input('package_price');
            $p->discount = $request->input('discount');
//            $p->hotel_name = $request->input('hotel_name');
            $p->package_name = $request->input('package_name');
            $p->package_code = $request->input('package_code');
            $p->package_description = $request->input('package_description');
            $p->category = $request->input('category');
            $p->tour_details = $request->input('tour_details');
            $p->important_notes = $request->input('important_notes');
            $p->terms_conditions = $request->input('terms_conditions');
            $p->status = '0';
            $p->created_at = date('Y-m-d');
            //echo '<pre>';print_r($p);die();
            $p->save();

            $q = new Package_bn();
            $q->title = $request->input('title_bn');
            $q->country_id = $request->input('country_name');
            $q->package_type_id = $request->input('package_type_name_bn');
            $q->city_name = $request->input('city_name_bn');
//            $q->hotel_name = $request->input('hotel_name_bn');
            $q->package_price = $request->input('package_price');
            $q->discount = $request->input('discount');
            $q->package_name = $request->input('package_name_bn');
            $q->package_code = $request->input('package_code');
            $q->package_description = $request->input('package_description_bn');
            $q->category = $request->input('category_bn');
            $q->tour_details = $request->input('tour_details_bn');
            $q->important_notes = $request->input('important_notes_bn');
            $q->terms_conditions = $request->input('terms_conditions_bn');
            $q->status = '0';
            $q->created_at = date('Y-m-d');
            $q->save();
            
            $new_hotel = $request->input('hotel_name');
            //echo '<pre>';print_r($new_hotel);die();
            foreach ($new_hotel as $k=>$u)
            {
                $hotel_info = new Package_hotel();
                $hotel_info->package_code = $request->input('package_code');;
                $hotel_info->hotel_name = $new_hotel[$k];
                $hotel_info->status = '0';
                $hotel_info->created_at = date('Y-m-d');
                $hotel_info->save();
            }

            //$tmpImg=$_FILES['image'];
//            print_r($_FILES['image']['name']);
            foreach ($_FILES['image']['name'] as $k=>$row){
                if($_FILES['image']['error'][$k]== 0){
                    $m = new Package_images();
                    $m->package_code = $request->input('package_code');
                    $m->image = 'no_img.png';
                    $m->save();
                    $imageName = 'package_' . $m->id . '.' . $request->image[$k]->getClientOriginalExtension();
                    $request->image[$k]->move(public_path('images/package/'), $imageName);
                    Package_images::where('id', $m->id)->update(['image' => $imageName]);
                }
            }

            return redirect('package/show');
        }
    }   
    public function delete($id)
    {
        DB::table('packages')->where('id', '=', $id)->delete();
        DB::table('packages_bn')->where('id', '=', $id)->delete();
        DB::table('package_images')->where('id', '=', $id)->delete();
        return redirect('package/show');
    }
    public function edit($id){
        $data['country'] = Country::all();
        $data['hotel'] = Hotel::all();
        $data['hotel_bn'] = Hotel_bn::all();
        $data['package_info'] = Package::with('hasHotel')->get();


        $data['package_info_bn'] = Package_bn::with('hasHotel')->get();
        $data['packages'] = Package::where('id',$id)->with('hasImage')->get();
        $data['package_image'] = Package_images::all();
        return view('vantage.pages.admin.package.edit',$data);
    }
    public function edit_post(Request $request){
        //dd($request->all());
        $id=$request->input('id');
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'title_bn' => 'required',
            'country_name' => 'required',
            'city_name' => 'required',
            'city_name_bn' => 'required',
            'hotel_name' => 'required',
            'package_name' => 'required',
            'package_name_bn' => 'required',
            'package_code' => 'required',
            'package_description' => 'required',
            'package_description_bn' => 'required',
            'category' => 'required',
            'category_bn' => 'required',
            'tour_details' => 'required',
            'tour_details_bn' => 'required',
            'important_notes' => 'required',
            'important_notes_bn' => 'required',
            'terms_conditions' => 'required',
            'terms_conditions_bn' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect('package/edit/'.$id)
                ->withInput($request->all())
                ->withErrors($validator->errors());
        } else {
            $p['title'] = $request->input('title');
            $p['country_id'] = $request->input('country_name');
            $p['city_name'] = $request->input('city_name');
            $p['package_name'] = $request->input('package_name');
            $p['package_code'] = $request->input('package_code');
            $p['package_description'] = $request->input('package_description');
            $p['category'] = $request->input('category');
            $p['tour_details'] = $request->input('tour_details');
            $p['important_notes'] = $request->input('important_notes');
            $p['terms_conditions'] = $request->input('terms_conditions');
            $p['status'] = '1';
            //echo '<pre>';print_r($p);die();
            Package::where('id',$id)->update($p);

            $q['title'] = $request->input('title_bn');
            $q['country_id'] = $request->input('country_name');
            $q['city_name'] = $request->input('city_name_bn');
            $q['package_name'] = $request->input('package_name_bn');
            $q['package_code'] = $request->input('package_code');
            $q['package_description'] = $request->input('package_description_bn');
            $q['category'] = $request->input('category_bn');
            $q['tour_details'] = $request->input('tour_details_bn');
            $q['important_notes'] = $request->input('important_notes_bn');
            $q['terms_conditions'] = $request->input('terms_conditions_bn');
            $q['status'] = '1';
            //echo '<pre>';print_r($q);die();
            Package_bn::where('id',$id)->update($q);

            DB::table('package_hotel')->where('package_code', '=', $request->input('package_code'))->delete();

            $hotel_info_new = $request->input('hotel_name');

            foreach ($hotel_info_new as $k=>$u)
            {
                $hotel_info = new Package_hotel();
                $hotel_info->package_code = $request->input('package_code');
                $hotel_info->hotel_name = $hotel_info_new[$k];
                $hotel_info->status = '1';
                $hotel_info->created_at = date('Y-m-d');
                $hotel_info->save();
            }
            return redirect('package/show');
        }
    }
    public function status_change($id)
    {
        $tmpP = Package::where('id', $id)->get();
        $st = 1;
        if ($tmpP[0]->status == $st) {
            $st = 0;
        }
        Package::where('id', $id)->update(['status' => $st]);
        Package_bn::where('id', $id)->update(['status' => $st]);
        return redirect('package/show');
    }
    public function picEdit(Request $request){
        $id=$request->input('id');

        $imageName = 'package_' . $id . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('images/package/'), $imageName);
        Package_images::where('id', $id)->update(['image' => $imageName]);
        return redirect('package/show');

    }
}
