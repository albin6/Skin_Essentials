<?php include("session.php")?>
<?php 

                if(isset($_POST['submit']))
                                        {
                                          include_once("../db.php");
                                          $logid=$_SESSION["patient"]["login_id"];
                                         
                                          
                                          $opassword=$_POST['opassword'];
                                        
                                     
                                          $password=$_POST['password'];
                                        
                                      echo    $sql="select * from tbl_login   where login_id=$logid and password='$opassword'";
                                          $qt=  mysqli_query($con,$sql);
                                          $n=mysqli_num_rows($qt);       
                                          if($n>0) 
                                          {     
                                         
                                           
                            $query="update  tbl_login set password='$password'  where login_id=".$logid; 
                           
                                    
                          $rs=mysqli_query($con, $query);
                                            
                            
                            if($rs)
                            {
                                echo '<script>alert("Updated Successfully. Please Login using new password");window.location="../login.php"</script>';
                            }
                     
                            else
                           {
                   echo '<script>alert("Error");window.location="change_password.php"</script>';
                           }
                                            
                          }
                          else{
                            echo '<script>alert("Invalid user");window.location="change_password.php"</script>'; 
                          }    
                        }     
                                        ?>