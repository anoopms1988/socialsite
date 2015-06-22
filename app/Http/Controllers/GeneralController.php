<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use App\Assistance;
use App\Company;


//use Illuminate\Support\Facades\Session;

use App\Http\Requests\AssistanceRequest;

class GeneralController extends Controller
{
    
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
    public function listAssistanceDetails($param = null) {
        $company = Company::lists('name', 'id');
        $assistanceDetails = Assistance::where('is_active', 1)->paginate(Config::get('constants.paginationCount'));
        return view('general.listassistancedetails', compact('assistanceDetails', 'company'));
    }
    
    /**
     * Add roadside assistance details
     *
     * @return void
     */
    public function addAssistanceDetails(Request $request) {
        $Assistance=new Assistance();
        $Assistance->company_id=$request->get('company');
        $Assistance->contact_number=$request->get('contact_number');
        $Assistance->address=$request->get('contact_address');
        $Assistance->save();
        return redirect('admin/assistance' );
    }
}
