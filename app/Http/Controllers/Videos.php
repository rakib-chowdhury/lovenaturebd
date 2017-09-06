<?php

namespace App\Http\Controllers;


use App\model\Country;
use App\model\Video;
use App\model\GalleryPic;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Image;

class Videos extends Controller
{
    public function show()
    {
        $data['video'] = Video::all();
        return view('vantage.pages.admin.video.lists', $data);
    }
    public function add()
    {
        return view('vantage.pages.admin.video.add');
    }

    public function add_post(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'name_bn' => 'required',
            'video' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect('video/add')
                ->withInput($request->all())
                ->withErrors($validator->errors());
        } else {
            $p = new Video();
            $p->name = $request->input('name');
            $p->name_bn = $request->input('name_bn');
            $p->video= $request->input('video');
            $p->status = '1';
            $p->created_at = date('Y-m-d');
            //echo '<pre>';dd($p);die();
            $p->save();

            return redirect('video/show');
        }
    }

    public function delete($id)
    {
        DB::table('video')->where('id', '=', $id)->delete();
        return redirect('video/show');
    }

}
