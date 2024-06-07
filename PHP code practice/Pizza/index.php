<?php
 
 include('config/db_connect.php');

//write querry for all pizza
$sql = 'SELECT title, ingredients, id from pizzas ORDER BY created_at';

//make query and get the results
$result = mysqli_query($conn, $sql);

//fetch the resulting rows asa an array
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC); 

//free result from memory
mysqli_free_result($result);

//close connection
mysqli_close($conn);

 
?>

<!DOCTYPE html>
<html lang="en">

   
<?php  include("templates/header.php"); ?>

<h4 class=" center grey-text">Pizzas</h4>
<div class="container">

<?php  foreach ($pizzas as $pizza) { ?>

    <div class="col col-sm-6 col-md-3">
        <div class="card z-depth-0">
            <div class="card-content center">
                <h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
                <ul>
                    <?php foreach (explode(',',  $pizza['ingredients']) as $ing) {?>
                        <li><?php echo htmlspecialchars($ing)?></li>
                    <?php }?>

                </ul>
            </div>
            <div class="card-action right-align">
            <a  class="brand-text" href="detail.php ? id=<?php echo $pizza['id']?>" >More info</a>
            </div>
        </div>
    </div>

    <?php }?>

</div>


<?php  include("templates/footer.php"); ?>



</html>