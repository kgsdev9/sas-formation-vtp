<?php

namespace App\Repositories ;

use App\Models\Discount;
use DateTimeInterface;

class CouponRepository  {

    public  $coupon ;

    public function  __construct(Discount $coupon)
    {
        $this->coupon= $coupon ;
    }

    public function all() {
     return  $this->coupon->orderByDesc('created_at')->get();
    }


    public function couponActive() {
        return $this->coupon->where('status', 'active')->count();
    }

    public function couponDisable() {
        return $this->coupon->where('status', 'desactive')->count();
    }

    public function couponCount() {
        return $this->coupon->count();
    }



}
