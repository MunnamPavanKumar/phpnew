<?php
        session_start();
        if(isset($_SESSION['user']))
        {
        $conn=mysqli_connect("localhost","root","","faculty");
        $b=$_SESSION['user'];
        $query="select * from subjects where sname='$b'";
        if ($conn->query($query) === TRUE)
        echo "successful";
        $result=mysqli_query($conn,$query) or die("not inserted");
        if ($result->num_rows > 0) {
                echo "<table border='1' height='100%' width='50%' align='center' >";
                echo "<tr><th> faculty_name</th><th>year</th><th>section</th><th>subject</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["sname"]. "</td><td>" . $row["year"]. "</td><td>" . $row["sec"]. "</td><td>". $row["subj"]. "</td></tr>";
    }
        echo "</table>";
} else {
    echo "0 results";
}
        mysqli_close($conn);
        }
        else {
echo '<script type="text/javascript">
                           alert("plz login ");
               </script>';
}
        ?>
                <html>
<head>
<link  rel="stylesheet" type="text/css" href="ext.css"/>
</head>
        <body><form action="reports.php" method="get">
        <center>
        <input type="submit" name="reports" value="reports"/></center>
        </form>
        </body>
        </html>
