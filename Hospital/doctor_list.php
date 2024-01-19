
<?php include("header.php") ?>


		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms"  style="min-height: 500px;">
                    <h3 class="title1">Doctor List </h3>

					<div class="col-sm-12" style="margin-top: 10px;">
            <div class="form-title">
							<h4>Doctor  List :</h4>
						</div>
                    

            <?php
             include("../db.php");
             $count=1;
             $logid=$_SESSION["hospital"]["login_id"];
             $qt=  mysqli_query($con,"select * from tbl_doctor inner join tbl_district on tbl_doctor.district_id=tbl_district.district_id inner join tbl_state on tbl_district.state_id=tbl_state.state_id where tbl_doctor.hospital_login_id='$logid'  and tbl_doctor.login_id in(select login_id from tbl_login where status='Approved' and Usertype='Doctor')");
             $n=mysqli_num_rows($qt);
         
         if($n>0) 
              {
                ?>
              <table class="table table-striped table-bordered border-primary">
                  <thead><th>Id</th><th>Name</th><th>Phone number</th><th>Email Id</th><th>Address</th><th>Qualification</th></thead>
<?php
                  while ($rt=  mysqli_fetch_array($qt))
                                                {
                                                        ?>

                    <tr>


           
                                              <td><?php echo $count;?></td>
                                                <td><?php echo $rt['doctor_first_name'];?>&nbsp;&nbsp;<?php echo $rt['doctor_last_name'];?>
                                                <img height="100" width="100" src="../Upload/<?php echo $rt['photo'];?>">
                                              </td>
                                            
                                                <td><?php echo $rt['phone_number'];?></td>
                                                <td><?php echo $rt['email'];?></td>
                                                <td>Address: <?php echo $rt['address'];?><br>
                                               District:  <?php echo $rt['district'];?><br>
                                              State:  <?php echo $rt['state'];?><br>
                                             Place:   <?php echo $rt['place'];?><br>
                                              </td>
                                             
                                                
                                                <td><?php echo $rt['qualification'];?></td>
                                                <td></td>         
                                                <td><a href="edit_doctor.php?id=<?php echo $rt["doctor_id"] ?>" class="btn btn-success">Edit</a></td>
                        <td><a href="delete_doctor.php?id=<?php echo  $rt["doctor_id"] ?>"  class="btn btn-danger">Delete</a></td>  


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