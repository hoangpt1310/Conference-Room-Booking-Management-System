<?php

namespace App\Http\Controllers\Api\user;

use App\Http\Controllers\Controller;

class HomeUserController extends Controller
{
    /**
     * Display home page.
     */
    public function index()
    {
        return view('user.pages.default.home');
    }

    public function about()
    {
        return view('user.pages.default.about');
    }
}
