<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicInformationController extends Controller
{
    public function BasicInformationPages()
    {
        return view('admin.post.basic_information.basic_information');
    }
}
