<?php

namespace Zeshan77\zAdmin\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class ForgotPasswordController extends Controller
{
    public function index()
    {
        return view('zadmin::forgot-password');
    }
}
