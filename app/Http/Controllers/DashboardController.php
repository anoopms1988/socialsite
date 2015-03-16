<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Company,
    App\Car,
    App\Cartype;
use Validator;
use Carbon\Carbon;

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
            $carTypes = Cartype::all();
            $cardetailsSubmit = $request->input('addcar_submit');
            if (isset($cardetailsSubmit) && !empty($cardetailsSubmit)) {
                $carName = $request->input('carname');
                $companyId = $request->input('company');
                $carTypeId = $request->input('cartype');
                $validator = Validator::make(
                                [
                            'car' => $carName,
                            'company' => $companyId,
                            'cartype' => $carTypeId
                                ], [
                            'car' => 'required',
                            'company' => 'required',
                            'cartype' => 'required'
                                ]
                );
                if ($validator->fails()) {
                    return redirect('admin/dashboard')->withErrors($validator);
                } else {
                    $Car = new Car;
                    $Car->name = $carName;
                    $Car->company_id = $companyId;
                    $Car->type_id = $carTypeId;
                    $Car->created_at = Carbon::now();
                    $Car->updated_at = Carbon::now();
                    $Car->save();
                    return redirect('admin/dashboard')->with('successmessage', 'Car details successfully inserted');
                }
            } else {
                return view('dashboard.dashboard', compact('companies', 'carTypes'));
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    /**
     * Display cars list
     *
     * @return view
     */
    public function listCars(Request $request)
    {
        try {
            $cars = Car::paginate(2);
            return view('dashboard.listcars', compact('cars'));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
