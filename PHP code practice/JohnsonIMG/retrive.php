


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view Img</title>
</head>
<body>
<?php
    $conn = mysqli_connect('localhost', 'root', '', 'uploadimage');

    if (!$conn){
        echo 'Connection Error';
    }

    $sql = "SELECT * FROM image";
    $query = mysqli_query($conn, $sql);
    if (mysqli_num_rows($query) > 0){
        while ($row = mysqli_fetch_assoc($query)){?>
            <img src="uploads/<?=$row['image']?> " >
       <?php }
    } else {
        echo 'data not found';
    }?>
</body>
</html>

