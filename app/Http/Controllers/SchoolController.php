<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\User;
use App\School;
use App\Http\Requests\SchoolRequest;

class SchoolController extends Controller {

    public $user;
    public $userId;
    public $userName;
    public $userEmail;
    public $userRoles;

    public function __construct() {
        $this->middleware(function ($request, $next) {
                    $this->user = Auth::user();
                    $this->userId = $this->user->id;
                    $this->userName = $this->user->name;
                    $this->userEmail = $this->user->email;
                    $this->userRoles = $this->user->userRole;
                    return $next($request);
                });
    }

    public function index() {
        $school = School::with('principle')->where('createdBy', '=', $this->userId)->get();
        return view('admin.school')->with('userName', $this->userName)->with('userRoles', $this->userRoles)->with('school', $school);
    }

    public function addschool() {
        $users = User::where('userRole', '=', 2)->where('isVerified', '=', 1)->where('approved', '=', 1)->get();
        return view('admin.addschool')->with('userName', $this->userName)->with('userRoles', $this->userRoles)->with('users', $users);
    }

    public function saveschool(SchoolRequest $request) {
        $newSchool = new School;
        $newSchool->schoolName = $request->schoolName;
        $newSchool->schoolAddress = $request->schoolAddress;
        $newSchool->schoolNumber = $request->schoolNumber;
        $newSchool->userId = $request->userId;
        $newSchool->createdBy = $this->userId;
        $newSchool->save();
        //update user count
        User::where('id', $request->userId)->update(['assignedBuses' => $request->busCount, 'busCount' => $request->busCount]);
        $request->session()->flash('message', 'School Created!');
        return redirect()->route('school');
    }

//    public function schoolbuslist() {
//        $school = School::with('buses.bus')->where('createdBy', '=', $this->userId)->get();
////        dd($school[0]->buses[0]->bus);
//        return view('admin.schoolbuslist')->with('userName', $this->userName)->with('userRoles', $this->userRoles)->with('school', $school);
//    }

}
