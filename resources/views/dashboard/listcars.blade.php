@extends('layout.layout')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Car management</h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                List all cars    
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            Car details
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table id="dataTables-example" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Car</th>
                                            <th>Company</th>
                                            <th>Car type</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($cars as $carsKey=>$carsValue)
                                        <tr class="odd gradeX">
                                            <td>{{{$carsValue->name or ''}}}</td>
                                            <td>{{{$carsValue->company()->first()->name or ''}}}</td>
                                            <td>{{{$carsValue->carType()->first()->type or ''}}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <?php echo isset($cars)?$cars->render():''; ?>
                            </div>
                         
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

