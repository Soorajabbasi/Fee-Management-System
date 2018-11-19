<?php include 'inc/connection.php'; ?>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Subject Name</th>
            <th scope="col">Course Name</th>
            <th scope="col">Semester</th>
            <th scope="col">Max Marks</th>
            <th scope="col">Min Marks</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
            global $conn;
            $val=$_POST['selectedType'];
            $values = array('status' => "active",'course_name'=>$val);
            $query = $conn->prepare('SELECT * FROM subjects WHERE status=:status and course_name=:course_name');
            $query->execute($values);
            $result = $query;
            $students = $query->fetchAll(PDO::FETCH_ASSOC);
            //$students=$admin->select_param("SELECT * FROM subjects WHERE status=:status",$values);
            $i=1;
            foreach($students as $row)
            {
                echo"
                <tr>
                    <th scope='row'>$i</th>
                    <td>". $row['subject_name'] ."</td>
                    <td>". $row['course_name'] ."</td>
                    <td>". $row['semester'] ."</td>
                    <td>". $row['total_marks'] ."</td>
                    <td>". $row['min_marks'] ."</td>
                    <td><a class='btn btn-link btn-sm ' href='link-handler.php?value=".$row['subject_id']."&action=Delete&page-name=subjects.php'>Delete</a></td>
                </tr>";
                $i++;
            }
        ?>
    </tbody>
</table>
</div>
