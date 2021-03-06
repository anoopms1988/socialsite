<?php
namespace App\Http\Controllers\site;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Http\Request;
use App\Car;
use App\Company;
use App\Variant;

class CarController extends Controller
{
    
    /**
     * list specific cars of a company
     * @param  int $companyId
     * @return view
     */
    public function index( $companyId    = null )
    {
        $specificCars = Car::where( 'is_active', 1 )->where( 'company_id', $companyId )->paginate( Config::get( 'constants.paginationCount' ) );
        $company      = Company::find( $companyId );
        return view( 'site.car.listcars', compact( 'specificCars', 'company' ) );
    }
    
    /**
     * to view specific car and its variants
     * @param  int $carId
     * @return view
     */
    public function viewSpecificCar( $carId    = null )
    {
        $variants = Variant::where( 'is_active', 1 )->where( 'car_id', $carId )->get();
        $car      = Car::find( $carId );
        return view( 'site.car.listvariants', compact( 'variants', 'car' ) );
    }
}
