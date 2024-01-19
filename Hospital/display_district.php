<option value="">--Select--</option>
<?php
            include("../db.php"); 
            $id=$_GET["state_id"];
          $count=1;
          $qt=  mysqli_query($con,"select * from tbl_district where state_id='$id'");
          $n=mysqli_num_rows($qt);
      
      if($n>0) 
           {
          

               while ($rt=  mysqli_fetch_array($qt))
                                             {
                                                     ?>
                                                     <option value="<?php echo $rt["district_id"]; ?>"><?php echo $rt["district"]; ?></option>
               <?php } 
               
                                             }?>