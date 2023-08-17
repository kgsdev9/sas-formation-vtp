<?php


namespace App\Repositories ;

use App\Models\Order;

class OrderRepository   {

public $order ;

public function __construct(Order  $order )
{
    $this->order = $order ;
}


public function all() {
    return $this->order->get();
}

public function countOrder() {
    return $this->order->count();
}


}
