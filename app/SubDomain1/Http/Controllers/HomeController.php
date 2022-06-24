<?php

namespace Subdomain1\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index(Request $request)
    {

        return "THIS IS SUBDOMAIN 1!!";
    }
}
