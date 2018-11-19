<div class="container">
	<div class="row">
	<img class="card-img-top" src="images/head1.png" alt="Card image cap" height="100">
	</div>
		</div>

<?php include 'includes/header.php'; ?>
<?php include 'includes/connection.php'; ?>
<style type="text/css">
	*{
		font-family: 'Century Gothic';

	}
	body{
		margin: auto;
		padding: auto;


		background:#F0F0F0;

	}




</style>

<div class="main">
<div class="container" style="margin-top: 10px;">
	<div class="row">
		<div class="col-md-7 col-sm-12">
			<?php  include 'includes/slider.php'; ?>
		</div>

		<div class="col-md-5 col-sm-12">
			<div class="card" style="height: 315px">
  				<div class="card-header border border-light" style="background: #012951; color: #fff;  " >
    				News & Updates
  				</div>
	  			<div class="card-body">
	    			<marquee direction="up" scrollamount="2">
	    			<ul style="list-style:  none;">
	    			<?php
	    			$sql="SELECT *FROM news WHERE status='active'";
	    			$result=mysqli_query($con,$sql);
	    			while($data=mysqli_fetch_assoc($result))
	    			{
	    			?>
	    			
	    				<li><a href="news.php"><?php echo $data['news_title']; ?></a></li>
	    				<br>
	  				<?php } ?>
	    			</ul>
	    			</marquee>
	  			</div>
			</div>
		</div>
	</div>
	<div class="row" style=" margin-top: 2px; margin-bottom: 10px;">
		<div class="col-md-12" style="margin-top: 05px;">
			<div class="card text-center ">
  				<div class="card-header1 border border-light" style="background: #012951; color: #fff; height: 2rem; padding-top: 2px; "  >
    				<h5><marquee>Online Computerized Semester Result System of Shah Abdul Latif University</marquee></h5>
  				</div>
  				<div class="card-body">
    				<h5 class="card-title">Search your result</h5>
					<form class="form-inline" style="margin-left: 160px;" action="result.php" method="post">
		  				<div class="form-check mb-2 mr-sm-2 ">
		    				<select class="form-control" name="dept">
		    						<?php
											$sql="SELECT *FROM departments WHERE status='active'";
											$result=mysqli_query($con,$sql);
											while($data=mysqli_fetch_assoc($result))
											{
												echo "<option value='".$data['department_name']."'>".$data['department_name']."</option>";
											}
										?>
		    				</select>
		  				</div>

		  				<div class="form-check mb-2 mr-sm-2">
		    				<select class="form-control" name="semester">
		    					<option value="0">Select Your Semester</option>
		    					<option value="1">First </option>
		    					<option value="2">Second</option>
		    					<option value="3">Third</option>
		    					<option value="4">Fourth</option>
		    					<option value="5">Fifth</option>
		    					<option value="6">Sixth</option>
		    					<option value="7">Seventh</option>
		    					<option value="8">Eighth</option>
		    				</select>
		  				</div>
		  				<input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Enter your ID number" name="roll_no">
		  				<button type="submit" class="btn btn-primary mb-2" name="submit">Search Result</button>
					</form>
				</div>
			  	<!-- <div class="card-footer text-muted">
			    	2 days ago
			  	</div> -->
			</div>
		</div>
	
		
</div>
	</div>
</div>
</div>
<?php include 'includes/footer.php'; ?>
