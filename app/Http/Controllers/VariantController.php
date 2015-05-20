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
            return view('variant.show', compact('variant', 'safetyFeatures', 'interiorFeatures'));
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
}
