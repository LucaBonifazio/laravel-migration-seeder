<?php

namespace App\Http\Controllers;

use App\Trains;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function main() {
        $table = Trains::all();
        return view('main', [
            'table' => $table,
        ]);
    }
}
