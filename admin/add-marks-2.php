<?php include "inc/header.php" ?>
<?php if(!isset($_SESSION['uid'])){header("location:index.php");} ?>
    <div class="wrapper">
        <?php include "inc/sidebar.php" ?>
        <div id="content">
            <?php include "inc/top-bar.php" ?>
            <div class="container-fluid">
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Add Subjectwise Marks</h4>
                    <?php if(isset($_POST['save_marks'])){
                      $obt_marks_all= $_POST['obt_marks_text'];
                      $subject_name= $_POST['subject'];
                      $total_marks= $_POST['total_marks'];
                      $min_marks= $_POST['min_marks'];
                      $student_id_2= $_POST['student_id_txt'];
                      $semester= $_POST['sem_text'];
                      //print_r($obt_marks_all);
                      foreach ($obt_marks_all as $key=>$obt_marks)
                      {
                        // echo $subject_name[$key];
                        // echo $total_marks[$key];
                        // echo $min_marks[$key];
                        // echo $obt_marks;
                        $values = array(
                                        'student_id' => $student_id_2,
                                        'semester' => $semester,
                                        'subject' => $subject_name[$key],
                                        'total_marks' => $total_marks[$key],
                                        'min_marks' => $min_marks[$key],
                                        'obtain_marks'=>$obt_marks,
                                        'status'=> "active"
                                        );
                        $sql="INSERT INTO `marks`(`student_id`, `subject`, `semester`, `total_marks`, `min_marks`, `obtain_marks`, `status`) VALUES (:student_id,:subject,:semester,:total_marks,:min_marks,:obtain_marks,:status)";
                        $re=$admin->insertdata($sql,$values);
                        if($re){
                        echo"
                          <div class='alert alert-success alert-dismissible'>
                              <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                              <strong>Success!</strong> Marks are addedd successfully. Click here to goto back <a href='add-marks.php' class='alert-link'>Marks page</a>
                          </div>
                          ";
                        }else{echo "ERROR";}
                        //echo"<pre>"; print_r($values); echo"</pre>";
                      }
                    } ?>
                    <form action="#" method="post">
                      <?php 
                     
                        if(isset($_POST['submit_open']))
                        {
                          //$student_name=$_POST['student_name'];
                          $course_name_1=$_POST['course'];
                          $semester_1=$_POST['semester'];
                          $roll_no_1=$_POST['roll_no'];
                          $student_id=$_POST['std_id'];
                          $values = array('course' => $course_name_1,
                                          'semester'=>$semester_1,
                                          );
                          $sql="SELECT * FROM subjects WHERE course_name = :course AND semester= :semester";
                          $subject_rows=$admin->select_param($sql,$values);
                          foreach ($subject_rows as $subject_data )
                          {
                            ?>

                        <input type="text" name="sem_text" value="<?php echo $semester_1; ?>" hidden="true" >
                        <input type="text" name="student_id_txt"  value="<?php echo $student_id; ?>" hidden="true" >
                        <input type="text" name="subject[]" value="<?php echo $subject_data['subject_name']; ?>" hidden="true" >
                        <input type="text" name="total_marks[]" value="<?php echo $subject_data['total_marks']; ?>" hidden="true" >
                        <input type="text" name="min_marks[]" value="<?php echo $subject_data['min_marks']; ?>" hidden="true" >
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputEmail4">Subject:</label>
                                <input type="text" name="" value="<?php echo $subject_data['subject_name']; ?>" disabled class="form-control" id="inputEmail4">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputPassword4">Max Marks</label>
                                <input type="text" disabled value="<?php echo $subject_data['total_marks']; ?>" class="form-control" id="inputPassword4"  required="">

                              </div>
                              <div class="form-group col-md-2">
                                  <label for="inputPassword4">Min Marks</label>
                                  <input type="text" disabled value="<?php echo $subject_data['min_marks']; ?>" class="form-control" id="inputPassword4"  required="">
                              </div>
                            <div class="form-group col-md-2">
                                <label for="inputPassword4">Obt Marks</label>
                                <input type="text" name="obt_marks_text[]" class="form-control" id="inputPassword4"  required="">
                            </div>
                            <!-- <div class="form-group col-md-2">
                                <label for="inputPassword4">Status</label>
                                <input type="text" disabled class="form-control" id="inputPassword4"  required="">
                            </div> -->
                        </div>
                      <?php

                        }?>
                        <button type="submit" name="save_marks" class="btn btn-primary">Save Student Marks</button>
                        <?php

                          }?>
                    </form>
                </div>
        </div>
    </div>

<?php include "inc/footer.php" ?>
