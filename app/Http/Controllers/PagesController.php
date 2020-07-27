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
        $communities = Community::all();
        $donors = Donor::all();
        $blood_requests = BloodRequest::all();
        $donations = Donation::all();
        $blood_drive = BloodDrive::all();
        $blood_type = BloodType::all();
        return view('index', 
        [
            'communities' => $communities, 
            'donors' => $donors, 
            'blood_requests' => $blood_requests,
            'donations' => $donations,
            'blood_drive' => $blood_drive,
            'blood_type' => $blood_type
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

    public function contact() {
        return view('contact');
    }

    public function donors() {
        return view('find-donors');
    }

    public function about() {
        $communities = Community::all();
        $donors = Donor::all();
        $blood_requests = BloodRequest::all();
        $donations = Donation::all();
        $blood_drive = BloodDrive::all();
        $blood_type = BloodType::all();
        return view('about', 
        [
            'communities' => $communities, 
            'donors' => $donors, 
            'blood_requests' => $blood_requests,
            'donations' => $donations,
            'blood_drive' => $blood_drive,
            'blood_type' => $blood_type
        ]);
    }

}
