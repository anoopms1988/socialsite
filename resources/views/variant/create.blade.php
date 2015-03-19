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
                @if(Session::has('successmessage'))
                <p class="alert alert-success">{{ Session::get('successmessage') }}</p>
                @endif
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        {!! Form::model($variant, ['route' => ['admin.variant.store']]) !!}
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
                    $('#variantContent').empty();
                   // $('#variantContent').append($('<option>').text(" ").attr('value',''));
                    $.each(response, function (key, value) {
                       $('#variantContent').append($('<option>').text(value.name).attr('value', value.id));
                    });
                }
            });
        });
    });
</script>
@stop

