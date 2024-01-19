<?php include("session.php")?>
<?php if(isset($_POST['submit']))
                                        {
                                          $logid=$_SESSION["patient"]["login_id"];
                                          include_once("../db.php");
                                            $doctor_login_id=$_POST['doctor'];
                                            $appointment_date=$_POST['appointment_date'];
                           
                            $query="insert into tbl_appointment(doctor_login_id, patient_login_id, appointment_date)values('$doctor_login_id','$logid','$appointment_date')"; 
                            $rs=mysqli_query($con, $query);
                            if($rs)
                            {
                                echo '<script>alert("Added Successfully");window.location="appointment.php"</script>';
                            }
                            else{
                              echo '<script>alert("Failed - Error");window.location="appointment.php"</script>';
                            }
                          
                          
                        }
             