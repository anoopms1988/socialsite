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
                List loan enquiry details
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                               Loan enquiry details
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table id="dataTables-example" class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>First name</th>
                                                <th>Last name</th>
                                                <th>Email</th>
                                                <th>Phone number</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($loanEnquiryDetails as $loanEnquiryDetailsKey=>$loanEnquiryDetailsValue)
                                            <tr>
                                                <td>{{$loanEnquiryDetailsValue->first_name or ''}}</td>
                                                <td>{{$loanEnquiryDetailsValue->last_name or ''}}</td>
                                                <td>{{$loanEnquiryDetailsValue->email or ''}}</td>
                                                <td>{{$loanEnquiryDetailsValue->mobile or ''}}</td>
                                                <td>
                                                    <button class="editassistance btn btn-primary btn-circle" id="editassistance_{{$loanEnquiryDetailsValue->id}}" type="button"><i class="fa fa-list"></i>
                                                    </button>
                                                    <button class="deleteassistance btn btn-warning btn-circle"  id="deleteassistance_{{$loanEnquiryDetailsValue->id}}" type="button"><i class="fa fa-times"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>

                                </div>
                                <?php  ?>
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

        $('.deletevariant').click(function () {
            if (confirm("Are you want to delete the variant")) {
                var id = $(this).attr('id');
                var splitElements = id.split("_");
                var variantId = splitElements[2];
                $.ajax({
                    type: 'DELETE',
                    url: '{{URL::to(trim(' / '))}}/admin/variant/' + variantId,
                    data: {id: variantId, _token: $('meta[name=csrf-token]').attr('content')},
                    success: function (response) {
                        if (response.status == "success") {
                            location.reload();
                        }
                    }
                });
            }
        });
        $('.listvariants').click(function () {
            var id = $(this).attr('id');
            var splitElements = id.split("_");
            var variantId = splitElements[1];
            window.location.href = "{{URL::to(trim(' / '))}}/admin/variant/" + variantId;
        });
         $('.editvariant').click(function () {
            var id = $(this).attr('id');
            var splitElements = id.split("_");
            var variantId = splitElements[1];
            window.location.href = "{{URL::to(trim(' / '))}}/admin/variant/" + variantId+"/edit";
        });
    });
</script>
@stop

