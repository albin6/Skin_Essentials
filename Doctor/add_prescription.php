<?php include("header.php") ?>
<div id="page-wrapper">
    <div class="main-page">
        <div class="forms">

            <h3 class="title1">Add Prescription details</h3>

            <div class="col-sm-12" style="margin-top: 10px;">
    <div class="form-title">
                    <h4>Add Details :</h4>
                </div>
             
                            <form action="save_prescription.php" method="post" id="myform" enctype="multipart/form-data">
                       
                            <div class="col-sm-6" >
                               
                                <div class="form-group">
                                    <label>Next visiting date</label><input type="hidden" name="appointment_id" value="<?php echo $_GET['id'] ?>">
                                    <input type="text" readonly class="form-control" placeholder="Date" id="visiting_date" name="visiting_date"  style="height: 55px;">
                                    </div> 
                                    
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Symptoms</label>
                                            <textarea name="symptoms"  class="form-control" ></textarea>
                                            </div>
                                        <label>Medicine Details</label>
                                        <textarea name="medicine"  class="form-control" ></textarea>
                                        </div>
                                        
                                   
                                
                                     
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Uses of Medicine </label>
                                            <textarea name="uses"  class="form-control" ></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Other Details</label>
                                                <textarea name="details"  class="form-control" ></textarea>
                                                </div>
                                    </div>
                                    <div class="col-sm-12" style="text-align: center;"> <button type="submit" name="submit" class="btn btn-default">Submit</button> </div></form>
                                    <link href="../assets/assets/jquery/jquery-ui.css" rel="stylesheet" type="text/css"  />
                                    
                                    <script type="text/javascript" src="../assets/assets/jquery/jquery-ui.js"></script>
                                    <script type="text/javascript" src="../assets/assets/jquery/jquery-ui.min.js"></script>
                                   
                         
                                    <script src="../assets/assets/Validation/jquery_validate.js"></script>
                                    <script src="../assets/assets/Validation/additional_validate.js"></script>
                                    <script>
                                    (function ($, W, D)
                                    {
                                    var JQUERY4U = {};
                                    JQUERY4U.UTIL =
                                    {
                                    setupFormValidation: function ()
                                    {
                                    $.validator.addMethod(
                                    "regex",
                                    function(value, element, regexp) {
                                    var check = false;
                                    return this.optional(element) || regexp.test(value);
                                    },
                                    "Not a valid Input."
                                    );
                                    
                                    //form validation rules
                                    $("#myform").validate({
                                    rules: {
                                        visiting_date: {
                                                              required: true,
                                                            
                                                           
                                    
                                                            },
                                                            symptoms: {
                                                              required: true,
                                                            
                                                           
                                    
                                                            },
                                                            
                                        medicine: {
                                                              required: true,
                                                            
                                                              minlength: 5,
                                    
                                                            },
                                                            uses: {
                                                              required: true,
                                                             
                                                              minlength: 5,
                                    
                                                            },			
                                                            details: {
                                                              required: true,
                                                             
                                                              minlength: 5,
                                    
                                                            },
                                                        
                                                          },
                                                          messages: {
                                    
                                                           
                                    
                                              
                                          },
                                    submitHandler: function (form) {
                                    form.submit();
                                    }
                                    });
                                    }
                                    }
                                    //when the dom has loaded setup form validation rules
                                    $(D).ready(function ($) {
                                    JQUERY4U.UTIL.setupFormValidation();
                                    });
                                    })(jQuery, window, document);
                                    </script>
                                    <link href="assets/assets/jquery/jquery-ui.css" rel="stylesheet" type="text/css"  />
                                   
                                    <script type="text/javascript" src="assets/assets/jquery/jquery-ui.js"></script>
                                   
                                    <script>
                                    $(function() {
                                    
                                    
                                    $( "#visiting_date" ).datepicker({ dateFormat: 'yy-mm-dd', changeMonth: true,
                                    changeYear: true,minDate:'0', });
                             
                                    
                                    });</script>
                               
                            </div>   
                          


            </div>
            <div class="row">

        </div>
    </div>
</div></div>
<!--footer-->
<?php include("footer.php") ?>