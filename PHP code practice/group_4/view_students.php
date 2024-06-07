<?php
include 'base.php'; // Include the base file
include 'db_connection.php'; // Include the database connection file

// Retrieve all students from the database
$stmt = $pdo->query("SELECT * FROM students");
$students = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title text-center">List of Students</h2>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Student ID</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Sex</th>
                                    <th scope="col">Program of Study</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($students as $student): ?>
                                    <tr>
                                        <th scope="row"><?php echo $student['studentID']; ?></th>
                                        <td><?php echo $student['firstName']; ?></td>
                                        <td><?php echo $student['lastName']; ?></td>
                                        <td><?php echo $student['sex']; ?></td>
                                        <td><?php echo $student['programOfStudy']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
