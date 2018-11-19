<?php include "inc/header.php" ?>
<?php if(!isset($_SESSION['uid'])){header("location:index.php");} ?>
<?php
if(isset($_POST['submit']))
{
  $subject_name=$_POST['subject_name'];
  $min_marks=$_POST['min_marks'];
  $max_marks=$_POST['max_marks'];
  $course_name=$_POST['course_name'];
  $semester=$_POST['semester'];
  $values = array('subject_name' => $subject_name,
                  'min_marks'=>$min_marks,
                  'max_marks'=>$max_marks,
                  'course_name'=> $course_name,
                  'semester'=>$semester,
                  'status'=>"active"
                );
                //print_r($values);
  $sql="INSERT INTO `subjects`(`subject_name`, `total_marks`, `min_marks`, `course_name`, `semester`,`status`) VALUES (:subject_name,:max_marks,:min_marks,:course_name,:semester,:status)";
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
                    <h4 class="tittle-w3-agileits mb-4">Add Subject</h4>
                    <form action="#" method="post">
                    <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Subject Name</label>
                                <input type="text" name="subject_name" class="form-control" id="inputEmail4" placeholder="Enter Subject Name" required="">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputPassword4">Max Marks</label>
                                <input type="text" name="max_marks" class="form-control" id="inputPassword4" placeholder="Max Marks" required="">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Min Marks</label>
                                <input type="text" name="min_marks" class="form-control" id="inputAddress" placeholder="Min Marks" required="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Select Course</label>
                                <select class='form-control' name="course_name">
                                  <?php
                                    $values = array('status' =>"active");
                                      $students=$admin->select_param("SELECT * FROM courses WHERE status=:status",$values);
                                      foreach ($students as $row ){
                                        echo "<option value='".$row['course_name']."'>".$row['course_name']. "</option>";
                                      }
                                  ?>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
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

                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Add Subject</button>
                    </form>
                </div>
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">All Subjects</h4>
                    <div class="col-md-3">
                      <label for="inputEmail4">Select Course</label>
                      <select class='form-control' name="course_name" id="c_name">
                        <?php
                          $values = array('status' =>"active");
                            $students=$admin->select_param("SELECT * FROM courses WHERE status=:status",$values);
                            foreach ($students as $row ){
                              echo "<option value='".$row['course_name']."'>".$row['course_name']. "</option>";
                            }
                        ?>
                      </select>
                  </div><br><hr>
                    <div id="result_by_ajax_2"></div>
        </div>
    </div>
<?php include "inc/footer.php" ?>
