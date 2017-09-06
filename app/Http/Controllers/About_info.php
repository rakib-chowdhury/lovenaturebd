<?php

namespace App\Http\Controllers;

use App\model\About;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Request;
use DB;

class About_info extends Controller
{
	public function about_us_edit(){
		$data['about_us'] = About::all();
        $data['about_us_info'] = About::where('id',1)->get();
        //echo '<pre>';print_r($data);die();
        return view('vantage.pages.admin.about.about_us_edit', $data);
	}
    public function about_us_edit_post(Request $request){
        $id=$request->input('id');
        $isImg=$request->input('isImg');
        if($isImg==0){
            $validator = Validator::make($request->all(), [
                'caption' => 'required',
                'caption_bn' => 'required',
                'details' => 'required',
                'details_bn' => 'required',
            ]);
        }else{
            $validator = Validator::make($request->all(), [
                'image' => 'required|image|mimes:JPEG,PNG,JPG,GIF,jpeg,png,jpg,gif,svg|max:5120',
                'caption' => 'required',
                'caption_bn' => 'required',
                'details' => 'required',
                'details_bn' => 'required',
            ]);
        }

        if ($validator->fails()) {
            return redirect('hotel/show')
                ->withInput($request->all())
                ->withErrors($validator->errors());
        } else {
            $p['details']= $request->input('details');
            $p['details_bn'] = $request->input('details_bn');
            $p['caption'] = $request->input('caption');
            $p['caption_bn'] = $request->input('caption_bn');
            //echo '<pre>';print_r($p);die();
            About::where('id', $id)->update($p);

            if($isImg==1){
                $imageName = 'about_' . $id . '.' . $request->image->getClientOriginalExtension();
                $request->image->move(public_path('images/about/'), $imageName);
                About::where('id', $id)->update(['image' => $imageName]);
            }
            return redirect('about_us/edit');
        }
    }
}
