<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    //
    public function contact() {
    	return view('pages.contact',['name' => 'Buddha','lastname'=>'Shilpa']);
    }
    public function aboutus() {
    	return view('pages.aboutus',['name' => 'Buddha','lastname'=>'Shilpa']);
    }
}
