<?php

use Illuminate\Support\Facades\Route;
use App\Models\Applicant;
use PDF;
use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/approve/{id}', function ($id) {
    $applicant = Applicant::find($id);
    $applicant->status = "Approved";
    $applicant->save();
    return back()->with([
        'message'    => 'Applicant Approved',
        'alert-type' => 'success',
    ]);
});

Route::get('/reject/{id}', function ($id) {
    $applicant = Applicant::find($id);
    $applicant->status = "Rejected";
    $applicant->save();
    return back()->with([
        'message'    => 'Applicant Rejected',
        'alert-type' => 'warning',
    ]);
});

Route::get('/generate_pdf/{id}', function($id){
    $applicant = Applicant::where('id', $id)->where('status', 'Approved')->first();
    if($applicant){
        $data = [
            'name' => $applicant->full_name,
            'date' => Carbon::parse($applicant->updated_at)->format('d-M-Y'),
            'dob' => Carbon::parse($applicant->date_of_birth)->format('d-M-Y'),
            'sex' => $applicant->sex,
            'location' => $applicant->place_of_birth,
            'father_name' => $applicant->father_name,
            'father_occupation' => $applicant->father_occupation,
            'father_religion' => $applicant->father_religion,
            'father_nationality' => $applicant->father_nationality,
            'mother_name' => $applicant->mother_maiden_name,
            'mother_nationality' => $applicant->mother_nationality,
            'id' => $applicant->id
        ];
          
        $pdf = PDF::loadView('certificate', $data);
    
        return $pdf->download('certificate.pdf');
    }

    return back()->with([
        'message'    => 'Application not approved',
        'alert-type' => 'warning',
    ]);

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
