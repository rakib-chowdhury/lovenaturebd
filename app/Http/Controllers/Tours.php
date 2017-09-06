<?php

namespace App\Http\Controllers;


use App\model\Country;
use App\model\Contact_info;
use App\model\Company_info;
use App\model\Package_images;
use App\model\Tour;
use App\model\Package_type;
use App\model\Tour_bn;
use App\model\Tour_images;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

class Tours extends Controller
{
    public function show()
    {
        $data['Country'] = Country::all();
        $data['tour_info'] = Tour::all();
        return view('vantage.pages.admin.tour.show',$data);
    }
    public function add(){
        $data['country'] = Country::all();
        return view('vantage.pages.admin.tour.add',$data);
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
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'title_bn' => 'required',
            'country_name' => 'required',
            'city_name' => 'required',
            'city_name_bn' => 'required',
            'package_name' => 'required',
            'package_name_bn' => 'required',
            'package_code' => 'required',
            'package_description' => 'required',
            'package_description_bn' => 'required',
            'tour_details' => 'required',
            'tour_details_bn' => 'required',
            'important_notes' => 'required',
            'important_notes_bn' => 'required',
            'terms_conditions' => 'required',
            'terms_conditions_bn' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect('tour/add')
                ->withInput($request->all())
                ->withErrors($validator->errors());
        } else {
            $p = new Tour();
            $p->title = $request->input('title');
            $p->country_id = $request->input('country_name');
            $p->city_name = $request->input('city_name');
            $p->package_name = $request->input('package_name');
            $p->package_code = $request->input('package_code');
            $p->package_description = $request->input('package_description');
            $p->tour_details = $request->input('tour_details');
            $p->important_notes = $request->input('important_notes');
            $p->terms_conditions = $request->input('terms_conditions');
            $p->status = '1';
            $p->created_at = date('Y-m-d');
            //echo '<pre>';print_r($p);die();
            $p->save();

            $q = new Tour_bn();
            $q->title = $request->input('title_bn');
            $q->country_id = $request->input('country_name');
            $q->city_name = $request->input('city_name_bn');
            $q->package_name = $request->input('package_name_bn');
            $q->package_code = $request->input('package_code');
            $q->package_description = $request->input('package_description_bn');
            $q->tour_details = $request->input('tour_details_bn');
            $q->important_notes = $request->input('important_notes_bn');
            $q->terms_conditions = $request->input('terms_conditions_bn');
            $q->status = '1';
            $q->created_at = date('Y-m-d');
            $q->save();

            $m = new Tour_images();
            $m->package_code = $request->input('package_code');
            $m->image = 'no_img.png';
            $m->status = '1';
            $m->save();

            $imageName = 'tour_' . $m->id . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images/tour/'), $imageName);
            Tour_images::where('id', $m->id)->update(['image' => $imageName]);
            return redirect('tours_attractions/show');
        }
    }   
    public function delete($id)
    {
        $tmpEmp = Tour_images::where('package_code', $id)->first();
        //echo '<pre>';print_r($tmpEmp);die();
            if ($tmpEmp->image != 'no_img.png') {
                unlink(public_path('images/tour/'. $tmpEmp->image));
            }

        DB::table('tour_images')->where('package_code', '=', $id)->delete();
        DB::table('tours_info_bn')->where('package_code', '=', $id)->delete();
        DB::table('tours_info')->where('package_code', '=', $id)->delete();
        return redirect('tours_attractions/show');
    }
    public function edit($id){
        $data['country'] = Country::all();
        $data['tour_info'] = Tour::all();
        $data['tour_info_bn'] = Tour_bn::all();
        $data['packages'] = Tour::where('id',$id)->with('hasImage')->get();
        $data['tour_image'] = Tour_images::all();
        return view('vantage.pages.admin.tour.edit',$data);
    }
    public function edit_post(Request $request){
        $id=$request->input('id');
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'title_bn' => 'required',
            'country_name' => 'required',
            'city_name' => 'required',
            'city_name_bn' => 'required',
            'package_name' => 'required',
            'package_name_bn' => 'required',
            'package_code' => 'required',
            'package_description' => 'required',
            'package_description_bn' => 'required',
            'tour_details' => 'required',
            'tour_details_bn' => 'required',
            'important_notes' => 'required',
            'important_notes_bn' => 'required',
            'terms_conditions' => 'required',
            'terms_conditions_bn' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect('tour/edit/'.$id)
                ->withInput($request->all())
                ->withErrors($validator->errors());
        } else {
            $p['title'] = $request->input('title');
            $p['country_id'] = $request->input('country_name');
            $p['city_name'] = $request->input('city_name');
            $p['package_name'] = $request->input('package_name');
            $p['package_code'] = $request->input('package_code');
            $p['package_description'] = $request->input('package_description');
            $p['tour_details'] = $request->input('tour_details');
            $p['important_notes'] = $request->input('important_notes');
            $p['terms_conditions'] = $request->input('terms_conditions');
            $p['status'] = '1';

            Tour::where('id',$id)->update($p);

            $q['title'] = $request->input('title_bn');
            $q['country_id'] = $request->input('country_name');
            $q['city_name'] = $request->input('city_name_bn');
            $q['package_name'] = $request->input('package_name_bn');
            $q['package_code'] = $request->input('package_code');
            $q['package_description'] = $request->input('package_description_bn');
            $q['tour_details'] = $request->input('tour_details_bn');
            $q['important_notes'] = $request->input('important_notes_bn');
            $q['terms_conditions'] = $request->input('terms_conditions_bn');
            $q['status'] = '1';

            Tour_bn::where('id',$id)->update($q);

            return redirect('tours_attractions/show');
        }
    }
    public function picEdit(Request $request){
        $id=$request->input('id');

        $imageName = 'tour_' . $id . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('images/tour/'), $imageName);
        Tour_images::where('id', $id)->update(['image' => $imageName]);
        return redirect('tours_attractions/show');

    }
}
