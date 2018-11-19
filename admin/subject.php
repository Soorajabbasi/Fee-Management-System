<?php include "inc/header.php" ?>
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
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Subject Name" required="">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputPassword4">Max Marks</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="Max Marks" required="">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Min Marks</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="Min Marks" required="">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Subject</button>
                    </form>
                </div>
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">All Subjects</h4>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Subject Name</th>
                                <th scope="col">Max Marks</th>
                                <th scope="col">Min Marks</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
<?php include "inc/footer.php" ?>