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
    <label for="variant">Variant</label>
    <select id="variant" name="variant" class="form-control">
        <option value=''>Select</option>
       
    </select>
    <?php echo $errors->first('company'); ?>
</div>