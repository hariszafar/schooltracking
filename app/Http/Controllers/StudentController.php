<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Student;
use App\Bus;
use App\Http\Requests\StudentRequest;

class StudentController extends Controller {

    public $user;
    public $userId;
    public $userName;
    public $userEmail;
    public $userRoles;
    public $busCount;

    public function __construct() {
        $this->middleware(function ($request, $next) {
                    $this->user = Auth::user();
                    $this->userId = $this->user->id;
                    $this->userName = $this->user->name;
                    $this->userEmail = $this->user->email;
                    $this->userRoles = $this->user->userRole;
                    $this->busCount = $this->user->busCount;
                    return $next($request);
                });
    }

    public function index() {
        $students = Student::where('createdBy', '=', $this->userId)->get();
        return view('admin.students')->with('userName', $this->userName)->with('userRoles', $this->userRoles)
                ->with('busCount', $this->busCount)->with('students', $students);
    }

    public function addstudent() {
        $buses = Bus::where('createdBy', '=', $this->userId)->get();
        return view('admin.addstudent')->with('userName', $this->userName)->with('userRoles', $this->userRoles)
                ->with('busCount', $this->busCount)->with('buses', $buses);
    }

    public function savestudent(StudentRequest $request) {
        $newStudent = new Student;
        $newStudent->studentName = $request->studentName;
        $newStudent->studentAddress = trim($request->studentAddress);
        $newStudent->studentNumber = $request->studentNumber;
        $newStudent->studentClass = $request->studentClass;
        $newStudent->studentSection = $request->studentSection;
        $newStudent->services = $request->services;
        $newStudent->busId = $request->busId;
        $newStudent->createdBy = $this->userId;
        $newStudent->save();
        $request->session()->flash('message', 'Student Created!');
        return redirect()->route('students');
    }

}
