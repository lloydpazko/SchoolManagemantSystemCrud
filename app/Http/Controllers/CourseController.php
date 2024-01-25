<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Course;
use Illuminate\View\View;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $courses = Course::all();
        return view ('Courses.IndexCourses')->with('Courses', $courses);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('Courses.CreateCourses');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Course::create($input);
        return redirect('Courses')->with('flash_message', 'Course Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $courses = Course::find($id);
        return view('Courses.ShowCourses')->with('Courses', $courses);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $courses = Course::find($id);
        return view('Courses.EditCourses')->with('Courses', $courses);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $courses = Course::find($id);
        $input = $request->all();
        $courses->update($input);
        return redirect('Courses')->with('flash_message', 'Course Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Course::destroy($id);
        return redirect('Courses')->with('flash_message', 'course deleted!');
    }
}
