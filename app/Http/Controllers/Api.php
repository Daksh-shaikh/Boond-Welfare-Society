<?php

namespace App\Http\Controllers;

use App\Models\MemberRegistration;
use App\Models\User;
use App\Models\Gallery;
use App\Models\announcement;
use App\Models\Contact;
use App\Models\donationAmount;
use App\Models\Donation;




use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Api extends Controller
{

    public function registration(Request $request)
    {
        $insert = User::create([


            'name' => $request->username,
            'password' => Hash::make($request->password),
            'mobile_number' => $request->mobilenumber
        ]);

        if ($insert) {
            return response()->json(['status' => true, 'message' => 'Data Submitted Successfully']);
        } else {
            return response()->json(['status' => false, 'message' => 'Something error occurred']);
        }
    }



    // public function user_check(Request $request)
    // {
    //     $user = User::where('mobilenumber', $request->mobilenumber)->first();

    //     if ($user && Hash::check($request->password, $user->password)) {
    //         return response()->json(['status' => true, 'user' => $user]);
    //     } else {
    //         return response()->json(['status' => false, 'message' => 'User Not Found']);
    //     }



    // }




    // public function memberRegistration(Request $request)
    // {


    //     $request->validate([
    //         'name' => 'required',
    //         'image' => 'required|mimes:gif,jpg,png,jpeg'
    //         // Add more validation rules for other fields if needed
    //     ]);

    //     $imageName = time() . '.' . $request->image->extension();
    //     $request->image->move(public_path('products'), $imageName);

    //     $memberRegistration = new MemberRegistration;
    //     $memberRegistration->name = $request->input('name');
    //     $memberRegistration->gender = $request->input('gender');
    //     $memberRegistration->age = $request->input('age');
    //     $memberRegistration->email = $request->input('email');
    //     $memberRegistration->mobilenumber = $request->input('mobilenumber');
    //     $memberRegistration->city = $request->input('city');
    //     $memberRegistration->address = $request->input('address');
    //     $memberRegistration->pincode = $request->input('pincode');
    //     $memberRegistration->image = $imageName;
    //     $memberRegistration->payment_status = $request->input('payment_status');
    //     $memberRegistration->amount = $request->input('amount');
    //     $memberRegistration->user_id = $request->input('user_id');

    //     $insert = $memberRegistration->save();

    //     if ($insert) {
    //         return response()->json(['status' => true, 'message' => 'Data Submitted Successfully', 'data' => $memberRegistration], 201);
    //     } else {
    //         return response()->json(['status' => false, 'message' => 'Something error occurred'], 400);
    //     }
    // }



// when user send data through website and we want to show it in panel

   public function memberRegistration(Request $request)
   {
       $request->validate([
           'name' => 'required',
           'image' => 'required' // Update validation for base64 encoded image
           // Add more validation rules for other fields if needed
       ]);

      if (isset($request->image) && !empty($request->image)) {
       $image = $request->image;
       $extension = explode('/', mime_content_type($image))[1];
       $data = base64_decode(substr($image, strpos($image, ',') + 1));
       $imgname = 'REC' . time() . '.' . $extension;
       file_put_contents(public_path('products') . '/' . $imgname, $data);
   }


       // The rest of your code remains unchanged

       $memberRegistration = new MemberRegistration;
       $memberRegistration->name = $request->input('name');
       $memberRegistration->gender = $request->input('gender');
       $memberRegistration->age = $request->input('age');
       $memberRegistration->email = $request->input('email');
       $memberRegistration->mobilenumber = $request->input('mobilenumber');
       $memberRegistration->city = $request->input('city');
       $memberRegistration->address = $request->input('address');
       $memberRegistration->pincode = $request->input('pincode');
       $memberRegistration->image = $imgname;
       $memberRegistration->payment_status = $request->input('payment_status');
       $memberRegistration->amount = $request->input('amount');
       $memberRegistration->user_id = $request->input('user_id');

       $insert = $memberRegistration->save();

       if ($insert) {
           return response()->json(['status' => true, 'message' => 'Data Submitted Successfully', 'data' => $insert], 201);
       } else {
           return response()->json(['status' => false, 'message' => 'Something error occurred'], 400);
       }
   }





    public function getGalleryAllImages(Request $request)
    {
        $galleryModel = new Gallery();
        $images = $galleryModel->all();

        return response()->json(['status' => true, 'message' => 'All images retrieved successfully', 'data' => $images], 200);
    }


    public function getAnnouncement(Request $request)
    {
        $announcementModel = new announcement();
        $data = $announcementModel->all();

        return response()->json(['status' => true, 'message' => 'All data retrieved successfully', 'data' => $data], 200);
    }



    public function getContactUS(Request $request)
    {
        $contactModel = new Contact();
        $data = $contactModel->all();

        return response()->json(['status' => true, 'message' => 'All data retrieved successfully', 'data' => $data], 200);
    }

    // public function getMemberRegistrationAmount(Request $request)
    // {
    //     $MemberRegistrationAmount = new MemberAmount();
    //     $data = $MemberRegistrationAmount->all();

    //     return response()->json(['status' => true, 'message' => 'All data retrieved successfully', 'data' => $data], 200);
    // }


    public function getDonation(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',

            // Add more validation rules for other fields if needed
        ]);


        $getDonation = new donationAmount;
        $getDonation->name = $request->input('name');
        $getDonation->email = $request->input('email');
        $getDonation->mobilenumber = $request->input('mobilenumber');
       $getDonation->amount = $request->input('amount');

        $insert = $getDonation->save();

        if ($insert) {
            return response()->json(['status' => true, 'message' => 'Data Submitted Successfully', 'data' => $getDonation], 201);
        } else {
            return response()->json(['status' => false, 'message' => 'Something error occurred'], 400);
        }
    }

    public function getAmount(Request $request)
    {
        $getAmount = new donation();
        $data = $getAmount->all();

        return response()->json(['status' => true, 'message' => 'All data retrieved successfully', 'data' => $data], 200);
    }



}
