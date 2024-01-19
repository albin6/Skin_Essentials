<?php include("session.php")?>
<?php 

                if(isset($_POST['submit']))
                                        {
                                          include_once("../db.php");
                                          $logid=$_SESSION["doctor"]["login_id"];
                                          $doctor_first_name=$_POST['doctor_first_name'];
                                          $doctor_last_name=$_POST['doctor_last_name'];
                                     
                                          $Address=$_POST['address'];
                                          $email=$_POST['email'];
                                          $qualification=$_POST['qualification'];
                                          
                                          $phone=$_POST['phone_number'];
                                        
                                     
                                          $place=$_POST['place'];
                                          if(!isset($_FILES['photo']) || $_FILES['photo']['error'] == UPLOAD_ERR_NO_FILE) {
                                       
                                         
                                           
                           echo $query="update  tbl_doctor set doctor_first_name='$doctor_first_name', doctor_last_name='$doctor_last_name', address='$Address', email='$email', 	phone_number='$phone', place='$place', qualification='$qualification'  where login_id=".$logid; 
                           
                                        } else {
                                                                               
                                          $temp = explode(".", $_FILES["photo"]["name"]);
                                          $newfilename = round(microtime(true)) . '.' . end($temp);
                                          move_uploaded_file($_FILES["photo"]["tmp_name"], "../Upload/" . $newfilename);
                                          echo $query="update  tbl_doctor set doctor_first_name='$doctor_first_name', doctor_last_name='$doctor_last_name', address='$Address', email='$email', 	phone_number='$phone', place='$place', qualification='$qualification',photo='$newfilename'   where login_id=".$logid; 
                                        }
                          $rs=mysqli_query($con, $query);
                                            
                            
                            if($rs)
                            {
                                echo '<script>alert("Updated Successfully");window.location="profile.php"</script>';
                            }
                     
                            else
                           {
                    //    echo '<script>alert("Error");window.location="profile.php"</script>';
                           }
                                            
                          }         
                                        ?>