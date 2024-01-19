<?php 
         
                          
                                          include_once("../db.php");
                                           
                                           
                                            $id=$_GET['id'];
                           
                           echo $query="delete from tbl_doctor  where doctor_id='$id'"; 
                            $rs=mysqli_query($con, $query);
                            
                            if($rs)
                            {
                                echo '<script>alert("Deleted Successfully");window.location="doctor_list.php"</script>';
                            }
                     
                            else
                           {
                             echo '<script>alert("Error");</script>;window.location="doctor_list.php"';
                           }
                                            
                        