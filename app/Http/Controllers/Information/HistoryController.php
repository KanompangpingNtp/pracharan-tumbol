<?php

namespace App\Http\Controllers\Information;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function  HistoryPage()
    {
        return view('admin.menu-bar.basic_information.history.page');
    }
}
