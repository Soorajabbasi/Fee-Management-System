<?php  include'includes/header.php' ?>
<style type="text/css">
	body{
		background-image: url("images/bg.jpg");
	}
</style>

<div class="container">
  <!-- Section: Contact v.1 -->
<section class="my-5" style="background: #012951;color:#fff;padding: 10px;">

  <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold text-center my-5">Contact us</h2>
  <!-- Section description -->
  <p class="text-center w-responsive mx-auto pb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
    Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam
    eum porro a pariatur veniam.</p>

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-lg-5 mb-lg-0 mb-4">

      <!-- Form with header -->
      <div class="card" style="color: #012951">
        <div class="card-body">
          <!-- Header -->
          <div class="form-header blue accent-1">
            <h3 class="mt-2"><i class="fa fa-envelope"></i> Write to us:</h3>
          </div>
          <p class="dark-grey-text">We'll write rarely, but only the best content.</p>
          <!-- Body -->
          <div class="md-form">
            <i class="fa fa-user prefix grey-text"></i>
            <input type="text" id="form-name" class="form-control">
            <label for="form-name">Your name</label>
          </div>
          <div class="md-form">
            <i class="fa fa-envelope prefix grey-text"></i>
            <input type="text" id="form-email" class="form-control">
            <label for="form-email">Your email</label>
          </div>
          <div class="md-form">
            <i class="fa fa-tag prefix grey-text"></i>
            <input type="text" id="form-Subject" class="form-control">
            <label for="form-Subject">Subject</label>
          </div>
          <div class="md-form">
            <i class="fa fa-pencil prefix grey-text"></i>
            <textarea type="text" id="form-text" class="form-control md-textarea" rows="3"></textarea>
            <label for="form-text"></label>
          </div>
          <div class="text-center">
            <button class="btn btn-light-blue">Submit</button>
          </div>
        </div>
      </div>
      <!-- Form with header -->

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-7">

      <!-- Google map-->
      <div id="map-container" class="rounded z-depth-1-half map-container" style="height: 200px">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3539.2135294088375!2d68.75778171438515!3d27.493733982880894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x394eac0826086bc9%3A0x78096af272e9ab60!2sLerning+as+a+student!5e0!3m2!1sen!2s!4v1542433914904" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <!-- Buttons-->
      <div class="row text-center" style="margin-top: 280px;">
        <div class="col-md-4">
          <a class="btn-floating blue accent-1">
            <i class="fa fa-map-marker"></i>
          </a>
          <p>New York, 94126</p>
          <p class="mb-md-0">United States</p>
        </div>
        <div class="col-md-4">
          <a class="btn-floating blue accent-1">
            <i class="fa fa-phone"></i>
          </a>
          <p>+ 01 234 567 89</p>
          <p class="mb-md-0">Mon - Fri, 8:00-22:00</p>
        </div>
        <div class="col-md-4">
          <a class="btn-floating blue accent-1">
            <i class="fa fa-envelope"></i>
          </a>
          <p>info@gmail.com</p>
          <p class="mb-0">sale@gmail.com</p>
        </div>
      </div>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</section>
<!-- Section: Contact v.1 -->
</div>
<?php include 'includes/footer.php'; ?>