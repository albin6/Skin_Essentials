
<?php include("header.php") ?>


<div id="page-wrapper">
    <div class="main-page">
        <div class="forms">

            <h3 class="title1">Reply</h3>
            <div class="col-sm-6"  style="min-height:500px;">
             
            <div class="form-grids row widget-shadow" data-example-id="basic-forms">
                <div class="form-title">
                    <h4>Reply Feedback :</h4>
                </div>

                <div class="form-body">
                <form action="" method="post" id="myform">
             
             <div class="form-group"> <label for="">Reply</label>
             <textarea name="reply" id="reply" class="form-control"></textarea> </div>
                 <input type="hidden" name="feedback_id" value="<?php echo $_GET['id'] ?>"><button type="submit" class="btn btn-info" name="submit">Submit</button> </form>
               
               
                 <?php 
                 if(isset($_POST['submit']))
                                         {
                                           include_once("../db.php");
                                             $reply=$_POST['reply'];
                                       
                                             $feedback_id=$_POST['feedback_id'];
                            
                                              $query="update tbl_feedback set reply='$reply' where feedback_id='$feedback_id'"; 
                             $rs=mysqli_query($con, $query);
                             
                             if($rs)
                             {
                                 echo '<script>alert("Replied Successfully");window.location="view_feedback.php"</script>';
                             }
                      
                             else
                            {
                              echo '<script>alert("Error");</script>;window.location="view_feeback.php"';
                            }
                                             
                           }         
                                         ?>
               
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
                                reply: {
                                  required: true,


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
            </div>
        </div>
            <div class="col-sm-6" style="margin-top: 10px;">



            </div>
            <div class="row">

        </div>
    </div>
</div>
<!--footer-->
<?php include("footer.php") ?>