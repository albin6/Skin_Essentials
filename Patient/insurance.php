<?php include("header.php") ?>
<div class="container-fluid py-5">
<div class="container">
<div class="row gx-5">
<div class="col-lg-12 mb-5 mb-lg-0">
<div class="mb-4">
<?php 
   include("../db.php");
$logid=$_GET['id'];
              $sql="select * from tbl_hospital where login_id='$logid'";
             $qt=  mysqli_query($con,$sql);
             $row=mysqli_fetch_array( $qt);
             ?>
<h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Insurance in Hospital <?php echo $row['hospital']." " .$row['address'] ?></h5>

</div>

</div>
<div class="col-lg-12">
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
        
?>
                <h1 class="display-4">Qualified Healthcare Professionals</h1>
            </div>
            <div class=" ">
            <?php
          
             $count=1;
             $logid=$_GET['id'];
              $sql="select * from tbl_insurance where hospital_login_id='$logid'";
             $qt=  mysqli_query($con,$sql);
             $n=mysqli_num_rows($qt);
         
         if($n>0) 
              {
       
                  while ($rt=  mysqli_fetch_array($qt))
                                                {?>
                <div class="team-item" style="margin-top: 10px;">
                    <div class="row g-0 bg-light rounded overflow-hidden">
                        <div class="col-12 col-sm-5 h-100">
                            <img class="img-fluid h-100" src="../assets/assets/img/insurance.jpg" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-7 h-100 d-flex flex-column">
                            <div class="mt-auto p-4">
                              
                                <h6 class="fw-normal fst-italic  mb-4"><?php echo $rt['insuarnce_company']?></h6>
                                <h6 class="fw-normal fst-italic mb-4"><?php echo $rt['description']?></h6>
                                <p class="m-0"></p>
                            </div>
                          
                        </div>
                    </div>
                </div>
          <?php  } ?>
                    </table>
                  <?php } 
                  else{
                  ?>
                    <div class="alert alert-success"> No List Available</div>
                  <?php } ?>
            </div>
        </div>
    </div>

		
  
     
  
  </table>
					</div></div></div>
		</div>
	</div>
</div><!---->
</div>
</div>
</div>
<?php include("footer.php") ?>