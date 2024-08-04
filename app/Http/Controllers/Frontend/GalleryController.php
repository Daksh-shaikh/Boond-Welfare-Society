<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
        $gallery = Gallery::all();
        return view('frontend.gallery', ['Gallery' => $gallery]);

        // return view('frontend.gallery');
    }

    public function postsubmit_gallery(Request $request)
    {
        // dd($request->all());

        // Handle file attachment if provided

        $file = null;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/'), $filename);
            // $store->image = $filename;


              // Create a new order using the SubmitOrder model

            Gallery::create([

                'image' => $filename,
            ]);
        }

        return redirect()->route('user.gallery');
    }

    public function edit($id)
    {
        // echo json_encode($request->all());
        // exit();


        $GalleryEdit=Gallery::find($id);
        $Gallery = Gallery::all();
        return view('frontend.GalleryEdit', ['GalleryEdit'=>$GalleryEdit, 'Gallery'=>$Gallery]);
    }

    public function update(Request $request)
    {
        // echo json_encode($request->all());
        // exit();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/'), $filename);
         }
        Gallery::where('id', $request->id)->update([
            'image'=>$filename,
        ]
    );
    return redirect()->route('user.gallery')->with(['success'=>true,'message'=>'Successfully Updated !']);

    }

    public function destroyGallery($id){
        Gallery::find($id)->delete();

         return redirect(route('user.gallery'))->with('success', 'Image Deleted Successfully');

     }


}
