<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;

/**
 * Description of PageController
 *
 * @author trifonov
 */
class PageController extends Controller {

    public function index() //Request $request
    {
        
        return view('welcome');
    }
}