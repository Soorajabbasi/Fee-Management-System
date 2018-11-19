<?php include 'inc/header.php'; ?>
    <div class="bg-page">
        <div class="container">
            <!-- main-heading -->
            <br>
            <h2 class="main-title-w3layouts mb-0  text-center text-white">Login</h2>
            <!--// main-heading -->
            <div class="row">
              <div class="col-md-3"></div>
            <div class="form-body-w3-agile col-md-6 text-center mt-5">
              <?php if(isset($_POST['submit']))
              {
                $email=$_POST['email'];
                $password=$_POST['password'];
                $values = array('email' => $email, 'password'=>$password,'status'=>"active");
                $sql="SELECT *FROM user WHERE email=:email AND password=:password AND status=:status LIMIT 1";
                $data=$admin->login($sql,$values);
              } ?>
              <form action="#" method="post">
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter email" required="">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password" required="">
                    </div>

                    <button type="submit" name="submit" class="btn btn-block btn-primary error-w3l-btn mt-sm-5 mt-3 px-4">Login</button>
                </form>
                <p class="paragraph-agileits-w3layouts mt-4">
                    <a href="#">Forgot Password ?</a>
                </p>
            </div>
          </div>
            <!-- Copyright -->
            <div class="copyright-w3layouts py-xl-3 py-2 mt-xl-5 mt-4 text-center">
                <p>© 2018. All Rights Reserved By Sajid Hussain Gopang</a>
                </p>
            </div>
            <!--// Copyright -->
        </div>
    </div>
<?php include 'inc/footer.php'; ?>
