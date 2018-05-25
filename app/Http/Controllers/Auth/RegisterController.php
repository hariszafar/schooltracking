<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\UserModel;
use Illuminate\Http\Request;
use Mail;

class RegisterController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Register Controller
      |--------------------------------------------------------------------------
      |
      | This controller handles the registration of new users as well as their
      | validation and creation. By default this controller uses a trait to
      | provide this functionality without requiring any additional code.
      |
     */

use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = 'login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data) {
        $messages = [
            'email.unique' => 'Email has already been taken.',
        ];
        $user = '';
        if (isset($data['email']) && $data['email']) {
            $user = UserModel::where('users.email', '=', $data['email'])->get();
            if (count($user) > 0 && $user[0]->isVerified == 0) {
                $messages = [
                    'email.unique' => 'Your account is not verified. Please check your inbox for email verification.',
                ];
            }
        }
        return Validator::make($data, [
                    'name' => 'required|string|max:255',
                    'email' => 'required|string|email|max:255|unique:users',
                    'password' => 'required|string|min:6|confirmed',
                        ], $messages);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data) {
        $characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
        $token = time();
        $max = strlen($characters) - 1;
        for ($i = 0; $i < 20; $i++) {
            $token .= $characters[mt_rand(0, $max)];
        }
        $user = User::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'password' => bcrypt($data['password']),
                    'userRole' => 1,
                    'isVerified' => 0,
                    'approved' => 0,
                    'createdBy' => 0,
                    'token' => $token
        ]);
        $userdata = [
            'name' => $data['name'],
            'email' => $data['email'],
            'token' => $token,
        ];
        $data = ['data' => $userdata,
            'email' => $data['email'],
            'subject' => 'Welcome to School Tracking',
        ];
        //TODO: enable email functionality when uploaded on server
//        Mail::send('emails.verificationEmail', $data, function ($message) use ($data) {
//                    $message->from(env('MAIL_NO_REPLY', 'hariszafar37@gmail.com'), 'School Tracking');
//                    $message->to($data['email']);
//                    $message->replyTo(env('MAIL_NO_REPLY', 'hariszafar37@gmail.com'), 'School Tracking');
//                    $message->subject($data['subject']);
//                });
        return $user;
    }

    public function Register(Request $request) {
        $validator = $this->validator($request->all());
        if ($validator->fails()) {
            $this->throwValidationException(
                    $request, $validator
            );
        } else {
            $this->create($request->all());
        }
        $msg = 'Request submitted. Please check your inbox for email verification.';
        \Session::flash('message', $msg);
        return redirect('/login');
    }

}
