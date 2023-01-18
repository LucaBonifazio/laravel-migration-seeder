<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function main() {
        $trains = Train::all();
        return view('main', [
            'trains' => $trains,
        ]);
    }
}
