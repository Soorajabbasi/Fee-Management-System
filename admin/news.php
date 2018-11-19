<?php include "inc/header.php" ?>
<?php if(!isset($_SESSION['uid'])){header("location:index.php");} ?>
<div class="wrapper">
        <!-- Sidebar Holder -->
<?php if(isset($_POST['submit']))
{
  $values = array('title' => $title=$_POST['news_title'],
                  'des'=>$des=$_POST['des'],
                  'status'=>"active");
  $sql="INSERT INTO `news`(`news_title`, `news`, `status`) VALUES (:title,:des,:status)";
  $admin->insertdata($sql,$values);
} ?>
<?php include "inc/sidebar.php" ?>
        <!-- Page Content Holder -->
        <div id="content">
            <?php include "inc/top-bar.php" ?>
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Add News/Notification</h4>
                    <form action="#" method="post">
                      <div class="form-row">
                          <div class="form-group col-md-12">
                                <label for="inputEmail4">Title</label>
                                <input type="text" name="news_title" class="form-control" id="inputEmail4" placeholder="News title" required="">
                          </div>
                          <div class="form-group col-md-12">
                                <label for="inputPassword4">Description</label>
                                <textarea name="des" class="form-control" placeholder="Write new description here...."></textarea>
                          </div>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Add News</button>
                    </form>
                </div>
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">All News/Notifications</h4>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $values = array('status' => "active");
                                $students=$admin->select_param("SELECT * FROM news WHERE status=:status",$values);
                                $i=1;
                                foreach($students as $row)
                                {
                                    echo"
                                    <tr>
                                        <th scope='row'>$i</th>
                                        <td>". $row['news_title'] ."</td>
                                        <td>". $row['news'] ."</td>
                                        <td><a class='btn btn-link btn-sm ' href='link-handler.php?value=".$row['news_id']."&action=Delete&page-name=news.php'>Delete</a></td>
                                    </tr>";
                                    $i++;
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
<?php include "inc/footer.php" ?>
