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
                                                <td>{{{str_limit($reviewsValue->reviews, $limit = 100, $end = '...') or ''}}}</td>
                                                <td>{{{$reviewsValue->customer()->first()->first_name or ''}}}&nbsp;{{{$reviewsValue->customer()->first()->last_name or ''}}}</td>                                                
                                                <td>
                                                    <button  class="btn btn-primary btn-circle" type="button"><i class="fa fa-list"></i>
                                                    </button>
                                                    <button  class="deletecar btn btn-warning btn-circle" type="button"><i class="fa fa-times"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            @endforeach
                                          

                                        </tbody>
                                    </table>

                                </div>
                                <?php echo isset($Variant) ? $Variant->render() : ''; ?>
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