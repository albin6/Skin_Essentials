
<?php include("header.php") ?>

<div id="page-wrapper">
    <div class="main-page">
        <div class="forms">

            <h3 class="title1">Edit Profile</h3>

            <div class="col-sm-12" style="margin-top: 10px;">
    <div class="form-title">
                    <h4>Profile :</h4>
                </div>
            
			<?php  
			
			include("../db.php");
			$logid=$_SESSION["doctor"]["login_id"];
              $sql="select * from tbl_doctor  where login_id=$logid";
             $qt=  mysqli_query($con,$sql);
             $row=mysqli_fetch_array($qt);       
           
                ?>      
<form action="update_dr_profile.php" method="post" id="myform" enctype="multipart/form-data">

	
	
	<div class="col-sm-6">
	<div class="form-group"> <label for="">Doctor's First Name</label>
	<input type="text" class="form-control" id="" value="<?php echo $row['doctor_first_name']?>" name="doctor_first_name"> </div>
	<div class="form-group"> <label for="">Doctor's Last Name</label>
	  <input type="text" class="form-control" id="" value="<?php echo $row['doctor_last_name']?>" name="doctor_last_name"> </div>
	 
	<div class="form-group">
	<label>Address</label>
	<textarea name="address"  class="form-control" ><?php echo $row['address']?></textarea>
	</div>
	
	
	
<div class="form-group">
	<label>Qualification</label>
	<textarea name="qualification"  class="form-control" ><?php echo $row['qualification']?></textarea>
	</div>

  
   
	 
	</div>
	<div class="col-sm-6">
	  <div class="form-group">
		<label>Photo</label>
		<input  type="file" name="photo" >
		<td><img src="../Upload/<?php echo $row['photo']?>" width="100" height="80"></td>
	</div>
	  <div class="form-group">
		<label>Place</label>
		<input class="form-control" type="text" name="place" value="<?php echo $row['place']?>" >
	</div>
		<div class="form-group">
		<label>Email </label>
		<input  type="text" class="form-control"  name="email" value="<?php echo $row['email']?>" >
		</div>
		
		
		
		<div class="form-group">
		  <label>Phone Number</label>
		  <input  class="form-control"   type="text" name="phone_number"  value="<?php echo $row['phone_number']?>" >
		</div>
	
		
				  
	</div>
	<div class="col-sm-12" style="text-align: center;"> <button type="submit" class="btn btn-default" name="submit">Submit</button> </div></form>

	<link href="{% static 'assets/jquery/jquery-ui.css' %}" rel="stylesheet" type="text/css"  />
	
	
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
	
	$("#myform").validate({
	rules: {
	
	  doctor_first_name: {
							  required: true,
							  regex : /^[A-Za-z]+$/,
							  minlength: 3,
	
							},
				doctor_last_name: {
							  required: true,
							  regex : /^[A-Za-z]+$/,
							  minlength: 3,
	
							},			
							state: {
							  required: true,
	
	
							},
							district: {
							  required: true,
	
	
							},
							qualification: {
							  required: true,
	
	
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
				medical_speciality_id: {
							  required: true,
							 
	
							},
							photo: {
							  
							 extension:'png|jpg|jpeg'
							},
	
							email: {
							 required: true,
							 regex :  /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
	
							},
						
						  },
						  messages: {
	
							phone: "Please Enter Valid 10 digit Phone Number - Starting from 6, 7 or 8 or 9",
				photo: "png, jpeg,jpg files only",
	
			  username: "Please Enter Valid User Name(5-15 digit alphanumeric username",
				password: "Please Enter Valid Password Name(5-15 digit alphanumeric  password  and @#* also allowed",
				   cpassword: "Please Enter Valid Password Name(5-15 digit alphanumeric confirm password and same as above password and @#* also allowed",
				   uname:"User name is not available",
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
<?php include("footer.php") ?>

