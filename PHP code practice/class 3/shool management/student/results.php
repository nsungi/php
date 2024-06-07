<?php
    include '../accountBase/base.php'
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
        <a class="nav-link collapsed" href="student-home.php">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
        </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="dashboard.html">
        <i class=" ri-file-add-line"></i><span>Academic issue</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        
        <li>
            <a href="register-Exam.php">
            <i class="ri-draft-line"></i><span>Register exam</span>
            </a>
        </li>
        <li>
            <a href="results.php">
            <i class="ri-body-scan-fill"></i><span>Result</span>
            </a>
        </li>
        </ul>
    </li><!-- End Forms Nav -->

    <li class="nav-heading">Pages</li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#">
        <i class="ri-add-box-line"></i>
        <span>Payment</span>
        </a>
    </li><!-- End Profile Page Nav -->

    <li class="nav-item">
        <a class="nav-link collapsed" href="register-semister.php">
        <i class="ri-anchor-fill"></i>
        <span>Register Program</span>
        </a>
    </li><!-- End F.A.Q Page Nav -->

    <li class="nav-item">
        <a class="nav-link collapsed" href="program-stracture.php">
        <i class="ri-history-line"></i>
        <span>Program Structure</span>
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
        <li class="breadcrumb-item active">Blank</li>
        </ol>
    </nav>
    </div><!-- End Page Title -->

    <section class="section">

        <div class="row">
            <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Current Activitys</h5>
                <p>Student result for the class {class name} </p>
                <!-- Table with stripped rows -->
                <table class="table datatable table-striped">
                    <thead>
                    <tr>
                        <th>
                        <b>N</b>o
                        </th>
                        <th>Course Name</th>
                        <th>Under</th>
                        <th>Marks </th>
                        <th>Grade </th>

                    </tr>
                    </thead>
                    <tbody>

                    <?php
                        if (isset($_SESSION['Uid']) ) {

                            $userID = $_SESSION['Uid'];
                            $time = $_SESSION['Time'];
                            $role = $_SESSION['role'];
                            
                            

                        //     $result = "SELECT 
                        //     u.userID, 
                        //     u.firstName AS userFirstName, 
                        //     u.lastName AS userLastName,
                        //     c.courseName AS courseName,
                        //     p.firstName AS professorFirstName,
                        //     pr.programID,
                        //     sm.grade AS grade
                        //     FROM 
                        //         user u
                        //     LEFT JOIN 
                        //         student_program sp ON u.userID = sp.studentID
                        //     LEFT JOIN 
                        //         program pr ON sp.programID = pr.programID
                        //     LEFT JOIN 
                        //         professor_course pc ON pr.programID = pc.courseID
                        //     LEFT JOIN 
                        //         courses c ON pc.courseID = c.courseID
                        //     LEFT JOIN 
                        //         user p ON pc.professorID = p.userID
                        //     LEFT JOIN 
                        //         student_marks sm ON u.userID = sm.studentID AND pc.id = sm.professorCourse
                        //     WHERE 
                        //         u.userID = '$userID'
                        // ";
                        

                            $result = "SELECT u.userID, u.firstName, u.lastName AS lastName,
                                        sp.programID,
                                        c.courseID, c.courseName,
                                        sm.markID, sm.grade
                                        FROM user u
                                        LEFT JOIN student_program sp ON u.userID = sp.studentID
                                        LEFT JOIN student_marks sm ON u.userID = sm.studentID
                                        LEFT JOIN professor_course pc ON sm.professorCourse = pc.id
                                        LEFT JOIN courses c ON pc.courseID = c.courseID WHERE sm.studentID = '$userID'";

                            $quel = mysqli_query($conn, $result);

                            if ($quel) {
                                if (mysqli_num_rows($quel) > 0) {
                                    $count = 0;

                                    while ($d = mysqli_fetch_array($quel)) {
                                        $count++;
                        ?>
                                        <tr>
                                            <td><?php echo $count; ?></td>
                                            <td><?php echo $d['courseName']; ?></td>
                                            <td><?php echo $d['lastName']; ?></td>
                                            <td><?php echo $d['grade']; ?></td>
                                            <td><?php 
                                                    $gr = $d['grade'];
                                                if ($gr < 30 || $gr > 0) {
                                                    echo 'F';
                                                } else if($gr = 30 || $gr < 40) {
                                                    echo 'D';
                                                }elseif ($gr = 40 || $gr <50 ) {
                                                    echo 'c';
                                                } else if( $gr = 50 || $gr < 60) {
                                                    echo 'B-';
                                                } elseif ($gr <= 60 || $gr < 70) {
                                                    echo 'B+';
                                                } elseif($gr =70|| $gr <= 100) {
                                                    echo 'A';
                                                }
                                            ?></td>
                                        </tr>
                        <?php
                                    }
                                } else {
                                    echo 'Data not found';
                                }
                            } else {
                                echo 'Error executing query: ' . mysqli_error($conn);
                            }
                        } else {
                            echo 'Session does not exist';
                        }
                    ?>

                    </tbody>
                </table>
                <!-- End Table with stripped rows -->

                </div>
            </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->

<?php
    include '../accountBase/footer.php'
?>