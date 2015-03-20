
<div class="form-group">
    <label for="company">Company</label>
    <select id="company" name="company" class="form-control">
        <option value=''>Select</option>
        @foreach ($companies as $companieskey=>$companiesvalue)    
        @if(isset($specifiedCompany)&&$specifiedCompany==$companiesvalue->id)
        <option value="{{$companiesvalue->id}}"  selected >{{{$companiesvalue->name or ''}}}</option>
        @else
         <option value="{{$companiesvalue->id}}">{{{$companiesvalue->name or ''}}}</option>
        @endif
       
        @endforeach
    </select>
    <?php echo $errors->first('company'); ?>
</div>
<div class="form-group">
    <label for="car">Car</label>
     <select id="car" name="car" class="form-control">
         @if(isset($specifiedCar)&&$specifiedCar)
         <option  value="{{$specifiedCar or ''}}" selected >{{{$specifiedCarName or ''}}}</option>  
         @else
          <option value=''>Select</option>   
         @endif     
    </select>
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