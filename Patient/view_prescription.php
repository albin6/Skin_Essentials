<?php include("header.php") ?>

<div class="container-fluid py-5">
	<div class="container">
		<div class="row gx-5">
		  
		
			<div class="col-lg-12 mb-5 mb-lg-0">
				<div class="col-lg-11" style="margin: auto;">
				
					<h1 class="mb-4">Patient's Appointment History</h1>
<div class="col-sm-12">
 <?php
$appid=$_GET["id"];
include("../db.php");    
                $sql="select * from tbl_prescription inner join tbl_appointment on tbl_prescription.appointment_id=tbl_appointment.appointment_id  where tbl_appointment.appointment_id=$appid";
             $qt=  mysqli_query($con,$sql);
             $n=mysqli_num_rows($qt);       
             if($n>0) 
             {
 
?>   
                            <table class="table table-striped table-bordered">
                               
<?php while ($row=  mysqli_fetch_array($qt))
                                            {
?>   
     <tr>
                                <th colspan="2" class="alert-info">
                                  Report Info
                                </th></tr>
                                <tr>                       

                                <tr>
                                <th>Next visiting Date</th>


                                <td><?php echo $row['visiting_date']; ?> </td></tr>
                                <tr>
                                <th>Consulting Date</th>


                                <td><?php echo $row['entry_date']; ?> </td></tr>
                                <tr>
                                    <th>Details</th>
    
    
                                    <td><?php echo $row['details']; ?> </td></tr>  
                                  </tr>
                                  <tr>
                                    <th>Medicine</th>
    
    
                                    <td><?php echo   $row['medicine']; ?> </td></tr>  
                                  </tr>
                                  <tr>
                                    <th>Symptoms</th>
    
    
                                    <td><?php echo $row['symptoms']; ?> </td></tr>  
                                  </tr>
                                  <tr>
                                    <th>Use</th>
    
    
                                    <td><?php echo $row['uses']; ?> </td></tr>  
                                  </tr>
                                   
                            

                              <?php
                                      
                                    } ?>
                                      </table>
                                    <?php } 
                                    else{
                                    ?>
                                      <div class="alert alert-success"> No List Available</div>
                                    <?php } ?>
					</div></div></div>
		</div>
	</div>
</div><!---->
<?php include("footer.php") ?>

