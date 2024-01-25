<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Teacher;
use Illuminate\View\View;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $Teachers = Teacher::all();
        return view ('Teachers.IndexTeacher')->with('Teachers', $Teachers);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('Teachers.CreateTeacher');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Teacher::create($input);
        return redirect('Teachers')->with('flash_message', 'Teacher Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Teacher = Teacher::find($id);
        return view('Teachers.ShowTeacher')->with('Teachers', $Teacher);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $Teacher = Teacher::find($id);
        return view('Teachers.EditTeacher')->with('Teachers', $Teacher);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $Teacher = Teacher::find($id);
        $input = $request->all();
        $Teacher->update($input);
        return redirect('Teachers')->with('flash_message', 'Teacher Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Teacher::destroy($id);
        return redirect('Teachers')->with('flash_message', 'Teacher deleted!');
    }
}
