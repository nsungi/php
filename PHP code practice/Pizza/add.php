
<?php
$title = $email = $ingredients = '';
$errors = array('email' => '', 'title' => '', 'ingredients' => '');

if(isset($_POST['submit'])){
    //echo htmlspecialchars($_POST['email']);
    //echo htmlspecialchars($_POST['title']);
    //echo htmlspecialchars($_POST['ingredients']);

 //check email address
if (empty($_POST['email'])){
    $errors['email'] = 'An email address is required <br/>';
}
else {
    #echo htmlspecialchars($_POST['email']);
    $email = $_POST['email'];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['title'] =  'the email address is invalid <br/>';
}

 //check title
 if (empty($_POST['title'])){
    $errors['title'] = 'the title is required <br/>';
}
else {
   $title = $_POST['title'];
   if (!preg_match('/^[a-zA-Z\s]+$/', $title)){
    $errors['title'] =  'title must be letters and spaces only <br/>';
   }
    }

}

 //check ingredients
 if (empty($_POST['ingredients'])){
    $errors['ingredients'] =  'At least one ingredient is required <br/>';
}
else {
    echo htmlspecialchars($_POST['ingredients']);
    $ingredients = $_POST['ingredients'];
    if (!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
       $errors['ingredients'] =  'ingredients must be a comma separated <br/>';
    }
}
// error checking and redirect

if (array_filter($errors)){
    //echo 'erros inthe form';
}
else {
    $conn = mysqli_connect ('localhost', 'hanson', 'hanson123', 'mzb_pizza');
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $ingredients = mysqli_real_escape_string($conn, $_POST['ingrdients']);

//create  sql
$sql = "INSERT INTO pizzas ( title, email, ingredients) VALUES ( '$title', '$email', '$ingredients')";

//save to db and check

if (mysqli_query($conn, $sql)) {
    //success

    header('location: index.php');
}
else {
    //error
    echo 'query error: ' . mysqli_error($conn);
    }

  }

}
?>

<!DOCTYPE html>
<html lang="en">

   
<?php  include("templates/header.php"); ?>

<section class="container grey-text">
    <h4 class="center">Add a pizza</h4>
    <form class ="white" action="add.php" method="POST">
        <label for="email">Your email:</label>
        <input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>">
        <div class="red-text"><?php echo $errors['email'] ?></div>
        <label>Pizza title</label>
        <input type="text" name="title" value="<?php echo htmlspecialchars($title) ?>">
        <div class="red-text"><?php echo $errors['title'] ?></div>
        <label>Ingredients (comma separated):</label>
        <input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients) ?>">
        <div class="red-text"><?php echo $errors['ingredients'] ?></div>
        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn z-depth-0">
        </div>
    </form>

</section>

<?php  include("templates/footer.php"); ?>



</html>