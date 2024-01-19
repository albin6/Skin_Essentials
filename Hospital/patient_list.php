


<?php include("header.php") ?>
<div id="page-wrapper">
    <div class="main-page">
        <div class="forms">

            <h3 class="title1">Patient List</h3>
            <div class="col-sm-12"  style="min-height:500px;">
            
            <div class="form-grids row widget-shadow" data-example-id="basic-forms">
                <div class="form-title">

                
                    <h4>List :</h4>
                </div>

                <div class="form-body">
             
            
            <div class="col-sm-12" style="margin-top: 10px;">
            <h3 class="title1">Search Patient </h3>
            <form action="patient_details.php" method="post" id="myform" class="row g-3">
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
                    $logid=$_SESSION["hospital"]["login_id"];
             include("../db.php");
             $count=1;
              $sql="select distinct p.*,d.* from tbl_appointment as a inner join   tbl_doctor as d on a.doctor_login_id =d.login_id inner join tbl_hospital as h on h.login_id=d.hospital_login_id inner join tbl_medical_speciality as m  on m.medical_speciality_id=d.medical_speciality_id inner join tbl_patient as p on p.login_id=a.patient_login_id  where  d.hospital_login_id=$logid";
             $qt=  mysqli_query($con,$sql);
             $n=mysqli_num_rows($qt);
         
         if($n>0) 
              {
                $count=1;
                ?>
              <table class="table table-striped table-bordered border-primary">
                  <thead><th>Id</th><th>Patient Name</th><th>Phone Number</th><th>Addrees</th><th>Place </th><th>Date of Birth</th><th>Doctor Name</th></thead>
<?php
                  while ($rt=  mysqli_fetch_array($qt))
                                                {
                                                        ?>

                    <tr>


           
                                              <td><?php echo $count;?></td>
                                                <td><?php echo $rt['patient_name'];?></td>
                                             
                                                <td><?php echo $rt['phone_number'];?></td>
                                                <td><?php echo $rt['Address'];?></td>
                                                <td><?php echo $rt['place'];?></td>
                                                <td><?php echo $rt['dob'];?></td>
                                                <td><?php echo $rt['doctor_first_name'];?> &nbsp;&nbsp;<?php echo $rt['doctor_last_name'];?></td>
                    


                    </tr>

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