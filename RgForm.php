<!DOCTYPE html>
<html>
<head>


<title>Registration form:</title>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<script   href="bootstrap.min.js"></script>



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
<font color="brown">
<h2>Registration Form</h2>
</brown>
</center>


<div class="container">

<form action="RgDb.php" method="post">

  
   
    <label><b>FullName</b></label>
    <input type="text" class="form-control" placeholder="Enter Full name"
     name="Fname" required>

    <label><b>Username</b></label>
    <input type="text" class="form-control" placeholder="enter Username" 
    name="Uname" required>
        
    <label><b>Password</b></label>
    <input type="num" class="form-control" placeholder="Enter password"
    name="psw" required>

    <label><b>Address</b></label>
    <input type="text" class="form-control" placeholder="Enter address" 
    name="adrs" required>
        <label><b>Email</b></label>
    <input type="text" class="form-control" placeholder="Enter email addres" 
    name="mail" required>
        <label><b>DateOfBirth</b></label>
    <input type="num" class="form-control" placeholder="Enter birthdate" 
    name="birth" required>
        
    <button type="submit">Submit</button>
  
   

   
    <button type="button" class="cancelbtn">Cancel</button>
    

  </div>
</form>
</div>









</body>
</html>
