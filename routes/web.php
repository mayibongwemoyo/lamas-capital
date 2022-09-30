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
//main pages
Route::get('/', function(){ return view('pages.home'); })->name('home');
Route::get('contact', function(){ return view('pages.contact'); })->name('contact');
Route::get('about', function(){ return view('pages.about'); })->name('about');
Route::get('location', function(){ return view('pages.location'); })->name('location');
Route::get('help', function(){ return view('pages.help'); })->name('help');
Route::get('services', function(){ return view('pages.services'); })->name('services');




//tech pages
Route::get('tech.welcome', function(){ return view('pages.tech.welcome'); })->name('tech.welcome');
Route::get('tech.services', function(){ return view('pages.tech.services'); })->name('tech.services');
Route::get('tech.faqs', function(){ return view('pages.tech.faqs'); })->name('tech.faqs');
Route::get('tech.about', function(){ return view('pages.tech.about'); })->name('tech.about');
Route::get('tech.contact', function(){ return view('pages.tech.contact'); })->name('tech.contact');
Route::get('tech.faqs', function(){ return view('pages.tech.faqs'); })->name('tech.faqs');



//construction pages
Route::get('construction.welcome', function(){ return view('pages.construction.welcome'); })->name('construction.welcome');
Route::get('construction.services', function(){ return view('pages.construction.services'); })->name('construction.services');
Route::get('construction.faqs', function(){ return view('pages.construction.faqs'); })->name('construction.faqs');
Route::get('construction.about', function(){ return view('pages.construction.about'); })->name('construction.about');
Route::get('construction.contact', function(){ return view('pages.construction.contact'); })->name('construction.contact');
Route::get('construction.faqs', function(){ return view('pages.construction.faqs'); })->name('construction.faqs');


