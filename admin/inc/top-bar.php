<nav class="navbar navbar-default mb-xl-5 mb-4">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                    <h4>Online Computerized Semester Result System of Shah Abdul Latif University Khairpur</h4>
                    <ul class="top-icons-agileits-w3layouts float-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="far fa-user"></i>
                            </a>
                            <div class="dropdown-menu drop-3">
                                <div class="profile d-flex mr-o">
                                    <div class="profile-l align-self-center">
                                        <img src="images/profile.jpg" class="img-fluid mb-3" alt="Responsive image">
                                    </div>
                                    <?php $id=$_SESSION['uid'];
                                    $values = array('id' => $id,'status'=>"active");
                                    $sql="SELECT * FROM user WHERE user_id=:id and status=:status";
                                    $data=$admin->select_param($sql,$values);
                                    foreach ($data as $value) {
                                    ?>
                                      <div class="profile-r align-self-center">
                                          <h3 class="sub-title-w3-agileits"><?php echo $value['username'];?></h3>
                                          <a href="#"><?php echo $value['email'];?></a>
                                      </div>
                                  <?php } ?>
                                </div>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="inc/logout.php">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!--// top-bar -->