<?php include 'inc/connection.php'; ?>
<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Student Name</th>
                <th>Father Name</th>
                <th>Roll No</th>
                <th>Department</th>
                <th>Course</th>
                <th>Semester</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
          <?php
              global $conn;
              $val=$_POST['selectedType'];
              $values = array('dept' =>$val);
              $query = $conn->prepare('SELECT *FROM students WHERE department=:dept');
              $query->execute($values);
              $result = $query;
              $students = $query->fetchAll(PDO::FETCH_ASSOC);
              $i=1;
              foreach($students as $row)
              {
                  $cn=$row['class'];
                  $values_2 = array('cn' => $cn);
                  $query_2 = $conn->prepare('SELECT department from courses WHERE course_name= :cn');
                  $query_2->execute($values_2);
                  $dept = $query_2->fetchAll(PDO::FETCH_ASSOC);
                  //$dept=$admin->select_param('SELECT department from courses WHERE course_name= :cn',$values);
                  foreach ($dept as $value ) {

                    $dpeta=$value['department'];
                  }$dept;
                  echo"
                  <tr>
                      <th scope='row'>$i</th>
                      <td>". $row['name'] ."</td>
                      <td>". $row['fathers_name']." ".$row['surname'] ."</td>
                      <td>". $row['roll_no'] ."</td>
                      <td>". $dpeta ."</td>
                      <td>". $row['class'] ."</td>
                      <td><span class='badge badge-pill badge-primary'>". $row['semester'] ."</span></td>
                      <td><span class='badge badge-success'>". $row['status'] ."</span></td>
                  </tr>";
                  $i++;
              }
          ?>
          <!-- <td><a href='link-handler.php?id=".$row['id']."'>Delete</a></td> -->
        </tbody>
    </table>
</div>
