<?php if ($_SESSION['login']) {
    ?>
    
<?php } ?>
<!--- /top-header ---->

<style>
    .logo {
        height: 50px;
        width: 150px;
    }
</style>
<!--- header ---->
<div class="header">
    <div class="container">
        <div class="nav-left flex-div">
            <img src="images/heladiwa_logo.png" class="logo">
        </div>
        <div class="logo wow fadeInDown animated" data-wow-delay=".5s">

        </div>


        <div class="lock fadeInDown animated" data-wow-delay=".5s">
            <?php if ($_SESSION['login']) {
                ?>
                
                <li class="prof"><a href="mycart01.php"><i style="font-size:24px" class="fa fa-shopping-cart"></i></a></li>
                <li class="prnt"><a href="mycart01.php"><b>My Cart<b></a></li>
                <li class="prnt"><a href="profile.php"><i class="fa fa-profile"></i><b>My Profile<b></a></li>
                <li class="prof"><a href="change-password.php"><i style="font-size:24px" class="fa fa-cog"></i></a></li>
        
              
                <li class="prof"><a href="logout.php"><i style="font-size:24px" class="fa fa-sign-out"></i></a></li>
                
            <?php } else { ?>
                <li class="sigi"><a href="#" data-toggle="modal" data-target="#myModal4"><b><p></p>Sign In<b> | </a>
                </li>

                <li class="sig"><a href="#" data-toggle="modal" data-target="#myModal"><b>Register Here<b></a></li>
                
                <div class="clearfix"></div>
            <?php } ?>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<!--- /header ---->
<!--- footer-btm ---->
<div class="footer-btm wow fadeInLeft animated" data-wow-delay=".5s">
    <div class="container">
        <div class="navigation">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                    <nav class="cl-effect-1">
                        <ul class="nav navbar-nav">
                            <li><a href="aswanna.php"><b>Agrimentor<b></a></li>
                          
                            <li><a href="pack01.php"><b>MarketPlace<b></a></li>
                            <li><a href="forum.php"><b>Forum<b> </a></li>
                            <li><a href="terms.php"><b>Terms and Conditions<b> </a></li>
                           

                            <?php if ($_SESSION['login']) {
                                ?>
                               
                               
                            <?php } else { ?>
                                


                            <?php } ?>
                            <div class="clearfix"></div>

                        </ul>
                    </nav>
                </div><!-- /.navbar-collapse -->
            </nav>
        </div>

        <div class="clearfix"></div>
    </div>
</div>

<style>
    .eterprise-btn {
        margin-left: 10px;
        width: 150px;
        height: 40px;
        background-color: white;
        color: #4A8EFF;
        border: 2px solid #4A8EFF;
        border-radius: 5px;

    }

    .eterprise-btn:hover {
        color: white;
        background-color: #4A8EFF;
        border: 2px solid #4A8EFF;

    }
</style>