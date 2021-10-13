<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    protected $dashboardService;

    public function __construct()
    {
        
    }


    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = request('searhc');

        if($search) {
            try {
                // $response = 
            } catch (Exception $e) {
                
            }
        } else {

        }
        return view('site.home.index');
    }
}
