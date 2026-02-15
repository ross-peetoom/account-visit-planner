<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class SugarSettingsController extends Controller
{
    public function show(): View
    {
        return view('settings.sugar');
    }
}
