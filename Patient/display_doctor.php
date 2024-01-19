<option value="">--Select--</option>
<?php
            include("../db.php"); 
            $medical_speciality_id=$_GET["medical_speciality_id"];
            $hospital_login_id=$_GET["hospital_login_id"];
          $count=1;
          $sql="select d.* from  tbl_medical_speciality as m inner join   tbl_doctor as d on m.medical_speciality_id =d.medical_speciality_id inner join tbl_hospital as h on h.login_id=d.hospital_login_id  where d.medical_speciality_id=$medical_speciality_id and hospital_login_id=$hospital_login_id";
          $qt=  mysqli_query($con,$sql);

          $n=mysqli_num_rows($qt);
      
      if($n>0) 
           {
          

               while ($rt=  mysqli_fetch_array($qt))
                                             {
                                                     ?>
                                                     <option value="<?php echo $rt["login_id"]; ?>"><?php echo $rt["doctor_first_name"]; ?><?php echo $rt["doctor_last_name"]; ?></option>
               <?php } 
               
                                             }?>