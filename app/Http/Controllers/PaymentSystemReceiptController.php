<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\EnrollmentDataBase;
use Illuminate\View\View;

class PaymentSystemReceiptController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $PaymentSystemReleaseReceipt = Payment::all();
        return view ('PaymentSystemReleaseReceipt.IndexPayment')->with('PaymentSystemReleaseReceipt', $PaymentSystemReleaseReceipt);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $PaymentSystemReleaseReceipt = EnrollmentDataBase::pluck('enroll_no','id');
        return view('PaymentSystemReleaseReceipt.CreatePayment', compact('PaymentSystemReleaseReceipt'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Payment::create($input);
        return redirect('PaymentSystemReleaseReceipt')->with('flash_message', 'Payments Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $PaymentSystemReleaseReceipt = Payment::find($id);
        return view('PaymentSystemReleaseReceipt.ShowPayment')->with('PaymentSystemReceipt', $PaymentSystemReleaseReceipt);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $PaymentSystemReleaseReceipt = Payment::find($id);
        $EnrollmentSystem = EnrollmentDataBase::pluck('enroll_no','id');

        return view('PaymentSystemReleaseReceipt.EditPayment', compact('PaymentSystemReleaseReceipt'))->with('PaymentSystemReleaseReceipt', $PaymentSystemReleaseReceipt);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $PaymentSystemReleaseReceipt = Payment::find($id);
        $input = $request->all();
        $PaymentSystemReleaseReceipt->update($input);
        return redirect('PaymentSystemReleaseReceipt')->with('flash_message', 'Payments Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Payment::destroy($id);
        return redirect('PaymentSystemReleaseReceipt')->with('flash_message', 'Payments deleted!');
    }
}
