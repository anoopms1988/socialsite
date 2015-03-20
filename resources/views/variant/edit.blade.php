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
                Add new variant
                @if(Session::has('message'))
                <p class="alert alert-success">{{ Session::get('message') }}</p>
                @endif
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        {!! Form::model($variant,['method' => 'PATCH','route' => ['admin.variant.update',$variant->id]]) !!}
                        @include('partials.variantmanipulation')
                        {!! Form::close() !!}
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
        $('#company').change(function () {
            var companyId = $(this).val();
            $.ajax({
                type: "POST",
                url: '{{URL::to(trim(' / '))}}/admin/specificcars',
                data: {id: companyId, _token: $('meta[name=csrf-token]').attr('content')},
                success: function (response) {
                    $('#car').empty();
                    $('#car').append($('<option>').text('Select').attr('value', ''));
                    $.each(response, function (key, value) {
                        $('#car').append($('<option>').text(value.name).attr('value', value.id));
                    });
                }
            });
        });
    });
</script>
@stop


