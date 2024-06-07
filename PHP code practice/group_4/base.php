<?php
ob_start(); // Start output buffering
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>collage management system</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">ICTB_#4</span>
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
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
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

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

     
      <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#student-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-person"></i><span>Student Management</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="student-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
            <a href="add_student.php">
                <i class="bi bi-person-plus"></i><span>Add Student</span>
            </a>
        </li>
        <li>
            <a href="edit_student.php">
                <i class="bi bi-pencil"></i><span>Edit Student Record</span>
            </a>
        </li>
        <li>
            <a href="delete_student.php">
                <i class="bi bi-trash"></i><span>Delete Student Records</span>
            </a>
        </li>
        <li>
            <a href="view_students.php">
                <i class="bi bi-list-check"></i><span>View Available Students</span>
            </a>
        </li>
    </ul>
</li><!-- End Student Management Nav -->


<li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#course-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-book"></i><span>Course Management</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="course-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li>
            <a href="add_course.php">
                <i class="bi bi-journal-plus"></i><span>Add Course</span>
            </a>
        </li>
        <li>
            <a href="edit_course.php">
                <i class="bi bi-pencil"></i><span>Edit Course</span>
            </a>
        </li>
        <li>
            <a href="delete_course.php">
                <i class="bi bi-trash"></i><span>Delete Course</span>
            </a>
        </li>
        <li>
            <a href="view_courses.php">
                <i class="bi bi-journal-check"></i><span>View Courses</span>
            </a>
        </li>
        <li>
            <a href="course_details.php">
                <i class="bi bi-info-circle"></i><span>Course Details</span>
            </a>
        </li>
    </ul>
</li><!-- End Course Management Nav -->

<li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#attendance-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-clipboard-check"></i><span>Attendance Management</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="attendance-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li>
            <a href="mark_attendance.php">
                <i class="bi bi-check-circle"></i><span>Mark Attendance</span>
            </a>
        </li>
        <li>
            <a href="view_attendance.php">
                <i class="bi bi-journal-text"></i><span>View Attendance</span>
            </a>
        </li>
        <li>
            <a href="attendance_details.php">
                <i class="bi bi-info-circle"></i><span>Attendance Details</span>
            </a>
        </li>
    </ul>
</li><!-- End Attendance Management Nav -->


<li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#enrollment-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-person-plus"></i><span>Enrollment Management</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="enrollment-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li>
            <a href="enroll_student.php">
                <i class="bi bi-person-plus-fill"></i><span>Enroll Student</span>
            </a>
        </li>
        <li>
            <a href="unenroll_student.php">
                <i class="bi bi-person-x-fill"></i><span>Unenroll Student</span>
            </a>
        </li>
        <li>
            <a href="view_enrollments.php">
                <i class="bi bi-journal-text"></i><span>View Enrollments</span>
            </a>
        </li>
        <li>
            <a href="enrollment_details.php">
                <i class="bi bi-info-circle"></i><span>Enrollment Details</span>
            </a>
        </li>
    </ul>
</li><!-- End Enrollment Management Nav -->


<li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#grading-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-award"></i><span>Grade & score Management</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="grading-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li>
            <a href="add_grade.php">
                <i class="bi bi-card-checklist"></i><span>Add Grade</span>
            </a>
        </li>
        <li>
            <a href="edit_grade.php">
                <i class="bi bi-pencil-square"></i><span>Edit Grade</span>
            </a>
        </li>
        <li>
            <a href="delete_grade.php">
                <i class="bi bi-trash"></i><span>Delete Grade</span>
            </a>
        </li>
        <li>
            <a href="view_grades.php">
                <i class="bi bi-journal-text"></i><span>View Grades</span>
            </a>
        </li>
        <li>
            <a href="grade_details.php">
                <i class="bi bi-info-circle"></i><span>Grade Details</span>
            </a>
        </li>
    </ul>
</li><!-- End Grading Management Nav -->
 
    
      <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#department-faculty-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-building"></i><span>Department & Faculty Management</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="department-faculty-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li>
            <a href="add_department.php">
                <i class="bi bi-journal-plus"></i><span>Add Department</span>
            </a>
        </li>
        <li>
            <a href="edit_department.php">
                <i class="bi bi-pencil"></i><span>Edit Department</span>
            </a>
        </li>
        <li>
            <a href="delete_department.php">
                <i class="bi bi-trash"></i><span>Delete Department</span>
            </a>
        </li>
        <li>
            <a href="view_departments.php">
                <i class="bi bi-journal-text"></i><span>View Departments</span>
            </a>
        </li>
        <li>
            <a href="department_details.php">
                <i class="bi bi-info-circle"></i><span>Department Details</span>
            </a>
        </li>
    </ul>
</li><!-- End Department & Faculty Management Nav -->

      <li class="nav-heading">Essantial</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

       
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.html">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->
 

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-blank.html">
          <i class="bi bi-file-earmark"></i>
          <span>Blank</span>
        </a>
      </li><!-- End Blank Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

 
      </ul>
    </nav>
  </header>




  <?php include 'footer.php'; ?>




