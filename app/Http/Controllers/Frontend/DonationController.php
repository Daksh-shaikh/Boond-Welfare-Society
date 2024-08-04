<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\donation;
use App\Models\donation2;


class DonationController extends Controller
{
    public function index()
    {
        $amount=donation::all();

        // return view('frontend.donation', ['amount'=>$amount]);

        $cause=donation2::all();

        return view('frontend.donation', ['cause'=>$cause,'amount'=>$amount]);
    }

    public function store(Request $request)
    {

        // dd($request->all());
        $data=$request->validate([
            'add_amount'=>'required|numeric'
        ]);

        $newAmount = donation::create($data);
        // $newAmount = donation::create([
        //     'add_amount'=>$request->amount
        // ]);

        return redirect(route('user.donation'));
    }

    public function save(Request $request)
    {
        // dd($request->all());
        $data2=$request->validate([
            'add_cause'=>'required|string'
        ]);
        $newAmount2 = donation2::create($data2);

        return redirect(route('user.donation'));
    }

    public function destroyAmount($id){
       donation::find($id)->delete();

        return redirect(route('user.donation'))->with('success', 'Amount Deleted Successfully');

    }

    public function destroySave($id){
        donation2::find($id)->delete();

         return redirect(route('user.donation'))->with('success', 'Cause Deleted Successfully');

     }
}
