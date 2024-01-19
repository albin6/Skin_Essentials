<?php 
         
                          
                                          include_once("../db.php");
                                           
                                           
                                            $id=$_GET['id'];
                           
                           echo $query="delete from tbl_insurance  where insurance_id='$id'"; 
                            $rs=mysqli_query($con, $query);
                            
                            if($rs)
                            {
                                echo '<script>alert("Deleted Successfully");window.location="add_insurance.php"</script>';
                            }
                     
                            else
                           {
                             echo '<script>alert("Error");</script>;window.location="add_insurance.php"';
                           }
                                            
                        