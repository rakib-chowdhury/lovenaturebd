<?php

namespace App\Http\Controllers;


use App\model\Country;
use App\model\Hot_deal;
use App\model\Hot_deal_bn;
use App\model\Hot_deal_type;
use App\model\Hot_deal_images;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Request;
use DB;

class Hot_deals extends Controller
{
    public function show()
    {
        $data['Country'] = Country::all();
        $data['Hot_deal_type'] = Hot_deal_type::all();
        $data['hot_deals'] = Hot_deal::with('hasType')->get();
        //echo '<pre>';print_r($data);die();
        return view('vantage.pages.admin.hot_deals.show',$data);
    }
    public function add(){
        $data['country'] = Country::all();
        $data['package_type'] = Hot_deal_type::all();
        return view('vantage.pages.admin.hot_deals.add',$data);
    }
    public function type_add(){
        return view('vantage.pages.admin.hot_deals.type_add');
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
            $p = new Hot_deal_type();
            $p->package_type_name = $request->input('package_type_name');
            $p->package_type_name_bn = $request->input('package_type_name_bn');
            $p->created_at = date('Y-m-d');
            //echo '<pre>';print_r($p);die();
            $p->save();

            return redirect('hot_deals/add');
        }
    }
    public function add_post(Request $request){
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'title_bn' => 'required',
            'country_name' => 'required',
            'package_code' => 'required',
            'package_type_name' => 'required',
            'package_type_name_bn' => 'required',
            'city_name' => 'required',
            'city_name_bn' => 'required',
            'package_name' => 'required',
            'package_name_bn' => 'required',
            'hot_deal_price' => 'required',
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
            return redirect('hot_deals/add')
                ->withInput($request->all())
                ->withErrors($validator->errors());
        } else {
            if($request->input('discount') == null)
            {
                $dis = 0;
            }
            $p = new Hot_deal();
            $p->title = $request->input('title');
            $p->country_id = $request->input('country_name');
            $p->package_code = $request->input('package_code');
            $p->package_type_id = $request->input('package_type_name');
            $p->city_name = $request->input('city_name');
            $p->package_name = $request->input('package_name');
            $p->hot_deals_price = $request->input('hot_deal_price');
            $p->discount = $dis;
            $p->image = 'no_img.png';
            $p->package_description = $request->input('package_description');
            $p->category = $request->input('category');
            $p->tour_details = $request->input('tour_details');
            $p->important_notes = $request->input('important_notes');
            $p->terms_conditions = $request->input('terms_conditions');
            $p->status = '1';
            $p->created_at = date('Y-m-d');
            //echo '<pre>';print_r($p);die();
            $p->save();

            $q = new Hot_deal_bn();
            $q->title = $request->input('title_bn');
            $q->country_id = $request->input('country_name');
            $q->package_type_id = $request->input('package_type_name_bn');
            $q->package_code = $request->input('package_code');
            $q->city_name = $request->input('city_name_bn');
            $q->package_name = $request->input('package_name_bn');
            $q->hot_deals_price = $request->input('hot_deal_price');
            $q->discount = $dis;
            $q->image = 'no_img.png';
            $q->package_description = $request->input('package_description_bn');
            $q->category = $request->input('category_bn');
            $q->tour_details = $request->input('tour_details_bn');
            $q->important_notes = $request->input('important_notes_bn');
            $q->terms_conditions = $request->input('terms_conditions_bn');
            $q->status = '1';
            $q->created_at = date('Y-m-d');
           // echo '<pre>';print_r($q);die();
            $q->save();

            $m = new Hot_deal_images();
            $m->package_code = $request->input('package_code');
            $m->image = 'no_img.png';
            $m->status = '1';
            $m->save();

            $imageName = 'hot_deal_' . $m->id . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images/hot_deals/'), $imageName);
            Hot_deal_images::where('id', $p->id)->update(['image' => $imageName]);
            Hot_deal_images::where('id', $q->id)->update(['image' => $imageName]);
            Hot_deal_images::where('id', $m->id)->update(['image' => $imageName]);
            return redirect('hot_deals/show');
        }
    }   
    public function delete($id)
    {
        DB::table('hot_deals')->where('id', '=', $id)->delete();
        DB::table('hot_deals_images')->where('id', '=', $id)->delete();
        return redirect('hot_deals/show');
    }
    public function edit($id){
        $data['country'] = Country::all();
        $data['hot_deals'] = Hot_deal::all();
        $data['hot_deals_bn'] = Hot_deal_bn::all();
        $data['hot_deal_type'] = Hot_deal_type::all();
        $data['hot_deals'] = Hot_deal::where('id',$id)->with('hasImage')->get();
//        echo '<pre>';dd($data['hot_deals_bn']);die();
        $data['hot_deal_image'] = Hot_deal_images::all();
        return view('vantage.pages.admin.hot_deals.edit',$data);
    }
    public function edit_post(Request $request){
        $id=$request->input('id');
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'title_bn' => 'required',
            'country_name' => 'required',
            'package_code' => 'required',
            'package_type_name' => 'required',
            'package_type_name_bn' => 'required',
            'city_name' => 'required',
            'city_name_bn' => 'required',
            'package_name' => 'required',
            'package_name_bn' => 'required',
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
            return redirect('hot_deals)/edit/'.$id)
                ->withInput($request->all())
                ->withErrors($validator->errors());
        } else {
            $p['title'] = $request->input('title');
            $p['country_id'] = $request->input('country_name');
            $p['package_code'] = $request->input('package_code');
            $p['package_type_id'] = $request->input('package_type_name');
            $p['city_name'] = $request->input('city_name');
            $p['package_name'] = $request->input('package_name');
            $p['hot_deals_price'] = $request->input('hot_deals_price');
            $p['discount'] = $request->input('discount');
            $p['package_description'] = $request->input('package_description');
            $p['category'] = $request->input('category');
            $p['tour_details'] = $request->input('tour_details');
            $p['important_notes'] = $request->input('important_notes');
            $p['terms_conditions'] = $request->input('terms_conditions');
            $p['status'] = '1';

            Hot_deal::where('id',$id)->update($p);

            $q['title'] = $request->input('title_bn');
            $q['country_id'] = $request->input('country_name');
            $q['package_code'] = $request->input('package_code');
            $p['package_type_id'] = $request->input('package_type_name_bn');
            $q['city_name'] = $request->input('city_name_bn');
            $q['package_name'] = $request->input('package_name_bn');
            $q['hot_deals_price'] = $request->input('hot_deals_price');
            $q['discount'] = $request->input('discount');
            $q['package_description'] = $request->input('package_description_bn');
            $q['category'] = $request->input('category_bn');
            $q['tour_details'] = $request->input('tour_details_bn');
            $q['important_notes'] = $request->input('important_notes_bn');
            $q['terms_conditions'] = $request->input('terms_conditions_bn');
            $q['status'] = '1';

            Hot_deal_bn::where('id',$id)->update($q);

            return redirect('hot_deals/show');
        }
    }
    public function picEdit(Request $request){
        $id=$request->input('id');
        $imageName = 'package_' . $id . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('images/hot_deals/'), $imageName);
        Hot_deal_images::where('id', $id)->update(['image' => $imageName]);
        return redirect('hot_deals/show');

    }
}
