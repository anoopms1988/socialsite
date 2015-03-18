<div class="row">
    <div class="col-lg-12">
        <h4 class="page-header">Car management</h4>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                {{$formtitle}}
                @if(Session::has('successmessage'))
                <p class="alert alert-success">{{ Session::get('successmessage') }}</p>
                @endif
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <?php echo Form::open(array('method' => 'post')); ?>
                        <div class="form-group">
                            <label for="company">Company </label>
                            <select id="company" name="company" class="form-control">
                                <option value=''>Select</option>
                                @foreach ($companies as $companieskey=>$companiesvalue)
                                <option value="{{{$companiesvalue->id}}}">{{{$companiesvalue->name or ''}}}</option>
                                @endforeach
                            </select>
                            <?php echo $errors->first('company'); ?>
                        </div>
                        <div class="form-group">
                            <label for="cartype">Cartype </label>
                            <select id="cartype" name="cartype" class="form-control">
                                <option value=''>Select</option>
                                @foreach ($carTypes as $carTypeskey=>$carTypesvalue)
                                <option value="{{{$carTypesvalue->id}}}">{{{$carTypesvalue->type or ''}}}</option>
                                @endforeach
                            </select>
                            <?php echo $errors->first('cartype'); ?>
                        </div>
                        <div class="form-group">
                            <label>Car name</label>
                            <input type="text" name="carname" id="carname" placeholder="Enter car name" class="form-control">
                            <?php echo $errors->first('car'); ?>
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
