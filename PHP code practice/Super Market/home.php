<?php 
    include 'templets/base.php';
?>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Feedback</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#staticBackd">Comments</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#staticQuestion">Questions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php"> Logout</a>
                        </li>
                    </ul>
                    
                </div>
            <hr>
        </div>

    </section>
<section class="cont ">

    <style>
        .hom{
            width: 100%;
            height: 900px;
            margin-top: -10px;
            background-image: url("img/sup1.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
                .sect1{
            width: 100%;
            height: 50px;
        }
        .hom h1{
            color: rgb(3, 3, 24);
            font-size: 80px;
            padding-top: 250px;
        }
        .hom p{
            color: rgb(3, 3, 24);
            font-size: 45px;
            padding-left: 370px;
        }

        .list-content{
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            margin-top: 15px;
            grid-row-gap: 16px;
            grid-column-gap: 16px;
            padding-left: 15px;
            padding-right: 15px;
        }

        .pict-list .pict{
            width: 100%;
            border-radius: 3px;
        }

        .pict-list .info{
            align-items: flex-start;
            margin-top: 7px;
        }
        


    </style>


        <div class="hom">
            <div class="logo">
                <h1 class="text-center"><i>Shopping~Center</i></h1>
                <p>Free Delivery we love Customer</p>
            </div>
       
        </div>

        <div class="list-content">
            <div class = "pict-list">
                <img src="img/pamba1.jpg" alt="Wait a moment" class= "pict">
                <div class="info">
                    <p >T-shert za kiume</p>
                    <button style ="background-color: green;"><a href="" class="bi bi-cart-check">$2 Buy</a></button>
                </div>
            </div>

            <div class = "pict-list">
                <img src="img/pamba2.jpg" alt="Wait a moment" class= "pict">
                <div class="info">
                    <p>T-shert za kiume</p>
                    <button style ="background-color: green;"><a href="" class="bi bi-cart-check">$2 Buy</a></button>
                </div>
            </div>


            <div class = "pict-list">
                <img src="img/pamba3.jpg" alt="Wait a moment" class= "pict">
                <div class="info">
                    <p>T-shert za kiume</p>
                    <button style ="background-color: green;"><a href="" class="bi bi-cart-check">$2 Buy</a></button>
                </div>
            </div>


            <div class = "pict-list">
                <img src="img/pamba4.jpg" alt="Wait a moment" class= "pict">
                <div class="info">
                    <p>T-shert za kiume</p>
                    <button style ="background-color: green;"><a href="" class="bi bi-cart-check">$2 Buy</a></button>
                </div>
            </div>


            <div class = "pict-list">
                <img src="img/pamba5.jpg" alt="Wait a moment" class= "pict">
                <div class="info">
                    <p>T-shert za kiume</p>
                    <button style ="background-color: green;"><a href="" class="bi bi-cart-check">$2 Buy</a></button>
                </div>
            </div>


            <div class = "pict-list">
                <img src="img/pamba6.jpg" alt="Wait a moment" class= "pict">
                <div class="info">
                    <p>T-shert za kiume</p>
                    <button style ="background-color: green;"><a href="" class="bi bi-cart-check">$2 Buy</a></button>
                </div>
            </div>


            <div class = "pict-list">
                <img src="img/pamba10.jpg" alt="Wait a moment" class= "pict">
                <div class="info">
                    <p>T-shert za kiume</p>
                    <button style ="background-color: green;"><a href="" class="bi bi-cart-check">$2 Buy</a></button>
                </div>
            </div>


            <div class = "pict-list">
                <img src="img/pamba8.jpg" alt="Wait a moment" class= "pict">
                <div class="info">
                    <p>T-shert za kiume</p>
                    <button style ="background-color: green;"><a href="" class="bi bi-cart-check">$2 Buy</a></button>
                </div>
            </div>


            <div class = "pict-list">
                <img src="img/pamba9.jpg" alt="Wait a moment" class= "pict">
                <div class="info">
                    <p>T-shert za kiume</p>
                    <button style ="background-color: green;"><a href="" class="bi bi-cart-check">$2 Buy</a></button>
                </div>
            </div>

        </div>


<!---- button for questions --->
       <div class="modal-footer">
            <div class="feedb">
                                    <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Feedback
                </button>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">What are you Feedback</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">

                                    <form action="home.php" method="post">
                                        <select name="feedback" id="">
                                            <option value="Great">Great</option>
                                            <option value="Good">Good</option>
                                            <option value="Average">Average</option>
                                            <option value="Bad">Bad</option>
                                        </select>
                                            <p>select the feedback of service</p>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary" name = "fe">Submit</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="commi">
                                        <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackd">
                    Comments
                    </button>

                        <!-- Modal -->
                    <div class="modal fade" id="staticBackd" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdLabel">Welcome for the Comments</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                    <form action="home.php" method="post">
                                        <textarea name="comment" id="" cols="60" rows="10" placeholder="Enter the comments"></textarea>
                                      
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" name = "co">Submit</button>
                                    </div>
                                
                                    </form>
                                </div>

                              
                            </div>
                        </div>
                    </div>
            </div>

            <div class="question">
                                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticQuestion">
                Ask Question
                </button>

                <!-- Modal -->
                <div class="modal fade" id="staticQuestion" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <div class="modal-header">
                                <h5 class="modal-title" id="staticQuestionLabel">Welcome for the Comments</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <div class="modal-body">

                                <form action="home.php" method="post">
                                    <textarea name="question" id="" cols="60" rows="7" placeholder="Enter the Question"></textarea>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" name = "qu">Submit</button>
                                    </div>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

       

<?php 
        if (isset($_SESSION['uid']) && isset($_SESSION['Time'])){

            $uid = $_SESSION['uid'];
            $time = $_SESSION['Time'];
                        
            //feedback form store the data in database
                if(isset($_POST['fe'])){
                    $feedback = $_POST['feedback'];
                  

                    $fql = "INSERT INTO feedback(Tm, content,uid) VALUES ( '$time', '$feedback','$uid')";

                    $fquer = mysqli_query($conn,$fql);

                    if ($fquer){
                            echo "thanks for the feedback";
                        }else{
                            echo "feedback does not reseved";
                        }
                }

            //comment form store the data in database
                if(isset($_POST['co'])){
                    $comment = $_POST['comment'];

                    $cql = "INSERT INTO comments(Tm, content,uid) VALUES ( '$time', '$comment','$uid')";

                    $cquer = mysqli_query($conn,$cql);

                    if ( $cquer){
                            echo "thanks for the comment";
                        }else{
                            echo "feedback does not reseved";
                        }
                }

            //Quesstion from the user
                if(isset($_POST['qu'])){
                    $question = $_POST['question'];
                
                    $aql = "INSERT INTO question(Tm, content, uid) VALUES ( '$time', '$question', '$uid')";

                    $aquer = mysqli_query($conn,$aql);

                    if ($aquer){
                            echo "thanks for the Question";
                        }else{
                            echo "feedback does not reseved";
                        }
                }

            unset($_SESSION['userID']);//cleare the session but it is options

        }else{
            echo 'uid not found';
        }

    // retrive for the name of the user

    include 'templets/footer.php';
?>