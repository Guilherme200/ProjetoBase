<?php

namespace App\Http\Controllers;

use App\Enums\UserTypes;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {
        return (
            in_array(UserTypes::ADMIN, current_user()->user_types_list)
            ? view('admin.dashboard.index')
            : view('client.dashboard.index')
        );
    }
}
