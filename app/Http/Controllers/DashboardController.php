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
use Illuminate\Support\Facades\Config;
use App\Http\Requests\CarManipulationRequest;

class DashboardController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Landing page and add new cars
     *
     * @return view
     */
    public function viewDashboard(Request $request) {
        try {
            $companies = Company::all();
            $carTypes = Cartype::all();
            $Car = new Car;
            return view('dashboard.dashboard', compact('companies', 'carTypes', 'Car'));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    /**
     * Add new cars
     *
     * @return view
     */
    public function addCar(CarManipulationRequest $request) {
        try {
            $Car = new Car;
            $carName = $request->input('carname');
            $companyId = $request->input('company');
            $carTypeId = $request->input('cartype');
            $Car->name = $carName;
            $Car->company_id = $companyId;
            $Car->type_id = $carTypeId;
            $Car->created_at = Carbon::now();
            $Car->updated_at = Carbon::now();
            $Car->save();
            return redirect('admin/dashboard')->with('successmessage', 'Car details successfully inserted');
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    /**
     * Display cars list
     *
     * @param Request
     * @return view
     */
    public function listCars(Request $request) {
        try {
            $cars = Car::where('is_active', 1)->paginate(Config::get('constants.paginationCount'));
            return view('dashboard.listcars', compact('cars'));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    /**
     * Delete specific car
     *
     * @param Request
     * @return view
     */
    public function deleteSpecificCar(Request $request) {
        try {
            $carId = $request->get('id');
            $car = Car::findOrFail($carId);
            $car->is_active = 0;
            if ($car->update()) {
                return response()->json(['status' => 'success']);
            } else {
                return response()->json(['status' => 'failure']);
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    /**
     * Edit specific car
     *
     * @param Request
     * @return view
     */
    public function showCar(Request $request, $carId = NULL) {
        $companies = Company::all();
        $carTypes = Cartype::all();
        $Car = Car::findOrFail($carId);
        return View('dashboard.editcar', compact('companies', 'carTypes', 'Car'));
    }

    /**
     * Get specific company cars
     *
     * @param Request
     * @return view
     */
    public function getSpecificCompanyCars(Request $request) {
        $companyId = $request->get('id');
        $cars = Car::where('company_id', $companyId)->get();
        $arrayCars = $cars->toArray();
        if (count($arrayCars) > 0) {
            return response()->json($arrayCars);
        }
    }

}
