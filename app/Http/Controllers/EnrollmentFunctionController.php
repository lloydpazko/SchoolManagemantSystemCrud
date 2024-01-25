<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\EnrollmentDataBase;
use Illuminate\View\View;

class EnrollmentFunctionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): view
    {
        $EnrollmentSystem = EnrollmentDatabase::all();
        return view ('EnrollmentSystem.IndexEnrollmentSystem')->with('EnrollmentSystem', $EnrollmentSystem);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): view
    {
        return view('EnrollmentSystem.CreateEnrollmentSystem');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        EnrollmentDatabase::create($input);
        return redirect('EnrollmentSystem')->with('flash_message', 'Student Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): view
    {
        $EnrollmentSystem = EnrollmentDataBase::find($id);
        return view('EnrollmentSystem.ShowEnrollmentSystem')->with('EnrollmentSystem', $EnrollmentSystem);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $EnrollmentSystem = EnrollmentDatabase::find($id);
        return view('EnrollmentSystem.EditEnrollmentSystem')->with('EnrollmentSystem', $EnrollmentSystem);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $EnrollmentSystem = EnrollmentDatabase::find($id);
        $input = $request->all();
        $EnrollmentSystem->update($input);
        return redirect('EnrollmentSystem')->with('flash_message', 'student Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        EnrollmentDatabase::destroy($id);
        return redirect('EnrollmentSystem')->with('flash_message', 'Student deleted!');
    }
}
