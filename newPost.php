<?php 
include_once "dbConnection.php";
 session_start();
     if(isset($_POST['update_info']))
     {
     	$website=$_POST['website'];
        $fname=$_POST['fname'];
        $nname=$_POST['nname'];
        $phn=$_POST['phn'];
        $address=$_POST['address'];
        $website=$_POST['website'];
        $birth=$_POST['birth'];
        $query="UPDATE about SET FullName='$fname',NickName='$nname',MultiplePhnNo='$phn',
        Address='$address',Website='$website',DateOfBirth='$birth' where website='$website'";
        $query_result=mysqli_query($con,$query);
        if($query_result)
        {
            
            header('location:update.php');

        }
        else  
            echo "Failed";
     }

    //  if(isset($_POST['update']))
		  // {
		  //  echo  $website=$_POST['web'];
		  //   $query="SELECT * from about where Website='$website'";
		  //   $query_result=mysqli_query($con,$query);
		  //   $row=mysqli_num_rows($query_result);
		  //   if($row==0)
		  //   {
		  //      //echo"sorry";
		  //    header('Location:update.php');
		  //   }
		  //   else {
    //             //echo"sorry";
		  //   	$_SESSION['website']=$website;
		  //       header('Location:updateme.php');
		  //   }
    //      }
?>