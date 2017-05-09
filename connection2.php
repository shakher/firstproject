<?php

session_start();

if(!isset($_SESSION['ID'])){
    header('Location: Login_system2.php');
}

?>

<!DOCTYPE html>

<html>

	<head>
		<title>Contacts Details:</title>
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


</style>


	</head>

	<body background="img.jpg">
  <font size="3">
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
            <font color="White">
		<table border="5px";align="center"; bgcolor="green"cellpadding="30px";>
     				    <thead>
     				     <tr>
     				     	<th>Name</th>
                            <th>Nickname</th>
     				     	<th>Phone</th>
                            <th>Address</th>
                            <th>Website</th>
                            <th>Date_of_birth</th>
     				     </tr>
     				    </thead>
     				    <tbody>
         <?php

         $server = "localhost";
		$username = "root";
		$pswd = "";
		$dbName="project2";
		$con = mysqli_connect($server,$username,$pswd, $dbName) or die();
         $id = $_SESSION['ID'];

         	$sql = "SELECT * FROM about WHERE user_id='$id'";

     		$res = mysqli_query($con, $sql);

     		while($row=mysqli_fetch_assoc($res)){
     			printf(" 
     				    <tr>
     				    	<td style='border:1px solid red'>%s</td>
     				    	<td style='border:1px solid red'>%s</td>
                            <td style='border:1px solid red'>%s</td>
                            <td style='border:1px solid red'>%s</td>
                            <td style='border:1px solid red'>%s</td>
                            <td style='border:1px solid red'>%s</td>
     				    </tr>
     				    
     				", $row['FullName'],$row['NickName'],$row['MultiplePhnNo'],
                
                    $row['Address'],$row['Website'],$row['DateOfBirth']); 
                
     		}


         ?>

         </tbody>


    </table>
<font color="white">
    <div position="absolute"left="19px">
    
    <a href="AddContact.php">AddContact</a>
    <a href="update.php">Update</a>
    <a href="deletecontact.php">Delete</a>
    <a href="export.php">record</a>
    </font>
</div>

</font>

</center>


</body>

</html>