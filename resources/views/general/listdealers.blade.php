@extends('layout.layout')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h4 class="page-header">Dealer details</h4>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                List dealer details
                <button class="btn btn-primary btn-sm" data-toggle="modal" style="float: right; " data-target="#add_dealer_details" id="add_dealers">
                    Add details
                </button>
                <div class="edit_roadside_details modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" id="edit_assistance_details">
                            
                        </div>
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <div class="modal fade" id="add_dealer_details" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title" id="myModalLabel">Add dealer details</h4>
                            </div>
                            {!! Form::open(array('action' =>'GeneralController@addDealerDetails','id'=>'dealer_details_form')) !!}
                            <div class="modal-body">
                                <?php
                                echo Form::label('company', 'Company');
                                echo Form::select('company',array(''=>'Select')+$company, null, array('class' => 'form-control'));
                                echo '<br>';
                                echo Form::label('city', 'City');
                                echo Form::select('city',array(''=>'Select')+$city, null, array('class' => 'form-control'));
                                echo '<br>';
                                echo Form::label('address', 'Address');
                                echo Form::text('address', null, array('class' => 'form-control'));
                                echo '<br>';
                                echo Form::label('name', 'Name');
                                echo Form::text('name', null, array('class' => 'form-control'));
                                echo '<br>';
                                echo Form::label('phonenumber', 'Phone number');
                                echo Form::text('phonenumber', null, array('class' => 'form-control'));
                                echo '<br>';
                                echo Form::label('mobilenumber', 'Mobile number');
                                echo Form::text('mobilenumber', null, array('class' => 'form-control'));
                                echo '<br>';
                                echo Form::label('email', 'Email');
                                echo Form::text('email', null, array('class' => 'form-control'));
                                echo '<br>';
                                echo Form::label('Opening hours', 'Opening hours');
                                echo Form::text('opening_hours', null, array('class' => 'form-control'));
                                echo '<br>';
                                echo Form::label('facebook', 'Facebook');
                                echo Form::text('facebook', null, array('class' => 'form-control'));
                                echo '<br>';
                                echo Form::label('twitter', 'twitter');
                                echo Form::text('Twitter', null, array('class' => 'form-control'));
                                echo '<br>';
                                echo Form::label('linkedin', 'Linkedin');
                                echo Form::text('linkedin', null, array('class' => 'form-control'));
                                echo '<br>';
                                echo Form::label('google', 'Google');
                                echo Form::text('google', null, array('class' => 'form-control'));
                                echo '<br>';
                                echo Form::label('image', 'Image');
                                echo Form::file('image', null, array('class' => 'form-control'));
                                ?>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <input type="submit" name="dealer_details_submit" class="btn btn-primary" value="Save">
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
                                                <th>Dealer name</th>
                                                <th>Address</th>
                                                <th>Email</th>
                                                <th>Phone number</th>
                                                <th>Mobile number</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>   
                                        @foreach($dealers as $dealersKey=>$dealersValue)
                                            <tr>
                                                <td>{{$dealersValue->company()->first()->name or ''}}</td>
                                                <td>{{$dealersValue->name  or '' }}</td>
                                                <td>{{$dealersValue->address or ''}}</td>
                                                <td>{{$dealersValue->email or '' }}</td>
                                                <td>{{$dealersValue->phonenumber or '' }}</td>
                                                <td>{{$dealersValue->mobilenumber or '' }}</td>
                                                <td>
                                                    <button class="editdealers btn btn-primary btn-circle" id="edit_{{$dealersValue->id}}" type="button" data-toggle="modal"  data-target=".edit_roadside_details" ><i class="fa fa-list"></i>
                                                    </button>
                                                    <button class="deletedealers btn btn-warning btn-circle"  id="delete_{{$dealersValue->id}}" type="button"><i class="fa fa-times"></i>
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
          $("#dealer_details_form").validate({
            rules: {
                company: "required",
                city: "required",
                address: "required",
                name: "required",
                phonenumber: "required",
            },
            messages: {
                company: "Enter your company.",
                city: "Enter your city",
                address: "Enter your address",
                name: "Enter your name",
                phonenumber: "Enter your phonenumber",
            }
        });
        //   $('.deleteassistance').click(function () {
        //     if (confirm("Do you want to delete this assistance details?")) {
        //         var id = $(this).attr('id');
        //         var splitElements = id.split("_");
        //         var assistanceId = splitElements[1];
        //         $.ajax({
        //             type: "POST",
        //             url: '{{URL::to(trim(' / '))}}/admin/deleteassistance',
        //             data: {id: assistanceId, _token: $('meta[name=csrf-token]').attr('content')},
        //             success: function (response) {
        //                 if (response.status == "success") {
        //                     location.reload();
        //                 }
        //             }
        //         });
        //     }
        // });

        //  $('.editassistance').click(function () {
        //         var id = $(this).attr('id');
        //         var splitElements = id.split("_");
        //         var assistanceId = splitElements[1];
        //         $.ajax({
        //             type: "POST",
        //             url: '{{URL::to(trim(' / '))}}/admin/editassistance',
        //             data: {id: assistanceId, _token: $('meta[name=csrf-token]').attr('content')},
        //             success: function (response) {
        //                 //if (response.status == "success") {
        //                     $("#edit_assistance_details").html(response);
        //                 //}
        //             }
        //         });

        // });
        // $('#add_assistance').click(function () {
        //     $('#assistance_details_form')[0].reset();
           
        // });
        //  $("#assistance_details_form").validate({
        //     rules: {
        //         company: "required",
        //         contact_number: {
        //             number: true,
        //             required:true
        //         },
        //         contact_address: "required"
        //     },
        //     messages: {
        //         company: "Enter  your name.",
        //         contact_number: "Enter your phone number.",
        //         contact_address: "Enter your feedback"
        //     }
        // });


    });
</script>
@stop