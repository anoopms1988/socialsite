<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Http\Request;
use App\Variant;
use App\Company;

class VariantController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        try {
            $Variant = Variant::where('is_active', 1)->paginate(Config::get('constants.paginationCount'));
            return View('variant.index', compact('Variant'));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $companies =Company::all();
        $variant =  new Variant();
        return view('variant.create',compact('companies','variant'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($variantId = null)
    {
        try {
            if ($variantId) {
                $Variant = Variant::findOrFail($variantId);
                $Variant->is_active = 0;
                if ($Variant->update()) {
                    return response()->json(['status' => 'success']);
                } else {
                    return response()->json(['status' => 'failure']);
                }
            } else {
                return response()->json(['status' => 'failure']);
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
