<?php include("header.php") ?>

<div class="container-fluid py-5">
	<div class="container">
		<div class="row gx-5">
		  
		
			<div class="col-lg-12 mb-5 mb-lg-0">
				<div class="col-lg-11" style="margin: auto;">
				
					<h1 class="mb-4">Patient's Appointment History</h1>
<div class="col-sm-12">
 <?php
$logid=$_SESSION["patient"]["login_id"];
             include("../db.php");
             $count=1;
              $sql="select distinct p.*,d.*,a.* from tbl_appointment as a inner join   tbl_doctor as d on a.doctor_login_id =d.login_id inner join tbl_hospital as h on h.login_id=d.hospital_login_id inner join tbl_medical_speciality as m  on m.medical_speciality_id=d.medical_speciality_id inner join tbl_patient as p on p.login_id=a.patient_login_id  where  a.patient_login_id=$logid";
             $qt=  mysqli_query($con,$sql);
             $n=mysqli_num_rows($qt);
         
         if($n>0) 
              {
                $count=1;
                ?>
                    <table class="table table-striped table-bordered border-primary">
                  <thead><th>Id</th><th>Patient Name</th><th>Phone Number</th><th>Addrees</th><th>Place </th><th>Date of Birth</th><th>Doctor Name</th><th>Appointment Date</th></thead>
<?php
                  while ($rt=  mysqli_fetch_array($qt))
                                                {

                             ?>     <tr>


<td><?php echo $count;?></td>
                                        <td><?php echo $rt['patient_name'];?> </td>
                                        <td><?php echo $rt['phone_number'];?></td>
                                        <td><?php echo $rt['address'];?></td>
                                        <td><?php echo $rt['place'];?></td>
                                      
                                       
                                 <td><?php echo $rt['dob'];?></td>
                                        
                                     
                                 <td><?php echo $rt['doctor_first_name'];?> &nbsp;&nbsp;<?php echo $rt['doctor_last_name'];?></td>
                                 <td><?php echo $rt['appointment_date'];?></td>
                                
                                    
                                
                                <?php     
$appointment_id=$rt['appointment_id'];
include("../db.php");
$count=1;
  $sql1="select * from  tbl_prescription  where  appointment_id=$appointment_id";
$qt1=  mysqli_query($con,$sql1);
 $n1=mysqli_num_rows($qt1);
if($n1>0)
{
?>
   <td><a href="view_prescription.php?id=<?php echo $rt['appointment_id'];?>" class="btn btn-success">View Prescription</a></td>
<?php
}
else{
  ?>
  <td>Not Consulted</td>
  <?php
 }
                                   ?>
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
  </table>
					</div></div></div>
		</div>
	</div>
</div><!---->
<?php include("footer.php") ?>

