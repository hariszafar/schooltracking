<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\User;

class AdminController extends Controller {

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
        return view('admin.dashboard')->with('userName', $this->userName)->with('userRoles', $this->userRoles);
    }

}
