<?php

namespace App\Http\Controllers\Admin;

use App\Models\Discount;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Services\CouponService;
use App\Services\CourseService;
use App\Http\Controllers\Controller;
use App\Http\Requests\CouponRequest;

class GestionCouponController extends Controller
{
    protected $couponService ;
    protected $courseService ;
    public function __construct(CouponService $couponService, CourseService $courseService)
    {
        $this->couponService = $couponService;
        $this->courseService = $courseService;

    }

    private function difffordate($debut) {

        $datework = Carbon::createFromDate($debut);
        $fin = Carbon::now();
         $testdate = $datework->diffInDays($fin);
         return $testdate ;
    }

    public function store(CouponRequest $request)
    {
     $data = $request->all();
     $coupon =   Discount::create([
        'discount_percent' => $data['pourcent'],
        'code' => $data['code'],
        'slug' => $data['code'],
        'course_id' => $data['course_id'],
        'delai' =>$data['delai'],
        'expire_at' => $this->difffordate(($data['delai']))
     ]);
     return redirect()->route('coupon.index', ['coupon', $coupon->id, 'sucess', true]);
    }





    /**
     * Display a listing of the resource.
     */
    public function index( )
    {
        return view('admin.coupons.liste', [
            'couponsAll' =>$this->couponService->all(),
            'courseAll' =>$this->courseService->all(),
            'couponEnable' => $this->couponService->couponActive(),
            'couponDisable' => $this->couponService->couponDisable()
        ]);
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
