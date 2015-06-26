@extends('layout.layout')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h4 class="page-header">View Loan enquiry details&nbsp;({{$specificLoanEnquiry->first_name or ''}}&nbsp;{{$specificLoanEnquiry->last_name or ''}})</h4>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Loan Enquiry by {{$specificLoanEnquiry->first_name or ''}}{{$specificLoanEnquiry->last_name or ''}}
                @if(Session::has('successmessage'))
                <p class="alert alert-success">{{ Session::get('successmessage') }}</p>
                @endif
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
						<div class="form-group">
                          <?php
                                echo Form::label('cartype', 'Cartype');
                                echo Form::select('cartype',array(''=>'Select')+$carType,$specificLoanEnquiry->cartype_id, array('class' => 'form-control'));
                                echo '<br>';
                            ?>
                        </div>
                        <input  name="loandetails_submit" class="btn btn-primary" type="submit" value="Submit">
                        <button class="btn btn-danger" type="reset">Reset</button>
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

    });
</script>
@stop

