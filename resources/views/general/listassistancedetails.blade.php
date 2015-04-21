@extends('layout.layout')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h4 class="page-header">Roadside assistance</h4>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Roadside assistance details  
                <button class="btn btn-primary btn-sm" data-toggle="modal" style="float: right; " data-target="#add_roadside_details">
                    Add details
                </button>
                <div class="modal fade" id="add_roadside_details" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title" id="myModalLabel">Add roadside details</h4>
                            </div>
                            {!! Form::open(array('id'=>'assistance_details_form')) !!}
                            <div class="modal-body">
                                <?php
                                echo Form::label('company', 'Company');
                                echo Form::select('company', array_merge(array('' => 'Select'), $company), null, array('class' => 'form-control'));
                               // echo $errors->first('company'); 
                                echo '<br>';
                                echo Form::label('contact_number', 'Contact Number');
                                echo Form::text('contact_number', null, array('class' => 'form-control'));
                               // echo $errors->first('contact_number'); 
                                echo '<br>';
                                echo Form::label('contact_address', 'Contact Address');
                                echo Form::textarea('contact_address', null, array('class' => 'form-control'));
                                //echo $errors->first('contact_address'); 
                                ?>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" id="add_assistance_details" class="btn btn-primary" >Save</button>
                            </div>
                            {!! Form::close() !!}
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">

                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table id="dataTables-example" class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Company</th>
                                                <th>Logo</th>
                                                <th>Contact numbers</th>
                                                <th>Contact address</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>   
                                            @foreach($assistanceDetails as $assistanceDetailsKey=>$assistanceDetailsValue)
                                            <tr class="odd gradeX">
                                                <td>{{{$assistanceDetailsValue->company()->first()->name or ''}}}</td>
                                                <td></td>
                                                <td>{{{$assistanceDetailsValue->contact_number or ''}}}</td>
                                                <td>{{{$assistanceDetailsValue->address or ''}}}</td>
                                                <td>
                                                    <button class="btn btn-primary btn-circle" type="button"><i class="fa fa-list"></i>
                                                    </button>
                                                    <button class="deletecar btn btn-warning btn-circle"  id="delete_car_" type="button"><i class="fa fa-times"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <?php echo isset($assistanceDetails) ? $assistanceDetails->render() : ''; ?>
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

        $('#add_assistance_details').click(function () {
                $.ajax({
                    type: "POST",
                    url:'{{URL::to(trim('  /  '))}}/admin/addassistance',
                    data: {data:$("#assistance_details_form").serialize(),_token: $('meta[name=csrf-token]').attr('content')},
                    success: function (response) {
                       if(response.status=="success"){
                            location.reload();
                       }
                    }
                });
        
        });
    });
</script>
@stop