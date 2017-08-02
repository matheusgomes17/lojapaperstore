<?php

namespace Snaketec\Http\Controllers\Frontend\User;

use Illuminate\Support\Facades\Session;
use Snaketec\Http\Controllers\Controller;

/**
 * Class DashboardController.
 */
class DashboardController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.user.dashboard');
    }
}
