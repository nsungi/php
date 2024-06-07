<?php
    include '../accountBase/base.php';


$error = array('email'=> '','update'=>'');

    // for Registrations of the teacher
    if (isset($_POST['register'])){

        //validation for the email
        if (empty($_POST['email'])){
            $error['email'] = 'Email is not fill <br />';
        }else{
            $email = $_POST['email'];
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $error['email'] = 'Email must be valid email address <br />';
                }
        }

        $Userquer = "UPDATE `user` SET `role` = 'TEACHER' WHERE `user`.`email` = '$email'";
        $quer = mysqli_query($conn, $Userquer);
        
        if($quer){
            if (mysqli_affected_rows($conn) > 0) { // mysqli_affected_rows this is the key word for the change the row data
                // // let select user.id with the Given email
                // $useId = "SELECT userID FROM user where user.email = '$email'";
                // $userQuery = mysqli_query($conn, $useId);
                //     if ($userQuery){
                //         if(mysqli_num_rows($userQuery) > 0){
                //             $count = 0;
                
                //             while($d = mysqli_fetch_array($userQuery)){
                //                 $count++;  
                //         $success = "INSERT INTO professor_courses (profrssorID, courseID) VALUES ('$d['userID'], '$courseCode')";
                //             }
                //         }
                //     }

            $error['update'] = "Succeed in the Teacher register";


            } else {
                $error['update'] = "User doesn't exist";
            }
        } else {
            // Handle query execution error
            $error['update'] = "Error executing update query: " . mysqli_error($conn);
        }    
    }

    // drop user into e database
    if (isset($_POST['DropUser'])){

        //validation for the email
        if (empty($_POST['email'])){
            $error['email'] = 'Email is not fill <br />';
        }else{
            $email = $_POST['email'];
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $error['email'] = 'Email must be valid email address <br />';
                }
        }

        $email = mysqli_real_escape_string($conn, $email); // Escape the email to prevent SQL injection

        $Userquer = "DELETE FROM `user` WHERE `user`.`email` = '$email'";
        $quer = mysqli_query($conn, $Userquer);
        
        if($quer){
            if (mysqli_affected_rows($conn) > 0) {
                $success['success'] = 'Successfully user deleted';
            } else {
                $error['delete'] = "User with the provided email doesn't exist";
            }
        } else {
            // Handle query execution error
            $error['delete'] = "Error executing delete query: " . mysqli_error($conn);
        }
    }

?>
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
            <img src="assets/img/logo.png" alt="">
            <span class="d-none d-lg-block">EMTS</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
        <form class="search-form d-flex align-items-center" method="POST" action="#">
            <input type="text" name="query" placeholder="Search" title="Enter search keyword">
            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
        </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            <li class="nav-item d-block d-lg-none">
            <a class="nav-link nav-icon search-bar-toggle " href="#">
                <i class="bi bi-search"></i>
            </a>
            </li><!-- End Search Icon-->



            <li class="nav-item dropdown pe-3">

            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                <span class="d-none d-md-block dropdown-toggle ps-2">GR. ICTB3</span>
            </a><!-- End Profile Iamge Icon -->

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                <li class="dropdown-header">
                <h6>Group Numb4</h6>
                <span>Web Designer</span>
                </li>
                <li>
                <hr class="dropdown-divider">
                </li>

                <li>
                <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                    <i class="bi bi-person"></i>
                    <span>My Profile</span>
                </a>
                </li>
                <li>
                <hr class="dropdown-divider">
                </li>

                <li>
                <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                    <i class="bi bi-gear"></i>
                    <span>Account Settings</span>
                </a>
                </li>
                <li>
                <hr class="dropdown-divider">
                </li>

                <li>
                <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                    <i class="bi bi-question-circle"></i>
                    <span>Need Help?</span>
                </a>
                </li>
                <li>
                <hr class="dropdown-divider">
                </li>

                <li>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Sign Out</span>
                </a>
                </li>

            </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header><!-- End Header -->

<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
        <a class="nav-link collapsed" href="admin.php">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
        </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="dashboard.html">
        <i class=" ri-file-add-line"></i><span>Role Mantainace</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
            <a  data-bs-toggle="modal" data-bs-target="#staticBackdropStudent">
            <i class="ri-body-scan-fill" ></i><span>Drop Student</span>
            </a>
        </li>
        <li>
            <a data-bs-toggle="modal" data-bs-target="#staticBackdropTeacher">
            <i class="ri-draft-line"></i><span>Drop Teacher</span>
            </a>
        </li>
        
        </ul>
    </li><!-- End Forms Nav -->

    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="dashboard.html">
        <i class=" ri-file-add-line"></i><span>Program Mantainace</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
            <a  href='program.php' >
            <i class="ri-body-scan-fill" ></i><span>Program register</span>
            </a>
        </li>
        <li>
            <a href='maintain-course.php' >
            <i class="ri-draft-line"></i><span>Course Register</span>
            </a>
        </li>
        
        </ul>
    </li><!-- End Forms Nav -->

    <li class="nav-heading">Pages</li>

    <li class="nav-item">
        <a class="nav-link collapsed"  data-bs-target="#staticBackdrop" data-bs-toggle="modal">
        <i class="ri-add-box-line"></i>
        <span>Register Teacher</span>
        </a>
    </li><!-- End Profile Page Nav -->

    <li class="nav-item">
        <a class="nav-link collapsed" href="current_activity.html">
        <i class="ri-anchor-fill"></i>
        <span>Student Performance</span>
        </a>
    </li><!-- End F.A.Q Page Nav -->

    <li class="nav-item">
        <a class="nav-link collapsed" href="#">
        <i class="ri-history-line"></i>
        <span>Subjects</span>
        </a>
    </li><!-- End Contact Page Nav -->

    <li class="nav-item">
        <a class="nav-link collapsed"  href="../Account/logout.php">
        <i class="bi bi-box-arrow-left"></i>
        <span>Logout</span>
        </a>
    </li><!-- End Login Page Nav -->

    </ul>

</aside><!-- End Sidebar-->

<main id="main" class="main">

    <div class="pagetitle">
    <h1>Home</h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard.html">Home</a></li>
        <li class="breadcrumb-item">Pages</li>
        <li class="breadcrumb-item active"><div style =" color: red;"><?php echo $error['update'] ?></div><br></li>
        </ol>
    </nav>
    </div><!-- End Page Title -->

    <section class="section">
        
        <div class="iconslist">

            <div class="icon">
                <i class="ri-add-box-line"></i>
                <div class="label"> <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop" > Register Teacher</a> </div>
            </div>
            <div class="icon">
                <i class="ri-anchor-fill"></i>
                <div class="label"> <a href="execel.php" data-bs-toggle="modal" data-bs-target="#staticBackdropStudent">Drop Student </a></div>
            </div>
            <div class="icon">
                <i class="ri-history-line"></i>
                <div class="label"><a href="upload.php" data-bs-toggle="modal" data-bs-target="#staticBackdropTeacher"> Drop Teacher</a></div>
            </div>
            <div class="icon">
                <i class="ri-file-add-line"></i>
                <div class="label"><a href="maintain-course.php" >Register Course</a></div>
            </div>
            <div class="icon">
                <i class="ri-file-add-line"></i>
                <div class="label"><a href="maintain-course.php" >Register Program</a></div>
            </div>


        </div>



        <!-- Modal register teacher -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Register Teacher</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h2>Register Teacher</h2>
                            <form action="admin.php" method="post" enctype="multipart/form-data">
                                <input type="email" name="email" placeholder="Enter email for upgrade user" class="form-control" >
                                <div class="col-md-4">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="floatingSelect" aria-label="State" name="courseID">
                                            <option selected>Select</option>
                                
                                                <?php
                                                $opt = 'SELECT * FROM courses';
                                                $optquery = mysqli_query($conn, $opt);
                                                if ($optquery) {
                                                    if (mysqli_num_rows($optquery) > 0) {
                                                        
                                                        $count = 0;

                                                        while($d = mysqli_fetch_array($optquery)){
                                                            $count++;  
                                                
                                                ?>
                                                <option value="<?php echo $d['courseID']; ?>"><?php echo $d['courseName']; ?>(<?php echo $d['Code']; ?>)</option>
                                                <?php
                                                            }
                                                        }
                                                        else{
                                                            echo 'Data not found';
                                                        }
                                                    }
                                                ?>
                                        </select>
                                        <label for="floatingSelect">Customer Name</label>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" >Close</button>
                                    <button type="submit" class="btn btn-primary" name='register'>Register</button>
                                </div>
                            </form>
                    </div>
                    
                </div>
            </div>
        </div>


        
        <!-- Modal Drop teacher -->
        <div class="modal fade" id="staticBackdropTeacher" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Drop Staff</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h2>Drop Student</h2>
                        <form action="admin.php" method="post" enctype="multipart/form-data">
                                <input type="email" name="email" placeholder="Enter email of Student" class="form-control">
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" >Close</button>
                                    <button type="submit" class="btn btn-primary" name='DropUser'>Drop Student</button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Drop teacher -->
        <div class="modal fade" id="staticBackdropStudent" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Drop Student</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h2>Drop Teacher</h2>
                        <form action="admin.php" method="post" enctype="multipart/form-data">
                                <input type="email" name="email" placeholder="Enter email of Teacher" class="form-control">
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" >Close</button>
                                    <button type="submit" class="btn btn-primary" name='DropUser'> Drop Teacher</button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>

    </section>

</main><!-- End #main -->


<?php
    include '../accountBase/footer.php'
?>