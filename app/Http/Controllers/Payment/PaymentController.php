<?php

namespace App\Http\Controllers\Payment;

use App\Models\Order;
use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{

public function __construct() {
    $this->middleware('auth');
}

 public function initialisePayment(OrderRequest $request)  {
    $commande =  Order::create([
         'codeCommande'=>rand(1300, 4000),
         'phone'=>Auth::user()->phone,
         'email'=>Auth::user()->email,
         'fullname'=>Auth::user()->fullname,
         'amount'=>$request->price,
         'adresse'=>Auth::user()->adresse,
         'course_id'=> $request->couse_id,
         'user_id'=>Auth::user()->id,
         'status'=> "en atttente",
     ]);
         $data = array(
             'merchantId' => "PP-F2197",
             'amount' => $request->price * 650,
             'description' => $request->title,
             'channel' => $request->payment_method,
             'countryCurrencyCode' => "952",
             'referenceNumber' => "REF-".time(),
             'customerEmail' => Auth::user()->email,
             'customerFirstName' => Auth::user()->fullname,
             'customerLastname' => Auth::user()->fullname,
             'customerPhoneNumber' => Auth::user()->phone,
             'notificationURL' => route('success.payment'),
             'returnURL' => route('cancel.payment'),
             'returnContext' => '',
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
         $obj = json_decode($response);
         $urlPayement = $obj->url ;
         return redirect()->to($urlPayement);
         // curl_close($ch);

     }


     public function sucessPayment() {

        $order = Order::where('user_id', Auth::user()->id)
        ->orderByDesc('created_at')
        ->first();
        $order->update([
        'status' =>'effectue'
        ]);
        return view('payment.sucess');
     }

     public function cancelPayment() {
         $order = Order::where('user_id', Auth::user()->id)
        ->orderByDesc('created_at')
        ->first();
        $order->update([
          'status' =>'echec'
        ]);
        return view('payment.cancel');
     }
}
