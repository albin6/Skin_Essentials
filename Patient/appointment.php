
<?php include("header.php") ?>

<!-- Appointment Start -->
<div class="container-fluid py-5">
<div class="container">
<div class="row gx-5">
<div class="col-lg-6 mb-5 mb-lg-0">
<div class="mb-4">
<h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Appointment</h5>
<h1 class="display-4">Make An Appointment For Your Family</h1>
</div>
<p class="mb-5">Doctor / Hospital / Specialization to match specific consultation needs. Confirmed Online Appointment slots, practice locations, to select from to book appointment for clinic consultation.</p>
<!-- <a class="btn btn-primary rounded-pill py-3 px-5 me-3" href="">Find Doctor</a>
<a class="btn btn-outline-primary rounded-pill py-3 px-5" href="">Read More</a> -->
</div>
<div class="col-lg-6">
<div class="bg-light text-center rounded p-5">
<h1 class="mb-4">Book An Appointment</h1>

<form action="save_appointment.php" method="post" id="myform" enctype="multipart/form-data">
  
<div class="row g-3">
<div class="col-12 col-sm-12">
	<div class="form-group"> <label for="">Hospital</label>
		<select name="hospital_login_id"  id="hospital_login_id" class="form-control bg-white">
	
    <option value="">--Select--</option>
  
  <?php  
  include("../db.php");
  $qt=  mysqli_query($con,"select * from tbl_hospital where login_id in(select login_id from tbl_login where status='Approved' and Usertype='Hospital')");

 while ($row=  mysqli_fetch_array($qt))
                               {
                                       ?>
   <option value="<?php echo $row['login_id']?>"><?php echo $row['hospital']?></option>
<?php } ?>
		</select> </div>
<div class="form-group"> <label for="">Specialization</label>
<select name="medical_speciality_id"  id="medical_speciality_id" class="form-control bg-white">
<option value="">--Select--</option>

</select> </div>
</div>
<div class="col-12 col-sm-12"> <label for="">Doctor</label>
<select class="form-select bg-white border-0" id="doctor" name="doctor" style="height: 55px;">
<option selected>Select Doctor</option>

</select>
</div>

<div class="col-12 col-sm-12"> <label for="">Date</label>
<div  data-target-input="nearest">
<input type="date"
class="form-control bg-white border-0 datetimepicker-input"
placeholder="Date" data-target="#date" id="appointment_date" name="appointment_date" data-toggle="datetimepicker" style="height: 55px;">
</div>
</div>

<div class="col-12">
<button class="btn btn-primary w-100 py-3" name="submit" type="submit">Make An Appointment</button>
</div>
</div>
</form>

<script src="../assets/assets/Validation/jquery-1.11.1.min.js"></script>
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

    medical_speciality_id: {
						  required: true,
						  
						},
					
						hospital_login_id: {
						  required: true,


						},
						doctor: {
						  required: true,


						},
						appointment_date: {
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

<script>
	$(function(){
    var dtToday = new Date();
    
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    
    var maxDate = year + '-' + month + '-' + day;

    // or instead:
    // var maxDate = dtToday.toISOString().substr(0, 10);

   
    $('#appointment_date').attr('min', maxDate);
});
    $("#hospital_login_id").change(function () {
          var hospital_login_id = $(this).val();
			
          $.ajax({

                url: 'display_speciality.php',
                data: {
                    'hospital_login_id': hospital_login_id
                },
                 
				success: function (data) {
      
	  $("#medical_speciality_id").html(data)

	}
});

       });
	   $("#medical_speciality_id").change(function () {
      var medical_speciality_id = $(this).val();
      var hospital_login_id = $('#hospital_login_id').val();
      $.ajax({

            url: 'display_doctor.php',
            data: {
                'medical_speciality_id': medical_speciality_id,'hospital_login_id': hospital_login_id
            },
             
    success: function (data) {
  
$("#doctor").html(data)

}
});

   });
	   </script>
</div>
</div>
</div>
</div>
</div>
<?php include("footer.php") ?>