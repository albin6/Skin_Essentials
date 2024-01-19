
<?php include("header.php") ?>
<div class="container-fluid py-5">
<div class="container">
<div class="row gx-5">
<div class="col-lg-12 mb-5 mb-lg-0">
<div class="mb-4">

</div>
<?php 
   include("../db.php");
   $logid=$_SESSION["patient"]["login_id"];
              $sql="select * from tbl_patient where login_id='$logid'";
             $qt=  mysqli_query($con,$sql);
             $row=mysqli_fetch_array( $qt);?>
<form method="post" action="update_profile.php" method="post" id="myform" enctype="multipart/form-data">

  <div class="col-sm-6" style="margin: auto;">
    <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Profile</h5>
<h1 class="display-4">Edit profile</h1>
    <div class="form-group"> <label for="">Name</label>
    <input type="text" class="form-control" value="<?php echo $row['patient_name'] ?>" id=""  name="patient_name"> </div>
    
    <div class="form-group">
    <label>Address</label>
    <textarea name="address"  class="form-control" ><?php echo $row['Address'] ?></textarea>
    </div>
    <div class="form-group">
    <label>Date of Birth </label>
    <input  type="date" class="form-control" id="dob" value="<?php echo $row['dob'] ?>"  name="dob" >

    
</div>
    <div class="form-group">
        <label>Phone Number</label>
        <input  class="form-control" value="<?php echo $row['phone_number'] ?>"   type="text" name="phone_number" >
      </div>
      <div class="form-group">
        <label>Place</label>
        <input class="form-control"  value="<?php echo $row['place'] ?>"    type="text" name="place" >
    </div>
<div class="col-sm-12"  style="text-align: center;"><div>
<input type="submit" value="Submit" name="submit" class="btn btn-info">
</div></div>
</form>
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

    patient_name: {
						  required: true,
						  regex : /^[A-Za-z ]+$/,
						  minlength: 3,

						},
					
						
						place: {
						  required: true,
						  regex : /^[A-Za-z ]+$/,

						},
						phone_number: {
							required: true,
							digits:true,
							   minlength: 10,
							   maxlength: 10,
							   regex : /^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[6789]\d{9}$/
						},
						address: {
						  required: true,
						  minlength: 3,

						},
						dob: {
						  required: true,
						
						},

						email: {
						 required: true,
						 regex :  /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/

						},
						
					
					  },
					  messages: {

						phone: "Please Enter Valid 10 digit Phone Number - Starting from 6, 7 or 8 or 9",

		
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


					</div></div></div>
	
					<?php include("footer.php") ?>


