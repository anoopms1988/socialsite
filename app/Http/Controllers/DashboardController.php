<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Company,
    App\Car;


class DashboardController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Create a new controller instance.
     *
     * @return view
     */
    public function viewDashboard(Request $request)
    {
        
        $companies = Company::all();
        $cardetailsSubmit=$request->input('addcar_submit');
        if(isset($cardetailsSubmit)&&!empty($cardetailsSubmit)){
            $carName=$request->input('carname');
            $companyId=$request->input('company');
            $Car =new Car;
            $Car->name=$carName;
            $Car->company_id=$companyId;
            $Car->save();
            return redirect('admin/dashboard');
        }else{      
            return view('dashboard.dashboard',  compact('companies'));
        }       
    }

}
