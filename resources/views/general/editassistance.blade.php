
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title" id="myModalLabel">Edit assistance details</h4>
                            </div>
                            {!! Form::open(array('action' =>'GeneralController@updateAssistanceDetails','id'=>'edit_assistance_details_form')) !!}
                            <input type="hidden" name="assistance_id" value="{{$Assistance->id or ''}}">
                            <div class="modal-body">
                                <?php
                                echo Form::label('company', 'Company');
                                // $mergedArray=array_merge(array(''=>'Select'),$company);
                                // dd($mergedArray);
                                echo Form::select('company',array(''=>'Select')+$company,  $Assistance->company_id, array('class' => 'form-control'));
                               // echo $errors->first('company'); 
                                echo '<br>';
                                echo Form::label('contact_number', 'Contact Number');
                                echo Form::text('contact_number', $Assistance->contact_number, array('class' => 'form-control'));
                               // echo $errors->first('contact_number'); 
                                echo '<br>';
                                echo Form::label('contact_address', 'Contact Address');
                                echo Form::textarea('contact_address', $Assistance->address, array('class' => 'form-control'));
                                //echo $errors->first('contact_address'); 
                                ?>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <input type="submit" name="update_assistance_details" class="btn btn-primary" value="Update">
                            </div>
                            {!! Form::close() !!}
           <script type="text/javascript">
    $(document).ready(function () {
         
         $("#edit_assistance_details_form").validate({
            rules: {
                company: "required",
                contact_number: {
                    number: true,
                    required:true
                },
                contact_address: "required"
            },
            messages: {
                company: "Enter  your name.",
                contact_number: "Enter your phone number.",
                contact_address: "Enter your feedback"
            }
        });
    });
</script>            