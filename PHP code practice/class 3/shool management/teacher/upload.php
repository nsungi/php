<?php 

    if (isset($_FILES['excel_file']) && $_FILES['excel_file']['error'] === UPLOAD_ERR_OK) {
        $fileName = $_FILES['excel_file']['name'];
        $fileTmpPath = $_FILES['excel_file']['tmp_name'];

        $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        // Check if the uploaded file has a CSV extension
        if ($fileExtension === 'csv') {
            // Open the CSV file for reading
            if (($handle = fopen($fileTmpPath, 'r')) !== false) {
                // Skip the header row
                fgetcsv($handle);

                // Prepare the update statement
                $updateStmt = mysqli_prepare($conn, "UPDATE product SET quantity = ? WHERE id = ?");

                $updatedRecords = array(); // Array to store the updated records

                while (($data = fgetcsv($handle, 1000, ',')) !== false) {
                    $id = intval($data[2]);
                    $newQuantity = intval($data[4]);

                    // Bind the parameters and execute the update statement
                    mysqli_stmt_bind_param($updateStmt, 'ii', $newQuantity, $id);
                    $updateResult = mysqli_stmt_execute($updateStmt);

                    if (!$updateResult) {
                        die(mysqli_error($conn));
                    } else {
                        // Store the updated record in the array
                        $updatedRecords[] = array('id' => $id, 'newQuantity' => $newQuantity);
                    }
                }

                fclose($handle);

                // Print the updated records
                if (!empty($updatedRecords)) {
                    echo "Updated records:<br>";
                    foreach ($updatedRecords as $record) {
                    // echo "Product ID: " . $record['productId'] . ", New Quantity: " . $record['newQuantity'] . "<br>";
                    }
                }

            header("location:upload.php?message=You Successfull to Update!");

                // Display a success message or redirect to a success page
                // ...
            } else {
                // Handle file read error
                die("Failed to open the CSV file.");
            }
        } else {
            // Handle invalid file extension
            die("Only CSV files are allowed.");
        }
    } else {
        // Handle the file upload error
        die("Failed to upload the file.");
    }
