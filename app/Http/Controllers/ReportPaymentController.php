<?php

namespace App\Http\Controllers;
use App;
use Auth;
use App\Models\Payment;
use Illuminate\Http\Request;

class ReportPaymentController extends Controller
{
    public function report1($pid){

        $PaymentSystemReleaseReceipt = Payment::find($pid);
        $pdf = App::make('dompdf.wrapper');
        $print = "<div style='margin:20px; padding:20px'>";
        $print = "<h1> Payment Receipt </h1>";
        $print = "<hr/>";
        $print = "<p> Recipt No: <b>" . $pid . " </b></p>";
        $print = "<p> Date: <b>" . $PaymentSystemReleaseReceipt->paid_date . "</b></p>";
        $print = "<p> Enrollment: <b>" . $PaymentSystemReleaseReceipt->enrollment->enroll_no . "</b></p>";
        $print = "<p> Student Name : <b>" . $PaymentSystemReleaseReceipt->enrollment->student->name . "</b></p>";
        $print = "<hr/>";

        //creation table
        $print = "<table style='width:100%'>";
        $print = "<tr>";
        $print = "<td> Description </td>";
        $print = "<td>Amount<td>";
        $print = "</tr>";

        $print = "<td> <h3>" . $PaymentSystemReleaseReceipt->enrollment->Batch_name . "</h3> </td>";
        $print = "<td> <h3>" . $PaymentSystemReleaseReceipt->amount . "</h3> </td>";
        $print = "</tr>";

        $print = "</table>";
        $print = "<hr/>";
        $print = "<span> Printed date: <b>" . date('y-m-d') . "</b> </span>";
        $print = "</div>";
        $pdf->loadHTML( $print);
        return $pdf->stream();
        }
}
