<?php include("header.php") ?>

<div id="page-wrapper">
    <div class="main-page">
        <div class="forms">

            <h3 class="title1">Change Password</h3>

            <div class="col-sm-12" style="margin-top: 10px;">
    <div class="form-title">
             
                </div>
               
                      
                       
                            <form method="post" action="update_password.php" method="post" id="myform">
                            
                
                
                
                
                
                                <div>
                                    <span><label>Old Password</label></span>
                                   <span><input name="opassword" type="password" id="opassword" class="form-control"></span>
                                </div>
                               <div>
                                <span><label>New Password</label></span>
                               <span><input name="password" type="password" id="password" class="form-control"></span>
                            </div>
                            <div>
                            <span><label>Confirm Password</label></span>
                            <span><input name="cpassword" type="password" class="form-control"></span>
                            </div>
                            <div   style="text-align: center;margin-top: 6px;"><div>
                                <span><input type="submit" name="submit" value="Submit" class="btn btn-info"></span>
                            </div></div>
                              </div>
                
                            </form>
                     
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
                                            opassword: {
                                                                required: true,
                
                
                                                            },
                
                                            password: {
                                                                required: true,
                                                                 regex : /^[A-Za-z0-9@#*]+$/,
                                                                 minlength: 5,
                                                                maxlength: 15,
                
                                                            },
                                                            cpassword: {
                                                                required: true,
                                                                   regex : /^[A-Za-z0-9@#*]+$/,
                                                                   minlength: 5,
                                                                  maxlength: 15,
                                                              equalTo: "#password"
                
                                                            },
                                                          },
                                                          messages: {
                
                                                             password: "Please Enter Valid Password Name(5-15 digit alphanumeric  password  and @#* also allowed",
                                                   cpassword: "Please Enter Valid Password Name(5-15 digit alphanumeric confirm password and same as above password and @#* also allowed",
                
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
	         
                            </div>   
                          


            </div>
            <div class="row">

        </div>
    </div>
</div></div>
<!--footer-->
{% endblock %}


<?php include("footer.php") ?>