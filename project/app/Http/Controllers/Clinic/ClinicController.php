<?php

namespace App\Http\Controllers\Clinic;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClinicRequest;
use Illuminate\Http\Request;

class ClinicController extends Controller
{
    public function index()
    {
        return view('clinic.register.index');
    }

    public function store(ClinicRequest $request)
    {
        dd($request->all());
    }
}
