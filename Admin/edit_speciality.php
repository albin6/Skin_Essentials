<?php include("header.php") ?>


<div id="page-wrapper">
    <div class="main-page">
        <div class="forms">

            <h3 class="title1">Medical Speciality</h3>
            <div class="col-sm-6"  style="min-height:500px;">
             
            <div class="form-grids row widget-shadow" data-example-id="basic-forms">
                <div class="form-title">
                    <h4>Edit Medical Speciality :</h4>
                </div>

                <div class="form-body">
                <?php
             include("../db.php");
             $id=$_GET['id'];
             $count=1;
              $sql="select * from tbl_medical_speciality where medical_speciality_id 	='$id'";
             $qt=  mysqli_query($con,$sql);
             $n=mysqli_num_rows($qt);
         
       while($row=mysqli_fetch_array($qt))
              {
                ?>
              <form action="" method="post" id="myform" class="row g-3">
             
            <div class="form-group"> <label for="">Speciality</label>
                <input type="text" class="form-control" id=""  value="<?php echo  $row['speciality'] ?>" placeholder="Speciality" name="category"> </div>
                <div class="text-center" >
                <button type="submit" class="btn btn-primary" name="submit">Submit</button></div> </form>     <?php } ?>
</div>
<?php 
                if(isset($_POST['submit']))
                                        {
                                          include_once("../db.php");
                                           
                                           
                                            $speciality=$_POST['category'];
                           
                           echo $query="update tbl_medical_speciality set speciality='$speciality' where medical_speciality_id='$id'"; 
                            $rs=mysqli_query($con, $query);
                            
                            if($rs)
                            {
                                echo '<script>alert("Added Successfully");window.location="add_speciality.php"</script>';
                            }
                     
                            else
                           {
                             echo '<script>alert("Error");</script>;window.location="add_speciality.php"';
                           }
                                            
                          }         
                                        ?>
<script src="{% static 'assets/Validation/jquery_validate.js' %}"></script>
<script src="{% static 'assets/Validation/additional_validate.js' %}"></script>
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
                        category: {
                          required: true,
                          regex :/^[a-zA-Z ]+$/,

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
            
            <div class="row">

        </div>
    </div>
</div>
<!--footer-->
<?php include("footer.php") ?>