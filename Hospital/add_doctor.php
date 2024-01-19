

<?php include("header.php")?>
<div id="page-wrapper">
<div class="main-page">
<div class="forms">

<h3 class="title1">Add Doctor</h3>
<div class="col-sm-12"  style="min-height:500px;">

<div class="form-grids row widget-shadow" data-example-id="basic-forms">
<div class="form-title">
<h4>New Doctor:</h4>
</div>

<div class="form-body">
<form action="#" method="post" id="myform" enctype="multipart/form-data">



<div class="col-sm-6">
<div class="form-group"> <label for="">Doctor's First Name</label>
<input type="text" class="form-control" id=""  name="doctor_first_name"> </div>
<div class="form-group"> <label for="">Doctor's Last Name</label>
  <input type="text" class="form-control" id=""  name="doctor_last_name"> </div>
  <div class="form-group"> <label for="">Specialization</label>
    <select name="medical_speciality_id"  id="medical_speciality_id" class="form-control">
      <option value="">--Select--</option>
     
      <?php  
     include("../db.php");
     $qt=  mysqli_query($con,"select * from tbl_medical_speciality");

    while ($row=  mysqli_fetch_array($qt))
                                  {
                                          ?>
      <option value="<?php echo $row['medical_speciality_id']?>"><?php echo $row['speciality']?></option>
<?php } ?>
    </select> </div>
<div class="form-group">
<label>Address</label>
<textarea name="address"  class="form-control" ></textarea>
</div>


<div class="form-group"> <label for="">State</label>
    <select name="state"  id="state" class="form-control">
    <?php  

     $qt=  mysqli_query($con,"select * from tbl_state");

    while ($row=  mysqli_fetch_array($qt))
                                  {
                                          ?>
      <option value="<?php echo $row['state_id']?>"><?php echo $row['state']?></option>
<?php } ?>
    </select> </div>
<div class="form-group"> <label for="">District</label>
  <select name="district" id="district" class="form-control">
    <option value="">--Select--</option>

  </select> </div>
  <div class="form-group">
    <label>Qualification</label>
    <textarea name="qualification"  class="form-control" ></textarea>
    </div>
</div>
<div class="col-sm-6">
  <div class="form-group">
    <label>Photo</label>
    <input  type="file" name="photo" >
</div>
  <div class="form-group">
    <label>Place</label>
    <input class="form-control" type="text" name="place" >
</div>
    <div class="form-group">
    <label>Email </label>
    <input  type="text" class="form-control"  name="email" >
    </div>
    
    
    
    <div class="form-group">
      <label>Phone Number</label>
      <input  class="form-control"   type="text" name="phone_number" >
    </div>

      

<div class="form-group">
    <label>Username</label>
  <input name="username" class="form-control" placeholder="Username"   id="id_username" type="text" class="form-control">
  <span id="cb"></span>
</div>

              <div class="form-group">
                <label>Password</label>
  <input type="password" class="form-control"  placeholder="Password" name="password" id="password"  >
</div>
              <div class="form-group">
                <label>Confirm Password</label>
  <input type="password" class="form-control"  placeholder="Confirm Password" name="cpassword" id="password2"  >
</div>
</div>
<div class="col-sm-12" style="text-align: center;"> <button type="submit" name="submit" class="btn btn-default">Submit</button> </div></form>
<?php if(isset($_POST['submit']))
                                        {
                                          $logid=$_SESSION["hospital"]["login_id"];
                                          include_once("../db.php");
                                            $doctor_first_name=$_POST['doctor_first_name'];
                                            $doctor_last_name=$_POST['doctor_last_name'];
                                            $medical_speciality_id=$_POST['medical_speciality_id'];
                                            $Address=$_POST['address'];
                                            $email=$_POST['email'];
                                            $qualification=$_POST['qualification'];
                                            
                                            $phone=$_POST['phone_number'];
                                          
                                            $district=$_POST['district'];
                                            $place=$_POST['place'];

                                            $username=$_POST['username'];
                                            $password=$_POST['password'];
                                          
                                               $qr=mysqli_query($con,"select * from tbl_login where username='$username'");
                        
                                                $n=mysqli_num_rows($qr);
                           if($n==0)
                           {
                            $temp = explode(".", $_FILES["photo"]["name"]);
                                            $newfilename = round(microtime(true)) . '.' . end($temp);
                                            move_uploaded_file($_FILES["photo"]["tmp_name"], "../Upload/" . $newfilename);
                            $query="insert into tbl_login(username,password,Usertype,status)values('$username','$password','Doctor','Approved')"; 
                            $rs=mysqli_query($con, $query);
                            $last_id = mysqli_insert_id($con);
                            $query="insert into tbl_doctor(login_id,hospital_login_id,doctor_first_name, doctor_last_name, address, email, phone_number, district_id, place, medical_speciality_id, photo, qualification)values('$last_id','$logid','$doctor_first_name','$doctor_last_name','$Address','$email','$phone','$district','$place','$medical_speciality_id','$newfilename','$qualification')"; 
                            $rs=mysqli_query($con, $query);
                            if($rs)
                            {
                                echo '<script>alert("Registered Successfully");window.location="add_doctor.php"</script>';
                            }
                            else{
                              echo '<script>alert("Failed - Error");window.location="add_doctor.php"</script>';
                            }
                          
                           }
                            else
                           {
                             echo '<script>alert("Username Already  Exist!!");</script>';
                           }
                                            
                                        }
                                        ?>
                    <script src="../assets/assets/Validation/jquery_validate.js"></script>
                    <script src="../assets/assets/Validation/additional_validate.js"></script>
<script>
  
    $("#state").change(function () {
          var state = $(this).val();


          $.ajax({

                url: 'display_district.php',
                data: {
                    'state_id': state
                },
                dataType: 'html',
                success: function (data) {


                  
$("#district").html(data);



                }
          });

       });</script>

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
						  required: true,
						 extension:'png|jpg|jpeg'
						},

						email: {
						 required: true,
						 regex :  /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/

						},
						username: {
							required: true,
							regex : /^[A-Za-z0-9@]+$/,
							minlength: 5,
							maxlength: 15,

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

<script>
    $("#state").change(function () {
          var state = $(this).val();

          $.ajax({

                url: '/display_district/',
                data: {
                    'state_id': state
                },
                dataType: 'json',
                success: function (data) {


                   let html_data = '<option value="">--Select--</option>';
data.forEach(function (data) {
html_data += `<option value="${data.district_id}">${data.district}</option>`
});
$("#district").html(html_data);



                }
          });

       });</script>
        <script>
              $("#id_username").keyup(function () {
                  $('#uname').val("");
                 var username = $(this).val();
                 var count = username.length;
                 $('#cb').html("");
                 if(count>4)
                {
                 $.ajax({
                       url: '/check_username/',
                       data: {
                           'username': username
                       },
                       dataType: 'json',
                       success: function (data) {
                            if (data.username_exists) {


                              $('#cb').css('color','red');
                          $('#cb').html(data.error);

                            }
                            else{

                              $('#cb').css('color','green');
                          $('#cb').html(data.success);
                          $('#uname').val(1);
                            }
                       }
                 });
              }
              });
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
<?php include("footer.php")?>