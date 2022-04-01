<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/careers', function () {
    return view('careers');
});

Route::get('/services/inspection', function () {
    return view('services.inspection');
});

Route::get('/services/expediting', function () {
    return view('services.expediting');
});

Route::get('/services/integrated-manaegement-system-and-consulting', function () {
    return view('services.imsac');
});

Route::get('/services/engineering', function () {
    return view('services.engineering');
});

Route::get('/services/technical-staffing', function () {
    return view('services.ts');
});

Route::get('/services/asset-integrity-verification-services', function () {
    return view('services.aivs');
});

Route::get('/services/marine-surveying-services', function () {
    return view('services.mss');
});

Route::get('/services/ndt-ut-thickness-gauging-services', function () {
    return view('services.ndt');
});

Route::get('/services/environmental-impact-assessment', function () {
    return view('services.eia');
});

Route::get('/services/social-impact-assessment', function () {
    return view('services.sia');
});

Route::get('/services/facility-management', function () {
    return view('services.fm');
});

Route::get('/divisions/third-party-inspection', function () {
    return view('divisions.third-party-inspection');
});

Route::get('/divisions/environment-consultancy-and-social-impact-assessment', function () {
    return view('divisions.ecasia');
});

Route::get('/divisions/facility-management-services', function () {
    return view('divisions.fms');
});

Route::get('/divisions/enieco-building-constructions', function () {
    return view('divisions.ebc');
});

Route::post('/contact', "App\Http\Controllers\ContactsController@store");
