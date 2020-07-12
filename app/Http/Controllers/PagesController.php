<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donor;
use App\BloodType;

class PagesController extends Controller
{
    public function index() {
        return view('index');
    }

    public function donate() {
        $donor = Donor::orderBy('id')->get();
        return response()->json($donor, 200);
    }

    public function blood($type) {
        $donor = BloodType::where('name', $type)->donor;
        return response()->json($donor, 200);
    }
}
