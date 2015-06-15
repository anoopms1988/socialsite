<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Http\Request;
use App\Variant;
use App\Company;
use App\Http\Requests\VariantManipulationRequest;
use Carbon\Carbon;
use App\SafetyFeatures;
use App\InteriorFeatures;
use App\ExteriorFeatures;

class VariantController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        try {
            $Variant = Variant::where('is_active', 1)->paginate(Config::get('constants.paginationCount'));
            return View('variant.index', compact('Variant'));
        }
        catch(Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        try {
            $companies = Company::all();
            $variant = new Variant();
            return view('variant.create', compact('companies', 'variant'));
        }
        catch(Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(VariantManipulationRequest $request) {
        try {
            $variant = new Variant();
            $variant->car_id = $request->get('car');
            $variant->name = $request->get('name');
            $variant->type = $request->get('type');
            $variant->is_active = 1;
            $variant->created_at = Carbon::now();
            $variant->updated_at = Carbon::now();
            if ($variant->save()) {
                return redirect()->route('admin.variant.create')->with('message', 'Variant successfully added');
            } 
            else {
                return redirect()->route('admin.variant.create')->with('message', 'Oops something is wrong');
            }
        }
        catch(Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        try {
            $variant = Variant::findOrFail($id);
            $safetyFeatures = SafetyFeatures::findOrFail($id);
            $interiorFeatures = InteriorFeatures::findOrFail($id);
            $exteriorFeatures = ExteriorFeatures::findOrFail($id);
            return view('variant.show', compact('variant', 'safetyFeatures', 'interiorFeatures', 'exteriorFeatures'));
        }
        catch(Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        try {
            $companies = Company::all();
            $variant = Variant::findOrFail($id);
            $specifiedCompany = $variant->car()->first()->company()->first()->id;
            $specifiedCar = $variant->car()->first()->id;
            $specifiedCarName = $variant->car()->first()->name;
            return view('variant.edit', compact('variant', 'companies', 'specifiedCompany', 'specifiedCar', 'specifiedCarName'));
        }
        catch(Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(VariantManipulationRequest $request, $id) {
        try {
            $variant = Variant::findOrFail($id);
            $variant->car_id = $request->get('car');
            $variant->name = $request->get('name');
            $variant->type = $request->get('type');
            $variant->is_active = 1;
            $variant->created_at = Carbon::now();
            $variant->updated_at = Carbon::now();
            if ($variant->update()) {
                return redirect()->route('admin.variant.index')->with('message', 'Variant successfully updated');
            } 
            else {
                return redirect()->route('admin.variant.index')->with('message', 'Oops something is wrong');
            }
        }
        catch(Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($variantId = null) {
        try {
            if ($variantId) {
                $Variant = Variant::findOrFail($variantId);
                $Variant->is_active = 0;
                if ($Variant->update()) {
                    return response()->json(['status' => 'success']);
                } 
                else {
                    return response()->json(['status' => 'failure']);
                }
            } 
            else {
                return response()->json(['status' => 'failure']);
            }
        }
        catch(Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    /**
     * Update the various features of cars(Safety,Internal and External features)
     *
     * @param  int  $featureType,array $featuresList
     * @return Response
     */
    public function updateFeatures(Request $request) {
        try {
            $featureType = $request->get('featureType');
            $variantId = $request->get('variantId');
            
            if ($featureType == 1) {
                $safetyFeatures = SafetyFeatures::findOrFail($variantId);
                $safetyFeatures->abs = $request->get('abs');
                $safetyFeatures->airbags = $request->get('airbags');
                $safetyFeatures->immobilizer = $request->get('immobilizer');
                $safetyFeatures->hill_control = $request->get('hillcontrol');
                $safetyFeatures->ebd = $request->get('ebd');
                $safetyFeatures->central_locking = $request->get('central_locking');
                $safetyFeatures->child_safety_lock = $request->get('child_safety_lock');
                $safetyFeatures->traction_control = $request->get('traction_control');
                $safetyFeatures->hill_descent = $request->get('hill_descent');
                $safetyFeatures->esp = $request->get('esp');
                $safetyFeatures->wheeldrive = $request->get('wheeldrive');
                $safetyFeatures->update();
                return redirect('admin/variant/' . $variantId . '#features');
            } 
            elseif ($featureType == 2) {
                $interiorFeatures = InteriorFeatures::findOrFail($variantId);
                $interiorFeatures->power_steering = $request->get('power_steering');
                $interiorFeatures->power_windows = $request->get('power_windows');
                $interiorFeatures->anti_pinch = $request->get('anti_pinch');
                $interiorFeatures->air_con = $request->get('air_con');
                $interiorFeatures->audio_system = $request->get('audio_system');
                $interiorFeatures->electric_mirrors = $request->get('electric_mirrors');
                $interiorFeatures->deffoger = $request->get('deffoger');
                $interiorFeatures->leather_seats = $request->get('leather_seats');
                $interiorFeatures->reversing_camera = $request->get('reversing_camera');
                $interiorFeatures->bluetooth_connectivity = $request->get('bluetooth_connectivity');
                $interiorFeatures->driver_seat_height_adjust = $request->get('driver_seat_height_adjust');
                $interiorFeatures->power_seats = $request->get('power_seats');
                $interiorFeatures->cruise_control = $request->get('cruise_control');
                $interiorFeatures->remote_boot_release = $request->get('remote_boot_release');
                $interiorFeatures->chilled_glovebox = $request->get('chilled_glovebox');
                $interiorFeatures->rear_ac_vents = $request->get('rear_ac_vents');
                $interiorFeatures->keyless_start_stop_button = $request->get('keyless_start_stop_button');
                $interiorFeatures->electric_foldable_mirrors = $request->get('electric_foldable_mirrors');
                $interiorFeatures->tachometer = $request->get('tachometer');
                $interiorFeatures->arm_rest = $request->get('arm_rest');
                $interiorFeatures->steering_controls = $request->get('steering_controls');
                $interiorFeatures->driver_info_display = $request->get('driver_info_display');
                $interiorFeatures->foot_rest = $request->get('foot_rest');
                $interiorFeatures->update();
                return redirect('admin/variant/' . $variantId . '#features');
            } 
            elseif ($featureType == 3) {
                $exteriorFeatures = ExteriorFeatures::findOrFail($variantId);
                $exteriorFeatures->keyless_entry = $request->get('keyless_entry');
                $exteriorFeatures->sunroof = $request->get('sunroof');
                $exteriorFeatures->rear_wiper = $request->get('rear_wiper');
                $exteriorFeatures->rain_sensing_wipers = $request->get('rain_sensing_wipers');
                $exteriorFeatures->alloy_wheels = $request->get('alloy_wheels');
                $exteriorFeatures->roof_rails = $request->get('roof_rails');
                $exteriorFeatures->projector_lamps = $request->get('projector_lamps');
                $exteriorFeatures->fog_lights = $request->get('fog_lights');
                $exteriorFeatures->moon_roof = $request->get('moon_roof');
                $exteriorFeatures->auto_headlamps = $request->get('auto_headlamps');
                $exteriorFeatures->steel_rims = $request->get('steel_rims');
                $exteriorFeatures->rear_spoiler = $request->get('rear_spoiler');
                $exteriorFeatures->chrome_grille = $request->get('chrome_grille');
                $exteriorFeatures->daytime_running_lamps = $request->get('daytime_running_lamps');
                $exteriorFeatures->update();
                return redirect('admin/variant/' . $variantId . '#features');
            }
        }
        
        catch(Exception $e) {
        }
    }
    
    public function updateFuelEfficiency(Request $request) {
        $variantId = $request->get('variantId');
    }
}
