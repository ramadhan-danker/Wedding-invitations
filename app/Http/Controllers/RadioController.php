<?php

namespace App\Http\Controllers;

use App\Models\Theme;
use Illuminate\Http\Request;

class RadioController extends Controller
{
    public function radio()
    {
        return view('forms.components.radio-theme', [
            'themes' => Theme::all()
        ]);
    }
}
