





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
    
    <!-- font awesome icon link (for icons) -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index page</title>
   
    
</head>
<body>
   

<style>

body
{
width:100%;
height:auto;
}






/* for watches  */

.w     /* for border */
{
    width:100%;
    height:auto;
    border: 1px solid;
    border-radius: 5px;
    margin-top:20px;
   
}

.watch
{
    background-color: rgb(233, 233, 241);
    width:100%;
    padding: 7px;
    float: left;
    font-size:15px;
}

#img1 img
{
    width:255px;
}

.w1
{
    margin-top: 20px;
}
.h3
{
    text-align: center;
    font-size: 20px;
}
.b
{
background-color: #2f536d;
margin:15px;
padding: 7px;
color: white;
border-radius: 5px;
text-align: center;
text-decoration: none;
}

#d4
{
    margin-top: 20px;
}
.ma
{
    margin-bottom: 20px;
}



#log
{
    float: left;
    width: 80px;
    background-color: rgb(180, 196, 206);
    color: white;
    width: 59px;
    height:30px;
    padding: 0px;
    text-align: center;
    border-radius: 5px;
   
    margin-bottom: 15px;
}

#forgot
{
    margin-left: -60px;
}


#b:hover
{
    cursor:pointer;
    background-color: #163346;
}




/* for footer */

#d12
{
    background-color: rgb(78, 71, 71);
    display: flex;
    justify-content: space-around;
    color: white;
    height: 78px;
    padding: 2px 5px 5px 5px;
    
}
.d13
{
    padding-top: 10px;
}
.d
{
    margin-top: 10px;
}

.small
{
    color: white;
    font-size: 13px;
}
.small:hover
{
    color:white;
    text-decoration: none;
}









/*for watch icon   */

#ic
{
    width:25px;
    position:absolute;
    margin-top:-24px;
    margin-left:52px;
}
    </style>




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
    

            <!--for watches(body)-->
            <div id="d4">
                    <div class="col-sm-4 ma">
                        <div id="d5" class="w" onclick="alert('Please register your account🙂 \n if you are already registerd🎉   \n           please login 🤩')">
                            <div  class="watch">Watch 1</div>
                            <div  class="col-sm-12 w1" id="img1">
                                <a href="#"><img id="im" src="https://cdn.shopify.com/s/files/1/1245/9327/products/97N101_Bulova_Little_Switzerland_large.png?v=1571439090" class="container-fluid img-responsive"></a>
                            </div>
                            <h3 class="h3">Price:1400/-</h3>
                            <a href="#"><div class="b" id="b" >Order Now!</div></a>
                        </div>
                    </div>
                   <div class="col-sm-4 ma">
                        <div id="d6" class="w" onclick="alert('Please register your account🙂 \n if you are already registerd🎉   \n           please login 🤩')">
                            <div  class="watch">Watch 2</div>
                            <div  class="col-sm-12 w1">
                                <a href="#"><img id="im" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSnIr546AxrERemq4Qq91KOgu7o17KROvDAFA&usqp=CAU"  class="container-fluid img-responsive"></a>
                            </div>
                            <h3 class="h3">Price:1600/-</h3>
                            <a href="#"><div class="b" id="b"  >Order Now!</div></a>
                        </div>
                    </div>
                    <div class="col-sm-4 ma">
                        <div id="d7" class="w" onclick="alert('Please register your account🙂 \n if you are already registerd🎉   \n           please login 🤩')">
                            <div  class="watch">Watch 3</div>
                            <div  class="col-sm-12 w1">
                                <a href="#"><img  id="im" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRSxjPnYdHoM5IGP8F2k3OtXcIYdyvbEDvXoQ&usqp=CAU" alt="image"  class="container-fluid img-responsive"></a>
                            </div>
                            <h3 class="h3">Price:1850/-</h3>
                            <a href="#"><div class="b" id="b"  >Order Now!</div></a> 
                        </div>
                    </div>
                    <div class="col-sm-4 ma">
                        <div id="d8" class=" w" onclick="alert('Please register your account🙂 \n if you are already registerd🎉   \n           please login 🤩')">
                            <div  class="watch">Watch 4</div>
                            <div  class="col-sm-12 w1"> 
                                <a href="#"><img id="im" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGA3QRPYgz6tjOQyGDYejvEYHs5CA-WZCSQg&usqp=CAU"  class="container-fluid img-responsive"></a>
                            </div>
                            <h3 class="h3">Price:1210/-</h3> 
                            <a href="#"> <div class="b" id="b" >Order Now!</div> </a>
                        </div>
                    </div>
                    <div class="col-sm-4 ma">
                        <div id="d9" class=" w" onclick="alert('Please register your account🙂 \n if you are already registerd🎉   \n           please login 🤩')">
                            <div  class="watch">Watch 5</div>
                            <div  class="col-sm-12 w1">
                            <a href="#"><img id="im" src="data:image/jpeg;base64,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"  class="container-fluid img-responsive"></a>
                            </div>
                            <h3 class="h3">Price:1500/-</h3>
                            <a href="#"> <div class="b" id="b" >Order Now!</div> </a>
                        </div>
                    </div>
                    <div class="col-sm-4 ma">
                        <div id="d10" class=" w" onclick="alert('Please register your account🙂 \n if you are already registerd🎉   \n           please login 🤩')">
                            <div  class="watch">Watch 6</div>
                            <div  class="col-sm-12 w1">
                                <a href="#"><img id="im" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOLFFCS7L2feWkfJ9FxqVbWUUXZ4u0zAFBNg&usqp=CAU" alt="image"  class="container-fluid img-responsive"></a>
                            </div>
                            <h3 class="h3">Price:1000/-</h3>
                            <a href="#"> <div class="b" id="b"  >Order Now!</div> </a>
                        </div>
                    </div>  
                        
            </div>
            <br>


       <!--for footer-->
            <div id="d11">
                <div id="d12">
                    <div class="col-xs-12 d13">
                        <big>Information</big><br>
                        <div class="cls">
                            <a href="4.about us.php" class="small"><small >About Us</small></a><br>
                            <a href="5.contact us.php" class="small"><small>Contact Us</small></a>
                        </div>
                    </div>
            
                    <div class="col-xs-12 d13">
                        <big>My Account</big><br>
                        <div class="cls">
                            <a href="2.login.php" class="small" id="footer_login"><small>Login</small></a><br>
                            <a href="3.sign up.php" class="small"><small>Signup</small></a>
                        </div>
                    </div>
            
                    <div class="col-xs-12 d13">
                        <big>Contact Us</big><br>
                        <div class="cls">
                        <small>Contact +91-123-000000</small><br>
                        </div>
                    </div>
                </div>
            </div>
    </div>

   
  

</body>
</html>