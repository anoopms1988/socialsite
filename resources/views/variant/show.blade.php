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
</div>

@stop
@section('script')
<script type="text/javascript">
    $(document).ready(function () {

    });
</script>
@stop
