<?php

    // $conn = mysqli_connect("localhost", "root", "", "super_market");

    // if (!$conn) {
    //     die("Connection failed: " . mysqli_connect_error());
    // }

    $sql = "SELECT * FROM student_marks";

    $query = mysqli_query($conn, $sql);

    if (!$query) {
        die(mysqli_error($conn));
    }

    // Create a new file pointer (output buffer)
    $output = fopen('php://output', 'w');

    // Set header information for the CSV file
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="Student_Results.csv"');

    // Write header row
    fputcsv($output, ['S/N', 'Student email', 'Program','Marks']);

    $count = 1;
    while ($row = mysqli_fetch_assoc($query)) {
        $count++;
        // Write data rows
        fputcsv($output, [
            $count - 1,
            $row['name'],
            $row['category'],
            $row['quantity'],
            $row['unit'],
            $row['price']
        ]);
    }

    // Clean up
    mysqli_close($conn);
    fclose($output);
    exit();
?>