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
    <link rel="stylesheet" href="2.login.css"> 
    <!-- font awesome icon link (for icons) -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart page</title>
</head>

<style>
    body
    {
        text-align:center;
    }
#msg1 
{
margin-top:50px;
font-size:15px
}

#msg2
{
    font-size:16px;
}


#ic
{
    width:25px;
    position:absolute;
    margin-top:-24px;
    margin-left:52px;
}
</style>
<body>

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
        
                            <li><a href="7.settings page.html" id="login"><i class="fa fa-user">&nbsp;</i> Settings</a></li> 
                            <li><a href="#"><i class="fa fa-sign-out">&nbsp;</i> Logout</a></li> 
                            
                        </ul>
                    

                    </div>
                </div>
            </nav>


            <div id="msg1">
                Thank you for ordering from WOW🤩.THe order shall be delivered to you shortly.
                <hr>
           </div>

           <div id="msg2">
               Order some more watches <a href="6.home page.php">here</a>
          </div>
    
</body>