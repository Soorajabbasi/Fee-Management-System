<?php include 'inc/connection.php'; ?>
 <?php
            global $conn;
            $val=$_POST['selectedType'];
              $values = array('status' => "active",'department'=>$val);
              //$values = array('status' =>"active");
              $query = $conn->prepare('SELECT course_name FROM courses WHERE status=:status and department=:department');
               $query->execute($values);
               $result = $query;
               $students = $query->fetchAll(PDO::FETCH_ASSOC);
              foreach ($students as $row ){
              echo "<option value='".$row['course_name']."'>".$row['course_name']. "</option>";
              }
?>