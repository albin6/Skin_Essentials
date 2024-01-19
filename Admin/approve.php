<?php
include("../db.php");
include("session.php");


$id=mysqli_real_escape_string($con,$_GET['id']);

$qry=mysqli_query($con,"update  tbl_login set status='Approved' where login_id='$id'");

if($qry)
{
    ?>
    <script>
        alert("Approved Successfully");
        window.location="approve_hospital.php";
    </script>
    <?php
}

          