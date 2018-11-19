<?php include "inc/header.php" ?>
<?php if(!isset($_SESSION['uid'])){header("location:index.php");} ?>
<div class="wrapper">
        <!-- Sidebar Holder -->

<?php include "inc/sidebar.php" ?>
        <!-- Page Content Holder -->
        <div id="content">
            <?php include "inc/top-bar.php" ?>
            <div class="container-fluid">
                <div class="row">
                    <!-- Stats -->
                    <div class="outer-w3-agile col-xl">
                        <div class="stat-grid p-3 d-flex align-items-center justify-content-between bg-primary">
                            <div class="s-l">
                                <h5>Departments</h5>
                                <p class="paragraph-agileits-w3layouts text-white">Total</p>
                            </div>
                            <div class="s-r">
                                <h6><?php
                                  $values = array('status' =>"active");
                                  echo $rows=$admin->rowCount("SELECT *FROM departments WHERE status=:status",$values);
                                ?>
                                    <i class="far fa-edit"></i>
                                </h6>
                            </div>
                        </div>
                        <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-success">
                            <div class="s-l">
                                <h5>Courses</h5>
                                <p class="paragraph-agileits-w3layouts text-white">Total</p>
                            </div>
                            <div class="s-r">
                                <h6><?php
                                  $values = array('status' =>"active");
                                  echo $rows=$admin->rowCount("SELECT *FROM courses WHERE status=:status",$values);
                                ?>
                                    <i class="far fa-smile"></i>
                                </h6>
                            </div>
                        </div>
                        <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-danger">
                            <div class="s-l">
                                <h5>Subjects</h5>
                                <p class="paragraph-agileits-w3layouts text-white">Total</p>
                            </div>
                            <div class="s-r">
                                <h6><?php
                                  $values = array('status' =>"active");
                                  echo $rows=$admin->rowCount("SELECT *FROM subjects WHERE status=:status",$values);
                                ?>
                                    <i class="fas fa-tasks"></i>
                                </h6>
                            </div>
                        </div>
                        <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-warning">
                            <div class="s-l">
                                <h5>Students</h5>
                                <p class="paragraph-agileits-w3layouts text-white">Total</p>
                            </div>
                            <div class="s-r">
                                <h6>
                                    <?php
                                      $values = array('status' =>"active");
                                      echo $rows=$admin->rowCount("SELECT *FROM students WHERE status=:status",$values);
                                    ?>
                                    <i class="fas fa-users"></i>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <!--// Stats -->
                    <!-- Pie-chart -->
                    <div class="outer-w3-agile col-xl ml-xl-3 mt-xl-0 mt-3">
                        <h4 class="tittle-w3-agileits mb-4">Empty Area</h4>
                        <p>Think what to place here..</p>
                </div>
            </div>
        </div>
    </div>
<?php include "inc/footer.php" ?>
