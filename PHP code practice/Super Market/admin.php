<?php 
    include 'templets/base.php';
?>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="admin.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="service.php">Feedback</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="comment.php">Comments</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="question.php">Questions</a>
                        </li>
                        <button type='button' class='btn btn-info' ><a href="logout.php">Logout</a></button>
                    </ul>
                  
                </div>
            <hr>
        </div>

    </section>
    <style>
        .conteiner{
            width: 100%;
            height: auto;

        }
        
        .comment{
           
            background-color: aqua;
            margin: 50px;
            border-style: solid;
        }
      
        .ditail{
            width: 100%;
            height: 109vh;
          
            margin-top: -100vh;
        }

        .ditail h1{
            padding-top: 50px;
            font-family: arial;
        }
                
        .sidebar{
            width: 20%;
            position: sticky;
            padding: 40px;
            height: 100vh;
            background-color: aliceblue;
        }
         
        .short-link a{
            display: flex;
            align-items: center;
            flex-wrap: wrap;
        }

        
    </style>
<section class="conteiner">

        <div class="sidebar">
            <div class="short-link">
            
                <a href="admin.php"  class="bi bi-house-fill"> -Home</a><br><hr>
                <a href="product/register-staff.php"  class="bi bi-person-plus-fill">-Register Staff</a><br><hr>
                <a href="product/add-category.php"  class="bi bi-upload"> -New Category</a><br><hr>
            
            </div>
        </div>
    
    <div class="ditail">
        <h1 class="text-center">Welcome, Welcome, Home Adimn</h1>
    
    </div>


</section>

<?php 

if (isset($_SESSION['uid']) && isset($_SESSION["role"] )){
    echo $_SESSION["role"] ;
}

    include 'templets/footer.php';
?>