<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;


class HomeController extends Controller
{
    public function index()
    {

        $Home = Home::all();
        return view('frontend.home', ['Home' => $Home]);
        // return view('frontend.home');
    }

    public function postsubmit_home(Request $request)
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

            Home::create([

                'image' => $filename,
            ]);
        }

        return redirect()->route('user.home');
    }

    public function destroyHome($id){
        Home::find($id)->delete();

         return redirect(route('user.home'))->with('success', 'Image Deleted Successfully');

     }

     public function edit($id)
     {
         $Homeedit = Home::find($id);
         $Home=Home::all();
         return view('frontend.HomeEdit',['Homeedit'=>$Homeedit,'Home'=>$Home]);
     }

     public function update(Request $request)
     {
//         echo json_encode($request->all());
// exit();

             if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('images/'), $filename);
             }
             Home::where('id',$request->id)->update([
                'image'=>$filename,
                // 'details'=>$request->details,
                ]
            );

       return redirect()->route('user.home')->with(['success'=>true,'message'=>'Successfully Updated !']);
     }



}
