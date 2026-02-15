<?php

namespace App\Http\Controllers\Plans;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class PlanController extends Controller
{
    public function index(): View
    {
        return view('plans.index');
    }

    public function create(): View
    {
        return view('plans.create');
    }
}
