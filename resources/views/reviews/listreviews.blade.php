@extends('layout.layout')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h4 class="page-header">Car reviews</h4>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                List all reviews   
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Review details
                            </div>             
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table id="dataTables-example" class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Variant</th>
                                                <th>Review</th>
                                                <th>Customer</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>  
                                            @foreach($reviews as $reviewsKey=>$reviewsValue)
                                            <tr>
                                                <td>{{{$reviewsValue->variant()->first()->name or ''}}}</td>
                                                <td>{{{$reviewsValue->reviews or ''}}}</td>
                                                <td>{{{$reviewsValue->customer()->first()->first_name or ''}}}&nbsp;{{{$reviewsValue->customer()->first()->last_name or ''}}}</td>                                                
                                                <td>
                                                    @if($reviewsValue->is_approved==0)
                                                    <button  class="approval btn btn-success btn-circle" id="approve_{{$reviewsValue->id}}" type="button"></button>
                                                    @else
                                                    <button  class="approval btn btn-danger btn-circle" id="reject_{{$reviewsValue->id}}" type="button"></button>
                                                    @endif           
                                                    <button  class="deletereview btn btn-warning btn-circle" id="delete_{{$reviewsValue->id}}" type="button"><i class="fa fa-times"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            @endforeach


                                        </tbody>
                                    </table>
                                    <?php  echo isset($reviews)?$reviews->render() : ''; ?>
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

        $('.deletereview').click(function () {
            if (confirm("Do you want to delete this review?")) {
                var id = $(this).attr('id');
                var splitElements = id.split("_");
                var reviewId = splitElements[1];
                $.ajax({
                    type: "POST",
                    url: '{{URL::to(trim(' / '))}}/admin/deletereview',
                    data: {id: reviewId, _token: $('meta[name=csrf-token]').attr('content')},
                    success: function (response) {
                        if (response.status == "success") {
                            location.reload();
                        }
                    }
                });
            }
        });
        $('.approval').click(function () {
            var id = $(this).attr('id');
            var splitElements = id.split("_");
            var reviewId = splitElements[1];
            var type = splitElements[0];
            if (type == 'approve') {
                var confirm_msg = "Do you want to approve this review?";
                var typeId = 1;
            } else {
                var confirm_msg = "Do you want to reject this review?";
                var typeId = 0;
            }
            if (confirm(confirm_msg)) {
                $.ajax({
                    type: "POST",
                    url: '{{URL::to(trim(' / '))}}/admin/reviewapproval',
                    data: {id: reviewId, type: typeId, _token: $('meta[name=csrf-token]').attr('content')},
                    success: function (response) {
                        if (response.status == "success") {
                            location.reload();
                        }
                    }
                });
            }
        });
    });
</script>
@stop