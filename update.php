<?php
include_once "dbConnection.php";
session_start();

//if(!isset($_SESSION['ID'])){
    //header('Location: Login_system2.php');
//}



if(  $_POST){


    $fullname = $_POST['Fname'];
    $nickname = $_POST['Nname'];
    $phonenumber = $_POST['pnum'];
    $address = $_POST['adrs'];
    $email = $_POST['web'];
    $dob = $_POST['birth'];

    $id = $_POST['idofcontact'];
    
   global $con;

    $query = "UPDATE about SET 
    FullName='$fullname',
    NickName='$nickname',
    MultiplePhnNo='$phonenumber',
    Address='$address',
    Website='$email',
    DateOfBirth='$dob' WHERE id='$id'";

    $chk= mysqli_query($con, $query);
    if($chk){
        printf('Hoiche');
    }

}

?>

<!DOCTYPE html>

<html>

	<head>
		<title>Add Contacts :</title>
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
    margin: 4px 0;
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

<script type="text/javascript">

function update(id){
    
    var row = document.getElementById(id);

    var cells = row.getElementsByTagName("td");
   document.getElementById("fname").value =  cells[0].innerText;
    document.getElementById("nname").value =  cells[1].innerText;
     document.getElementById("phonen").value =  cells[2].innerText;
      document.getElementById("addr").value =  cells[3].innerText;
       document.getElementById("email").value =  cells[4].innerText;
        document.getElementById("dob").value =  cells[5].innerText;
        document.getElementById("idofcontact").value =  id;


}

</script>


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






         
            <font color="black">
		<table border="1px";align="center"; bgcolor="green"cellpadding="20px";>
     				    <thead>
                         <tr>
                            <th>Name</th>
                            <th>Nickname</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Website</th>
                            <th>Date_of_birth</th>
                            <th>ID</th>
                            <th>Option</th>
                         </tr>
                        </thead>
     				    <tbody>
         <?php

           $id = $_SESSION['ID'];
         	$sql = "SELECT * FROM about WHERE user_id='$id'";

     		$res = mysqli_query($con, $sql);

     		while($row=mysqli_fetch_assoc($res)){
     			printf(" 
     				    <tr id='%s'>
     				    	<td style='border:1px solid red'  >%s</td>
     				    	<td style='border:1px solid red'  >%s</td>
                            <td style='border:1px solid red'  >%s</td>
                            <td style='border:1px solid red'  >%s</td>
                            <td style='border:1px solid red'  >%s</td>
                            <td style='border:1px solid red'  >%s</td>
                            <td style='border:1px solid red'  >%s</td>
                            <td style='border:1px solid red'  ><button onclick=update(\"%s\")>Update</button></td>
     				    </tr>
     				    
     				",$row['id'],  $row['FullName'],   $row['NickName'],  $row['MultiplePhnNo'], 
                
                    $row['Address'],  $row['Website'],  $row['DateOfBirth'], $row['user_id'], $row['id']); 
                
     		}


         ?>

         </tbody>


    </table>

    <div position="absolute"left="19px">
    <font color="white">
    <a href="add.php">AddContact</a>
    <a href="delete.php">Delete</a>
     
    </font>
</div>

 <div id="print"></div>
<form action="update.php" method="post">


  <div class="imgcontainer">

    <img src=""width="10px"height="10px">
  </div>

   
    <label><b>FullName</b></label>
    <input type="text" class="form-control" placeholder="Enter Full name"
     name="Fname" id="fname" required>

    <label><b>NickName</b></label>
    <input type="text" class="form-control" placeholder="Enter nick name" 
    name="Nname" id="nname" required>
        
    <label><b>MultiplePhnNo</b></label>
    <input type="num" class="form-control" placeholder="Enter mobile number"
    name="pnum"  id="phonen" required>

    <label><b>Address</b></label>
    <input type="text" class="form-control" placeholder="Enter Password" 
    name="adrs" id="addr" required>
        <label><b>Website</b></label>
    <input type="text" class="form-control" placeholder="Enter website" 
    name="web" id="email" required>

        <label><b>DateOfBirth</b></label>
    <input type="num" class="form-control" placeholder="Enter birthdate" 
    name="birth" id="dob" required>
         
    <input type="hidden" name="idofcontact" id="idofcontact">

    <button type="submit" id="updatevalue">ADD</button>
  </form>

</font>


<?php 
  
?>

 


</body>

</html>