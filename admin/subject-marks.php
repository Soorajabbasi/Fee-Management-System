<?php include "inc/header.php" ?>
<?php if(!isset($_SESSION['uid'])){header("location:index.php");} ?>
<div class="wrapper">
        <!-- Sidebar Holder -->

<?php include "inc/sidebar.php" ?>
        <!-- Page Content Holder -->
        <div id="content">
            <?php include "inc/top-bar.php" ?>
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Add Subjectwise Marks</h4>
                    <form action="#" method="post">
                    <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputEmail4">Subject:</label>
                                <input type="text" class="form-control" id="inputEmail4" required="">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputPassword4">Max Marks</label>
                                <input type="text" class="form-control" id="inputPassword4"  required="">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputPassword4">Min Marks</label>
                                <input type="text" class="form-control" id="inputPassword4"  required="">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputPassword4">Obt Marks</label>
                                <input type="text" class="form-control" id="inputPassword4"  required="">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputPassword4">Status</label>
                                <input type="text" class="form-control" id="inputPassword4"  required="">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Add Student</button>
                    </form>
                </div>

        </div>
    </div>
<?php include "inc/footer.php" ?>
