

<?php include("header.php") ?>
<div id="page-wrapper">
<div class="main-page">
<div class="forms">

<h3 class="title1">Update Doctor</h3>
<div class="col-sm-12"  style="min-height:500px;">

<div class="form-grids row widget-shadow" data-example-id="basic-forms">
<div class="form-title">
<h4>New Doctor:</h4>
</div>

<div class="form-body">
  
  
<?php
            include("../db.php");
          $count=1;
          $qt=  mysqli_query($con,"select * from tbl_doctor where doctor_id=".$_GET['id']);
          $row=mysqli_fetch_array($qt);
      ?>
<form action="" method="post" id="myform" enctype="multipart/form-data">



<div class="col-sm-6">
<div class="form-group"> <label for="">Doctor's First Name</label>
<input type="text" class="form-control" id="" value="<?php echo $row["doctor_first_name"]?>"  name="doctor_first_name"> </div>
<div class="form-group"> <label for="">Doctor's Last Name</label>
  <input type="text" class="form-control" id="" value="<?php echo $row["doctor_last_name"]?>"  name="doctor_last_name"> </div>
  <div class="form-group"> <label for="">Specialization</label>
    <select name="medical_speciality_id"  id="medical_speciality_id" class="form-control">
     
      <option value="">--Select--</option>
      <?php  

$qt=  mysqli_query($con,"select * from tbl_medical_speciality");
$r=mysqli_fetch_array($qt);
while($r=mysqli_fetch_array($qt))
{
if($row["medical_speciality_id"]==$r["medical_speciality_id"])
{
?>
  <option selected value="<?php echo $r['medical_speciality_id']?>"><?php echo $r['speciality']?></option>
<?php } 
else
{
  ?>
   <option  value="<?php echo $r['medical_speciality_id']?>"><?php echo $r['speciality']?></option>
  <?php
}
}
?>    </select> </div>
<div class="form-group">
<label>Address</label>
<textarea name="address"  class="form-control" ><?php echo $row["address"]?></textarea>
</div>

<div class="form-group">
  <label>Qualification</label>
  <textarea name="qualification"  class="form-control" ><?php echo $row["qualification"]?></textarea>
  </div>
</div>

 
</div>
<div class="col-sm-6">
  <div class="form-group">
    <label>Photo</label>
    <input  type="file" name="photo" >
    <td><img src="../Upload/<?php echo $row["photo"]?>" width="100" height="80"></td>
</div>
  <div class="form-group">
    <label>Place</label>
    <input class="form-control" type="text" name="place" value="<?php echo $row["place"]?>" >
</div>
    <div class="form-group">
    <label>Email </label>
    <input  type="text" class="form-control"  name="email" value="<?php echo $row["email"]?>" >
    </div>
    
    
    
    <div class="form-group">
      <label>Phone Number</label>
      <input  class="form-control"   type="text" name="phone_number"  value="<?php echo $row["phone_number"]?>" >
    </div>

    
              
</div>
<div class="col-sm-12" style="text-align: center;"> <button type="submit" name="submit" class="btn btn-default">Submit</button> </div></form>

<?php 
                if(isset($_POST['submit']))
                                        {
                                          include_once("../db.php");
                                          $doctor_first_name=$_POST['doctor_first_name'];
                                          $doctor_last_name=$_POST['doctor_last_name'];
                                          $medical_speciality_id=$_POST['medical_speciality_id'];
                                          $Address=$_POST['address'];
                                          $email=$_POST['email'];
                                          $qualification=$_POST['qualification'];
                                          
                                          $phone=$_POST['phone_number'];
                                          $place=$_POST['place'];
                                      
                                          if(!isset($_FILES['photo']) || $_FILES['photo']['error'] == UPLOAD_ERR_NO_FILE) {
                                       
                                         
                                           
                           echo $query="update  tbl_doctor set doctor_first_name='$doctor_first_name', doctor_last_name='$doctor_last_name', medical_speciality_id='$medical_speciality_id', address='$Address', email='$email', place='$place', phone_number='$phone',qualification='$qualification'  where doctor_id=".$_GET['id']; 
                           
                                        } else {
                                                                               
                                          $temp = explode(".", $_FILES["photo"]["name"]);
                                          $newfilename = round(microtime(true)) . '.' . end($temp);
                                          move_uploaded_file($_FILES["photo"]["tmp_name"], "../Upload/" . $newfilename);
                                          echo $query="update  tbl_doctor set doctor_first_name='$doctor_first_name', doctor_last_name='$doctor_last_name', medical_speciality_id='$medical_speciality_id', address='$Address', email='$email', place='$place', phone_number='$phone',photo='$newfilename',qualification='$qualification'  where doctor_id=".$_GET['id']; 
                                        }
                          $rs=mysqli_query($con, $query);
                                            
                            
                            if($rs)
                            {
                                echo '<script>alert("Updated Successfully");window.location="doctor_list.php"</script>';
                            }
                     
                            else
                           {
                       echo '<script>alert("Error");window.location="doctor_list.php"</script>';
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
</div>
<div class="col-sm-6" style="margin-top: 10px;">

</div>
<div class="row">

</div>
</div>
</div>
<!--footer-->
<?php include("footer.php") ?>