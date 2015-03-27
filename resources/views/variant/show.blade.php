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
@stop
@section('script')
<script type="text/javascript">
    $(document).ready(function () {

    });
</script>
@stop
