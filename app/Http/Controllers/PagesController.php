<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
    	// Dynamic page features
    	$page_title = "Steve Mehr";

    	// Return view
    	return view('pages.index')->with('page_title', $page_title);
    }

    public function news() {
    	// Dynamic page features
    	$page_header = "News & Results";
    	$page_title = $page_header . " - Steve Mehr";

    	// Return view
    	return view('pages.news')->with('page_header', $page_header)->with('page_title', $page_title);
    }

    public function contact() {
        // Dynamic page features
        $page_title = "Contact - Steve Mehr";

        // Return view
        return view('pages.contact')->with('page_title', $page_title);
    }
}
