


<?php include("header.php") ?>
<div id="page-wrapper">
    <div class="main-page">
        <div class="forms">

            <h3 class="title1">Add Insurance Details</h3>
            <div class="col-sm-6"  style="min-height:500px;">
            
            <div class="form-grids row widget-shadow" data-example-id="basic-forms">
                <div class="form-title">
                    <h4>Add details :</h4>
                </div>

                <div class="form-body">
                 
               <form action="" method="post" id="myform" class="row g-3">
               
            <div class="form-group"> <label for="">insuarnce_company</label>
                <input type="text" class="form-control" id="" placeholder="Insurance Company" name="insuarnce_company"> </div>
                <div class="form-group"> <label for="">insuarnce_company</label>
                <textarea name="description" class="form-control"></textarea> </div>
             
                <div class="text-center" >
                <button type="submit" name="submit" class="btn btn-primary">Submit</button></div> </form>
</div>
<?php 
 $logid=$_SESSION["hospital"]["login_id"];
                if(isset($_POST['submit']))
                                        {
                                          include_once("../db.php");
                                            $insuarnce_company=$_POST['insuarnce_company'];
                                           
                                            $description=$_POST['description'];
                           
$query="insert into tbl_insurance(insuarnce_company,description,hospital_login_id)values('$insuarnce_company',' $description',' $logid')"; 
                            $rs=mysqli_query($con, $query);
                            
                            if($rs)
                            {
                                echo '<script>alert("Added Successfully");window.location="add_insurance.php"</script>';
                            }
                     
                            else
                           {
                             echo '<script>alert("Error");</script>;window.location="add_insurance.php"';
                           }
                                            
                          }         
                                        ?>
<script src="../assets/assets/Validation/jquery_validate.js"></script>
                    <script src="../assets/assets/Validation/additional_validate.js"></script>
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
    rules: {
      insuarnce_company: {
                          required: true,
                          regex :/^[a-zA-Z ]+$/,

                        },
                        description: {
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
            <div class="col-sm-6" style="margin-top: 10px;">

    
            <?php
               
             include("../db.php");
             $count=1;
             $qt=  mysqli_query($con,"select * from tbl_insurance where  hospital_login_id=$logid");
             $n=mysqli_num_rows($qt);
         
         if($n>0) 
              {
                $count=1;
                ?>
              <table class="table table-striped table-bordered border-primary">
                  <thead><th>Id</th><th>Insurance Company</th><th>Description</th></thead>
<?php
                  while ($rt=  mysqli_fetch_array($qt))
                                                {
                                                        ?>

                    <tr>


           
                                              <td><?php echo $count;?></td>
                                                <td><?php echo $rt['insuarnce_company'];?></td>
                                             
                                                <td><?php echo $rt['description'];?></td>
                                            
                        <td><a href="delete_insurance.php?id=<?php echo  $rt["insurance_id"] ?>"  class="btn btn-danger">Delete</a></td>  


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