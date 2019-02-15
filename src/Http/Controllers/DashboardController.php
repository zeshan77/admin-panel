<?php

namespace Zeshan77\zAdmin\Http\Controllers;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('zadmin::dashboard');
    }

    public function twoColumns()
    {
        return view('zadmin::two_columns');
    }
}
