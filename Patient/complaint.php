<?php include("header.php") ?>
<div class="container-fluid py-5">
<div class="container">
<div class="row gx-5">
<div class="col-lg-6 mb-5 mb-lg-0">
<div class="mb-4">
<h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Complaint</h5>
<h1 class="display-4">Complaint - Patient</h1>
</div>


<form method="post" action="#" method="post" id="myform" enctype="multipart/form-data">
                     
                     <div class="form-group">
                         <label> Subject</label>
                         <input name="subject" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                          <label>Complaint</label>
                        <textarea name="complaint"  class="form-control"></textarea>
                   </div>

               <div class="col-sm-12"  style="text-align: center;"><div>
                 <input type="submit" value="Submit" name="submit" class="btn btn-info">
       </div></div>
            </form>
            <?php 
             if(isset($_POST['submit']))
                                     {
                                       $logid=$_SESSION["patient"]["login_id"];
                                       include_once("../db.php");
                                         $complaint_subject=$_POST['subject'];
                                         $complaint=$_POST['complaint'];      
                                           
                        
                        echo $query="insert into tbl_complaint(complaint_subject, 	complaint ,user_login_id )values('$complaint_subject','$complaint','$logid')"; 
                         $rs=mysqli_query($con, $query);
                         
                         if($rs)
                         {
                             echo '<script>alert("Added Successfully");window.location="complaint.php"</script>';
                         }
                  
                         else
                        {
                          echo '<script>alert("Error");</script>;window.location="complaint.php"';
                        }
                                         
                       }         
                                     ?>
            <script src="../assets/assets_site/Validation/jquery-1.11.1.min.js"></script>
                 <script src="../assets/assets_site/Validation/jquery_validate.js"></script>
                 <script src="../assets/assets_site/Validation/additional_validate.js"></script>
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

                                subject: {

                                            required: true,
                                          regex :/^[a-zA-Z. ]+$/,
                                          minlength: 3,

                                        },
                                        complaint: {

                                            required: true,
                                          regex :/^[a-zA-Z. ]+$/,
                                          minlength: 3,
                                          maxlength:150,

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
</div>
<div class="col-lg-6">
<div class="bg-light text-center rounded p-5">
<h1 class="mb-4">Complaint List</h1>
<?php
              include("../db.php");
           $logid=$_SESSION["patient"]["login_id"];                         
        
        
                              
     $count=1;
                                             $qt=  mysqli_query($con,"select * from tbl_complaint where user_login_id=".$logid) ;
                                             $n=mysqli_num_rows($qt);
                                         
      if($n>0) 
      { 
         $count=1;
         ?>
                 <table class="table table-striped table-bordered">
                     <thead><th>Id</th><th>Subject</th><th>Complaint</th><th>Reply</th></thead>

                  <?php while($row=mysqli_fetch_array($qt)) 
                  {
                  ?>

                       <tr>


                         <td><?php echo $count ?></td>
                             <td><?php echo $row["complaint_subject"] ?></td>
                             <td><?php echo $row["complaint"] ?></td>
                             <td><?php echo $row["reply"] ?></td>
                            


                         </tr>

                   <?php 
                 $count++;
                 } ?>
                   </table>
            <?php 
            } 
            else{


          
            ?>
                   <div class="alert alert-success"> No List Available</div>
              <?php   } ?>

             </table>
</div>
</div>

					</div></div></div>
	


          <?php include("footer.php") ?>

