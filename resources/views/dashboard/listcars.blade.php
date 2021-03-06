@extends('layout.layout')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h4 class="page-header">Car management</h4>
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
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($cars as $carsKey=>$carsValue)
                                            <tr class="odd gradeX">
                                                <td>{{{$carsValue->name or ''}}}</td>
                                                <td>{{{$carsValue->company()->first()->name or ''}}}</td>
                                                <td>{{{$carsValue->carType()->first()->type or ''}}}</td>
                                                <td>
                                                    <button class="btn btn-primary btn-circle" type="button"><i class="fa fa-list"></i>
                                                    </button>
                                                    <button class="deletecar btn btn-warning btn-circle"  id="delete_car_{{$carsValue->id}}" type="button"><i class="fa fa-times"></i>
                                                    </button>

                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <?php echo isset($cars) ? $cars->render() : ''; ?>
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
@section('script')
<script type="text/javascript">
    $(document).ready(function () {

        $('.deletecar').click(function () {
            if (confirm("Are you want to delete the car")) {
                var id = $(this).attr('id');
                var splitElements = id.split("_");
                var carId = splitElements[2];
                $.ajax({
                    type: "POST",
                    url:'{{URL::to(trim('  /  '))}}/admin/deletecar',
                    data: {id:carId,_token: $('meta[name=csrf-token]').attr('content')},
                    success: function (response) {
                       if(response.status=="success"){
                            location.reload();
                       }
                    }
                });
            }
        });
    });
</script>
@stop

