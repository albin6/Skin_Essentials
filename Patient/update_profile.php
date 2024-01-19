<?php include("session.php")?>
<?php if(isset($_POST['submit']))
                                        {
                                          include_once("../db.php");
                                            $patient_name=$_POST['patient_name'];
                                            $logid=$_SESSION["patient"]["login_id"];
                                            
                                            $phone=$_POST['phone_number'];
                                            $Address=$_POST['address'];
                                            
                                            $place=$_POST['place'];
                                            $dob=$_POST['dob'];
                                          
                                           
                           
                            $query="update tbl_patient set  patient_name='$patient_name', phone_number='$phone', Address='$Address', place='$place', dob='$dob' where login_id='$logid'"; 
                            $rs=mysqli_query($con, $query);
                            if($rs)
                            {
                                echo '<script>alert("Updated Successfully");window.location="profile.php"</script>';
                            }
                          else{
                            echo '<script>alert("Error");window.location="profile.php"</script>';
                          }
                          
                                            
                                        }
                                        ?>
                   