<?php include "inc/header.php" ?>
<?php if(!isset($_SESSION['uid'])){header("location:index.php");} ?>
<?php
if(isset($_POST['submit']))
{
  $dp_name=$_POST['department_name'];
  $values = array('department' => $dp_name,
                  'status'=>"active");
  $sql="INSERT INTO `departments`(`department_name`,`status`) VALUES (:department,:status)";
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
                            <h4 class="tittle-w3-agileits mb-4">All Departments</h4>
                            <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Department Name</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $values = array('status' => "active");
                                $students=$admin->select_param("SELECT * FROM departments WHERE status=:status",$values);
                                $i=1;
                                foreach($students as $row)
                                {
                                    echo"
                                    <tr>
                                        <th scope='row'>$i</th>
                                        <td>". $row['department_name'] ."</td>
                                        <td><a class='btn btn-link btn-sm ' href='link-handler.php?value=".$row['department_id']."&action=Delete&page-name=departments.php'>Delete</a></td>
                                    </tr>";
                                    $i++;
                                }
                            ?>
                        </tbody>
                    </table>
                        </div>
                        <!--// Forms-1 -->
                        <!-- Forms-2 -->
                        <div class="outer-w3-agile col-xl mt-3">
                            <h4 class="tittle-w3-agileits mb-4">Add New Departmnet</h4>
                            <form method="post">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Department Name: </label>
                                    <br>
                                    <input type="text" name="department_name" class="form-control" id="exampleFormControlInput1" placeholder="Department Name" required="">
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
