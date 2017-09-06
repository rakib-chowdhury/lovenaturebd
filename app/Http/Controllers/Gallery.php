<?php

namespace App\Http\Controllers;


use App\model\Country;
use App\model\GalleryPic;
use Symfony\Component\HttpFoundation\Request;
use DB;
use Image;

class Gallery extends Controller
{
    public function show()
    {
        $data['country'] = Country::all();
        $data['gallery_pic'] = GalleryPic::all();
//        echo '<pre>';print_r($data['gallery_pic']);die();
        return view('vantage.pages.admin.gallery.show', $data);
    }
    public function add()
    {
        $data['country'] = Country::all();
        $data['gallery_pic'] = GalleryPic::with('hasCountry')->get();
//        echo '<pre>';print_r($data['gallery_pic']);die();
        return view('vantage.pages.admin.gallery.add', $data);
    }

    public function add_post(Request $request)
    {
        $p = new GalleryPic();
        $p->country_id = $request->input('country_name');
        $p->caption = $request->input('caption');
        $p->caption_bn = $request->input('caption_bn');
        $p->image = 'no_img.png';
        $p->status = '1';
        $p->created_at = date('Y-m-d');
       // echo '<pre>';print_r($p);die();
        $p->save();

        $imageName = 'gallery_' . $p->id . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('images/gallery/'), $imageName);
        GalleryPic::where('id', $p->id)->update(['image' => $imageName]);

        return redirect('gallery/show');
    }

    public function delete($id)
    {
        $tmpEmp = GalleryPic::where('id', $id)->first();
        //echo '<pre>';print_r($tmpEmp);die();
        if ($tmpEmp->image != 'no_img.png') {
            unlink(public_path('images/gallery/'. $tmpEmp->image));
        }
        DB::table('gallery')->where('id', '=', $id)->delete();
        return redirect('gallery/show');
    }

    public function edit_post(Request $request)
    {
        //echo '<pre>'; print_r($request->all()); die();
        $id = $request->input('id');
        //$p['cat_id'] = $request->input('cat_id');

        $imageName = 'gallery_'. $id . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('images/gallery/'), $imageName);
        
        GalleryPic::where('id', $id)->update(['image' => $imageName]);

        return redirect('gallery/show');
    }
    
    
}
