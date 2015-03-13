<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Company,
    App\Car;
use Validator;

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
     * Landing page and add new cars
     *
     * @return view
     */
    public function viewDashboard(Request $request)
    {

        try {
            $companies = Company::all();
            $cardetailsSubmit = $request->input('addcar_submit');
            if (isset($cardetailsSubmit) && !empty($cardetailsSubmit)) {
                $carName = $request->input('carname');
                $companyId = $request->input('company');
                $validator = Validator::make(
                                [
                            'car' => $carName,
                            'company' => $companyId
                                ], [
                            'car' => 'required',
                            'company' => 'required'
                                ]
                );
                if ($validator->fails()) {
                    return redirect('admin/dashboard')->withErrors($validator);
                } else {
                    $Car = new Car;
                    $Car->name = $carName;
                    $Car->company_id = $companyId;
                    $Car->save();
                    return redirect('admin/dashboard')->with('successmessage', 'Car details successfully inserted');
                }
            } else {
                return view('dashboard.dashboard', compact('companies'));
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    /**
     *Display cars list
     *
     * @return view
     */
    public function listCars(Request $request)
    {
        return view('dashboard.listcars');
    }
}
