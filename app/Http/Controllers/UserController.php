<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Requests\UserRequest;

class UserController extends Controller {

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
        $users = User::where('createdBy', '=', $this->userId)->get();
        return view('admin.users')->with('userName', $this->userName)->with('userRoles', $this->userRoles)->with('users', $users);
    }

    public function adduser() {
        return view('admin.adduser')->with('userName', $this->userName)->with('userRoles', $this->userRoles);
    }
    
    public function saveuser(UserRequest $request) {
        $newUser = new User;
        $newUser->name = $request->name;
        $newUser->email = $request->email;
        $newUser->password = bcrypt($request->password);
        $newUser->userRole = $request->userRole;
        $newUser->isVerified = 1;
        $newUser->approved = 1;
        $newUser->createdBy = $this->userId;
        $newUser->save();
        $request->session()->flash('message', 'User Created!');
        return redirect()->route('users');
    }

}
