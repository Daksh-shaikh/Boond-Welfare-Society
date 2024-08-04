<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Validator;


class ContactUsController extends Controller
{
    public function index()
    {
        $contact=Contact::all();

        return view('frontend.contactUs', ['contact'=>$contact]);

    }


    public function store(Request $request)
    {

           // dd($request->all());
           $data=$request->validate([
            'city'=>'required|regex:/^[\pL\s\-]+$/u|max:255|unique:users,name',
            'contactNo'=>'required|digits:10',
            'contactPerson'=>'required|regex:/^[\pL\s\-]+$/u|max:255|unique:users,name'
        ]);

        $newAmount = Contact::create($data);
        // $newAmount = donation::create([
        //     'add_amount'=>$request->amount
        // ]);

        return redirect(route('user.contactUs'));
    }


    public function destroy($id){
        Contact::find($id)->delete();

         return redirect(route('user.contactUs'))->with('success', 'Contact Deleted Successfully');

     }

     public function edit($id){
        $ContactEdit=Contact::find($id);
        $contact = Contact::all();
        return view('frontend.contactUsEdit', ['ContactEdit'=>$ContactEdit, 'contact'=>$contact]);
     }

     public function update(Request $request)
{
    // Validation rules
    $rules = [
        'city' => 'required|regex:/^[\pL\s\-]+$/u|max:255|unique:users,name',
        'contactNo' => 'required|numeric|digits:10',
        'contactPerson' => 'required|regex:/^[\pL\s\-]+$/u|max:255|unique:users,name',
    ];

    // Custom error messages
    $messages = [
        'contactNo.digits' => 'The contact number must be exactly 10 digits.',
        'contactNo.max' => 'The contact number must not exceed 10 digits.',
    ];

    // Validate the request
    $validator = Validator::make($request->all(), $rules, $messages);

    // Check for validation errors
    if ($validator->fails()) {
        return redirect()->route('user.contactUs') // Replace 'your.form.route' with the actual route name
            ->withErrors($validator)
            ->withInput();
    }

    Contact::where('id',$request->id)->update([
        'city'=>$request->city,
        'contactNo'=>$request->contactNo,
        'contactPerson'=>$request->contactPerson,
        ]
    );


    return redirect()->route('user.contactUs')->with(['success'=>true,'message'=>'Successfully Updated !']);
}


}
