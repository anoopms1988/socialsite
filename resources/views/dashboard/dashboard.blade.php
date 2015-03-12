@extends('layout.layout')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Car management</h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Add new car
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                       <?php echo Form::open(array('method' => 'post')); ?>
                            <div class="form-group">
                                <label for="company">Company</label>
                                <select id="company" name="company" class="form-control">
                                    <option>Select</option>
                                    @foreach ($companies as $companieskey=>$companiesvalue)
                                    <option value="{{{$companiesvalue->id}}}">{{{$companiesvalue->name or ''}}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Car name</label>
                                <input type="text" name="carname" id="carname" placeholder="Enter car name" class="form-control">
                            </div>
                   
                            <input  name="addcar_submit" class="btn btn-primary" type="submit" value="Submit">
                            <button class="btn btn-danger" type="reset">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
