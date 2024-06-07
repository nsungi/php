
<?php
    include '../accountBase/base.php';

    $error = array('Name'=>'', 'code'=>'', 'message'=>'', 'newProgram'=>'', 'newAbv'=>'','selectProgram'=>'');
    // grabing data from the Register program form
    if (isset($_POST['submit-register'])) {
        $error = array(); // Initialize the error array
    
        // Validations
        if (empty($_POST['courseName'])) {
            $error['Name'] = "You didn't fill Program Name";
        } else {
            $cName = $_POST['courseName'];
        }
    
        if (empty($_POST['courseCode'])) {
            $error['code'] = "You didn't fill the program Abbreviation";
        } else {
            $courseCode = $_POST['courseCode'];
        }
    
        // If there are no validation errors, proceed with database insertion
        if (empty($error)) {
            // Query creation for insert data
            $sql = "INSERT INTO program(name, code) VALUES ('$cName', '$courseCode')";
    
            $quer = mysqli_query($conn, $sql);
    
            // Check for query execution error
            if ($quer) {
                $success_message = 'Course registered successfully';
            } else {
                $error['message'] = 'Registration of the course failed: ' . mysqli_error($conn);
            }
        }
    }
    

// update for the update form
if (isset($_POST['submit-update'])){

    // Handleling Validations
    if (empty($_POST['courseName'])){
        $error['newProgram'] = "you didn't fill the New Program";
    }else{
        $cName = $_POST['courseName'];
        }
    
    if (empty($_POST['courseCode'])){
        $error['newAbv'] = "you didn't fill the abriviation ";
    }else{
        $courseCode = $_POST['courseCode'];
        }

    if (empty($_POST['courseID'])){
        $error['selectProgram'] = "you didn't fill the Program to be updated ";
    }else{
        $courseID = $_POST['courseID'];
        }

    if (array_filter($error)){

    }else{

    //Query creation for insert data
    $sql = "UPDATE `program` SET `name` = '$cName', code = '$courseCode' WHERE `program`.`programID` = '$courseID'";

    $quer = mysqli_query($conn, $sql);

    if($quer){
        if (mysqli_affected_rows($conn) > 0) { // mysqli_affected_rows this is the key word for the change the row data
            $error['message'] = 'Update Successfully';

        } else {
            $error['message'] = 'Updation Fail sorry Try a gain';
        }
    } else {
        // Handle query execution error
        $error['update'] = "Error executing update query: " . mysqli_error($conn);
    }  
    
    }
}

?>
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
            <img src="assets/img/logo.png" alt="">
            <span class="d-none d-lg-block">ICTB</span>
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
    </li><!-- End register maintainance -->

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
        <li class="breadcrumb-item active"><div class="w3-panel"><?php echo $error['message'] ?></div><br></li>
        </ol>
    </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center">Register New Program</h5>

                <!-- Floating Labels Form course register -->
                <form class="row g-3" action="program.php" method='post'>
                
                    <div class="col-12">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingPassword" placeholder="Program Name" name="courseName">
                            <label for="floatingPassword">Program Name</label>
                            <div style =" color: red;"><?php echo $error['Name'] ?></div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingPassword" placeholder="Abriviation (Bsc.ICTB)" name="courseCode" >
                            <label for="floatingPassword">Abriviation (Bsc.ICTB)</label>
                            <div style =" color: red;"><?php echo $error['code'] ?></div>
                        </div>
                    </div>

                    <div class="text-center">
                    <button type="submit" class="btn btn-primary" name="submit-register">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form><!-- End floating Labels Form -->
            </div>
        </div>
            
        <!-- update Course Forms -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center">Update Program</h5>

                <!-- Floating Labels Form -->
                <form class="row-4 g-5" action="program.php" method='post'>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                                <select class="form-select" id="floatingSelect" aria-label="State" name="courseID">
                                    <option selected>Select</option>
                                
                                    <?php
                                    $opt = 'SELECT * FROM program';
                                    $optquery = mysqli_query($conn, $opt);
                                    if ($optquery) {
                                        if (mysqli_num_rows($optquery) > 0) {
                                            
                                            $count = 0;

                                            while($d = mysqli_fetch_array($optquery)){
                                                $count++;  
                                    
                                    ?>
                                    <option value="<?php echo $d['programID']; ?>"><?php echo $d['name']; ?>(<?php echo $d['code']; ?>)</option>
                                    <?php
                                                }
                                            }
                                            else{
                                                echo 'Data not found';
                                            }
                                        }
                                    ?>
                                </select>
                                <label for="floatingSelect">Select Customer For Changes</label>
                            <div style =" color: red;"><?php echo $error['selectProgram'] ?></div>

                            </div>
                        </div>

                    <div class="col-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingPassword" placeholder="New Course Name" name="courseName" >
                            <label for="floatingPassword">New Program Name</label>
                            <div style =" color: red;"><?php echo $error['newProgram'] ?></div>

                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingPassword" placeholder="Course Code (CSS 321)" name="courseCode" >
                            <label for="floatingPassword">Program EBR(Bsc. ICTB )</label>
                            <div style =" color: red;"><?php echo $error['newAbv'] ?></div>
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary" name="submit-update">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form><!-- End floating Labels Form -->
            </div>
        </div>
    </section>

</main><!-- End #main -->




<?php
    include '../accountBase/footer.php'
?>