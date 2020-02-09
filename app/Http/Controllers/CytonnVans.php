<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CytonnVans extends Controller
{
    public function create()
    {
        // $cities = City::all();
        // $states = State::all();
        $departments = Department::all();
        return view('cytonnvans/create', [ 'cytonnvans' => $cytonnvans]);
    }
}
