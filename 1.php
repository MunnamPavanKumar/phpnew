<?php
session_start();
	if(isset($_SESSION['user']))
	{
	$conn=mysqli_connect("localhost","root","","faculty");
	$query="select * from report where subj='wt'";
	$result=mysqli_query($conn,$query) or die("not inserted");
	if ($result->num_rows > 0) {
		echo "<table border='1' height='100%' width='50%' align='center' >";
		echo "<tr><th> sid</th><th>mid</th><th>sub</th><th>old</th><th>new</th></tr>";
    while($row = $result->fetch_assoc()) {
	echo "<tr><td>" . $row["sid"]. "</td><td>" . $row["mid"]. "</td><td>" . $row["subj"]. "</td><td>" . $row["old"]. "</td><td>" . $row["new"]. "</td></tr>";	
    }
	}
	else {
echo '<script type="text/javascript">
			window.location = "sub.php";
			   alert("no reports ");
               </script>'; 
}
	}
	else {
echo '<script type="text/javascript">
			window.location = "faclog.html";
			   alert("plz login ");
               </script>'; 
}
	?>
			<html>
	<body><form action="change.html" method="get">
	<center>
	<input type="submit" name="update" value="update"/></center>
	</form>
	</body>
	</html>
<logg.PNG>










