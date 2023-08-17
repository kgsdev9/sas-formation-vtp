<?php

namespace App\Http\Controllers\Payment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentController extends Controller
{

public function __construct() {

}


public function createNewPayment() {

    dd('merci');

    $data = array(
        'merchantId' => "PP-F2197",
        'amount' => 1000,
        'description' => "Api PHP",
        'channel' => "PAYPAL",
        'countryCurrencyCode' => "952",
        'referenceNumber' => "REF-".time(),
        'customerEmail' => "test@gmail.com",
        'customerFirstName' => "Ishola",
        'customerLastname' => "Lamine",
        'customerPhoneNumber' => "01234567",
        'notificationURL' => "callback_url",
        'returnURL' => "callback_url",
        'returnContext' => '{"data":"data 1","data2":"data 2"}',
    );

    $data = json_encode($data);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://www.paiementpro.net/webservice/onlinepayment/init/curl-init.php");
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_POST, TRUE);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    $response = curl_exec($ch);



    // return redirect()->to($response);


}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
