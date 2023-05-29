<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    function homeAction(Request $request){
        return redirect('/dashboard', 302);
    }
}
