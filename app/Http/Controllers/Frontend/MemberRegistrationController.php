<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MemberAmount;
use App\Models\MemberRegistration;
use Illuminate\Support\Facades\Validator;

class MemberRegistrationController extends Controller
{
    public function index()
    {
        $MemberRegistration = MemberRegistration::all();
        $memberAmount = MemberAmount::all();
        return view('frontend.member_registration', ['MemberAmount' => $memberAmount],['MemberRegistration' => $MemberRegistration]);
    }



    public function store(Request $request)
    {
        $data = $request->validate([
            'amount' => 'numeric',
        ]);

        $amount = MemberAmount::create($data);

        // Pass the created amount back to the view
        return redirect(route('user.member_registration'))->with('createdAmount', $amount->amount);
    }

    public function destroyMemberRegistration($id){
        MemberRegistration::find($id)->delete();

         return redirect(route('user.member_registration'))->with('success', 'data Deleted Successfully');

     }

     public function deleteMultiple(Request $request)
{
    $ids=$request->ids;
    MemberRegistration::whereIn('id',$ids)->delete();
    return redirect()->back();
}
// ------------------------------------------------------------------------------
public function update(Request $request)
{
    $rules = [
        'name' => 'required|regex:/^[\pL\s\-]+$/u|max:255|unique:users,name,' . $request->id,
        'gender' => 'required|in:Female,Male,Select',
        'age' => 'required|numeric|digits:2',
        'email' => 'required|email',
        'mobilenumber' => 'required|numeric|digits:10',
        'city' => 'required|regex:/^[\pL\s\-]+$/u|max:255|unique:users,name,',
        'address' => 'required',
        'pincode' => 'required|numeric|digits:6',
    ];

    $messages = [
        'mobilenumber.digits' => 'The mobile number must be exactly 10 digits.',
        'mobilenumber.required' => 'Please Enter Mobile Number.',
        'mobilenumber.numeric' => 'Mobile number must be numeric.',
    ];

    $validator = Validator::make($request->all(), $rules, $messages);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    MemberRegistration::where('id', $request->id)->update([
        'name' => $request->name,
        'gender' => $request->gender,
        'age' => $request->age,
        'email' => $request->email,
        'mobilenumber' => $request->mobilenumber,
        'city' => $request->city,
        'address' => $request->address,
        'pincode' => $request->pincode,
    ]);

    return redirect()->route('user.member_registration')->with(['success' => true, 'message' => 'Successfully Updated!']);
}











// --------------------------------------------------------------------------------





    public function Update11(Request $request)
    {
        // $validator = Validator::make(
        //     $request->all(),
            $rules = [
                'name' => 'required|regex:/^[\pL\s\-]+$/u|max:255|unique:users,name',
                'gender' => ['required'],
                'age' => 'required|numeric|digits:2',
                'email' => ['required'],
                'mobilenumber' => 'required|numeric|digits:10',
                'city' => ['required'],
                'address' => ['required'],
                'pincode' => ['required'],
            ];

            $messages = [
                'mobilenumber.digits' => 'The mobile number must be exactly 10 digits.',
                'mobilenumber.required' => 'Please Enter Mobile Number.',
                'pincode.digits' => 'The pincode must be exactly 6 digits.',
                'pincode.required' => 'Please Enter PinCode.',

            ];
            $validator = Validator::make($request->all(), $rules, $messages);
            // [
            //     'name.required' => 'Please Enter Name.',
            //     'gender.required' => 'Please Enter Gender.',
            //     'age.required' => 'Please Enter Age.',
            //     'email.required' => 'Please Enter Email.',
            //     'mobilenumber.required' => 'Please Enter Mobile Number.',
            //     'city.required' => 'Please Enter City.',
            //     'address.required' => 'Please Enter Address.',
            //     'pincode.required' => 'Please Enter PinCode.',
            // ]);
            if ($validator->fails()) {
                $errors = '';
                $messages = $validator->messages();
                foreach ($messages->all() as $message) {
                    $errors .= $message . "<br>";
                }
                return back()->with(['error'=>$errors]);
            }
            MemberRegistration::where('id',$request->id)->update([
               'name'=>$request->name,
               'gender'=>$request->gender,
               'age'=>$request->age,
               'email'=>$request->email,
               'mobilenumber'=>$request->mobilenumber,
               'city'=>$request->city,
               'address'=>$request->address,
               'pincode'=>$request->pincode,
               ]
           );

      return redirect()->route('user.member_registration')->with(['success'=>true,'message'=>'Successfully Updated !']);
    }

    public function edit($id)
    {
        $regedit = MemberRegistration::find($id);
        $reg=MemberRegistration::all();
        return view('frontend.member_registrationEdit',['regedit'=>$regedit,'reg'=>$reg]);

    }


}
