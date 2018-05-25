<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Bus;
use App\User;
use App\Http\Requests\BusRequest;

class BusController extends Controller {

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
        $buses = Bus::where('createdBy', '=', $this->userId)->get();
        return view('admin.bus')->with('userName', $this->userName)->with('userRoles', $this->userRoles)
                        ->with('busCount', $this->busCount)->with('buses', $buses);
    }

    public function addbus() {
        if ($this->busCount == 0) {
            return redirect()->route('buses');
        }
        return view('admin.addbus')->with('userName', $this->userName)->with('userRoles', $this->userRoles)->with('busCount', $this->busCount);
    }

    public function savebus(BusRequest $request) {
        if ($this->busCount == 0) {
            return redirect()->route('buses');
        }
        $newBus = new Bus;
        $newBus->busNumber = $request->busNumber;
        $newBus->regNumber = $request->regNumber;
        $newBus->capacity = $request->capacity;
        $newBus->route = $request->route;
        $newBus->driverName = $request->driverName;
        $newBus->driverNumber = $request->driverNumber;
        $newBus->driverAddress = $request->driverAddress;
        $newBus->driverCnic = $request->driverCnic;
        $newBus->createdBy = $this->userId;
        $newBus->save();
        //update user count
        User::where('id', $this->userId)->update(['busCount' => ($this->busCount - 1)]);
        $request->session()->flash('message', 'Bus Created!');
        return redirect()->route('buses');
    }

    public function deletebus(Request $request) {
        Bus::where('busId', '=', $request->busId)->where('createdBy', '=', $this->userId)->delete();
    }

}
