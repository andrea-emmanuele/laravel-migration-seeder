<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Travel;

class PacketController extends Controller
{
    public function showAll() {
        $travels = Travel::all();

        return view('packets', compact('travels'));
    }
}
