
<?php include("header.php") ?>
<div id="page-wrapper">
    <div class="main-page">
        <div class="forms">

            <h3 class="title1">Feedback List</h3>

            <div class="col-sm-12" style="margin-top: 10px;">
    <div class="form-title">
                    <h4>Feedback List :</h4>
                </div>

                <?php
           include("../db.php");
             $count=1;
             $qt=  mysqli_query($con,"select * from tbl_feedback join tbl_patient on tbl_feedback.user_login_id = tbl_patient.login_id where tbl_feedback.reply=''");
             $n=mysqli_num_rows($qt);
         
         if($n>0) 
              {
                $count=1;
                ?>
                 
               <table class="table table-striped table-bordered">
        <thead><th>Id</th><th>Feedback Subject</th><th>Feedback</th><th>User</th><th>#</th></thead>
<?php
                  while ($rt=  mysqli_fetch_array($qt))
                                                {
                                                        ?>

                    <tr>


           
                                              <td><?php echo $count;?></td>
                                                <td><?php echo $rt['feedback_subject'];?></td>
                                                <td><?php echo $rt['feedback'];?></td>
                                               
                                                <td>Name: <?php echo $rt['patient_name'];?><br>
                                                Phone No : <?php echo $rt['phone_number'];?><br>
                                             
                                                Address: <?php echo $rt['Address'];?><br>

                                              </td>   
                                                <td><a href="reply_feedback.php?id=<?php echo $rt["feedback_id"] ?>" class="btn btn-success">Reply</a></td>
                    

                    </tr>

                   <?php
                  $count++;
                  } ?>
                    </table>
                  <?php } 
                  else{
                  ?>
                    <div class="alert alert-success"> No List Available</div>
                  <?php } ?>
            </div>
            <div class="row">

        </div>
    </div>
</div>
<!--footer-->
<?php include("footer.php") ?>