  
<?php
             include("../db.php");
             $did=$_GET["district_id"];
             $count=1;
             $qt=  mysqli_query($con,"select * from tbl_hospital inner join tbl_district on tbl_hospital.district_id=tbl_district.district_id inner join tbl_state on tbl_district.state_id=tbl_state.state_id where tbl_hospital.district_id='$did' and  tbl_hospital.login_id in(select login_id from tbl_login where status='Approved' and Usertype='Hospital')");
             $n=mysqli_num_rows($qt);
         
         if($n>0) 
              {
                ?>
              <table class="table table-striped table-bordered border-primary">
                  <thead><th>Id</th><th>Name</th><th>Phone number</th><th>Email Id</th><th>Address</th><th>District</th><th>State</th><th>Place</th></thead>
<?php
                  while ($rt=  mysqli_fetch_array($qt))
                                                {
                                                        ?>

                    <tr>


           
                                              <td><?php echo $count;?></td>
                                                <td><?php echo $rt['hospital'];?></td>
                                                <td><?php echo $rt['phone_number'];?></td>
                                                <td><?php echo $rt['email'];?></td>
                                                <td><?php echo $rt['address'];?></td>
                                             
                                                <td><?php echo $rt['district'];?></td>
                                                <td><?php echo $rt['state'];?></td>
                                                <td><?php echo $rt['place'];?></td>
                                                <td><a href="doctors.php?id=<?php echo $rt["login_id"] ?>" class="btn btn-success">Doctors</a></td>
                        <td><a href="insurance.php?id=<?php echo  $rt["login_id"] ?>"  class="btn btn-danger">Insurance</a></td>                             



                    </tr>

                   <?php } ?>
                    </table>
                  <?php } 
                  else{
                  ?>
                    <div class="alert alert-success"> No List Available</div>
                  <?php } ?>