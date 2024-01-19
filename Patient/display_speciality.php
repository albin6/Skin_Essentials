<option value="">--Select--</option>
<?php
            include("../db.php"); 
            $hospital_login_id=$_GET["hospital_login_id"];
          $count=1;
          $qt=  mysqli_query($con,"select distinct m.medical_speciality_id,m.speciality from  tbl_medical_speciality as m inner join   tbl_doctor as d on m.medical_speciality_id =d.medical_speciality_id inner join tbl_hospital as h on h.login_id=d.hospital_login_id  where d.hospital_login_id=".$hospital_login_id);
          $n=mysqli_num_rows($qt);
      
      if($n>0) 
           {
          

               while ($rt=  mysqli_fetch_array($qt))
                                             {
                                                     ?>
                                                     <option value="<?php echo $rt["medical_speciality_id"]; ?>"><?php echo $rt["speciality"]; ?></option>
               <?php } 
               
                                             }?>