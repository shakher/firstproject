 
<?php

session_start();
if(isset($_SESSION['ID']))
{
  
  header('Location: home.php');
}
$server = "localhost";
$username = "root";
$pswd = "";
$dbName="project2";
$con = mysqli_connect($server   ,$username,$pswd, $dbName) or die();

if($_POST){

$user = $_POST['uname'];
$pass = $_POST['psw'];

if ($con) {
     $sql = "SELECT * FROM register WHERE Username='$user' and Password='$pass'";
     $res = mysqli_query($con, $sql);

     if(mysqli_num_rows($res)==1){
        $result=mysqli_fetch_assoc($res);

        $_SESSION['ID'] = $result['ID'];

        header('Location: connection2.php');
     }
     else {
    //echo "User not found!!";
      header('location: Login_system2.php');
}
}
else {
    echo "Database not connect";
}
//$db = mysqli_select_db($con,$dbName) or die(mysql_error());

}

?>


<!DOCTYPE html>
<html>
<head>


<title>Log In</title>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<script   href="bootstrap.min.js"></script>
<!--<style>
form {
    border: 3px solid #f1f1f1;
}



/*input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 4px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.img {
    width: 20%;
    border-radius: 20%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

Change styles for span and cancel button on extra small screens 
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 70%;
    }
}
</style>

*/ -->


<style type="text/css">

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: right;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 22px 22px;
    text-decoration: none;
}

li a:hover, .home:hover .dropbtn {
    background-color: red;
}

li.home {
    display: inline-block;
}

.home-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.home-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.home-content a:hover {background-color: #f1f1f1}

.home:hover .home-content {
    display: block;
}











 form{
  width: 50%;
  margin-left: 300px;
 }

 button {
    background-color: #4CAF50;
    color: white;
    padding: 4px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}


span.psw {
    float: right;
    padding-top: 16px;
}

Change styles for span and cancel button on extra small screens 
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 70%;
    }
}

.container {
    padding: 16px;
}

</style>

</head>




<body background="img.jpg" >



<font size="5">
<ul>
  <li><a href="Login_system2.php">Login</a></li>
  <li><a href="logout.php">Logout</a></li>
  <li><a href="#news">Registration</a></li>
  <li class="home">
    <a href="index.php" class="dropbtn">Home</a>
    <div class="home-content">
      <a href="Login_system2.php">Login</a>
      <a href="#">Logout</a>
      <a href="#">Registration</a>
    </div>
  </li>
</ul>
</font>

<font color="white">
<h1>Online address Book</h1>
</font>










<center>
  <div class="imgcontainer">

    <img src="login.jpg"width="200px"height="200px">
  </div>
</center>

    <center>
<font color="brown">
<h2>Login Form</h2>
</brown>
</center>


<div class="container">

<form action="login_system2.php" method="post">
  

   
    <label><b>Username</b></label>
    <input type="text" class="form-control" placeholder="Enter Username" name="uname" required>

    <label><b>Password</b></label>
    <input type="password" class="form-control" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
    <input type="checkbox" checked="checked"> Remember me
   

   
    <button type="button" class="cancelbtn">Cancel</button>
    <font color="white">
    
    <span class="psw">Forgot <a href="#">password?</a></span>
  </font>
  </div>
</form>
</div>









</body>
</html>
