<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <link rel="shortcut icon"href="icon.png"/>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: black;
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

<body bgcolor="white">

<div style="position: absolute; left: 0px; top:-8px; height: 100px; width: 100px; padding: 1em;">

<div id="wrapper">
<header> <!-- header-->
  
  <div class="header">
    <div class="center">
<a href=http://www.thetailorshopinc.com/>
    <img src="im2.jpeg"height="70px"width="70px"></a>
      <div class="header-toll-free">


        

      
      </div>
    </div>
  </div>

</div>
</div> 




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


<div style="position: absolute; left: 980px; top:200px; height: 100px; width: 230px; padding: 1em;">
 
<table width="100%"align="center"cellpadding="20"border="0" bgcolor="skyblue">
	<tr>
		<td>

      <div class="container">
        <h3>Login from here:</h3> 

      <form action="Login_system2.php" method="post">

      <label><b>Username</b></label><input type="text" class="form-control" placeholder="Enter Username" name="uname" required>

    <label><b>Password</b></label>
    <input type="password" class="form-control" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
    <input type="checkbox" checked="checked"> Remember me
   

   
    <button type="button" class="cancelbtn">Cancel</button>
    
    <span class="psw">Forgot <a href="#">password?</a></span>


</form>


</div>
<td>
	</tr>
</table>

</div>

<div style="position:absolute;left:13px;top:180px;height:80px;width:80px;
padding:1em;">
<table bgcolor="white">
  <tr>
    <td>
      <img src="img10.png" width="840px";height="440px">
    </img>
    <h3>Convenient Online Address Book</h3>
    <p>An online address book keeps your business connected 
      to critical contact lists. With an online address book, 
      your company can create, share, and store external contacts 
      and internal directories with just an Internet connection.</p>
      <p>->Access your address book information online-anywhere, anytime.<br>
    ->Synchronize with your Microsoft Outlook address book.<br>
    ->Import and export contact lists and other address books.<br>
    Organize your address book into contact categories or groups.</p>
    </td>
  </tr>
  </table>
</div>


<div style="position: absolute; left:-10px; top:810px; height:5px; width: 1350px; padding: 1em;">
<table width="100%"align="center" cellpadding="10"bgcolor="gray">
<td height="20"colspan="2"bgcolor="gray">
</td>
<tr>
<td>

<div style="position: absolute; left:1050px; top:78px; height:30px; width: 305px; padding: 1em;">
<font color="white">

<p>copyright@Online address Book-2017 <br>
Developed by Shakher Debnath<br>
Email Us:Shakherdebnath@yahoo.com
</p>
</font>
</div>





<h1>Contact</h1>
<a href="">RAJSHAHI,BANGLADESH</a><br>
<a href="">MB:01937292753</a><br>
Email:Shakherdebnath@yahoo.com
</p>
</td>
</tr>
</table>
</div>


</body>
</html>
