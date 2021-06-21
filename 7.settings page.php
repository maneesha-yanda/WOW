<?php 

session_start();
?>


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
    <link rel="stylesheet" href="7.settings page.css"> 
    <!-- font awesome icon link (for icons) -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>settings page</title>
   
    <style>
body{
    text-align: center;   
}


#change1
{
    float: left;
    margin-top: 20px;
    margin-bottom: 10px;
    font-size:20px;
    font-weight:bold;
}


@media (min-width:200px)
{
    #change3 
    {
        width: 300px;
       
    }
}

@media (min-width:700px)
{
    #change3 
    {
        width: 400px;
      
    }
}
#change3 input
{
    margin-bottom: 10px;
}
#change-button
{
    background-color: #2f536d;

    color:white;
    width: 60px;
    height: 30px;
    border-radius: 12px;
    margin-top: -20px;
    text-align: center;
    padding-top: 5px;
    float:right;
    cursor: pointer;
}

#change-button:hover
{
    background-color:#163346;
}
#ic
{
    width:25px;
    position:absolute;
    margin-top:-24px;
    margin-left:52px;
}

</style>
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
                        <li><a href="#"><i class="fa fa-shopping-cart">&nbsp;</i> Cart</a></li> 
                            <li><a href="#" id="login"><i class="fa fa-user">&nbsp;</i> Settings</a></li> 
                          <li><a href="#"><i class="fa fa-sign-out">&nbsp;</i> Logout</a></li> 
                            
                        </ul>
                    

                    </div>
                </div>
            </nav>
           




            <!--change password-->

            <div id="change">
                <div id="change3" class="container">
                <form class="change-group">
                    <div id="change1">Change Password</div>
                    <input type="text" placeholder="Old Password" class="form-control">
                    <input type="text" placeholder="New Password" class="form-control">
                    <input type="text" placeholder="Re-type New Password" class="form-control"><br>
                   <a href="6.home page.php"> <div id="change-button">Change</div>
                </form>
                </div>
            </div>