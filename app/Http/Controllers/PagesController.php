<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donor;
use App\BloodType;
use App\Community;
use App\BloodRequest;
use App\Donation;
use App\BloodDrive;

class PagesController extends Controller
{
    public function index() {
        $community = count(Community::all());
        $donors = count(Donor::all());
        $blood_requests = count(BloodRequest::all());
        $donations = count(Donation::all());
        $blood_drive = BloodDrive::all();
        return view('index', 
        [
            'com_count' => $community, 
            'donors' => $donors, 
            'blood_requests' => $blood_requests,
            'donations' => $donations,
            'blood_drive' => $blood_drive
        ]);
    }

    public function donate() {
        $donor = Donor::orderBy('id')->get();
        return response()->json($donor, 200);
    }

    public function blood() {
        $blood = BloodType::find(3);
        $blood_one = $blood->community->get();
        return response()->json($blood_one, 200);
    }

    public function bloodDrive() {
        $blood_drive = BloodDrive::all();
        return view('blood-drive',['blood_drive' => $blood_drive]);
    }

}
