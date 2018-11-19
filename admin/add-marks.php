<?php include "inc/header.php" ?>
<?php if(!isset($_SESSION['uid'])){header("location:index.php");} ?>
<?php
if(isset($_POST['search_submit']))
{
  $student_search_txt=$_POST['student_search_txt'];
  $values = array('roll_no' => $student_search_txt);
  $sql="SELECT * FROM students WHERE roll_no = :roll_no";
  $rows=$admin->select_param($sql,$values);
  foreach ($rows as $data) {
      $name=$data['name'];
      $fname=$data['fathers_name'];
      $surname=$data['surname'];
      $course=$data['class'];
      $semester=$data['semester'];
      $roll_no=$data['roll_no'];
      $std_id=$data['id'];
  }
}
?>
    <div class="wrapper">
        <?php include "inc/sidebar.php" ?>
        <div id="content">
            <?php include "inc/top-bar.php" ?>
            <div class="container-fluid">
                    <div class="row">
                        <!-- Forms-2 -->
                        <div class="col-md-12">
                        <div class="outer-w3-agile col-xl mt-3">
                            <h4 class="tittle-w3-agileits mb-4">Student Details</h4><hr/>
                            <form action="#" method="post">
                                <div class='form-row'>
                                    <div class="form-group col-md-6 ">
                                        <label for="exampleFormControlInput1">Student Roll No: </label>
                                        <input type="search" name="student_search_txt"  class="form-control" id="exampleFormControlInput1" placeholder="Student Roll No" required="">
                                    </div>
                                    <div class="form-group col-md-6">

                                        <button type="submit" name="search_submit" class="btn btn-primary mt-4">Search Student </button>
                                    </div>
                                </div>
                            </form>
                            <hr><hr>
                            <form action="add-marks-2.php" method="post">

                              <input type="text" name="std_id" value="<?php echo @$std_id;; ?>" hidden class="form-control" id="exampleFormControlInput1" placeholder="Student Name" required="">
                                <div class='form-row'>
                                    <div class="form-group col-md-4">
                                        <label for="exampleFormControlInput1">Student Name: </label>
                                        <br>
                                        <input type="text" name="student_name" value="<?php echo @$name; ?>" class="form-control" id="exampleFormControlInput1" placeholder="Student Name" required="">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleFormControlInput1">Fathers Name: </label>
                                        <br>
                                        <input type="text" name="fathers_name" value="<?php echo @$fname; ?>" class="form-control" id="exampleFormControlInput1" placeholder="Student Name" required="">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleFormControlInput1">Surname: </label>
                                        <br>
                                        <input type="text" name="surname" value="<?php echo @$surname; ?>" class="form-control" id="exampleFormControlInput1" placeholder="Student Name" required="">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleFormControlInput1">Course </label>
                                        <br>
                                        <input type="text" name="course" value="<?php echo @$course; ?>" class="form-control" id="exampleFormControlInput1" placeholder="Department"  required="">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleFormControlInput1">Roll No </label>
                                        <br>
                                        <input type="text" name="roll_no" value="<?php echo @$roll_no; ?>" class="form-control" id="exampleFormControlInput1" placeholder="Department"  required="">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleFormControlInput1">Semester </label>
                                        <br>
                                        <input type="text" name="semester" value="<?php echo @$semester; ?>" class="form-control" id="exampleFormControlInput1" placeholder="Semester"  required="">
                                    </div>
                                    <div class="col-md-2">
                                        <button type="submit" name="submit_open" class="btn btn-primary mt-4">Open Subject Marks</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        </div>
                        <!--// Forms-2 -->
                    </div>
                </div>
        </div>
    </div>
<?php include "inc/footer.php" ?>
