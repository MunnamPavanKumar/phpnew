<?php 
	session_start();
	
			$conn=mysqli_connect("localhost","root","","faculty");
			$i=$_GET['id'];
			$m=$_GET['mid'];
			$s=$_GET['subj'];
			$o=$_GET['old'];
			$n=$_GET['new'];
					if($_SESSION['stuuser']==$i){

			$query="insert into report values('$i',$m,'$s',$o,$n)";
			if ($conn->query($query) === TRUE){
				echo '<script type="text/javascript">
               window.location = "report.html";
			   alert("report sent ");
               </script>'; 
}
			
				else {
					echo '<script type="text/javascript">
               window.location = "report.html";
			   alert("invalid details ");
               </script>'; 

				}
					}
					echo '<script type="text/javascript">
					window.location = "stulog.html";
			   alert("plz login ");
               </script>';
			
	?>
