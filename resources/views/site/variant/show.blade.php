@extends('layout.sitelayout')

@section('content')
            <!-- Page Heading/Breadcrumbs -->           
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{$variant->name or ''}}
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{URL::to(trim(' / '))}}">Home</a>
                    </li>
                    <li class="active">{{$variant->name or ''}}</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="img-responsive" src="http://placehold.it/750x500" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="http://placehold.it/750x500" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="http://placehold.it/750x500" alt="">
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                           {{$variant->name or ''}}
                    </div>
                    <div class="panel-body">
                            <p>{{$variant->car()->first()->description or ''}}</p>
                    </div>
                    
                </div>
                <h3></h3>
                <p></p>
                <h3></h3>
                <ul>
                    <li>Showroom price :{{$variant->price()->first()->showroomprice or ''}}</li>
                    <li>Overall mileage :{{$variant->fuel()->first()->mileage_overall or ''}}</li>
                </ul>
            </div>

        </div> 
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">{{$variant->name or ''}} specifications</h2>
            </div>
            <div class="col-lg-12">

                <ul class="nav nav-tabs nav-justified" id="myTab">
                    <li class="active"><a data-toggle="tab" href="#price"><i class="fa fa-car"></i>Price</a>
                    </li>
                    <li class=""><a data-toggle="tab" href="#specifications"><i class="fa fa-car"></i>Specifications</a>
                    </li>
                    <li class=""><a data-toggle="tab" href="#features"><i class="fa fa-car"></i>Features</a>
                    </li>
                    <li class=""><a data-toggle="tab" href="#reviews"><i class="fa fa-car"></i>Reviews</a>
                    </li>
                    <li class=""><a data-toggle="tab" href="#pictures"><i class="fa fa-car"></i>Pictures</a>
                    </li>
                    <li class=""><a data-toggle="tab" href="#mileage"><i class="fa fa-car"></i>Mileage</a>
                    </li>
                    <li class=""><a data-toggle="tab" href="#dealers"><i class="fa fa-car"></i>Dealers</a>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent">
                    <div id="price" class="tab-pane fade active in">
                        <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Price Details
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Showroom price</th>
                                            <th>Onroad price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>#</td>
                                            <td>{{$variant->price()->first()->showroomprice or ''}}</td>
                                            <td>{{$variant->price()->first()->onroadprice or ''}}</td>
                                        </tr>                             
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                    </div>
                <div id="specifications" class="tab-pane fade">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Brake system
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Rear brakes</th>
                                            <th>Front brakes</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>#</td>
                                            <td>{{$variant->brake()->first()->rear_brakes or ''}}</td>
                                            <td>{{$variant->brake()->first()->front_brakes or ''}}</td>
                                        </tr>                             
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Capacity
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Seating capacity</th>
                                            <th>Tank capacity</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>#</td>
                                            <td>{{$variant->capacity()->first()->seating_capacity or ''}}</td>
                                            <td>{{$variant->capacity()->first()->tank_capacity or ''}}</td>
                                        </tr>                             
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Dimensions
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
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
                                            <td>#</td>
                                            <td>{{$variant->dimension()->first()->length or ''}}</td>
                                            <td>{{$variant->dimension()->first()->width or ''}}</td>
                                            <td>{{$variant->dimension()->first()->height or ''}}</td>
                                            <td>{{$variant->dimension()->first()->wheelbase or ''}}</td>
                                            <td>{{$variant->dimension()->first()->bootspace or ''}}</td>
                                            <td>{{$variant->dimension()->first()->kerbweight or ''}}</td>
                                        </tr>                             
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Engines
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Torque</th>
                                            <th>Displacement</th>
                                            <th>Power</th>
                                            <th>Cylinders</th>
                                            <th>Valves per cylinder</th>
                                            <th>Valve mechanism</th>
                                            <th>Cyclinder configuration</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>#</td>
                                            <td>{{$variant->engine()->first()->torque or ''}}</td>
                                            <td>{{$variant->engine()->first()->displacement or ''}}</td>
                                            <td>{{$variant->engine()->first()->power or ''}}</td>
                                            <td>{{$variant->engine()->first()->cylinders or ''}}</td>
                                            <td>{{$variant->engine()->first()->valvespercylinder or ''}}</td>
                                            <td>{{$variant->engine()->first()->valvemechanism or ''}}</td>
                                            <td>{{$variant->engine()->first()->cyclinderconfiguration or ''}}</td>
                                        </tr>                             
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Steering Details
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Turning radius</th>
                                            <th>Steering type</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>#</td>
                                            <td>{{$variant->steering()->first()->turning_radius or ''}}</td>
                                            <td>{{$variant->steering()->first()->steering_type or ''}}</td>
                                        </tr>                             
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                    <div id="features" class="tab-pane fade">
                    <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-pills">
                                <li class="active"><a data-toggle="tab" href="#interior_features">Interior features</a>
                                </li>
                                <li><a data-toggle="tab" href="#exterior_features">Exterior features</a>
                                </li>
                                <li><a data-toggle="tab" href="#safety_features">Safety features</a>
                                </li>

                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div id="interior_features" class="tab-pane fade in active">
                                    <div class="panel panel-default">
                                            <div class="panel-heading">
                                                Interior Features
                                            </div>
                        <!-- /.panel-heading -->
                                            <div class="panel-body">
                                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Interior Features</th>
                                            <th>Availability</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>#</td>
                                            <td>Power steering</td>
                                            <td>
                                            @if(isset($variant->interiorFeatures()->first()->power_steering)&&$variant->interiorFeatures()->first()->power_steering==1)
                                              <p class="fa fa-check"> </p>
                                            @else
                                              <p class="fa fa-times"> </p>
                                            @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#</td>
                                            <td>Power windows</td>
                                            <td>
                                            @if(isset($variant->interiorFeatures()->first()->power_windows)&&$variant->interiorFeatures()->first()->power_windows==1)
                                              <p class="fa fa-check"> </p>
                                            @else
                                              <p class="fa fa-times"> </p>
                                            @endif
                                            </td>
                                        </tr> 
                                        <tr>
                                            <td>#</td>
                                            <td>Anti Pinch</td>
                                            <td>
                                            @if(isset($variant->interiorFeatures()->first()->anti_pinch)&&$variant->interiorFeatures()->first()->anti_pinch==1)
                                              <p class="fa fa-check"> </p>
                                            @else
                                              <p class="fa fa-times"> </p>
                                            @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#</td>
                                            <td>Air conditioner</td>
                                            <td>
                                            @if(isset($variant->interiorFeatures()->first()->air_con)&&$variant->interiorFeatures()->first()->air_con==1)
                                              <p class="fa fa-check"> </p>
                                            @else
                                              <p class="fa fa-times"> </p>
                                            @endif
                                            </td>
                                        </tr> 
                                        <tr>
                                            <td>#</td>
                                            <td>Audio system</td>
                                            <td>
                                            @if(isset($variant->interiorFeatures()->first()->audio_system)&&$variant->interiorFeatures()->first()->audio_system==1)
                                              <p class="fa fa-check"> </p>
                                            @else
                                              <p class="fa fa-times"> </p>
                                            @endif
                                            </td>
                                        </tr> 
                                        <tr>
                                            <td>#</td>
                                            <td>Electric mirrors</td>
                                            <td>
                                            @if(isset($variant->interiorFeatures()->first()->electric_mirrors)&&$variant->interiorFeatures()->first()->electric_mirrors==1)
                                              <p class="fa fa-check"> </p>
                                            @else
                                              <p class="fa fa-times"> </p>
                                            @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#</td>
                                            <td>Deffoger</td>
                                            <td>
                                            @if(isset($variant->interiorFeatures()->first()->deffoger)&&$variant->interiorFeatures()->first()->deffoger==1)
                                              <p class="fa fa-check"> </p>
                                            @else
                                              <p class="fa fa-times"> </p>
                                            @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#</td>
                                            <td>Leather seats</td>
                                            <td>
                                            @if(isset($variant->interiorFeatures()->first()->leather_seats)&&$variant->interiorFeatures()->first()->leather_seats==1)
                                              <p class="fa fa-check"> </p>
                                            @else
                                              <p class="fa fa-times"> </p>
                                            @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#</td>
                                            <td>Reversing camera</td>
                                            <td>
                                            @if(isset($variant->interiorFeatures()->first()->reversing_camera)&&$variant->interiorFeatures()->first()->reversing_camera==1)
                                              <p class="fa fa-check"> </p>
                                            @else
                                              <p class="fa fa-times"> </p>
                                            @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#</td>
                                            <td>Bluetooth connectivity</td>
                                            <td>
                                            @if(isset($variant->interiorFeatures()->first()->bluetooth_connectivity)&&$variant->interiorFeatures()->first()->bluetooth_connectivity==1)
                                              <p class="fa fa-check"> </p>
                                            @else
                                              <p class="fa fa-times"> </p>
                                            @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#</td>
                                            <td>Cruise control</td>
                                            <td>
                                            @if(isset($variant->interiorFeatures()->first()->cruise_control)&&$variant->interiorFeatures()->first()->cruise_control==1)
                                              <p class="fa fa-check"> </p>
                                            @else
                                              <p class="fa fa-times"> </p>
                                            @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#</td>
                                            <td>Remote boot release</td>
                                            <td>
                                            @if(isset($variant->interiorFeatures()->first()->remote_boot_release)&&$variant->interiorFeatures()->first()->remote_boot_release==1)
                                              <p class="fa fa-check"> </p>
                                            @else
                                              <p class="fa fa-times"> </p>
                                            @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#</td>
                                            <td>Chilled glovebox</td>
                                            <td>
                                            @if(isset($variant->interiorFeatures()->first()->chilled_glovebox)&&$variant->interiorFeatures()->first()->chilled_glovebox==1)
                                              <p class="fa fa-check"> </p>
                                            @else
                                              <p class="fa fa-times"> </p>
                                            @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#</td>
                                            <td>Rear ac vents</td>
                                            <td>
                                            @if(isset($variant->interiorFeatures()->first()->rear_ac_vents)&&$variant->interiorFeatures()->first()->rear_ac_vents==1)
                                              <p class="fa fa-check"> </p>
                                            @else
                                              <p class="fa fa-times"> </p>
                                            @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#</td>
                                            <td>keyless start stop button</td>
                                            <td>
                                            @if(isset($variant->interiorFeatures()->first()->keyless_start_stop_button)&&$variant->interiorFeatures()->first()->keyless_start_stop_button==1)
                                              <p class="fa fa-check"> </p>
                                            @else
                                              <p class="fa fa-times"> </p>
                                            @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#</td>
                                            <td>Electric foldable mirrors</td>
                                            <td>
                                            @if(isset($variant->interiorFeatures()->first()->electric_foldable_mirrors)&&$variant->interiorFeatures()->first()->electric_foldable_mirrors==1)
                                              <p class="fa fa-check"> </p>
                                            @else
                                              <p class="fa fa-times"> </p>
                                            @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#</td>
                                            <td>Tachometer</td>
                                            <td>
                                            @if(isset($variant->interiorFeatures()->first()->tachometer)&&$variant->interiorFeatures()->first()->tachometer==1)
                                              <p class="fa fa-check"> </p>
                                            @else
                                              <p class="fa fa-times"> </p>
                                            @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#</td>
                                            <td>Arm rest</td>
                                            <td>
                                            @if(isset($variant->interiorFeatures()->first()->arm_rest)&&$variant->interiorFeatures()->first()->arm_rest==1)
                                              <p class="fa fa-check"> </p>
                                            @else
                                              <p class="fa fa-times"> </p>
                                            @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#</td>
                                            <td>Steering controls</td>
                                            <td>
                                            @if(isset($variant->interiorFeatures()->first()->steering_controls)&&$variant->interiorFeatures()->first()->steering_controls==1)
                                              <p class="fa fa-check"> </p>
                                            @else
                                              <p class="fa fa-times"> </p>
                                            @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#</td>
                                            <td>Driver info display</td>
                                            <td>
                                            @if(isset($variant->interiorFeatures()->first()->driver_info_display)&&$variant->interiorFeatures()->first()->driver_info_display==1)
                                              <p class="fa fa-check"> </p>
                                            @else
                                              <p class="fa fa-times"> </p>
                                            @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#</td>
                                            <td>Foot rest</td>
                                            <td>
                                            @if(isset($variant->interiorFeatures()->first()->foot_rest)&&$variant->interiorFeatures()->first()->foot_rest==1)
                                              <p class="fa fa-check"> </p>
                                            @else
                                              <p class="fa fa-times"> </p>
                                            @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#</td>
                                            <td>Driver seat height adjust</td>
                                            <td>
                                            @if(isset($variant->interiorFeatures()->first()->driver_seat_height_adjust)&&$variant->interiorFeatures()->first()->driver_seat_height_adjust==1)
                                              <p class="fa fa-check"> </p>
                                            @else
                                              <p class="fa fa-times"> </p>
                                            @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#</td>
                                            <td>Powerseats</td>
                                            <td>
                                            @if(isset($variant->interiorFeatures()->first()->power_seats)&&$variant->interiorFeatures()->first()->power_seats==1)
                                              <p class="fa fa-check"> </p>
                                            @else
                                              <p class="fa fa-times"> </p>
                                            @endif
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                            </div>
                                            </div>
                                    </div>  
                                </div>
                                <div id="exterior_features" class="tab-pane fade">
                                      <div class="panel panel-default">
                                            <div class="panel-heading">
                                                Exterior Features
                                            </div>
                        <!-- /.panel-heading -->
                                            <div class="panel-body">
                                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Exterior Features</th>
                                            <th>Availability</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>#</td>
                                            <td>Keyless entry</td>
                                            <td>
                                            @if(isset($variant->exteriorFeatures()->first()->keyless_entry)&&$variant->exteriorFeatures()->first()->keyless_entry==1)
                                              <p class="fa fa-check"> </p>
                                            @else
                                              <p class="fa fa-times"> </p>
                                            @endif
                                            </td>
                                        </tr> 
                                        <tr>
                                            <td>#</td>
                                            <td>Sunroof</td>
                                            <td>
                                            @if(isset($variant->exteriorFeatures()->first()->sunroof)&&$variant->exteriorFeatures()->first()->sunroof==1)
                                              <p class="fa fa-check"> </p>
                                            @else
                                              <p class="fa fa-times"> </p>
                                            @endif
                                            </td>
                                        </tr> 
                                        <tr>
                                            <td>#</td>
                                            <td>Rear wiper</td>
                                            <td>
                                            @if(isset($variant->exteriorFeatures()->first()->rear_wiper)&&$variant->exteriorFeatures()->first()->rear_wiper==1)
                                              <p class="fa fa-check"> </p>
                                            @else
                                              <p class="fa fa-times"> </p>
                                            @endif
                                            </td>
                                        </tr> 
                                        <tr>
                                            <td>#</td>
                                            <td>Rain sensing wipers</td>
                                            <td>
                                            @if(isset($variant->exteriorFeatures()->first()->rain_sensing_wipers)&&$variant->exteriorFeatures()->first()->rain_sensing_wipers==1)
                                              <p class="fa fa-check"> </p>
                                            @else
                                              <p class="fa fa-times"> </p>
                                            @endif
                                            </td>
                                        </tr>   
                                        <tr>
                                            <td>#</td>
                                            <td>Alloy wheels</td>
                                            <td>
                                            @if(isset($variant->exteriorFeatures()->first()->alloy_wheels)&&$variant->exteriorFeatures()->first()->alloy_wheels==1)
                                              <p class="fa fa-check"> </p>
                                            @else
                                              <p class="fa fa-times"> </p>
                                            @endif
                                            </td>
                                        </tr>  
                                        <tr>
                                            <td>#</td>
                                            <td>Roof rails</td>
                                            <td>
                                            @if(isset($variant->exteriorFeatures()->first()->roof_rails)&&$variant->exteriorFeatures()->first()->roof_rails==1)
                                              <p class="fa fa-check"> </p>
                                            @else
                                              <p class="fa fa-times"> </p>
                                            @endif
                                            </td>
                                        </tr>  
                                        <tr>
                                            <td>#</td>
                                            <td>Projector lamps</td>
                                            <td>
                                            @if(isset($variant->exteriorFeatures()->first()->projector_lamps)&&$variant->exteriorFeatures()->first()->projector_lamps==1)
                                              <p class="fa fa-check"> </p>
                                            @else
                                              <p class="fa fa-times"> </p>
                                            @endif
                                            </td>
                                        </tr>  
                                        <tr>
                                            <td>#</td>
                                            <td>Fog lights</td>
                                            <td>
                                            @if(isset($variant->exteriorFeatures()->first()->fog_lights)&&$variant->exteriorFeatures()->first()->fog_lights==1)
                                              <p class="fa fa-check"> </p>
                                            @else
                                              <p class="fa fa-times"> </p>
                                            @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#</td>
                                            <td>Moon roof</td>
                                            <td>
                                            @if(isset($variant->exteriorFeatures()->first()->moon_roof)&&$variant->exteriorFeatures()->first()->moon_roof==1)
                                              <p class="fa fa-check"> </p>
                                            @else
                                              <p class="fa fa-times"> </p>
                                            @endif
                                            </td>
                                        </tr> 
                                        <tr>
                                            <td>#</td>
                                            <td>Auto headlamps</td>
                                            <td>
                                            @if(isset($variant->exteriorFeatures()->first()->auto_headlamps)&&$variant->exteriorFeatures()->first()->auto_headlamps==1)
                                              <p class="fa fa-check"> </p>
                                            @else
                                              <p class="fa fa-times"> </p>
                                            @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#</td>
                                            <td>Steel rims</td>
                                            <td>
                                            @if(isset($variant->exteriorFeatures()->first()->steel_rims)&&$variant->exteriorFeatures()->first()->steel_rims==1)
                                              <p class="fa fa-check"> </p>
                                            @else
                                              <p class="fa fa-times"> </p>
                                            @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#</td>
                                            <td>Rear spoiler</td>
                                            <td>
                                            @if(isset($variant->exteriorFeatures()->first()->rear_spoiler)&&$variant->exteriorFeatures()->first()->rear_spoilers==1)
                                              <p class="fa fa-check"> </p>
                                            @else
                                              <p class="fa fa-times"> </p>
                                            @endif
                                            </td>
                                        </tr>  
                                        <tr>
                                            <td>#</td>
                                            <td>Chrome grille</td>
                                            <td>
                                            @if(isset($variant->exteriorFeatures()->first()->chrome_grille)&&$variant->exteriorFeatures()->first()->chrome_grille==1)
                                              <p class="fa fa-check"> </p>
                                            @else
                                              <p class="fa fa-times"> </p>
                                            @endif
                                            </td>
                                        </tr> 
                                        <tr>
                                            <td>#</td>
                                            <td>Daytime running lamps</td>
                                            <td>
                                            @if(isset($variant->exteriorFeatures()->first()->daytime_running_lamps)&&$variant->exteriorFeatures()->first()->daytime_running_lamps==1)
                                              <p class="fa fa-check"> </p>
                                            @else
                                              <p class="fa fa-times"> </p>
                                            @endif
                                            </td>
                                        </tr>                        
                                    </tbody>
                                </table>
                                            </div>
                                            </div>
                                    </div> 
                                </div>
                                <div id="safety_features" class="tab-pane fade">
                                    <div class="panel panel-default">
                                            <div class="panel-heading">
                                               Safety Features
                                            </div>
                        <!-- /.panel-heading -->
                                            <div class="panel-body">
                                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Safety Features</th>
                                            <th>Availability</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>#</td>
                                            <td>ABS</td>
                                            <td>
                                            @if(isset($variant->safetyFeatures()->first()->abs)&&$variant->safetyFeatures()->first()->abs==1)
                                              <p class="fa fa-check"> </p>
                                            @else
                                              <p class="fa fa-times"> </p>
                                            @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#</td>
                                            <td>Airbags</td>
                                            <td>
                                            @if(isset($variant->safetyFeatures()->first()->airbags)&&$variant->safetyFeatures()->first()->airbags==1)
                                              <p class="fa fa-check"> </p>
                                            @else
                                              <p class="fa fa-times"> </p>
                                            @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#</td>
                                            <td>Immobilizer</td>
                                            <td>
                                            @if(isset($variant->safetyFeatures()->first()->immobilizer)&&$variant->safetyFeatures()->first()->immobilizer==1)
                                              <p class="fa fa-check"> </p>
                                            @else
                                              <p class="fa fa-times"> </p>
                                            @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#</td>
                                            <td>Hill control</td>
                                            <td>
                                            @if(isset($variant->safetyFeatures()->first()->hill_control)&&$variant->safetyFeatures()->first()->hill_control==1)
                                              <p class="fa fa-check"> </p>
                                            @else
                                              <p class="fa fa-times"> </p>
                                            @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#</td>
                                            <td>Central locking</td>
                                            <td>
                                            @if(isset($variant->safetyFeatures()->first()->central_locking)&&$variant->safetyFeatures()->first()->central_locking==1)
                                              <p class="fa fa-check"> </p>
                                            @else
                                              <p class="fa fa-times"> </p>
                                            @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#</td>
                                            <td>EBD</td>
                                            <td>
                                            @if(isset($variant->safetyFeatures()->first()->ebd)&&$variant->safetyFeatures()->first()->ebd==1)
                                              <p class="fa fa-check"> </p>
                                            @else
                                              <p class="fa fa-times"> </p>
                                            @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#</td>
                                            <td>Child safety lock</td>
                                            <td>
                                            @if(isset($variant->safetyFeatures()->first()->child_safety_lock)&&$variant->safetyFeatures()->first()->child_safety_lock==1)
                                              <p class="fa fa-check"> </p>
                                            @else
                                              <p class="fa fa-times"> </p>
                                            @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#</td>
                                            <td>Traction control</td>
                                            <td>
                                            @if(isset($variant->safetyFeatures()->first()->traction_control)&&$variant->safetyFeatures()->first()->traction_control==1)
                                              <p class="fa fa-check"> </p>
                                            @else
                                              <p class="fa fa-times"> </p>
                                            @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#</td>
                                            <td>Hill descent</td>
                                            <td>
                                            @if(isset($variant->safetyFeatures()->first()->hill_descent)&&$variant->safetyFeatures()->first()->hill_descent==1)
                                              <p class="fa fa-check"> </p>
                                            @else
                                              <p class="fa fa-times"> </p>
                                            @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#</td>
                                            <td>ESP</td>
                                            <td>
                                            @if(isset($variant->safetyFeatures()->first()->esp)&&$variant->safetyFeatures()->first()->esp==1)
                                              <p class="fa fa-check"> </p>
                                            @else
                                              <p class="fa fa-times"> </p>
                                            @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#</td>
                                            <td>Wheeldrive</td>
                                            <td>
                                            @if(isset($variant->safetyFeatures()->first()->wheeldrive)&&$variant->safetyFeatures()->first()->wheeldrive==1)
                                              <p class="fa fa-check"> </p>
                                            @else
                                              <p class="fa fa-times"> </p>
                                            @endif
                                            </td>
                                        </tr>
                
                                    </tbody>
                                </table>
                                            </div>
                                            </div>
                                    </div> 
                                </div>
                            </div>
                    </div>
                    
                    </div>
                    <div id="reviews" class="tab-pane fade">
                        <div class="row">
                            <div class="col-lg-12">
                            <h1 class="page-header">
                                <small>Reviews</small>
                            </h1>

                        </div>
                        </div>
        <!-- /.row -->

        <!-- Blog Post Row -->
        @foreach($variant->review()->get() as $reviewKey=>$reviewValue)
        <div class="row">          
            <div class="col-md-1 text-center">
                <p><i class="fa fa-camera fa-4x"></i>
                </p>
                <p>June 17, 2014</p>
            </div>
            <div class="col-md-5">
                <a href="blog-post.html">
                    <img class="img-responsive img-hover" src="http://placehold.it/600x300" alt="">
                </a>
            </div>
            <div class="col-md-6">
                <h3>
                    <a href="#">Blog Post Title</a>
                </h3>
                <p>by <a href="#">Start Bootstrap</a>
                </p>
                <p>{{$reviewValue->reviews}}<p>
                <!-- <a class="btn btn-primary" href="blog-post.html">Read More <i class="fa fa-angle-right"></i></a> -->
            </div>
        </div>   
        <hr>
         @endforeach 
                    </div>
                    <div id="pictures" class="tab-pane fade">
                        <div class="row">
                                <div class="col-lg-12">
                                    <h1 class="page-header">
                                        <small>Pictures</small>
                                    </h1>
                                    <!-- <ol class="breadcrumb">
                                        <li><a href="index.html">Home</a>
                                        </li>
                                        <li class="active">Four Column Portfolio</li>
                                    </ol> -->
                                </div>
                            </div>
                        <div class="row">
                            <div class="col-md-3 img-portfolio">
                                <a href="portfolio-item.html">
                                    <img class="img-responsive img-hover" src="http://placehold.it/750x450" alt="">
                                </a>
                            </div>
                            <div class="col-md-3 img-portfolio">
                                <a href="portfolio-item.html">
                                    <img class="img-responsive img-hover" src="http://placehold.it/750x450" alt="">
                                </a>
                            </div>
                            <div class="col-md-3 img-portfolio">
                                <a href="portfolio-item.html">
                                    <img class="img-responsive img-hover" src="http://placehold.it/750x450" alt="">
                                </a>
                            </div>
                            <div class="col-md-3 img-portfolio">
                                <a href="portfolio-item.html">
                                    <img class="img-responsive img-hover" src="http://placehold.it/750x450" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div id="mileage" class="tab-pane fade">
                        <br>
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Mileage
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Mileage Highway</th>
                                                    <th>Mileage City</th>
                                                    <th>Mileage Overall</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>#</td>
                                                    <td>{{$variant->fuel()->first()->mileage_highway or ''}}</td>
                                                    <td>{{$variant->fuel()->first()->mileage_city or ''}}</td>
                                                    <td>{{$variant->fuel()->first()->mileage_overall or ''}}</td>
                                                </tr>                             
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                    </div>
                    <div id="dealers" class="tab-pane fade">
                    <br>
                    @foreach($variant->car()->first()->company()->first()->dealer()->get() as $dealerKey=>$dealerValue)
                        <div class="row">
                            <!-- Map Column -->
                            <div class="col-md-6">
                                <h3>{{$dealerValue->name or ''}}</h3>
                                <p>
                                   {{$dealerValue->address or ''}}
                                </p>
                                <p><i class="fa fa-phone"></i> 
                                    <abbr title="Phone">P</abbr>: {{$dealerValue->phonenumber or ''}} 
                                </p>
                                 <p><i class="fa fa-phone"></i> 
                                    <abbr title="Mobile">M</abbr>: {{$dealerValue->mobilenumber or ''}} 
                                </p>
                                <p><i class="fa fa-envelope-o"></i> 
                                    <abbr title="Email">E</abbr>: <a href="mailto:{{$dealerValue->email or ''}}">{{$dealerValue->email or ''}}</a>
                                </p>
                                <p><i class="fa fa-clock-o"></i> 
                                    <abbr title="Hours">H</abbr>: {{$dealerValue->opening_hours or ''}}</p>
                                <ul class="list-unstyled list-inline list-social-icons">
                                    <li>
                                        <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <a href="portfolio-item.html">
                                    <img class="img-responsive img-hover" alt="" src="http://placehold.it/700x400">
                                </a
                            </div>

                        </div>
                    </div>
                    <hr>
                    @endforeach



            </div>
        </div>  
@stop