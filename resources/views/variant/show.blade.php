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
                Modals
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <!-- Button trigger modal -->
                <button data-target="#myModal" data-toggle="modal" class="btn btn-primary btn-lg">
                    Launch Demo Modal
                </button>
                <!-- Modal -->
                <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                <h4 id="myModalLabel" class="modal-title">Modal title</h4>
                            </div>
                            <div class="modal-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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
