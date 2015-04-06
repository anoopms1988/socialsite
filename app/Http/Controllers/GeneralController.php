<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use App\Assistance;

class GeneralController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * List roadside assistance details
     *
     * @return void
     */
    public function listAssistanceDetails($param=null) {
        $assistanceDetails = Assistance::paginate(Config::get('constants.paginationCount'));
        return view('general.listassistancedetails',compact('assistanceDetails'));
    }
}
