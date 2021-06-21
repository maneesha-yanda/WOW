
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
    <title>login page</title>
   
    <style>
        .bg-modal
{
    width:100%;
    height:100%;
    background-color:rgba(0,0,0,0.6);
    position:absolute;
    top:0;
    left: 0;
    display: flex;
    justify-content: center;
   position:fixed;
   
}

.modal-content
{
    width:450px;
    height:300px;
    background-color: white;
   margin-top: 160px;
   text-align: center;
  position: relative;
  border-radius: 15px;
}

#user1
{
    width: 60px;
    margin-top: 10px;
    margin-bottom:10px ;
    margin-left: -25px;
    
}

#in1
{
    width:50%;
    height: 30px;
    margin-left: 100px;
    border-color:blue;
    margin-bottom: 15px;
}

#reg
{
    margin-left:-30px;
    margin-bottom:15px;
  
}
#reg1
{
    text-decoration: none;
}
#lb
{
   background-color: rgb(17, 70, 117);
   color: white;
   padding: 5px;
   border-radius: 15px;
   width: 50px;
   margin-left: 280px;
}

#lb:hover{
   
   background-color:  #173e57;
    color:rgb(253, 249, 249);
    cursor: pointer;

}
#forgot
{
    margin-left: -120px;
    text-decoration: none;
    color: rgb(17, 70, 117);
   
   
  
}

/*@media (max-width:200px)
{
    #reg
    {
        margin-left: 20px;
    }
    #forgot
    {
        margin-left:-40px ;
    }
}    */

.message
{
    background-color: rgb(255, 220, 220);
    color:rgb(170, 90, 90);
    border-radius: 5px;
    height:30px;
    padding-top:4px;
    width:230px;
    margin-left:95px;
    margin-top:-5px;

   
}

.em
{
    position:absolute;
    margin-left:70px;
    padding:0px;
    font-size:20px;
    color:rgb(17, 70, 117);
   
}

.pas
{
    position:absolute;
    margin-left:75px;
    font-size:25px;
    color:rgb(17, 70, 117);
   
}

    </style>
</head>
<body>

   
    <div class="bg-modal">
            <div class="modal-content">
                <img  id="user1" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQBlL7caCL1Diqhjsnqdd4XKWIL-xZfRJWjRKYIzXq3sdTI0alCQVL3H2At3J_D_Xl10fA&usqp=CAU" alt="">
            
              <div id="reg">Dont have an account...? <a href="3.sign up.php" id="reg1">Register</a></div> 
         
           
              <form  method="post" action="6.home page.php">
               
               <?php 



                if (isset($_GET['message'])) { ?>
               <p class="message"><?php echo $_GET['message']; ?> </p>
            <?php }  ?>


            <div>
                  <span class="em"><i class="fa fa-envelope"></i></span><input type="text" placeholder="Email" name="email" value="" class="form-control" id="in1" autocomplete="off" required>
            </div>
            <div>
            <span class="pas"><i class="fa fa-lock"></i></span><input type="password" placeholder="Password" name="password" value="" class="form-control"  id="in1" autocomplete="off" required>
            </div>
                  <input type="submit" value="Login" class="form-control" id="lb" name="submit">
                  <a href="#" id="forgot">Forgot password...?</a>
              </form>
           </div>
       </div>

    
</body>