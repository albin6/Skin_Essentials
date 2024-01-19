<?php include("header.php") ?>

    <!-- Navbar End -->


    <!-- Appointment Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
              
                <div class="col-lg-12 mb-5 mb-lg-0">
                    <form action="" method="post" id="myform" enctype="multipart/form-data">
                     
       <div class="row">         
<div class="col-sm-6">
    <div class="form-group"> <label for="">Name</label>
    <input type="text" class="form-control" id=""  name="patient_name"> </div>
    
    <div class="form-group">
    <label>Address</label>
    <textarea name="address"  class="form-control" ></textarea>
    </div>
    <div class="form-group">
    <label>Date of Birth </label>
    <input  type="date" class="form-control" max="<?php echo date("Y-m-d"); ?>" id="dob"  name="dob" >
    </div>
    
    
    
    <div class="form-group">
      <label>Phone Number</label>
      <input  class="form-control"   type="text" name="phone_number" >
    </div>
    <div class="form-group"> <label for="">State</label>
        <select name="state"  id="state" class="form-control">
        <option value="">--Select--</option>
  
     <?php  
     include("db.php");
     $qt=  mysqli_query($con,"select * from tbl_state");

    while ($row=  mysqli_fetch_array($qt))
                                  {
                                          ?>
      <option value="<?php echo $row['state_id']?>"><?php echo $row['state']?></option>
<?php } ?>
        </select> </div>
  
    
                </div>
                <div class="col-lg-6">
                  
                    <div class="form-group"> <label for="">District</label>
                        <select name="district" id="district" class="form-control">
                          <option value="">--Select--</option>
                      
                        </select> </div>
        <div class="form-group">
            <label>Place</label>
            <input class="form-control" type="text" name="place" >
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
</div>   
<div class="col-sm-12" style="text-align: center;"> <button  name="submit" type="submit" class="btn btn-primary ">Register</button> </div></form>
<?php if(isset($_POST['submit']))
                                        {
                                          include_once("db.php");
                                            $patient_name=$_POST['patient_name'];
                                        
                                            
                                            $phone=$_POST['phone_number'];
                                            $Address=$_POST['address'];
                                            $district=$_POST['district'];
                                            $place=$_POST['place'];
                                            $dob=$_POST['dob'];
                                            
                                            $username=$_POST['username'];
                                            $password=$_POST['password'];
                                          
                                               $qr=mysqli_query($con,"select * from tbl_login where username='$username'");
                        
                                                $n=mysqli_num_rows($qr);
                           if($n==0)
                           {
                           
                           echo $query="insert into tbl_login(username,password,Usertype,status)values('$username','$password','Patient','Not Approved')"; 
                            $rs=mysqli_query($con, $query);
                            $last_id = mysqli_insert_id($con);
                          echo  $query="insert into tbl_patient( login_id, patient_name, phone_number, Address, place, dob, district_id )values('$last_id','$patient_name','$phone','$Address','$place','$dob','$district')"; 
                            $rs=mysqli_query($con, $query);
                            if($rs)
                            {
                                echo '<script>alert("Registered Successfully");window.location="patient_registration.php"</script>';
                            }
                          
                           }
                            else
                           {
                             echo '<script>alert("Username Already  Exist!!");</script>';
                           }
                                            
                                        }
                                        ?>
                   
<script src="assets/assets/Validation/jquery-1.11.1.min.js"></script>
                    <script src="assets/assets/Validation/jquery_validate.js"></script>
                    <script src="assets/assets/Validation/additional_validate.js"></script>


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
					
						state: {
						  required: true,


						},
						district: {
						  required: true,


						},
                        dob: {
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
						ownername: {
						  required: true,
						  minlength: 3,
						  regex : /^[A-Za-z ]+$/,
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
    </div>
    <!-- Appointment End -->

    <?php include("footer.php") ?>