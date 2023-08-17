<?php

namespace App\Services ;

use DateTimeInterface;
use App\Repositories\CouponRepository;


class CouponService  {

    public  $couponRepository ;

    public function  __construct(CouponRepository $couponRepository)
    {
        $this->couponRepository= $couponRepository ;
    }

    public function all() {
     return  $this->couponRepository->all();
    }


    public function couponActive() {
        return $this->couponRepository->couponActive();
    }

    public function couponDisable() {
        return $this->couponRepository->couponDisable();
    }

    public function couponCount() {
        return $this->couponRepository->couponCount();
    }

}
