<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index ()
    {
        return view('reservation.index');
    }

    public function add ()
    {
        return view('reservation.add');
    }
}
