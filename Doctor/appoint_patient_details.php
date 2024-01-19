
<?php include("header.php") ?>
<div id="page-wrapper">
    <div class="main-page">
        <div class="forms">

            <h3 class="title1">Today's Appointment List</h3>

            <div class="col-sm-12" style="margin-top: 10px;">
    <div class="form-title">
                    <h4>View List :</h4>
                </div>
                <h3 class="title1">Search Patient </h3>
            <form action="appoint_patient_details.php" method="post" id="myform" class="row g-3">
            <div class="form-group" style="margin:15px;"> <label for="">Patient Id</label>
                <input type="text" class="form-control" style="width:40%" id="" placeholder="Patient ID" name="patient_id"> 
</div>
             
                <button type="submit"  style="margin:15px;" name="submit" class="btn btn-primary">Search</button> </form>
         
                                   
                                  
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
      patient_id: {
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
                <?php
                    $logid=$_SESSION["doctor"]["login_id"];
             include("../db.php");
             $d=date("Y-m-d");
             $count=1;
             $pid= $_POST['patient_id'];
              $sql="select distinct p.*,d.*,a.* from tbl_appointment as a inner join   tbl_doctor as d on a.doctor_login_id =d.login_id inner join tbl_hospital as h on h.login_id=d.hospital_login_id inner join tbl_medical_speciality as m  on m.medical_speciality_id=d.medical_speciality_id inner join tbl_patient as p on p.login_id=a.patient_login_id  where a.doctor_login_id=$logid and a.appointment_date='$d' and status!='Consulted' and a.patient_login_id='$pid'";
             $qt=  mysqli_query($con,$sql);
             $n=mysqli_num_rows($qt);       
             if($n>0) 
             {
                   ?>         <table class="table table-striped table-bordered">
                                <thead><th>Id</th><th>Name</th><th>Phone Number</th><th>Address</th><th>Place</th><th> Date of Birth</th><th> Doctor details</th><th> Appointment Date</th></thead>

                                <?php
                                while ($rt=  mysqli_fetch_array($qt))
                                                              {
?>
                                  <tr>


                                  <td><?php echo $count;?></td>
                                  <td><?php echo $rt['patient_name'];?> </td>
                                  <td><?php echo $rt['phone_number'];?> </td>
                                  <td><?php echo $rt['address'];?> </td>
                                  <td><?php echo $rt['place'];?> </td>
                                  <td><?php echo $rt['dob'];?> </td>
                                  <td><?php echo $rt['doctor_first_name']."".$rt['doctor_last_name'];?> </td>
                                  <td><?php echo $rt['appointment_date'];?> </td>
                                      
                                     
                                     
                                        <td><a href="add_prescription.php?id=<?php echo $rt['appointment_id'];?>" class="btn btn-success">Add Prescription</a></td>
                                     

                                   <?php
                                        $count++;
                                    } ?>
                                      </table>
                                    <?php } 
                                    else{
                                    ?>
                                      <div class="alert alert-success"> No List Available</div>
                                    <?php } ?>
                  
            </div>
            <div class="row">

        </div>
    </div>
</div>
<!--footer-->
<?php include("footer.php") ?>