<!DOCTYPE html>
<html>
<head>
    <title>Insert Image in MySql using PHP</title>
</head>
<body>
<?php
    $conn = mysqli_connect('localhost', 'root', '', 'uploadimage');
    if (!$conn){
        echo 'connection Failed';
    }
        
    if (isset($_POST['submit'])){
        $file = $_FILES['file'];

        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileType= $_FILES['file']['type'];
        $fileError = $_FILES['file']['error'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg', 'jpeg', 'png', 'pdf');

        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0){
                if ($fileSize < 100000000) {
                    $fileNameNew = uniqid('IMG', true).'.'. $fileActualExt;
                    $fileDestination = 'uploads/'.$fileNameNew;
                    move_uploaded_file($fileTmpName , $fileDestination);
                    //header("location: uploadFile.php?uploadSuccess");
                    //insert data to the database
                    $sql = "INSERT INTO image(image) VALUES ('$fileNameNew')";
                    $quer = mysqli_query($conn, $sql);
                    if ($quer){
                        echo 'Upload succeed';
                    }
                } else {
                    echo ' You  file of the type! is too big';
                }
            } else {
            echo ' there was an error on upload file type!';
            }
        } else {
            echo ' You canot upload the file of the type!';
        }
    }

?>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file" />
    <button type="submit" name = 'submit'>Upload</button>
</form>

</body>
</html>