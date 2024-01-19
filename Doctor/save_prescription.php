<?php include("session.php")?>
<?php 

 $logid=$_SESSION["doctor"]["login_id"];
                if(isset($_POST['submit']))
                                        {
                                          include_once("../db.php");
                                          $appointment_id=$_POST['appointment_id'];
                                            $visiting_date=$_POST['visiting_date'];
                                           
                                            $symptoms=$_POST['symptoms'];
                                            $medicine=$_POST['medicine'];
                                            $uses=$_POST['uses'];
                                            $details=$_POST['details'];
                                            
echo $query="insert into tbl_prescription(appointment_id, visiting_date,details, medicine, symptoms, uses)values('$appointment_id',' $visiting_date',' $details','$medicine','$symptoms','$uses')"; 
                            $rs=mysqli_query($con, $query);
                           echo $query="update tbl_appointment set status='Consulted' where appointment_id=$appointment_id"; 
                            $rs=mysqli_query($con, $query);                         
                            if($rs)
                            {
                                echo '<script>alert("Added Successfully");window.location="new_appointment.php"</script>';
                            }
                     
                            else
                           {
                             echo '<script>alert("Error");</script>;window.location="new_appointment.php"';
                           }
                                            
                          }         
                                        ?>