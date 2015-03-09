<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Validator,
    Auth,
    Request;

//use Symfony\Component\Security\Core\Validator;

class HomeController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Home Controller
      |--------------------------------------------------------------------------
      |
      | This controller renders your application's "dashboard" for users that
      | are authenticated. Of course, you are free to change or remove the
      | controller as you wish. It is just here to get your app started!
      |
     */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        //  $this->middleware('auth');
    }

    /**
     * Login to the user.
     *
     * @return Response
     */
    public function index() {
        return view('login.login');
    }

    /**
     * Manual authentication
     */
    public function authenticate() {
        try {
            $email = Request::input('email');
            $password = Request::input('password');
            $validator = Validator::make(
                            [
                        'password' => $password,
                        'email' => $email
                            ], [
                        'password' => 'required|min:8',
                        'email' => 'required|email'
                            ]
            );
            if ($validator->fails()) {
                return redirect('/')->withErrors($validator);
            } else {
                if (Auth::attempt(['email' => $email, 'password' => $password])) {
                    return redirect()->intended('dashboard');
                } else {
                    return redirect('/')->with('loginerror', 'User dont exist');
                    ;
                }
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    /**
     * @display dashboard
     */
    public function viewDashboard() {
        return view('home.dashboard');
    }
    

}
