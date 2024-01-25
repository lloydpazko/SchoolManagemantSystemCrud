<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Batch;
use App\Models\Course;
use Illuminate\View\View;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $BatchesSystem = Batch::all();
        return view ('BatchesSystem.IndexBatch')->with('BatchesSystem', $BatchesSystem);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('BatchesSystem.CreateBatch');
        $courses = Course::pluck('name', 'id');
        return view('BatchesSystem.CreateBatch', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Batch::create($input);
        return redirect('BatchesSystem')->with('flash_message', 'Batch Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $BatchesSystem = Batch::find($id);
        return view('BatchesSystem.ShowBatch')->with('BatchesSystem', $BatchesSystem);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $BatchesSystem = Batch::find($id);
        $courses = Course::pluck('name', 'id');

        return view('BatchesSystem.EditBatch', compact('courses'))->with('BatchesSystem', $BatchesSystem);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $BatchesSystem = Batch::find($id);
        $input = $request->all();
        $BatchesSystem->update($input);
        return redirect('BatchesSystem')->with('flash_message', 'Batch Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Batch::destroy($id);
        return redirect('BatchesSystem')->with('flash_message', 'Batch deleted!');
    }
}
