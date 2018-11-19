<?php include 'includes/connection.php'; ?>
<?php include 'includes/header.php'; ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<?php 
	    		$sql="SELECT *FROM news WHERE status='active'";
	    		$result=mysqli_query($con,$sql);
	    		while($data=mysqli_fetch_assoc($result))
	    		{
	    		?>	
			<div class="card " style="margin-top: 20px;">
  				<div class="card-header text-center bg-info">
    				<b><?php echo $data['news_title']; ?></b>
  				</div>
  				<div class="card-body">
    				<p class="card-text"><?php echo $data['news']; ?></p>
  				</div>
  				
			</div>
	  	<?php } ?>
		</div>
	</div>
</div>
<?php  
?>