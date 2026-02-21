<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * AdminController constructor
     */
    public function __construct()
    {
        $this->middleware('auth'); // Protect all admin routes
    }

    /**
     * Admin dashboard
     */
    public function index()
    {
        return view('admin.dashboard'); // resources/views/admin/dashboard.blade.php
    }
}