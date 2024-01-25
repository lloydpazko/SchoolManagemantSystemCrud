<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\EnrollmentFunctionController;
use App\Http\Controllers\PaymentSystemReceiptController;
use App\Http\Controllers\ReportPaymentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layout');
});

// Route::get('/', function () {
//     return view('welcome');
// });

Route::Resource('Students', StudentController::class);
Route::Resource('Teachers', TeacherController::class);
Route::Resource('Courses', CourseController::class);
Route::Resource('BatchesSystem', BatchController::class);
Route::Resource('EnrollmentSystem', EnrollmentFunctionController::class);
Route::Resource('PaymentSystemReleaseReceipt', PaymentSystemReceiptController::class);
Route::get('report/report1/{pid}', [ReportPaymentController::class,'report1']);
