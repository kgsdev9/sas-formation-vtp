<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use App\Models\Episode;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GestionCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function allCourse()
    {
        $course = Course::all();
        return view('admin.courses.liste', compact('course'));
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
        $course = Course::find($id);

        $cours = Episode::where('course_id', $course->id)->get();

        return view('admin.courses.detail', compact('course', 'cours'));
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
