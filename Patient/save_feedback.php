<?php include("session.php")?>
<?php 
                if(isset($_POST['submit']))
                                        {
                                          $logid=$_SESSION["patient"]["login_id"];
                                          include_once("../db.php");
                                            $subject=$_POST['subject'];
                                            $feedback=$_POST['feedback'];      
                                              
                           
                           echo $query="insert into tbl_feedback(feedback_subject, 	feedback ,user_login_id )values('$subject','$feedback','$logid')"; 
                            $rs=mysqli_query($con, $query);
                            
                            if($rs)
                            {
                                echo '<script>alert("Added Successfully");window.location="feedback.php"</script>';
                            }
                     
                            else
                           {
                             echo '<script>alert("Error");</script>;window.location="feedback.php"';
                           }
                                            
                          }         
                                        ?>
             