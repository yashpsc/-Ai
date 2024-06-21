<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('index');
});
Route::get('/index2', function () {
    return view('index2');
});

Route::get('/resources', function () {
    return view('resources');
});

Route::get('/career-form', function () {
    return view('career-form');
});
Route::get('/careerjob', function () {
    return view('careerjob');
});
Route::get('/career-front-end-developer', function () {
    return view('career-front-end-developer');
});
Route::get('/career-back-end-developer', function () {
    return view('career-back-end-developer');
});
Route::get('/career', function () {
    return view('career');
});
Route::get('/contact-us', function () {
    return view('contact-us');
});
Route::get('/case-studies', function () {
    return view('case-studies');
});
Route::get('/case-detail', function () {
    return view('case-detail');
});
Route::get('/industry-solution', function () {
    return view('industry-solution');
});
Route::get('/industry-detail', function () {
    return view('industry_detail');
});
Route::get('/whatsnew', function () {
    return view('whatsnew');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/about2', function () {
    return view('about2');
});
Route::get('/automative_aftermarket_industry', function () {
    return view('automative_aftermarket_industry');
});
Route::get('/automotive_Manufacturing_industry', function () {
    return view('automotive_Manufacturing_industry');
});
Route::get('/finished_vehicle_logistics_industry', function () {
    return view('finished_vehicle_logistics_industry');
});
Route::get('/insurance_industry', function () {
    return view('insurance_industry');
});
Route::get('/pharma_industry', function () {
    return view('pharma_industry');
});
Route::get('/visual_pollution_industry', function () {
    return view('visual_pollution_industry');
});
Route::get('/warehousing_industry', function () {
    return view('warehousing_industry');
});
Route::get('/blog_detail_one', function () {
    return view('blog_detail_one');
});
Route::get('/blog_detail_two', function () {
    return view('blog_detail_two');
});
Route::get('/terms-of-use', function () {
    return view('terms-of-use');
});
Route::get('/disclaimer', function () {
    return view('disclaimer');
});
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});
Route::get('/ethics', function () {
    return view('ethics');
});
