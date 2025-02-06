<?php

namespace App\Http\Controllers\Information;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminHistoryController extends Controller
{
    public function  HistoryAdmin()
    {
        return view('admin.post.history.page');
    }
}
