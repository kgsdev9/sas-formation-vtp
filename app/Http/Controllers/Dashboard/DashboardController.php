<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Formateur;
use Illuminate\Http\Request;
use App\Services\CourseService;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    protected $courseService ;


    public function __construct(CourseService $courseService)
    {
        $this->courseService = $courseService ;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    
        return view('profiledashboard.base.base', [
            'allCourseForTeacher' => $this->courseService->teacherCourse()
        ]);
    }

    // $seller = Seller::find(Auth::user()->owner_id);

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
