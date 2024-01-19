<?php  ob_start();?>
<?php include("header.php") ?>

    <!-- Appointment Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
              
             
                <div class="col-lg-12 mb-5 mb-lg-0">
                    <div class="col-lg-6" style="margin: auto;">
                    <form method="post" action="" id="myform" class="p-3">
                      
                        <h1 class="mb-4">Login</h1>
<div class="col-sm-6">
                        <div class="form-group"> <label for="">Username</label>
                         <input type="text" placeholder="User Name" class="form-control" name="username"  >
                        </div>
                        <div class="form-group"><label for="">Password</label>
                         <input type="password" placeholder="Password"  class="form-control" name="password"  >
                        </div>
                        <div class="right-w3l mt-4 mb-3">	<input type="submit" class="btn btn-info" value="Sign In" name="submit"></div>
                        
                        </form>
                        <?php
   if(isset($_POST['submit']))
   {

include 'db.php';
$username=$_POST['username'];
$password=$_POST['password'];
//$sql= mysqli_query($con,"select * from admin where USERNAME='$USERNAME' and PASSWORD='$PASSWORD'");
echo $sql="select * from tbl_login where username='$username' and password='$password'";
 $res= mysqli_query($con,$sql);
//if(mysqli_num_rows($sql))
$row= mysqli_fetch_array($res);
if($row['Usertype']=='Admin')
{
//    $row= mysqli_fetch_array($sql,$con,"");
    
    $_SESSION['admin']=$row;
//    $_SESSION['PASSWORD']=$row['PASSWORD'];
header('location:Admin/index.php');
}
 else if($row['Usertype']=='Hospital' ) {
    if($row['status']=='Approved')
    {
        $_SESSION['hospital']=$row;
        //    $_SESSION['PASSWORD']=$row['PASSWORD'];
            header('location:Hospital/index.php');
    }
}
    else if($row['Usertype']=='Doctor' ) {
        if($row['status']=='Approved')
        {
            $_SESSION['doctor']=$row;
            //    $_SESSION['PASSWORD']=$row['PASSWORD'];
                header('location:Doctor/index.php');
        }
    }
        else if($row['Usertype']=='Patient' ) {
            if($row['status']=='Approved')
            {
                $_SESSION['patient']=$row;
                //    $_SESSION['PASSWORD']=$row['PASSWORD'];
                    header('location:Patient/index.php');
            }
        }
    
    else
    {
       echo '<script>alert("Invalid User");
             window.location="login.php";</script>';  
    }
}
       

 

?>  
                    </div>
                       
    <script src="assets/assets/Validation/jquery-1.11.1.min.js"></script>
                    <script src="assets/assets/Validation/jquery_validate.js"></script>
                    <script src="assets/assets/Validation/additional_validate.js"></script>
                        <script>
                        (function ($, W, D)
                        {
                        var JQUERY4U = {};
                        JQUERY4U.UTIL =
                        {
                        setupFormValidation: function ()
                        {
                        $.validator.addMethod(
                        "regex",
                        function(value, element, regexp) {
                        var check = false;
                        return this.optional(element) || regexp.test(value);
                        },
                        "Not a valid Input."
                        );
                        
                        //form validation rules
                        $("#myform").validate({
                        ignore: [],
                        rules: {
                        username: {
                        required: true,
                        
                        
                        },
                        password: {
                        required: true,
                        
                        
                        },
                        
                        },
                        
                        messages: {
                        
                        
                        },
                        submitHandler: function (form) {
                        form.submit();
                        }
                        });
                        
                        
                        }
                        }
                        //when the dom has loaded setup form validation rules
                        $(D).ready(function ($) {
                        JQUERY4U.UTIL.setupFormValidation();
                        });
                        })(jQuery, window, document);
</script>
                </div>
            </div>
        </div>
                    </div>
    </div>
    <!-- Appointment End -->


    <?php include("footer.php") ?>