
<div class="form-group">
    <label for="company">Company </label>
    <select id="company" name="company" class="form-control">
        <option value=''>Select</option>
        @foreach ($companies as $companieskey=>$companiesvalue)
        <option value="{{$companiesvalue->id}}">{{{$companiesvalue->name or ''}}}</option>
        @endforeach
    </select>
    <?php echo $errors->first('company'); ?>
</div>
<div class="form-group">
    <label for="car">Car</label>
<!--    <select id="car" name="car" class="form-control">
        <option value=''>Select</option>       
    </select>-->
    {!! Form::select('Car[name]',[
   '' => 'Select'],null,['class'=>'form-control','id'=>'car']) !!}
    <?php echo $errors->first('car'); ?>
</div>
<div class="form-group">
    <label for="name">Variant</label>
    {!! Form::text('name',null,array('class'=>'form-control','id'=>'name','placeholder'=>'Enter variant')) !!}
    <?php echo $errors->first('name'); ?>
</div>
<div class="form-group">
    <label for="type">Type</label>
    {!! Form::text('type',null,array('class'=>'form-control','id'=>'type','placeholder'=>'Enter type')) !!}
    <?php echo $errors->first('type'); ?>
</div>
<input  name="addvariant_submit" class="btn btn-primary" type="submit" value="Submit">
<button class="btn btn-danger" type="reset">Reset</button>