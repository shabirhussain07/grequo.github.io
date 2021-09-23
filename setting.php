<?php
   include('session.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Grequo</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../jQuery/jQuery3.2.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="headerWrapper">
        <div class="container">
            <a class="navbar-brand" href="home.php"> Grequo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-left">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">
                            Home
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span>History</span>
                            <br>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right animate slideIn" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="user_ques.php">Questions</a>
                            <a class="dropdown-item" href="user_answer.php">Answers</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user_notifications.php">
                        <?php
                            $q="SELECT count(*) FROM user_notifications where userid='".$_SESSION['username']."'";
                            $d=mysqli_query($conn,$q);
                            $notif_count=mysqli_fetch_row($d);
                            ?>
                            Notifications<b><i><span style='background-color:grey;color:yellow;'><?php echo"$notif_count[0]";?></span></i></b>

                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index1.html"> 
                            Contact Us
                        </a>           

                </ul>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="../img_avatar.png" alt="logo image"
                                style="width:20px;height:18px;"><?php echo $full_name; ?>
                            <br>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right animate slideIn" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="dashboard.php">Profile</a>
                            <a class="dropdown-item" href="setting.php">Setting</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="logout.php">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div>
        <div align="center">
        <p></p>
           <h4> Your Name: <?php echo $full_name; ?></h4>
            <form action="update_name.php" method="post">
                <b>Change UserName:</b> <input type="text" name="name" placeholder="<?php echo "Name"; ?>"
                    required />
                <button type="submit" value="submit" class="btn btn-danger">Change</button><br><br>
            </form>
            <p></p>
           
            <h4> Old Password: <?php echo "******"; ?></h4>
            <form action="update_password.php" method="post"><b>Enter New Password:</b> <input type="password"
                    name="password" data-type="password" placeholder="<?php echo "password"; ?>" required />
                <button type="submit" value="submit" class="btn btn-danger">Update</button><br><br>
            </form>
            <p></p>
            <h4> Primary Mobile Number : +91-<?php echo $mobile; ?></h4>
            <form action="update_mobile.php" method="post"><b>Enter New Mobile Number:</b> <input type="text" name="mobile"
                    placeholder="<?php echo "mobile number"; ?>" required />
                <button type="submit" value="submit" class="btn btn-danger">Change</button><br><br>
            </form>
        </div>
    </div>
<br>
<b
r>
<br><br>
<br>
    <footer class="page-footer font-small teal pt-6 navbar-white bg-dark text-white" style="width:100%;">
            <div class="container-lebal text-center text-md-center" style='color:yellow;wieght:10%;   font-size:0.13in;'>
                <div class="row">
                    <div class="col-md-6 mt-md-0 mt-6 text-left " style="margin-left:3%;" >
                        <h5 class=" font-weight-bold">Contact Us</h5>
                        <p><h6>Compsoft Technologies</h6>
                            Rajaji Nagar, Bangalore</p>
                    </div>
                    <hr class="clearfix w-60 d-md-none pb-2">
                    <div class="col-md-5 mb-md-0 mb-6 text-right" style="margin-right:2%;">
                        <h5 class=" font-weight-bold">About Us</h5>
                        <p>Optimizing client satisfaction with quality services. Delivering the most efficient and the best solution to our clients to every client leveraging leading technologies & industry best practices.</p>
                    </div>
                </div>
                <div class="footer-copyright text-center py-3">© 2021 Copyright:
                    <a href="https://www.compstechnologies.com" target="_blank">Compsoft Technologies</a> @bangalore
                </div>
            </div>
        </footer>
</body>

</html>
