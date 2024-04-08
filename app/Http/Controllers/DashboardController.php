<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
        public function showDashboard()
    {        
        $section = 'dashboard.sections.section1'; 

        return view('dashboard')->with('section', $section);
    }

}
