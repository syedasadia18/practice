<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function setting()
    {
        $settings =  Setting::all();

        return view('setting', compact('settings'));
    }
}
