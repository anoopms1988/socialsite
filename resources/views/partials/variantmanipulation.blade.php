
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
    <select id="car" name="car" class="form-control">
        <option value=''>Select</option>       
    </select>
<?php echo $errors->first('car'); ?>
</div>
<div class="form-group">
    <label for="variant">Variant</label>
    <input type="text" name="variant" id="variant" placeholder="Enter variant" class="form-control">
<?php echo $errors->first('variant'); ?>
</div>
<div class="form-group">
    <label for="type">Type</label>
    <input type="text" name="type" id="type" placeholder="Enter type" class="form-control">
<?php echo $errors->first('type'); ?>
</div>
<input  name="addvariant_submit" class="btn btn-primary" type="submit" value="Submit">
<button class="btn btn-danger" type="reset">Reset</button>