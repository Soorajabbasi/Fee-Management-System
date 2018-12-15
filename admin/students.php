<?php include "inc/header.php" ?>
<?php if(!isset($_SESSION['uid'])){header("location:index.php");} ?>
<?php
if(isset($_POST['submit']))
{
  $student_name=$_POST['student_name'];
  $fathers_name=$_POST['fathers_name'];
  $surname=$_POST['surname'];
  $course_name=$_POST['course_name'];
  $department_name=$_POST['department_name'];
  $semester=$_POST['semester'];
  $roll_no=strtoupper($_POST['roll_no']);
  $status="active";
  $values = array('student_name' => $student_name,
                  'fathers_name'=>$fathers_name,
                  'surname'=>$surname,
                  'course_name'=> $course_name,
                  'semester'=>$semester,
                  'roll_no'=>$roll_no,
                  'status'=>$status,
                  'department_name'=>$department_name
                );
  $sql="INSERT INTO `students`( `name`, `fathers_name`, `surname`, `class`, `semester`, `roll_no`, `status`,`department`) VALUES (:student_name,:fathers_name,:surname,:course_name,:semester,:roll_no,:status,:department_name)";
  $admin->insertdata($sql,$values);
}
?>
<div class="wrapper">
        <!-- Sidebar Holder -->
<?php include "inc/sidebar.php" ?>
        <!-- Page Content Holder -->
        <div id="content">
            <?php include "inc/top-bar.php" ?>
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Add Student</h4>
                    <form action="#" method="post">
                    <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputEmail4">Student Name</label>
                                <input type="text" name="student_name" class="form-control" id="inputEmail4" placeholder="Enter Student Name" required="">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Fathers Name</label>
                                <input type="text" name="fathers_name" class="form-control" id="inputPassword4" placeholder="Enter Fathers Name" required="">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Surname</label>
                                <input type="text" name="surname" class="form-control" id="inputPassword4" placeholder="Enter Surname" required="">
                            </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-4">
                              <label for="inputEmail4">Select Department</label>
                              <select class='form-control' name="department_name" id="course_name">
                                <?php
                                  $values = array('status' =>"active");
                                    $students=$admin->select_param("SELECT * FROM departments WHERE status=:status",$values);
                                    foreach ($students as $row ){
                                      echo "<option value='".$row['department_name']."'>".$row['department_name']. "</option>";
                                    }
                                ?>
                              </select>
                          </div>
                            <div class="form-group col-md-4">
                                <label for="inputEmail4">Select Course</label>
                                <select class='form-control' id="options" name="course_name">
                                  <option >Select Course</option>
                                  <?php

                                    //$values = array('status' =>"active");
                                      //$students=$admin->select_param("SELECT * FROM courses WHERE status=:status",$values);
                                      //foreach ($students as $row ){
                                      //  echo "<option value='".$row['course_name']."'>".$row['course_name']. "</option>";
                                     // }
                                  ?>
                                </select>

                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Select Semester</label>
                                <select class='form-control' name="semester">
                                    <option value='1'>1</option>
                                    <option value='2'>2</option>
                                    <option value='3'>3</option>
                                    <option value='4'>4</option>
                                    <option value='5'>5</option>
                                    <option value='6'>6</option>
                                    <option value='7'>7</option>
                                    <option value='8'>8</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Roll Number</label>
                                <input type="text" name="roll_no" style="text-transform:uppercase" class="form-control" id="inputPassword4" placeholder="Roll Number" required="">
                            </div>
                            <!-- <div class="form-group col-md-4">
                                <label for="inputPassword4">Select Student Image</label>
                                <input type='file' class='form-control' />
                            </div> -->
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Add Student</button>
                    </form>
                </div>
                <div class="outer-w3-agile col-xl mt-3 ">
                    <div class="agileinfo-cdr">
                        <h4 class="tittle-w3-agileits mb-4">All Students</h4>
                            <hr>
                            <div class="col-md-3">
                            <label for="inputEmail4">Select Department</label>
                            <select class='form-control' name="department_name" id="department_1">
                              <?php
                                $values = array('status' =>"active");
                                  $students=$admin->select_param("SELECT * FROM departments WHERE status=:status",$values);
                                  foreach ($students as $row ){
                                    echo "<option value='".$row['department_name']."'>".$row['department_name']. "</option>";
                                  }
                              ?>
                            </select>
                          </div><br>
                          <hr>
                            <div id="result_by_ajax_1"></div>
                    </div>
                </div>
        </div>
    </div>
<?php include "inc/footer.php" ?>
