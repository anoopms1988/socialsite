@extends('layout.layout')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h4 class="page-header">Variant management</h4>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Variant details
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <!-- Nav tabs -->
                <ul class="nav nav-pills">

                    <li class="active"><a data-toggle="tab" href="#variant_details" aria-expanded="true">Details</a>
                    </li>
                    <li class=""><a data-toggle="tab" href="#features" aria-expanded="false">Features</a>
                    </li>
                    <li class=""><a data-toggle="tab" href="#image" aria-expanded="false">Image</a>
                    </li>    
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">

                    <div id="variant_details" class="tab-pane fade active in">
                        <b>Company:</b>{{{$variant->car()->first()->company()->first()->name or ''}}}
                        <br>
                        <b>Car:</b>{{{$variant->car()->first()->name or ''}}}
                        <br>
                        <b>variant:</b>{{{$variant->name or ''}}}
                        <br>
                    </div>
                    <div id="features" class="tab-pane fade">
                        <div class="panel panel-default">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#safetyfeatures" aria-expanded="true">Safety Features</a>
                                </li>
                                <li class=""><a data-toggle="tab" href="#interiorfeatures" aria-expanded="false">Interior Features</a>
                                </li>
                                <li class=""><a data-toggle="tab" href="#exteriorfeatures" aria-expanded="false">Exterior Features</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div id="safetyfeatures" class="tab-pane fade active in">
                                {!!Form::open(array('action' => 'VariantController@updateFeatures')) !!}
                                    <input type="hidden" name="featureType" value='1'>
                                    <input type="hidden" name="variantId" value={{{ $variant->id or '' }}}>
                                    <h4>Safety Features</h4>
                                    <p>
                                    <div class="col-lg-6">
                                        <div class="form-group">                                          
                                            <label>ABS</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="abs" @if(isset($safetyFeatures->abs)&&$safetyFeatures->abs == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0" name="abs" @if(isset($safetyFeatures->abs)&&$safetyFeatures->abs == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                         <div class="form-group">
                                            <label>Airbags</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="airbags" @if(isset($safetyFeatures->airbags)&&$safetyFeatures->airbags == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="airbags" @if(isset($safetyFeatures->airbags)&&$safetyFeatures->airbags == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Immobilizer</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="immobilizer" @if(isset($safetyFeatures->immobilizer)&&$safetyFeatures->immobilizer == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="immobilizer" @if(isset($safetyFeatures->immobilizer)&&$safetyFeatures->immobilizer == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Hill Control</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="hillcontrol" @if(isset($safetyFeatures->hill_control)&&$safetyFeatures->hill_control == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="hillcontrol" @if(isset($safetyFeatures->hill_control)&&$safetyFeatures->hill_control == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>EBD</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="ebd" @if(isset($safetyFeatures->ebd)&&$safetyFeatures->ebd == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="ebd" @if(isset($safetyFeatures->ebd)&&$safetyFeatures->ebd == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Central Locking</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="central_locking" @if(isset($safetyFeatures->central_locking)&&$safetyFeatures->central_locking == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="central_locking" @if(isset($safetyFeatures->central_locking)&&$safetyFeatures->central_locking == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Child Safety Lock</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="child_safety_lock" @if(isset($safetyFeatures->child_safety_lock)&&$safetyFeatures->child_safety_lock == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="child_safety_lock" @if(isset($safetyFeatures->child_safety_lock)&&$safetyFeatures->child_safety_lock == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Traction Control</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="traction_control" @if(isset($safetyFeatures->traction_control)&&$safetyFeatures->traction_control == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="traction_control" @if(isset($safetyFeatures->traction_control)&&$safetyFeatures->traction_control == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Hill Descent</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="hill_descent" @if(isset($safetyFeatures->hill_descent)&&$safetyFeatures->hill_descent == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="hill_descent" @if(isset($safetyFeatures->hill_descent)&&$safetyFeatures->hill_descent == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Esp</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="esp" @if(isset($safetyFeatures->esp)&&$safetyFeatures->esp == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="esp" @if(isset($safetyFeatures->esp)&&$safetyFeatures->esp == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                         <div class="form-group">
                                            <label>4wd</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="wheeldrive" @if(isset($safetyFeatures->wheeldrive)&&$safetyFeatures->wheeldrive == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="wheeldrive" @if(isset($safetyFeatures->wheeldrive)&&$safetyFeatures->wheeldrive == 0) checked="true" @endif>No
                                            </label>
                                        </div> 
                                         <input type="submit" class="btn btn-primary" name="safetyFeaturesSubmit" value="Submit">
                                    </div>
                                    </p>

                                {!!Form::close()!!}
                                </div>

                                <div id="interiorfeatures" class="tab-pane fade">

                                 {!!Form::open(array('action' => 'VariantController@updateFeatures')) !!}
                                   <input type="hidden" name="featureType" value='2'>
                                    <input type="hidden" name="variantId" value={{{ $variant->id or '' }}}>
                                    <h4>Interior Features</h4>
                                    <p>
                                    <div class="col-lg-12">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Powersteering</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="power_steering" @if(isset($interiorFeatures->power_steering)&&$interiorFeatures->power_steering == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="power_steering" @if(isset($interiorFeatures->power_steering)&&$interiorFeatures->power_steering == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Powerwindows</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="power_windows" @if(isset($interiorFeatures->power_windows)&&$interiorFeatures->power_windows == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="power_windows" @if(isset($interiorFeatures->power_windows)&&$interiorFeatures->power_windows == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Anti Pinch</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="anti_pinch" @if(isset($interiorFeatures->anti_pinch)&&$interiorFeatures->anti_pinch == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="anti_pinch" @if(isset($interiorFeatures->anti_pinch)&&$interiorFeatures->anti_pinch == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Air conditioner</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="air_con" @if(isset($interiorFeatures->air_con)&&$interiorFeatures->air_con == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="air_con" @if(isset($interiorFeatures->air_con)&&$interiorFeatures->air_con == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Audio System</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="audio_system" @if(isset($interiorFeatures->audio_system)&&$interiorFeatures->audio_system == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="audio_system" @if(isset($interiorFeatures->audio_system)&&$interiorFeatures->audio_system == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Electric mirrors</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="electric_mirrors" @if(isset($interiorFeatures->electric_mirrors)&&$interiorFeatures->electric_mirrors == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="electric_mirrors" @if(isset($interiorFeatures->electric_mirrors)&&$interiorFeatures->electric_mirrors == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                         <div class="form-group">
                                            <label>Deffoger</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="deffoger" @if(isset($interiorFeatures->deffoger)&&$interiorFeatures->deffoger == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="deffoger" @if(isset($interiorFeatures->deffoger)&&$interiorFeatures->deffoger == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Leather seats</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="leather_seats" @if(isset($interiorFeatures->leather_seats)&&$interiorFeatures->leather_seats == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="leather_seats" @if(isset($interiorFeatures->leather_seats)&&$interiorFeatures->leather_seats == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Reversing camera</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="reversing_camera" @if(isset($interiorFeatures->reversing_camera)&&$interiorFeatures->reversing_camera == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="reversing_camera" @if(isset($interiorFeatures->reversing_camera)&&$interiorFeatures->reversing_camera == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Bluetooth_connectivity</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="bluetooth_connectivity" @if(isset($interiorFeatures->bluetooth_connectivity)&&$interiorFeatures->bluetooth_connectivity == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="bluetooth_connectivity" @if(isset($interiorFeatures->bluetooth_connectivity)&&$interiorFeatures->bluetooth_connectivity == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Driver seat height adjust</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="driver_seat_height_adjust" @if(isset($interiorFeatures->driver_seat_height_adjust)&&$interiorFeatures->driver_seat_height_adjust == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="driver_seat_height_adjust" @if(isset($interiorFeatures->driver_seat_height_adjust)&&$interiorFeatures->driver_seat_height_adjust == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Power seats</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="power_seats" @if(isset($interiorFeatures->power_seats)&&$interiorFeatures->power_seats == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="power_seats" @if(isset($interiorFeatures->power_seats)&&$interiorFeatures->power_seats == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Cruise control</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="cruise_control" @if(isset($interiorFeatures->cruise_control)&&$interiorFeatures->cruise_control == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="cruise_control" @if(isset($interiorFeatures->cruise_control)&&$interiorFeatures->cruise_control == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Remote boot release</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="remote_boot_release" @if(isset($interiorFeatures->remote_boot_release)&&$interiorFeatures->remote_boot_release == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="remote_boot_release" @if(isset($interiorFeatures->remote_boot_release)&&$interiorFeatures->remote_boot_release == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Chilled glovebox</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="chilled_glovebox" @if(isset($interiorFeatures->chilled_glovebox)&&$interiorFeatures->chilled_glovebox == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="chilled_glovebox" @if(isset($interiorFeatures->chilled_glovebox)&&$interiorFeatures->chilled_glovebox == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Rear ac vents</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="rear_ac_vents" @if(isset($interiorFeatures->rear_ac_vents)&&$interiorFeatures->rear_ac_vents == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="rear_ac_vents" @if(isset($interiorFeatures->rear_ac_vents)&&$interiorFeatures->rear_ac_vents == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>keyless start stop button</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="keyless_start_stop_button" @if(isset($interiorFeatures->keyless_start_stop_button)&&$interiorFeatures->keyless_start_stop_button == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="keyless_start_stop_button" @if(isset($interiorFeatures->keyless_start_stop_button)&&$interiorFeatures->keyless_start_stop_button == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Electric foldable mirrors</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="electric_foldable_mirrors" @if(isset($interiorFeatures->electric_foldable_mirrors)&&$interiorFeatures->electric_foldable_mirrors == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="electric_foldable_mirrors" @if(isset($interiorFeatures->electric_foldable_mirrors)&&$interiorFeatures->electric_foldable_mirrors == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Tachometer</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="tachometer" @if(isset($interiorFeatures->tachometer)&&$interiorFeatures->tachometer == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="tachometer" @if(isset($interiorFeatures->tachometer)&&$interiorFeatures->tachometer == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Arm rest</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="arm_rest" @if(isset($interiorFeatures->arm_rest )&&$interiorFeatures->arm_rest == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="arm_rest" @if(isset($interiorFeatures->arm_rest )&&$interiorFeatures->arm_rest == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Steering controls</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="steering_controls" @if(isset($interiorFeatures->steering_controls )&&$interiorFeatures->steering_controls == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="steering_controls" @if(isset($interiorFeatures->steering_controls )&&$interiorFeatures->steering_controls == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Driver info display</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="driver_info_display" @if(isset($interiorFeatures->driver_info_display )&&$interiorFeatures->driver_info_display == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="driver_info_display" @if(isset($interiorFeatures->driver_info_display )&&$interiorFeatures->driver_info_display == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Foot rest</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="foot_rest" @if(isset($interiorFeatures->foot_rest )&&$interiorFeatures->foot_rest == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="foot_rest" @if(isset($interiorFeatures->foot_rest )&&$interiorFeatures->foot_rest == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                    </div>
               
                                    </div> 
                                    <input type="submit" class="btn btn-primary" name="interiorFeaturesSubmit" value="Submit">                                    
                                    </p>
                                    {!!Form::close() !!}
                                </div>
                                <div id="exteriorfeatures" class="tab-pane fade ">
                                    {!!Form::open(array('action' => 'VariantController@updateFeatures')) !!}
                                      <input type="hidden" name="featureType" value='3'>
                                    <input type="hidden" name="variantId" value={{{ $variant->id or '' }}}>
                                    <h4>Exterior Features</h4>
                                    <p>
                                    <div class="col-lg-12">
                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>keyless entry</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="keyless_entry" @if(isset($exteriorFeatures->keyless_entry )&&$exteriorFeatures->keyless_entry == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="keyless_entry" @if(isset($exteriorFeatures->keyless_entry )&&$exteriorFeatures->keyless_entry == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Sunroof</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="sunroof" @if(isset($exteriorFeatures->sunroof )&&$exteriorFeatures->sunroof == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="sunroof" @if(isset($exteriorFeatures->sunroof )&&$exteriorFeatures->sunroof == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Rear wiper</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="rear_wiper" @if(isset($exteriorFeatures->rear_wiper )&&$exteriorFeatures->rear_wiper == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="rear_wiper" @if(isset($exteriorFeatures->rear_wiper )&&$exteriorFeatures->rear_wiper == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Rain sensing wipers</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="rain_sensing_wipers" @if(isset($exteriorFeatures->rain_sensing_wipers )&&$exteriorFeatures->rain_sensing_wipers == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="rain_sensing_wipers" @if(isset($exteriorFeatures->rain_sensing_wipers )&&$exteriorFeatures->rain_sensing_wipers == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Alloy wheels</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="alloy_wheels" @if(isset($exteriorFeatures->alloy_wheels )&&$exteriorFeatures->alloy_wheels == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="alloy_wheels" @if(isset($exteriorFeatures->alloy_wheels )&&$exteriorFeatures->alloy_wheels == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                         <div class="form-group">
                                            <label>Roof rails</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="roof_rails" @if(isset($exteriorFeatures->roof_rails )&&$exteriorFeatures->roof_rails == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="roof_rails" @if(isset($exteriorFeatures->roof_rails )&&$exteriorFeatures->roof_rails == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                         <div class="form-group">
                                            <label>Projector lamps</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="projector_lamps" @if(isset($exteriorFeatures->projector_lamps )&&$exteriorFeatures->projector_lamps == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="projector_lamps" @if(isset($exteriorFeatures->projector_lamps )&&$exteriorFeatures->projector_lamps == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Fog lights</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="fog_lights" @if(isset($exteriorFeatures->fog_lights )&&$exteriorFeatures->fog_lights == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="fog_lights" @if(isset($exteriorFeatures->fog_lights )&&$exteriorFeatures->fog_lights == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Moon roof</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="moon_roof" @if(isset($exteriorFeatures->moon_roof )&&$exteriorFeatures->moon_roof== 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="moon_roof" @if(isset($exteriorFeatures->moon_roof )&&$exteriorFeatures->moon_roof == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Auto headlamps</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="auto_headlamps" @if(isset($exteriorFeatures->auto_headlamps )&&$exteriorFeatures->auto_headlamps== 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="auto_headlamps" @if(isset($exteriorFeatures->auto_headlamps )&&$exteriorFeatures->auto_headlamps == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                        </div>
                                        <div class="col-lg-6">
                                                                              <div class="form-group">
                                            <label>Steel rims</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="steel_rims" @if(isset($exteriorFeatures->steel_rims )&&$exteriorFeatures->steel_rims== 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="steel_rims" @if(isset($exteriorFeatures->steel_rims )&&$exteriorFeatures->steel_rims == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Rear spoiler</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="rear_spoiler" @if(isset($exteriorFeatures->rear_spoiler )&&$exteriorFeatures->rear_spoiler== 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="rear_spoiler" @if(isset($exteriorFeatures->rear_spoiler )&&$exteriorFeatures->rear_spoiler == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Chrome grille</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="chrome_grille" @if(isset($exteriorFeatures->chrome_grille )&&$exteriorFeatures->chrome_grille== 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="chrome_grille" @if(isset($exteriorFeatures->chrome_grille )&&$exteriorFeatures->chrome_grille == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                         <div class="form-group">
                                            <label>Daytime running lamps</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="daytime_running_lamps" @if(isset($exteriorFeatures->daytime_running_lamps )&&$exteriorFeatures->daytime_running_lamps== 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="daytime_running_lamps" @if(isset($exteriorFeatures->daytime_running_lamps )&&$exteriorFeatures->daytime_running_lamps == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                        </div>
                                    </div>
                                     <input type="submit" class="btn btn-primary" name="exteriorFeaturesSubmit" value="Submit">                                    
                                    </p>
                                     {!!Form::close() !!}
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    </div
                    <div id="image" class="tab-pane fade">
                    </div
                </div>
            </div>
            <!-- /.panel-body -->
        </div>
    </div>
</div>
  <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Fuel Efficiency
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="panel panel-default">
                        <div class="panel-heading">
                            Fuel Efficiency details
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Mileage highway</th>
                                            <th>Mileage city</th>
                                            <th>Mileage overall</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>{{{ $variant->fuel()->first()->mileage_highway or ''}}}</td>
                                            <td>{{{ $variant->fuel()->first()->mileage_city or ''}}}</td>
                                            <td>{{{ $variant->fuel()->first()->mileage_overall or ''}}}</td>
                                        </tr>
                              
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                <!-- Button trigger modal -->
                <button data-target="#fuel_efficiency" data-toggle="modal" class="btn btn-primary btn-lg">
                    Edit
                </button>
                <!-- Modal -->
                <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="fuel_efficiency" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                <h4 id="myModalLabel" class="modal-title">Edit Fuel efficiency details</h4>
                            </div>
                            {!!Form::open(array('action' =>'VariantController@updateFuelEfficiency'))!!}
                            <div class="modal-body">                 
                                <input type="hidden" name="variantId" value={{{ $variant->id or '' }}}>
                                    <label>Mileage Highway</label>
                                    <input type="text" name="mileage_highway" value='{{{ $variant->fuel()->first()->mileage_highway or ''}}}'>
                                    <br>
                                    <label>Mileage City</label>
                                    <input type="text" name="mileage_city" value='{{{ $variant->fuel()->first()->mileage_city or ''}}}'>
                                    <br>
                                    <label>Mileage Overall</label>
                                    <input type="text" name="mileage_overall" value='{{{ $variant->fuel()->first()->mileage_overall or ''}}}'>
                              
                            </div>
                            <div class="modal-footer">
                                <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                <input type="submit" name="fuel_efficiency_submit" class="btn btn-primary" value="Save changes">
                            </div>
                            {!!Form::close() !!}
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
            </div>
            <!-- .panel-body -->
        </div>
    </div>
 <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Price Details
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="panel panel-default">
                        <div class="panel-heading">
                            Price Details
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Showroom price</th>
                                            <th>Onroad price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>{{{ $variant->price()->first()->showroomprice or ''}}}</td>
                                            <td>{{{ $variant->price()->first()->onroadprice or ''}}}</td>
                                        </tr>
                              
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                <!-- Button trigger modal -->
                <button data-target="#price_details" data-toggle="modal" class="btn btn-primary btn-lg">
                    Edit
                </button>
                <!-- Modal -->
                <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="price_details" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                <h4 id="myModalLabel" class="modal-title">Edit price details</h4>
                            </div>
                             {!!Form::open(array('action' =>'VariantController@updatePriceDetails'))!!}
                            <div class="modal-body">                 
                                <input type="hidden" name="variantId" value={{{ $variant->id or '' }}}>
                                    <label>Showroom price</label>
                                    <input type="text" name="showroom_price" value='{{{ $variant->price()->first()->showroomprice or ''}}}'>
                                    <br>
                                    <label>Onroad price</label>
                                    <input type="text" name="onroad_price" value='{{{ $variant->price()->first()->onroadprice or ''}}}'>
                                    <br>                     
                            </div>
                            <div class="modal-footer">
                                <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                <input type="submit" name="price_details_submit" class="btn btn-primary" value="Save changes">
                            </div>
                            {!!Form::close() !!}
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
            </div>
            <!-- .panel-body -->
        </div>
    </div>
<div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Engine Details
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="panel panel-default">
                        <div class="panel-heading">
                            Engine Details
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Torque</th>
                                            <th>Displacement</th>
                                            <th>Power</th>
                                            <th>Cyclinders</th>
                                            <th>Valves per cylinder</th>
                                            <th>Valve mechanism</th>
                                            <th>Cylinder configuration</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>{{{$variant->engine()->first()->torque or ''}}}</td>
                                            <td>{{{$variant->engine()->first()->displacement or ''}}}</td>
                                            <td>{{{$variant->engine()->first()->power or ''}}}</td>
                                            <td>{{{$variant->engine()->first()->cylinders or ''}}}</td>
                                            <td>{{{$variant->engine()->first()->valvespercylinder or ''}}}</td>
                                            <td>{{{$variant->engine()->first()->valvemechanism or ''}}}</td>
                                            <td>{{{$variant->engine()->first()->cyclinderconfiguration or ''}}}</td>
                                        </tr>
                              
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                <!-- Button trigger modal -->
                <button data-target="#engine_details" data-toggle="modal" class="btn btn-primary btn-lg">
                    Edit
                </button>
                <!-- Modal -->
                <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="engine_details" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                <h4 id="myModalLabel" class="modal-title">Edit engine details</h4>
                            </div>
                            {!!Form::open(array('action' =>'VariantController@updateEngineDetails'))!!}
                            <div class="modal-body">
                                <input type="hidden" name="variantId" value={{{ $variant->id or '' }}}>
                                <label>Torque</label>
                                <input type="text" name="torque" value='{{{ $variant->engine()->first()->torque or ''}}}'>
                                <br>
                                <label>Displacement</label>
                                <input type="text" name="displacement" value='{{{ $variant->engine()->first()->displacement or ''}}}'>
                                <br> 
                                <label>Power</label>
                                <input type="text" name="power" value='{{{ $variant->engine()->first()->power or ''}}}'>
                                <br>
                                <label>Cylinders</label>
                                <input type="text" name="cylinders" value='{{{ $variant->engine()->first()->cylinders or ''}}}'>
                                <br>
                                <label>Valvespercylinder</label>
                                <input type="text" name="valvespercylinder" value='{{{ $variant->engine()->first()->valvespercylinder or ''}}}'>
                                <br>
                                <label> Valvemechanism</label>
                                <input type="text" name="valvemechanism" value='{{{ $variant->engine()->first()->valvemechanism or ''}}}'>
                                <br>
                                <label> Cylinderconfiguration</label>
                                <input type="text" name="cyclinderconfiguration" value='{{{ $variant->engine()->first()->cyclinderconfiguration or ''}}}'>
                                <br>
                            </div>
                            <div class="modal-footer">
                                <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                <input type="submit" name="engine_details_submit" class="btn btn-primary" value="Save changes">
                            </div>
                            {!!Form::close() !!}
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
            </div>
            <!-- .panel-body -->
        </div>
    </div>
     <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Steering Details
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="panel panel-default">
                        <div class="panel-heading">
                            Steering Details
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Turning radius</th>
                                            <th>Steering type</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>{{{$variant->steering()->first()->turning_radius or ''}}}</td>
                                            <td>{{{$variant->steering()->first()->steering_type or ''}}}</td>
                                        </tr>
                              
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                <!-- Button trigger modal -->
                <button data-target="#steering_details" data-toggle="modal" class="btn btn-primary btn-lg">
                    Edit
                </button>
                <!-- Modal -->
                <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="steering_details" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                <h4 id="myModalLabel" class="modal-title">Edit steering details</h4>
                            </div>
                             {!!Form::open(array('action' =>'VariantController@updateSteeringDetails'))!!}
                            <div class="modal-body">
                               <input type="hidden" name="variantId" value={{{ $variant->id or '' }}}>
                                <label>Turning radius</label>
                                <input type="text" name="turning_radius" value='{{{ $variant->steering()->first()->turning_radius or ''}}}'>
                                <br>
                                <label>Steering type</label>
                                <input type="text" name="steering_type" value='{{{ $variant->steering()->first()->steering_type or ''}}}'>
                                <br>
                            </div>
                            <div class="modal-footer">
                                <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                <input type="submit" name="steering_details_submit" class="btn btn-primary" value="Save changes">
                            </div>
                             {!!Form::close() !!}
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
            </div>
            <!-- .panel-body -->
        </div>
    </div>
     <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Wheel tyre Details
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="panel panel-default">
                        <div class="panel-heading">
                            Wheel tyre Details
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Tyres</th>
                                            <th>Wheel size</th>
                                            <th>Wheel type</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>{{{$variant->wheel()->first()->tyres or ''}}}</td>
                                            <td>{{{$variant->wheel()->first()->wheelsize or ''}}}</td>
                                            <td>{{{$variant->wheel()->first()->wheeltype or ''}}}</td>
                                        </tr>
                              
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                <!-- Button trigger modal -->
                <button data-target="#wheel_tyre" data-toggle="modal" class="btn btn-primary btn-lg">
                    Edit
                </button>
                <!-- Modal -->
                <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="wheel_tyre" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                <h4 id="myModalLabel" class="modal-title">Edit wheel tyre details</h4>
                            </div>
                            {!!Form::open(array('action' =>'VariantController@updateWheelDetails'))!!}
                            <div class="modal-body">
                               <input type="hidden" name="variantId" value={{{ $variant->id or '' }}}>
                                <label>Tyres</label>
                                <input type="text" name="tyres" value='{{{ $variant->wheel()->first()->tyres or ''}}}'>
                                <br>
                                <label>Wheel size</label>
                                <input type="text" name="wheelsize" value='{{{ $variant->wheel()->first()->wheelsize or ''}}}'>
                                <br>
                                <label>wheeltype</label>
                                <input type="text" name="wheeltype" value='{{{ $variant->wheel()->first()->wheeltype or ''}}}'>
                                <br>
                            </div>
                            <div class="modal-footer">
                                <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                <input type="submit" name="wheel_tyres_submit" class="btn btn-primary" value="Save changes">
                            </div>
                            {!!Form::close() !!}
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
            </div>
            <!-- .panel-body -->
        </div>
    </div>
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Dimensions
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="panel panel-default">
                        <div class="panel-heading">
                            Dimensions
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Length</th>
                                            <th>Width</th>
                                            <th>Height</th>
                                            <th>Wheelbase</th>
                                            <th>Bootspace</th>
                                            <th>Kerbweight</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>{{{$variant->dimension()->first()->length or ''}}}</td>
                                            <td>{{{$variant->dimension()->first()->width or ''}}}</td>
                                            <td>{{{$variant->dimension()->first()->height or ''}}}</td>
                                            <td>{{{$variant->dimension()->first()->wheelbase or ''}}}</td>
                                            <td>{{{$variant->dimension()->first()->bootspace or ''}}}</td>
                                            <td>{{{$variant->dimension()->first()->kerbweight or ''}}}</td>
                                        </tr>                          
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                <!-- Button trigger modal -->
                <button data-target="#dimensions" data-toggle="modal" class="btn btn-primary btn-lg">
                    Edit
                </button>
                <!-- Modal -->
                <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="dimensions" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                <h4 id="myModalLabel" class="modal-title">Edit dimension details</h4>
                            </div>
                             {!!Form::open(array('action' =>'VariantController@updateDimensionDetails'))!!}
                            <div class="modal-body">
                               <input type="hidden" name="variantId" value={{{ $variant->id or '' }}}>
                                <label>Tyres</label>
                                <input type="text" name="length" value='{{{ $variant->dimension()->first()->length or ''}}}'>
                                <br>
                                <label>Width</label>
                                <input type="text" name="width" value='{{{ $variant->dimension()->first()->width or ''}}}'>
                                <br>
                                <label>Height</label>
                                <input type="text" name="height" value='{{{ $variant->dimension()->first()->height or ''}}}'>
                                <br>
                                <label>Wheelbase</label>
                                <input type="text" name="wheelbase" value='{{{ $variant->dimension()->first()->wheelbase or ''}}}'>
                                <br>
                                <label>Bootspace</label>
                                <input type="text" name="bootspace" value='{{{ $variant->dimension()->first()->bootspace or ''}}}'>
                                <br>
                                <label>kerbweight</label>
                                <input type="text" name="kerbweight" value='{{{ $variant->dimension()->first()->kerbweight or ''}}}'>
                                <br>
                            </div>
                            <div class="modal-footer">
                                <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                <input type="submit" name="dimensions_submit" class="btn btn-primary" value="Save changes">
                            </div>
                            {!!Form::close() !!}
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
            </div>
            <!-- .panel-body -->
        </div>
    </div>
     <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Brake Details
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="panel panel-default">
                        <div class="panel-heading">
                             Brake Details
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Rear brakes</th>
                                            <th>Front brakes</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>{{{$variant->brake()->first()->rear_brakes or ''}}}</td>
                                            <td>{{{$variant->brake()->first()->front_brakes or ''}}}</td>
                                        </tr>
                              
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                <!-- Button trigger modal -->
                <button data-target="#brake_details" data-toggle="modal" class="btn btn-primary btn-lg">
                    Edit
                </button>
                <!-- Modal -->
                <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="brake_details" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                <h4 id="myModalLabel" class="modal-title">Edit Brake details</h4>
                            </div>
                             {!!Form::open(array('action' =>'VariantController@updateBrakeDetails'))!!}
                            <div class="modal-body">
                                <input type="hidden" name="variantId" value={{{ $variant->id or '' }}}>
                                <label>Rear brakes</label>
                                <input type="text" name="rear_brakes" value='{{{$variant->brake()->first()->rear_brakes or ''}}}'>
                                <br>
                                <label>Front brakes</label>
                                <input type="text" name="front_brakes" value='{{{$variant->brake()->first()->front_brakes or ''}}}'>
                                <br>
                            </div>
                            <div class="modal-footer">
                                <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                <input type="submit" name="brake_submit" class="btn btn-primary" value="Save changes">
                            </div>
                            {!!Form::close() !!}
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
            </div>
            <!-- .panel-body -->
        </div>
    </div>
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Capacity
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="panel panel-default">
                        <div class="panel-heading">
                             Capacity
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Seating capacity</th>
                                            <th>Tank capacity</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>{{{$variant->capacity()->first()->seating_capacity or ''}}}</td>
                                            <td>{{{$variant->capacity()->first()->tank_capacity or ''}}}</td>
                                        </tr>
                              
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                <!-- Button trigger modal -->
                <button data-target="#capacity" data-toggle="modal" class="btn btn-primary btn-lg">
                    Edit
                </button>
                <!-- Modal -->
                <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="capacity" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                <h4 id="myModalLabel" class="modal-title">Edit Fuel efficiency details</h4>
                            </div>
                            {!!Form::open(array('action' =>'VariantController@updateCapacityDetails'))!!}
                            <div class="modal-body">
                               <input type="hidden" name="variantId" value={{{ $variant->id or '' }}}>
                                <label>Seating capacity</label>
                                <input type="text" name="seating_capacity" value='{{{$variant->capacity()->first()->seating_capacity or ''}}}'>
                                <br>
                                <label>Tank capacity</label>
                                <input type="text" name="tank_capacity" value='{{{$variant->capacity()->first()->tank_capacity or ''}}}'>
                                <br>
                            </div>
                            <div class="modal-footer">
                                <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                 <input type="submit" name="capacity_submit" class="btn btn-primary" value="Save changes">
                            </div>
                            {!!Form::close() !!}
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
            </div>
            <!-- .panel-body -->
        </div>
    </div>
</div>

@stop
@section('script')
<script type="text/javascript">
    $(document).ready(function () {

    });
</script>
@stop
