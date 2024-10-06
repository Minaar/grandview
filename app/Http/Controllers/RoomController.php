<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoomType;

class RoomController extends Controller
{
    public function index ()
    {
        return view('rooms.index');
    }

    public function add ()
    {
        $types = RoomType::all();
        return view('rooms.add', compact(['types']));
    }

    public function store (Request $request)
    {
        dd($request);
        return view('rooms.store');
    }

    public function guest ()
    {
        return view('rooms.guest');
    }
}
