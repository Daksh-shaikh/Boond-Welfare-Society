<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\announcement;
use Illuminate\Support\Facades\Validator;

class AnnouncementController extends Controller
{
    public function index()
    {
        $noticed=announcement::all();
        return view('frontend.Announcement', ['noticed' => $noticed]);
    }


    public function store(Request $request)
    {

         // dd($request->all());
         $data=$request->validate([
            'notice'=>'required',
            'details'=>'required'
        ]);

        $newAmount = announcement::create($data);

        return redirect(route('user.Announcement'));
    }

    public function destroy($id){
        announcement::find($id)->delete();

         return redirect(route('user.Announcement'))->with('success', 'Notice Deleted Successfully');

     }
     public function edit($id)
     {
         $noticededit = announcement::find($id);
         $noticed=announcement::all();
         return view('frontend.AnnouncementEdit',['noticededit'=>$noticededit,'noticed'=>$noticed]);
     }
     public function update(Request $request)
     {
         $validator = Validator::make(
             $request->all(),
             [
                 'notice' => ['required'],
                 'details' => ['required'],
         ],
          [
                 'notice.required' => 'Please Enter notice.',
                 'details.required' => 'Please Enter details.'
             ]);
             if ($validator->fails()) {
                 $errors = '';
                 $messages = $validator->messages();
                 foreach ($messages->all() as $message) {
                     $errors .= $message . "<br>";
                 }
                 return back()->with(['error'=>$errors]);
             }
             announcement::where('id',$request->id)->update([
                'notice'=>$request->notice,
                'details'=>$request->details,
                ]
            );

       return redirect()->route('user.Announcement')->with(['success'=>true,'message'=>'Successfully Updated !']);
     }

}
