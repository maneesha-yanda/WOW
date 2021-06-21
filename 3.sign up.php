
<!DOCTYPE html>
<html lang="en">
<head>
     <!--adding bootstrap files-->
            <!--bootstrap css file-->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <!--jQuery library-->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <!--Latest compiled and minified JavaScript-->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--css link     (we added javascript link at the last)-->    
    <link rel="stylesheet" href="3.sign up.css"> 
    <!-- font awesome icon link (for icons) -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up page</title>
   

    
</head>
<body>




  <div id="main">  
            <!--for navbar-->
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <div id="d2" class="navbar-brand">WOW<img id="ic" src="https://image.flaticon.com/icons/png/128/4305/4305522.png"></div>
                    </div>
                    <div class="collapse navbar-collapse" id="mynavbar">
                        <ul class="nav navbar-nav navbar-right">
                        <li><a href="3.sign up.php"><i class="fa fa-user">&nbsp;</i> Sign up</a></li> 
                            <li><a href="2.login.php" id="login"><i class="fa fa-sign-in">&nbsp;</i>Login</a></li> 
                            <li><a href="4.about us.php"><i class="fa fa-tasks">&nbsp;</i>About Us</a></li> 
                            <li><a href="5.contact us.php"><i class="fa fa-mobile">&nbsp;</i>Contact Us</a></li> 
                        </ul>
                    

                    </div>
                </div>
            </nav>


            <!-- for sign up-->
           <div id="sign1" class="container">
               <div class="im">
                    <div id="sign2" class="col-sm-6">
                        <img src="https://i.pinimg.com/originals/3a/1b/fa/3a1bfa3739b49313fe97bbbd438cf525.jpg" class="img-responsive">
                    </div>
                </div>
                
                    <div class="col-sm-6" id="sign">
                        <div id="sign3">
                            <form class="col-xs-10 form-group"  onsubmit="return validate()" action="submit.php" method="post">
                                <div id="sign-up">SIGN UP</div>

                                <?php 
                                    if (isset($_GET['message'])) { ?>
                                   <p class="message"><?php echo $_GET['message']; ?> </p>
                                <?php }  ?>
                             

                                <input  placeholder="Name" class="form-control"  name="name" value="" type="text"  id="name" autocomplete="off" required>
                                <input  placeholder="Email" class="form-control"  name="email" value="" type="email" id="email" autocomplete="off" required> 
                                <input  placeholder="Password" class="form-control" name="password"  value=""  type="password" autocomplete="off" required>
                                <input  placeholder="Contact" class="form-control" name="contact" value="" type="text" id="contact" autocomplete="off" required>
                                <input  placeholder="City" class="form-control" id="city" name="city" value="" autocomplete="off" required>
                                <input  placeholder="Address" class="form-control"  id="address" name="address" value="" autocomplete="off" required><br>
                                <input id="sign-button" type="submit"  value="Register">
                            </form>
                            </div>
                        </div>
            </div>
           



<script src="3.sign up.js"></script>

</body>
</html>



