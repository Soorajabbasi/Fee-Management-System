<?php include 'inc/connection.php'; ?>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Course Name</th>
            <th scope="col">Department Name</th>
            <th scope="col">No of Semesters</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
            global $conn;
            $val=$_POST['selectedType'];
            $values = array('status' => "active",'course_name'=>$val);
            $query = $conn->prepare('SELECT * FROM courses WHERE status=:status and department=:course_name');
            $query->execute($values);
            $result = $query;
            $students = $query->fetchAll(PDO::FETCH_ASSOC);
            $i=1;
            foreach($students as $row){
                echo"
                    <tr>
                            <th scope='row'>$i</th>
                            <td>". $row['course_name'] ."</td>
                            <td>". $row['department'] ."</td>
                            <td>". $row['semesters'] ."</td>
                            <td><a class='btn btn-link btn-sm ' href='link-handler.php?value=".$row['id']."&action=Delete&page-name=courses.php'>Delete</a></td>
                    </tr>";
                    $i++;
            }
            ?>
        </tbody>
    </table>

        
