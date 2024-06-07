<?php
    include '../accountBase/base.php';
    $error = array('message' => '', 'programs' => '');

    if (isset($_SESSION['Uid'])) {
        $userID = $_SESSION['Uid'];
    
        if (isset($_POST['register'])) {
            // Handle validations
            if (empty($_POST['courseID'])) {
                $error['programs'] = "You didn't fill the Course name.";
            } else {
                $program = $_POST['courseID'];
            }
            if (array_filter($error)){
    
            }else{
    
            //Query creation for insert data
            $sql = "INSERT INTO professor_course (professorID, courseID) VALUES ('$userID', '$program')";
    
            $quer = mysqli_query($conn, $sql);
            
                if ($quer){
                    $error['message'] = 'Register Successfully';
                }else{
                    $error['message'] = 'Registration of the course fail';
                }
            }
        }
    } else{
        $error['message'] = 'you have to login first';
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
        <a class="nav-link collapsed" href="teacher-home.php">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
        </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="dashboard.html">
        <i class=" ri-file-add-line"></i><span>Student Result</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
            <a href="add-resulte.php">
            <i class="ri-body-scan-fill"></i><span>Add Result</span>
            </a>
        </li>
        <li>
            <a href="update-resulte.php">
            <i class="ri-draft-line"></i><span>Update Result</span>
            </a>
        </li>
        <li>
            <a href="student-result.php">>
            <i class="ri-draft-line"></i><span>Student Result</span>
            </a>
        </li>
        
        </ul>
    </li><!-- End Forms Nav -->

    <li class="nav-heading">Pages</li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="register-course.php">
        <i class="ri-add-box-line"></i>
        <span>Register Course</span>
        </a>
    </li><!-- End Profile Page Nav -->

    <li class="nav-item">
        <a class="nav-link collapsed" href="timeTable.php">
        <i class="ri-anchor-fill"></i>
        <span>Time Table</span>
        </a>
    </li><!-- End F.A.Q Page Nav -->


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
        <li class="breadcrumb-item active">Blank</li>
        </ol>
    </nav>
    </div><!-- End Page Title -->

    <section class="section">
    <div class="row">
            <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Register Course</h5>
                    <form action="register-course.php" method="post" enctype="multipart/form-data">
                        <div class="col-md-6">
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
                                <label for="floatingSelect">Course You Wanted to Register</label>
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
    </section>

</main><!-- End #main -->


<?php
    include '../accountBase/footer.php';
?>