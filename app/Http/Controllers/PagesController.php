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
        $requests = BloodRequest::paginate(15);
        $donations = Donation::all();
        $blood_drive = BloodDrive::all();
        $blood_type = BloodType::all();
        return view('index', 
        [
            'communities' => $communities, 
            'donors' => $donors, 
            'blood_requests' => $blood_requests,
            'requests' => $requests,
            'donations' => $donations,
            'blood_drive' => $blood_drive,
            'blood_type' => $blood_type
        ]);
    }

    public function donate() {
        // $donor = Donor::orderBy('id')->get();
        // return response()->json($donor, 200);

        return view('response');
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
        $blood_type = BloodType::all();
        $communities = Community::all();
        $donors = Donor::paginate(9);
        return view('find-donors',
        [
            'communities' => $communities, 
            'blood_type' => $blood_type,
            'donors' => $donors
        ]);
    }

    public function addDonor(Request $request) {
        $donor = new Donor;
        $result = "Ooops. Looks like you have already requested to be a donor.";
        $checkDonor = Donor::where('phone', $request->phone)->first();
        if($checkDonor === null) {
            $donor->firstname = $request->firstname;
            $donor->lastname = $request->lastname;
            $donor->phone = $request->phone;
            $donor->community_id = $request->community_id;
            $donor->date_of_birth = $request->date_of_birth;
            $donor->blood_type_id = $request->blood_type_id;
            $donor->badge_id = 1;
            $donor->status = 0;

            $donor->save();

            $result = "Thanks for your request. You will be added to our donor list shortly";

            return view('response',['result' => $result]);
        } 
        return view('response',['result' => $result]);
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

    public function guide() {
        return view('guide');
    }

    public function searchDonor(Request $request) {
        $blood_type = BloodType::all();
        $communities = Community::all();
        $blood_type_id = $request->blood_type_id;
        $community_id = $request->community_id;

        $donors = Donor::all();

        // if($blood_type_id != "*") {
        //     $donors->where('blood_type_id','=',$blood_type_id);
        // }

        // if($community_id != "*") {
        //     $donors->where('community_id','=',$community_id);
        // }

        // if(!empty($donors)) {
        //     $donors->paginate(9);
        // } else {
        //     $donors = null;
        // }
        

        $donors = Donor::where('blood_type_id','=',$blood_type_id)->where('community_id','=',$community_id)->paginate(9);

        // $donors = Donor::paginate(9);
        return view('find-donors',
        [
            'communities' => $communities, 
            'blood_type' => $blood_type,
            'donors' => $donors
        ]);

        // dd($donor);
    }

}
