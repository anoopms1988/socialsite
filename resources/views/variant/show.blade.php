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
                                    <h4>Safety Features</h4>
                                    <p>
                                    <div class="col-lg-6">
                                        <div class="form-group">                                          
                                            <label>ABS</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="abs" @if($safetyFeatures->abs == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0" name="abs" @if($safetyFeatures->abs == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                         <div class="form-group">
                                            <label>Airbags</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="airbags" @if($safetyFeatures->airbags == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="airbags" @if($safetyFeatures->airbags == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Immobilizer</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="immobilizer" @if($safetyFeatures->immobilizer == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="immobilizer" @if($safetyFeatures->immobilizer == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Hill Control</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="hillcontrol" @if($safetyFeatures->hill_control == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="hillcontrol" @if($safetyFeatures->hill_control == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>EBD</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="ebd" @if($safetyFeatures->ebd == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="ebd" @if($safetyFeatures->ebd == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Central Locking</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="central_locking" @if($safetyFeatures->central_locking == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="central_locking" @if($safetyFeatures->central_locking == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Child Safety Lock</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="child_safety_lock" @if($safetyFeatures->child_safety_lock == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="child_safety_lock" @if($safetyFeatures->child_safety_lock == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Traction Control</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="traction_control" @if($safetyFeatures->traction_control == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="traction_control" @if($safetyFeatures->traction_control == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Hill Descent</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="hill_descent" @if($safetyFeatures->hill_descent == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="hill_descent" @if($safetyFeatures->hill_descent == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Esp</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="esp" @if($safetyFeatures->esp == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="esp" @if($safetyFeatures->esp == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                         <div class="form-group">
                                            <label>4wd</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="wheeldrive" @if($safetyFeatures->wheeldrive == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="wheeldrive" @if($safetyFeatures->wheeldrive == 0) checked="true" @endif>No
                                            </label>
                                        </div> 
                                    </div>
                                    </p>
                                </div>
                                <div id="interiorfeatures" class="tab-pane fade">
                                    <h4>Interior Features</h4>
                                    <p>
                                    <div class="col-lg-12">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Powersteering</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="power_steering" @if($interiorFeatures->power_steering == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="power_steering" @if($interiorFeatures->power_steering == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Powerwindows</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="power_windows" @if($interiorFeatures->power_windows == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="power_windows" @if($interiorFeatures->power_windows == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Anti Pinch</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="anti_pinch" @if($interiorFeatures->anti_pinch == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="anti_pinch" @if($interiorFeatures->anti_pinch == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Air conditioner</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="air_con" @if($interiorFeatures->air_con == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="air_con" @if($interiorFeatures->air_con == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Audio System</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="audio_system" @if($interiorFeatures->audio_system == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="audio_system" @if($interiorFeatures->audio_system == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Electric mirrors</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="electric_mirrors" @if($interiorFeatures->electric_mirrors == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="electric_mirrors" @if($interiorFeatures->electric_mirrors == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                         <div class="form-group">
                                            <label>Deffoger</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="deffoger" @if($interiorFeatures->deffoger == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="deffoger" @if($interiorFeatures->deffoger == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Leather seats</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="leather_seats" @if($interiorFeatures->leather_seats == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="leather_seats" @if($interiorFeatures->leather_seats == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Reversing camera</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="reversing_camera" @if($interiorFeatures->reversing_camera == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="reversing_camera" @if($interiorFeatures->reversing_camera == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Bluetooth_connectivity</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="bluetooth_connectivity" @if($interiorFeatures->bluetooth_connectivity == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="bluetooth_connectivity" @if($interiorFeatures->bluetooth_connectivity == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Bluetooth_connectivity</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="bluetooth_connectivity" @if($interiorFeatures->bluetooth_connectivity == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="bluetooth_connectivity" @if($interiorFeatures->bluetooth_connectivity == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Cruise control</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="cruise_control" @if($interiorFeatures->cruise_control == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="cruise_control" @if($interiorFeatures->cruise_control == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Remote boot release</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="remote_boot_release" @if($interiorFeatures->remote_boot_release == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="remote_boot_release" @if($interiorFeatures->remote_boot_release == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Chilled glovebox</label>
                                            <label class="radio-inline">
                                                <input type="radio"  value="1"  name="chilled_glovebox" @if($interiorFeatures->chilled_glovebox == 1) checked="true" @endif>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="0"   name="chilled_glovebox" @if($interiorFeatures->chilled_glovebox == 0) checked="true" @endif>No
                                            </label>
                                        </div>
                                    </div>
                                    </div>                                     
                                    </p>
                                </div>
                                <div id="exteriorfeatures" class="tab-pane fade ">
                                    <h4>Exterior Features</h4>
                                    <p></p>
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
                            <div class="modal-body">
                               
                            </div>
                            <div class="modal-footer">
                                <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                <button class="btn btn-primary" type="button">Save changes</button>
                            </div>
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
                            <div class="modal-body">
                               
                            </div>
                            <div class="modal-footer">
                                <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                <button class="btn btn-primary" type="button">Save changes</button>
                            </div>
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
                            <div class="modal-body">
                               
                            </div>
                            <div class="modal-footer">
                                <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                <button class="btn btn-primary" type="button">Save changes</button>
                            </div>
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
                            <div class="modal-body">
                               
                            </div>
                            <div class="modal-footer">
                                <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                <button class="btn btn-primary" type="button">Save changes</button>
                            </div>
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
                                <h4 id="myModalLabel" class="modal-title">Edit Fuel efficiency details</h4>
                            </div>
                            <div class="modal-body">
                               
                            </div>
                            <div class="modal-footer">
                                <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                <button class="btn btn-primary" type="button">Save changes</button>
                            </div>
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
                            <div class="modal-body">
                               
                            </div>
                            <div class="modal-footer">
                                <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                <button class="btn btn-primary" type="button">Save changes</button>
                            </div>
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
                            <div class="modal-body">
                               
                            </div>
                            <div class="modal-footer">
                                <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                <button class="btn btn-primary" type="button">Save changes</button>
                            </div>
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
                            <div class="modal-body">
                               
                            </div>
                            <div class="modal-footer">
                                <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                <button class="btn btn-primary" type="button">Save changes</button>
                            </div>
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
