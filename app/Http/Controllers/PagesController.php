<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
    	// Dyanmic page features
    	$page_title = "Steve Mehr";

    	// Return view
    	return view('pages.index')->with('page_title', $page_title);
    }
}
