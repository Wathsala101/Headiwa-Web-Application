<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Forum</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script
        type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Custom Theme files -->
    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!--animate-->
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!--//end-animate-->
</head>

<body>
    <?php include('includes/header.php'); ?>
    <!--- banner ---->
    <div class="banner-3">


        <div class="container">

            <h1 class="wow zoomIn animated animated" data-wow-delay=".5s"
                style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"><b>හෙළදිව - Forum<b></h1>
                <a href="enquiry.php"><button name="search" type="submit" class="searchButton">
                            <i class="fa fa-plus-circle"></i>
                        </button>&nbsp;Add Post&nbsp;</a>
            </div>
    </div>


    <!--- /banner ---->
    <!--- rooms ---->
    <div class="rooms">
        <div class="container">

            <div class="room-bottom">
                <h3></h3>
                <br> </br>
                <html>
                <style>
                    }

                    input[type=text] {

                        width: 1000px;
                        box-sizing: border-box;
                        border: 2px solid #ccc;
                        border-radius: 4px;
                        font-size: 16px;
                        background-color: white;
                        background-image: url('searchicon.png');
                        background-position: 10px 10px;
                        background-repeat: no-repeat;
                        padding: 12px 20px 12px 40px;
                        -webkit-transition: width 0.4s ease-in-out;
                        transition: width 0.4s ease-in-out;
                    }

                    input[type=submit] {

                        display: inline-block;
                        padding: 10px 25px;
                        font-size: 10px;
                        cursor: pointer;
                        text-align: center;
                        text-decoration: none;
                        outline: none;
                        color: #4609d6;
                        background-color: #4609d6;
                        border: none;
                        margin-left: auto;
                        margin-right: auto;


                    }
                </style>

                <body>

                    <div class="wrap">
                        <form action="forum.php" method="post">
                            <div class="search">
                                <input type="text" class="searchTerm" name="valueToSearch" placeholder="සොයන්න">
                                <button name="search" type="submit" class="searchButton">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>


                    <style>
                        @import url(https://fonts.googleapis.com/css?family=Open+Sans);

                        body {
                            background: #f2f2f2;
                            font-family: 'Open Sans', sans-serif;
                        }

                        .search {
                            width: 100%;
                            position: relative;
                            display: flex;
                        }

                        .searchTerm {
                            width: 100%;
                            border: 3px solid #34AD54;
                            border-right: none;
                            padding: 5px;
                            height: 36px;
                            border-radius: 5px 0 0 5px;
                            outline: none;
                            color: #9DBFAF;
                        }

                        .searchTerm:focus {
                            color: #34AD54;
                        }

                        .searchButton {
                            width: 40px;
                            height: 36px;
                            border: 1px solid #34AD54;
                            background: #34AD54;
                            text-align: center;
                            color: #fff;
                            border-radius: 0 5px 5px 0;
                            cursor: pointer;
                            font-size: 20px;
                        }

                        /*Resize the wrap to see the search bar change!*/
                        .wrap {
                            width: 30%;
                            position: absolute;
                            top: 50%;
                            left: 50%;
                            transform: translate(-50%, -50%);
                        }
                    </style>


                   


                    <style>
                        .filter {
                            background: white;
                            border-radius: 5%;
                            border: 1px solid blue;
                            width: 300px;

                        }

                        button:hover {
                            background-color: #FF9933;
                            color: white;
                        }

                        filter:hover {
                            background-color: #FF9933;
                            color: black;
                        }

                        .search {
                            width: 100%;
                            position: relative;
                            display: flex;
                        }

                        .search-field {
                            width: 100%;
                            border: 3px solid #34AD54;
                            border-right: none;
                            padding: 5px;
                            height: 20px;
                            border-radius: 5px 0 0 5px;
                            outline: none;
                            color: #9DBFAF;


                        }

                        .search-btn {
                            width: 30px;
                            height: 36px;
                            border: 1px solid #34AD54;
                            background: #34AD54;
                            text-align: center;
                            color: #fff;
                            border-radius: 0 5px 5px 0;
                            cursor: pointer;
                            font-size: 20px;

                        }
                    </style>






<?php

if (isset($_POST['search'])) {
$searchVal = $_POST['valueToSearch'];
if ($searchVal != '') {
 $sql = "SELECT * from `tblenquiry` WHERE `Topic` LIKE '%$searchVal%' OR `LocationName` LIKE '%$searchVal%'";
} else {
 $sql = "SELECT * from tblenquiry";
}
} else {
$sql = "SELECT * from tblenquiry";
}
                    $query = $dbh->prepare($sql);
                    $query->execute();
                    $results = $query->fetchAll(PDO::FETCH_OBJ);
                    $cnt = 1;
                    if ($query->rowCount() > 0) {
                        foreach ($results as $result) { ?>

                           
                                <div class="rom-btm">
                                    <div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
                                        <img src="admin/pacakgeimages/<?php echo htmlentities($result->forumImage); ?>"
                                            class="img-responsive" alt="">
                                    </div>
                                    <div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
                                        
                                        <h3>
                                            <?php echo htmlentities($result->Topic); ?>
                                        </h3>
                                        <h6>Posted on:
                                            <?php echo htmlentities($result->PostingDate); ?> by
                                            <?php echo htmlentities($result->FullName); ?>
                                        </h6>
                                        <p>Location:
                                            <?php echo htmlentities($result->LocationName); ?>
                                        </p>
                                        
                                        
                                        <br>
                                        <h7><b></b>
                                            <?php echo htmlentities($result->FeedBack); ?>
                                        </h7>
                                        <br>
                                        <br>

                                        <h5><b></b>
                                            <?php echo htmlentities($result->Recommendations); ?>
                                        </h5>

                                        <h6>
                                            <?php echo htmlentities($result->Destinations); ?>
                        </h6>
                                        <br><br>
                                        <div class="selectroom-info animated wow fadeInUp animated" data-wow-duration="1200ms"
                                            data-wow-delay="500ms"
                                            style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp; margin-top: -70px">
                                            
                                           
                                               



                                                <p>
                                                    <?php echo htmlentities($result->UserEmail); ?>
                                                </p>
                                                <p>
                                                    <?php echo htmlentities($result->Description); ?>
                                                </p>


                                           
                                            <div class="clearfix"></div>

                                            <h4>
                                                <?php echo htmlentities($result->Description); ?>
                                            </h4>


                                            <ul>
                                        </div>

                                    </div>
                           



                            <div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
                                <?php if ($_SESSION['like'] == $result->id): ?>

                                    <form action="dislikes.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $result->id; ?>">
                                        <input type="hidden" name="dislikes" value="<?php echo $result->dislikes; ?>">
                                        <button type="submit" class="fa fa-thumbs-down" name="dislike">Dislike&nbsp;
                                            <?php echo htmlentities($result->dislikes); ?>
                                        </button>
                                    </form>

                                <?php else: ?>
                                    <form action="likes.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $result->id; ?>">
                                        <input type="hidden" name="likes" value="<?php echo $result->likes; ?>">
                                        <button type="submit" class="fa fa-thumbs-up" name="like">Like&nbsp;</button>
                                    </form>
                                <?php endif; ?>

                                <p>Likes:
                                    <?php echo htmlentities($result->likes); ?>
                                </p>







                                <br><br>


                            </div>
                            <div class="clearfix"></div>
                    </div>

                <?php }
                    } ?>



        </div>
    </div>
    </div>
    <!--- /rooms ---->

    <!--- /footer-top ---->
    <?php include('includes/footer.php'); ?>
    <!-- signup -->
    <?php include('includes/signup.php'); ?>
    <!-- //signu -->
    <!-- signin -->
    <?php include('includes/signin.php'); ?>
    <!-- //signin -->
    <!-- write us -->
    <?php include('includes/write-us.php'); ?>
    <!-- //write us -->
</body>

</html>