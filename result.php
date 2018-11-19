<?php include'includes/header.php';?>
<?php include'includes/connection.php';?>

<div class="container">
	<div class="row" style="margin-top: 10px;">
		<div class="col-md-12">
			  				<?php
if(isset($_POST['submit']))
{
	$dept 	= 	$_POST['dept'];
	$sem 	= 	$_POST['semester'];
	$roll_no=	mysqli_real_escape_string($con,$_POST['roll_no']);
	$sql="SELECT *FROM students WHERE roll_no='$roll_no'  and department='$dept'";
	$result= mysqli_query($con,$sql);
	if(mysqli_num_rows($result)>=1)
	{
		$data=mysqli_fetch_assoc($result);
?>
			<div class="card">
  				<img class="card-img-top" src="images/cover.png" alt="Card image cap" height="200">

  				<div class="card-body">
	    			<h4 class="card-title"></h4>
	   		 		<p class="card-text"><small class="text-muted"></small></p>
	    			<h5>Student Information</h5>
				    <p class="card-text">
				    </p>
				    <div class="col-md-4" style="">

				    	Name: <b><?php echo $data['name'];?></b><br>
				    	Father Name: <b><?php echo $data['fathers_name']." "; echo $data['surname'];?></b><br>
				    	Department: <b><?php echo $data['department'];?></b><br>
				    </div>
				    <div class="col-md-6 float-right" style=" margin-top:-75px;">

				    	Class: <b><?php echo $data['class'];?></b><br>
				    	
				    	Roll No: <b><?php echo strtoupper($data['roll_no']);?></b><br>
				    </div>
	    			<h5 style="margin-top: 10px;">Marks Information</h5>
  					<table class="table table-bordered">
  						<thead>
    						<tr class="bg-primary">
      							<th scope="col">Sr.No</th>
      							<th scope="col">Subject</th>
							    <th scope="col">Total Marks</th>
							    <th scope="col">Min Marks</th>
							    <th scope="col">Obtained Marks</th>
							    <th scope="col">Remarks</th>
							</tr>
  						</thead>
  						<tbody>
    					<?php
    						$student_id= $data['id'];
    						$sql1="SELECT *FROM marks WHERE student_id='$student_id' and semester='$sem' and status='active'";
							$result1= mysqli_query($con,$sql1);
							if(mysqli_num_rows($result1)>=1)
							{
								$i=1;
								$TM=0;
								$OM=0;
								while ($data1=mysqli_fetch_assoc($result1))
								{

								if($data1['obtain_marks']<$data1['min_marks'])
									{
										$remarks="Fail";
									}else{$remarks="Pass";}
								echo"<tr>
						      		<th scope='row'>".$i."</th>
						      		<td>".$data1['subject']."</td>
						      		<td>".$data1['total_marks']."</td>
						      		<td>".$data1['min_marks']."</td>
						      		<td>".$data1['obtain_marks']."</td>
						      		<td>". $remarks ."</td>
						    	</tr>
						      	";
								$i++;

								$TM=$TM+$data1['total_marks'];
								$OM=$OM+$data1['obtain_marks'];
								}
							}else{echo mysqli_error($con);}
    					?>
  						</tbody>
					</table>
					<table class="table table-bordered" style="background: #42f4b9;">
 					 <thead>
    			<tr>

			      <th scope="col">Total Marks: <?php echo $TM;?></th>
			      <th scope="col">Marks Obtained: <?php echo $OM;?></th>
			      <th scope="col">Percentage: <?php echo $OM*100/$TM; ?></th>
			    </tr>
			  	</thead>
			  </table>
			<button onclick="window.print();" href="#" class="btn btn-info float-right" style="margin-bottom: 20px;">
      						<i class="fa fa-print"></i>
								Print this sheet
    				</button>
			<?php
					}
					else{
						echo mysqli_error($con);
						?>
						<div class="card">
							<div class="card-body">
								<h3 class="text-danger">Record Not Found,  <a href="index.php" class="alert-link">Click here to try again!</a></h3>
							</div>
						</div>
						<?php
						}
					}
				?>
		</div>
	</div>
</div>
<?php include'includes/footer.php';?>
