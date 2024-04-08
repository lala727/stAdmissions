<?php
// ApplicationSectionController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationSectionController extends Controller
{
        public function showApplicationSection(Request $request)
    {
        $scheme = ''; // Default scheme

        // Determine the scheme based on the route
        if ($request->is('application/undergraduate')) {
            $scheme = 'undergraduate';
        } elseif ($request->is('application/postgraduate')) {
            $scheme = 'postgraduate';
        }

        return view('dashboard.applicationSection')->with('scheme', $scheme);
    }


        public function showUndergraduateSection(Request $request)
    {
        $scheme = ''; // Default scheme

        // Determine the scheme based on the route
        if ($request->is('application/undergraduate')) {
            $scheme = 'undergraduate';
        } elseif ($request->is('application/postgraduate')) {
            $scheme = 'postgraduate';
        }

        return view('dashboard.undergraduateApplication')->with('scheme', $scheme);
    }

    public function showPostgraduateSection(Request $request)
    {
        $scheme = ''; // Default scheme

        // Determine the scheme based on the route
        if ($request->is('application/undergraduate')) {
            $scheme = 'undergraduate';
        } elseif ($request->is('application/postgraduate')) {
            $scheme = 'postgraduate';
        }
        
        return view('dashboard.postgraduateApplication')->with('scheme', $scheme);
    }

}
