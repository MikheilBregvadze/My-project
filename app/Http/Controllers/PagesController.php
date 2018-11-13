<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome(){
    	return view('welcome');
    }
    public function index(){
    	return view('pages.index');
    }
    public function about(){
    	return view('pages.about');
    }
    public function services(){
    	return view('pages.services');
    }
}
