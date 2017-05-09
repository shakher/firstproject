<!DOCTYPE html>
<html>
<head>
<title>Add  file</title>
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
 $id=$_POST['id'];
$Fname = $_POST['Fname']; 
$Nname = $_POST['Nname'];
$pnum=$_POST['pnum'];
$adrs=$_POST['adrs'];
$Web=$_POST['web'];
$birth=$_POST['birth'];
$uid=$_POST['uid'];

 

//$sql="INSERT INTO information (Name)
$sql="INSERT INTO about VALUES ('$id','$Fname','$Nname','$pnum','$adrs','$Web','$birth','$uid')";

 

if (mysqli_query($con, $sql)){
//echo "Congratulation...Registration successfull!!!!!!!";
  header('location:AddContact.php');

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