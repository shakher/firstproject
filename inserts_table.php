<!DOCTYPE html>
<html>
<head>
<title>Emni</title>
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
$name = $_POST['Name']; 
$id = $_POST['ID'];
$email=$_POST['Email'];

 

$sql="INSERT INTO information VALUES ('$name','$id','$email')";

 

if (mysqli_query($con, $sql)){
echo "1 record added";
  

  }

else
{

	echo "Error: " . mysql_error();
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