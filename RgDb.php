<!DOCTYPE html>
<html>
<head>
<title>Registration file</title>
</head>

<body>

<?php



if($_POST){
$server = "localhost";
$username = "root";
$pswd = "";
$dbName="project2";
$con = mysqli_connect($server,$username,$pswd,$dbName);
//$con = mysql_connect("mysql.cis.ksu.edu","cis_id","password");

if($con){

$Fname = $_POST['Fname']; 
$Nname = $_POST['Uname'];
$pnum=$_POST['psw'];
$adrs=$_POST['adrs'];
$Web=$_POST['mail'];
$birth=$_POST['birth'];
$id=$_POST['id'];

 

//$sql="INSERT INTO information (Name)
$sql="INSERT INTO `register`(`FullName`, `Username`, `Password`, 
	`Address`, `Email`, `DateOfBirth`, `ID`) 
VALUES ('$Fname','$Nname','$pnum','$adrs','$Web','$birth','$id')" ;

 

if (mysqli_query($con, $sql)){
//echo "Congratulation...Registration successfull!!!!!!!";
  header('location:Register.php');

  }

else
{

	echo "Error: " . mysqli_error($con);
}

mysqli_close($con);
}

else{
	echo "Connection error!!";
}

}

else{
	echo "Not posted!!";
}

?>





</body>

</html>