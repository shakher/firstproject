<!DOCTYPE html>
<html>
<head>
<style>
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
  margin-left: 40px;
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
    float:left;
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
</head>

<body background="img.jpg">

<font size="5">
<ul>
  <li><a href="Login_system2.php">Login</a></li>
  <li><a href="logout.php">Logout</a></li>
  <li><a href="RgForm.php">Registration</a></li>
  <li class="home">
    <a href="javascript:void(0)" class="dropbtn">Home</a>
    <div class="home-content">
      <a href="Login_system2.php">Login</a>
      <a href="index.php">Logout</a>
      <a href="RgForm.php">Registration</a>
    </div>
  </li>
</ul>
</font>


<font color="white">

<h1>Online address Book</h1>

</font>
<center>
<font color="green">

<h2>Thank you!!!!!Now you can login:<a href="Login_system2.php">From here</a></h2>


</font>
</center>

<div >
  <img src="register.jpg"height="500px"width="100%">
</div>




</body>
</html>
