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
                List all variants   
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Variant details
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table id="dataTables-example" class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Variant name</th>
                                                <th>Car</th>
                                                <th>Company</th>
                                                <th>Car type</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($Variant as $VariantKey=>$VariantValue)
                                            <tr>
                                                <td class="listvariants odd gradeX" id="varaint_{{$VariantValue->id}}">{{{$VariantValue->name or ''}}}</td>
                                                <td>{{{$VariantValue->car()->first()->name or ''}}}</td>
                                                <td>{{{$VariantValue->car()->first()->company()->first()->name or ''}}}</td>
                                                <td>{{{$VariantValue->type or ''}}}</td>
                                                <td>
                                                    <button class="btn btn-primary btn-circle" type="button"><i class="fa fa-list"></i>
                                                    </button>
                                                    <button class="deletevariant btn btn-warning btn-circle"  id="delete_variant_{{$VariantValue->id}}" type="button"><i class="fa fa-times"></i>
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
    });
</script>
@stop

