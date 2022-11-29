<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use App\Helpers\ValidatorForm;
use App\Service;


/**
 * Description of PageController
 *
 * @author trifonov
 */
class PageController extends Controller {

    public function index() : object
    {
        
        return view('welcome');
    }

    public function send(Request $request) : string
    {

        return new FeedBackService->boot($request);
    }
}