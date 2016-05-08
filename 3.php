<?php
session_start();
	if(isset($_SESSION['user']))
	{
	$conn=mysqli_connect("localhost","root","","faculty");
			$i=$_GET['id'];
			$m=$_GET['mid'];
			$s=$_GET['subj'];
			$o=$_GET['old'];
			$n=$_GET['new'];
	
	$query="update student set $s=$n where sid='$i' and mid='$m'";
	$result=mysqli_query($conn,$query) or die("not inserted");
	if ($conn->query($query) === TRUE){
		$sql = "DELETE FROM report WHERE subj='$s'";
		$result=mysqli_query($conn,$sql) or die("happy haaa");
		if ($conn->query($sql) === TRUE){
				echo '<script type="text/javascript">
               window.location = "reports.php";
			   alert("marks updated");
               </script>';
		}
		else{
			echo '<script type="text/javascript">
               window.location = "reports.php";
			   alert("noot deleted");
               </script>';
			
		}
	}
	else{
		echo '<script type="text/javascript">
               window.location = "reports.php";
			   alert("no operation");
               </script>';
	}
	}
	else {
echo '<script type="text/javascript">
               window.location = "faclog.html";
			   alert("invalid details ");
               </script>'; 
}

?>
