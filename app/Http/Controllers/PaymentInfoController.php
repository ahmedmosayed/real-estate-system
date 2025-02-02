<?php

namespace App\Http\Controllers;

use App\Models\PaymentInfo;
use App\Models\Property;
use Illuminate\Http\Request;
use App\Http\Controllers\ExpressCheckout;

class PaymentInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            ['UserName'=>'required'
            ,
            'Address'=>['required','max:25'],
            'Phone'=>'required'
            ]
            );
            $PaymentData = new PaymentInfo;
            $PaymentData->UserId = session('UserId');
            $PaymentData->Name = $request->UserName;
            $PaymentData->Phone = $request->Phone;
            $PaymentData->Address = $request->Address;
            $PaymentData->BillingMethod = $request->BillingMethod;

            $PaymentData->save();
    return back()->with('PaymentDetailedSaved','Profile Information has been saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PaymentInfo  $paymentInfo
     * @return \Illuminate\Http\Response
     */
    public function show(PaymentInfo $paymentInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaymentInfo  $paymentInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(PaymentInfo $paymentInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PaymentInfo  $paymentInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaymentInfo $paymentInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaymentInfo  $paymentInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaymentInfo $paymentInfo)
    {
        //
    }

}
