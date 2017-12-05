<?php

namespace App\Http\Controllers\System\Browse;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DatabasesController extends Controller
{
    //

    public function databases_page() {

        return view('system/browse/databases');
    }
}
