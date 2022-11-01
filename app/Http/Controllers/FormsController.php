<?php

namespace App\Http\Controllers;

class FormsController extends Controller
{
    /**
     * Show responsive form.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('forms.index');
    }


    /**
     * Admin Dashboard Layout.
     *
     * @return \Illuminate\Http\Response
     */
    public function dash()
    {
        return view('forms.dash');
    }
}
