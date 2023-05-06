<?php

namespace App\Http\Controllers;

use App\Models\Vico;
use App\Models\FeiFei;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ctrl extends Controller
{
    public function VicoC () {
        return view('hist1', [
            "hist1" => Vico::all()
        ]);
    }

    public function FeiFeiC () {
        return view('hist2', [
            "hist2" => FeiFei::all()
        ]);
    }
}
