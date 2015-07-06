<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use App\Assistance;
use App\Company;
use App\LoanEnquiry;
use App\Cartype;
use App\Http\Requests\AssistanceRequest;
use App\Dealer;
use App\City;

class GeneralController extends Controller
{
    
    /**
     * Create a new controller instance.
     * @return void
     */
    public function __construct()
    {
        $this->middleware( 'auth' );
    }
    
    /**
     * List roadside assistance details
     *
     * @return void
     */
    public function listAssistanceDetails( $param             = null )
    {
        $company           = Company::lists( 'name', 'id' );
        $assistanceDetails = Assistance::where( 'is_active', 1 )->paginate( Config::get( 'constants.paginationCount' ) );
        return view( 'general.listassistancedetails', compact( 'assistanceDetails', 'company' ) );
    }
    
    /**
     * Add roadside assistance details
     *
     * @return void
     */
    public function addAssistanceDetails( Request $request )
    {
        $Assistance                 = new Assistance();
        $Assistance->company_id     = $request->get( 'company' );
        $Assistance->contact_number = $request->get( 'contact_number' );
        $Assistance->address        = $request->get( 'contact_address' );
        $Assistance->save();
        return redirect( 'admin/assistance' );
    }
    
    /**
     * Delete assistance details
     *
     * @return void
     */
    public function deleteAssistanceDetails( Request $request )
    {
        $assistanceId          = $request->get( 'id' );
        $Assistance            = Assistance::find( $assistanceId );
        $Assistance->is_active = 0;
        if( $Assistance->update() ) {
            return response()->json( ['status' => 'success'] );
        } 
        else {
            return response()->json( ['status' => 'failure'] );
        }
    }
    
    /**
     * List videos
     *
     * @return void
     */
    
    public function listVideos( Request $request )
    {
        return view( 'general.listvideos' );
    }
    
    /**
     * function to edit assistance details
     * @param  Request $request
     * @param  int     $id
     * @return null
     */
    public function editAssistanceDetails( Request $request )
    {
        $company    = Company::lists( 'name', 'id' );
        $Assistance = Assistance::find( $request->id );
        return view( 'general.editassistance', compact( 'Assistance', 'company' ) );
    }
    
    /**
     * To update assistance details
     * @param  Request $request
     * @return view
     */
    public function updateAssistanceDetails( Request $request )
    {
        $Assistance                 = Assistance::find( $request->assistance_id );
        $Assistance->contact_number = $request->contact_number;
        $Assistance->company_id     = $request->company;
        $Assistance->address        = $request->contact_address;
        $Assistance->update();
        return redirect( 'admin/assistance' );
    }
    
    /**
     * To list loan enquiry details
     * @param  Request $request
     * @return view
     */
    public function listLoanEnquiryDetails( Request $request )
    {
        $loanEnquiryDetails = LoanEnquiry::where( 'is_active', 1 )->paginate( Config::get( 'constants.paginationCount' ) );
        return view( 'general.listloanenquiries', compact( 'loanEnquiryDetails' ) );
    }
    
    /**
     * To get specific loan enquiry details
     * @param  Request $request
     * @param  int     $loanId
     * @return view
     */
    public function specificLoanEnquiryDetails( Request $request, $loanId )
    {
        $specificLoanEnquiry = LoanEnquiry::find( $loanId );
        $carType             = Cartype::lists( 'type', 'id' );
        return view( 'general.specificloanenquiry', compact( 'specificLoanEnquiry', 'carType' ) );
    }
    
    /**
     * function to insert details into db
     * @param Request $request
     * @return view
     */
    public function listDealers( Request $request )
    {
        $company = Company::lists( 'name', 'id' );
        $city    =City::lists( 'name', 'id' );
        $dealers = Dealer::where( 'is_active', 1 )->paginate( Config::get( 'constants.paginationCount' ) );
        return view( 'general.listdealers', compact( 'dealers','company','city' ) );
    }
    
    /**
     * function to insert dealer details
     * @param Request $request
     */
    public function addDealerDetails( Request $request )
    {
        // code...
        
    }
}
