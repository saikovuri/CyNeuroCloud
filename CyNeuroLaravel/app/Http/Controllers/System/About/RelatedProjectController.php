<?php

namespace App\Http\Controllers\System\About;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RelatedProjectController extends Controller
{
    //

    public function ProjectsPage(){


        return view('system/about/related_projects');

    }
}
