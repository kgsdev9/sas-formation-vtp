<?php

namespace App\Http\Controllers\Profles;

use App\Models\Formateur;
use Illuminate\Http\Request;
use App\Services\TeacherService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    protected $teacherService ;

    public function __construct(TeacherService $teacherService)
    {
        $this->teacherService = $teacherService ;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
        public function profileFormateur()
        {

            return view('profiledashboard.profiles.formateur', [
                'profileFormateur' => $this->teacherService->profileFormateur()
            ]);
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
