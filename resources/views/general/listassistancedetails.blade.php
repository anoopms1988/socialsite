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
                <button class="btn btn-primary btn-sm" data-toggle="modal" style="float: right; " data-target="#add_roadside_details" id="add_assistance">
                    Add details
                </button>
           
                <div class="edit_roadside_details modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" id="edit_assistance_details">
                            
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <div class="modal fade" id="add_roadside_details" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title" id="myModalLabel">Add roadside details</h4>
                            </div>
                            {!! Form::open(array('action' =>'GeneralController@addAssistanceDetails','id'=>'assistance_details_form')) !!}
                            <div class="modal-body">
                                <?php
                                echo Form::label('company', 'Company');
                                // $mergedArray=array_merge(array(''=>'Select'),$company);
                                // dd($mergedArray);
                                echo Form::select('company',array(''=>'Select')+$company, null, array('class' => 'form-control'));
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
                                <input type="submit" name="add_assistance_details" class="btn btn-primary" value="Save">
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
                                                    <button class="editassistance btn btn-primary btn-circle" id="edit_{{$assistanceDetailsValue->id}}" type="button" data-toggle="modal"  data-target=".edit_roadside_details" ><i class="fa fa-list"></i>
                                                    </button>
                                                    <button class="deleteassistance btn btn-warning btn-circle"  id="delete_{{$assistanceDetailsValue->id}}" type="button"><i class="fa fa-times"></i>
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
          $('.deleteassistance').click(function () {
            if (confirm("Do you want to delete this assistance details?")) {
                var id = $(this).attr('id');
                var splitElements = id.split("_");
                var assistanceId = splitElements[1];
                $.ajax({
                    type: "POST",
                    url: '{{URL::to(trim(' / '))}}/admin/deleteassistance',
                    data: {id: assistanceId, _token: $('meta[name=csrf-token]').attr('content')},
                    success: function (response) {
                        if (response.status == "success") {
                            location.reload();
                        }
                    }
                });
            }
        });

         $('.editassistance').click(function () {
                var id = $(this).attr('id');
                var splitElements = id.split("_");
                var assistanceId = splitElements[1];
                $.ajax({
                    type: "POST",
                    url: '{{URL::to(trim(' / '))}}/admin/editassistance',
                    data: {id: assistanceId, _token: $('meta[name=csrf-token]').attr('content')},
                    success: function (response) {
                        //if (response.status == "success") {
                            $("#edit_assistance_details").html(response);
                        //}
                    }
                });

        });
        $('#add_assistance').click(function () {
            $('#assistance_details_form')[0].reset();
           
        });
         $("#assistance_details_form").validate({
            rules: {
                company: "required",
                contact_number: {
                    number: true,
                    required:true
                },
                contact_address: "required"
            },
            messages: {
                company: "Enter  your name.",
                contact_number: "Enter your phone number.",
                contact_address: "Enter your feedback"
            }
        });


    });
</script>
@stop