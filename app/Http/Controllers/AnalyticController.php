<?php

namespace App\Http\Controllers;

use App\Models\Analytic;
use Illuminate\Http\Request;

class AnalyticController extends Controller
{
    // Writing a simple RESTful GET API request
    public function index()
    {
        $analytics = Analytic::all();
        // 200 is the success status code
        return response()->json(array('analytics' => $analytics), 200);
    }

    // showAnalytics is the view method where the GET API is callled
    // with the help of AJAX request
    public function showAnalytics()
    {
        return view('analytics.view');
    }
}
