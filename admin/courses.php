<?php include "inc/header.php" ?>
<?php if(!isset($_SESSION['uid'])){header("location:index.php");} ?>
<?php
if(isset($_POST['submit']))
{
  $dp_name=$_POST['department_name'];
  $course_name=$_POST['course_name'];
  $no_of_semesters=$_POST['no_of_semesters'];
  $values = array('department' => $dp_name,
                  'course_name'=> $course_name,
                  'no_of_semesters'=>$no_of_semesters,
                  'status'=>"active"
                );
  $sql="INSERT INTO `courses`(`course_name`, `department`, `semesters`,`status`) VALUES (:course_name,:department,:no_of_semesters,:status)";
  $admin->insertdata($sql,$values);
}
?>
    <div class="wrapper">
        <?php include "inc/sidebar.php" ?>
        <div id="content">
            <?php include "inc/top-bar.php" ?>
            <div class="container-fluid">
                    <div class="row">
                        <!-- Forms-1 -->
                        <div class="outer-w3-agile col-xl mt-3 mr-xl-3">
                            <h4 class="tittle-w3-agileits mb-4">All Courses</h4>
                            <label for="inputEmail4">Select Department</label>
                            <select class='form-control' name="department_name" id="department_2">
                              <?php
                                $values = array('status' =>"active");
                                  $students=$admin->select_param("SELECT * FROM departments WHERE status=:status",$values);
                                  foreach ($students as $row ){
                                    echo "<option value='".$row['department_name']."'>".$row['department_name']. "</option>";
                                  }
                              ?>
                            </select>
                            <div id="result_by_ajax_3"></div>
                        
                        </div>
                        <!--// Forms-1 -->
                        <!-- Forms-2 -->
                        <div class="outer-w3-agile col-xl mt-3">
                            <h4 class="tittle-w3-agileits mb-4">Add New Course</h4>
                            <form action="#" method="post">
                            <div class="form-group">
                                    <label for="exampleFormControlInput1">Department Name: </label>
                                    <select class='form-control' name="department_name" >
                                      <?php
                                        $values = array('status' =>"active");
                                          $students=$admin->select_param("SELECT * FROM departments WHERE status=:status",$values);
                                          foreach ($students as $row ){
                                            echo "<option value='".$row['department_name']."'>".$row['department_name']. "</option>";
                                          }
                                      ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Course Name: </label>
                                    <br>
                                    <input type="text" name="course_name" class="form-control" id="exampleFormControlInput1" placeholder="Enter Course Name" required="">
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Number of Semsters in Course: </label>
                                    <br>
                                    <input type="text" name="no_of_semesters" class="form-control" id="exampleFormControlInput1" placeholder="Enter number of semesters" required="">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="submit" name="submit" class="btn btn-primary">Add </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--// Forms-2 -->
                    </div>
                </div>
        </div>
    </div>
<?php include "inc/footer.php" ?>
