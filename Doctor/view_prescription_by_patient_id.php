
<?php include("header.php") ?>

<div id="page-wrapper">
    <div class="main-page">
        <div class="forms">

            <h3 class="title1"> Prescription  - History</h3>

            <div class="col-sm-12" style="margin-top: 10px;">
    <div class="form-title">
                    <h4>View Details :</h4>
                </div>
                <?php
                
             include("../db.php");
       
             $pid=$_GET['id'];
              $sql="select * from tbl_prescription inner join tbl_appointment on tbl_prescription.appointment_id=tbl_appointment.appointment_id  where tbl_appointment.patient_login_id=$pid";
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

            </div>
            <div class="row">

        </div>
    </div>
</div>
<?php include("footer.php") ?>
