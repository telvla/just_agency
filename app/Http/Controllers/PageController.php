<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use App\Service\FeedBackService;

/**
 * Description of PageController
 *
 * @author trifonov
 */
class PageController extends Controller 
{
    /**
    * Shower index page
    * @return object
    */    
    public function index() : object
    {
        
        return view('welcome');
    }

    /**
    * Send feedback
    * @param Request $request - user data array
    * @return bool
    */
    public function send(Request $request) : bool
    {
        $service = new FeedBackService();

        return $service->boot($request);
    }
}