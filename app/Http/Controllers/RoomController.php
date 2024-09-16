<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index ()
    {
        return view('rooms.index');
    }

    public function add ()
    {
        return view('rooms.add');
    }
    public function guest ()
    {
        return view('rooms.guest');
    }
}
