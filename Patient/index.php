

<?php include("header.php") ?>

<div class="container-fluid py-5">
<div class="container">
<div class="row gx-5">

<div class="col-lg-6 mb-5 mb-lg-0">
<div class="mb-4">
<h1>Your Patient ID : <?php  echo  $logid=$_SESSION["patient"]["login_id"]; ?></h1>
<h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Registered Hospital</h5>
<h1 class="display-4">Hospital List</h1>
</div>
<p class="mb-5">Doctor / Hospital / Specialization to match specific consultation needs. Confirmed Online Appointment slots, practice locations, to select from to book appointment for clinic consultation.</p>

</div>
<div class="col-lg-6">
<div class="bg-light text-center rounded p-5">
<h1 class="mb-4">Search</h1>

<form action="" method="post" id="myform" enctype="multipart/form-data">
 
<div class="row g-3">
<div class="col-12 col-sm-12">
<div class="form-group"> <label for="">State</label>
    <select name="state"  id="state" class="form-control">
      <option value="">--Select--</option>
  
     <?php  
     include("../db.php");
     $qt=  mysqli_query($con,"select * from tbl_state");

    while ($row=  mysqli_fetch_array($qt))
                                  {
                                          ?>
      <option value="<?php echo $row['state_id']?>"><?php echo $row['state']?></option>
<?php } ?>
    </select> </div>
<div class="form-group"> <label for="">District</label>
  <select name="district" id="district" class="form-control">
    <option value="">--Select--</option>

  </select> </div>
</div>
</div>


<script src="../assets/assets/Validation/jquery-1.11.1.min.js"></script>
                    <script src="../assets/assets/Validation/jquery_validate.js"></script>
                    <script src="../assets/assets/Validation/additional_validate.js"></script>

                    <script>
  
  $("#state").change(function () {
        var state = $(this).val();

        $.ajax({

              url: 'display_district.php',
              data: {
                  'state_id': state
              },
              dataType: 'html',
              success: function (data) {


                
$("#district").html(data);



              }
        });

     })
	   $("#district").change(function () {
          var district_id = $(this).val();
			
          $.ajax({

                url: 'display_hospital_list.php',
                data: {
                    'district_id': district_id
                },
                 
				success: function (data) {
      
	  $("#res").html(data)

	}
});

       });	   
	 </script>
    
</div>
</div>
<div id="res">  
  
<?php
             include("../db.php");
             $count=1;
             $qt=  mysqli_query($con,"select * from tbl_hospital inner join tbl_district on tbl_hospital.district_id=tbl_district.district_id inner join tbl_state on tbl_district.state_id=tbl_state.state_id where tbl_hospital.login_id in(select login_id from tbl_login where status='Approved' and Usertype='Hospital')");
             $n=mysqli_num_rows($qt);
         
         if($n>0) 
              {
                ?>
              <table class="table table-striped table-bordered border-primary">
                  <thead><th>Id</th><th>Name</th><th>Phone number</th><th>Email Id</th><th>Address</th><th>District</th><th>State</th><th>Place</th></thead>
<?php
                  while ($rt=  mysqli_fetch_array($qt))
                                                {
                                                        ?>

                    <tr>


           
                                              <td><?php echo $count;?></td>
                                                <td><?php echo $rt['hospital'];?></td>
                                                <td><?php echo $rt['phone_number'];?></td>
                                                <td><?php echo $rt['email'];?></td>
                                                <td><?php echo $rt['address'];?></td>
                                             
                                                <td><?php echo $rt['district'];?></td>
                                                <td><?php echo $rt['state'];?></td>
                                                <td><?php echo $rt['place'];?></td>
                                                <td><a href="doctors.php?id=<?php echo $rt["login_id"] ?>" class="btn btn-success">Doctors</a></td>
                        <td><a href="insurance.php?id=<?php echo  $rt["login_id"] ?>"  class="btn btn-danger">Insurance</a></td>                             



                    </tr>

                   <?php } ?>
                    </table>
                  <?php } 
                  else{
                  ?>
                    <div class="alert alert-success"> No List Available</div>
                  <?php } ?>
					</div></div></div>
		</div>
	</div>
</div><!---->
</div>
</div>
</div>
<?php include("footer.php") ?>