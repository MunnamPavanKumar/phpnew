<?php
include("config.php");
   include('session.php');
    
      $sql1 = "SELECT sum(Quantity ) FROM orders WHERE LevelId  = '1'";
      $result1 = mysqli_query($db,$sql);
	  $sql2 = "SELECT sum(Quantity ) FROM orders WHERE LevelId  = '2'";
      $result2 = mysqli_query($db,$sql);
	  $sql3 = "SELECT sum(Quantity ) FROM orders WHERE LevelId  = '3'";
      $result3 = mysqli_query($db,$sql);
 
?>
<?php
include("config.php");
   include('session.php');
    if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $q1 = $_POST['q1'];
	  $q2 = $_POST['q2'];
      
	  $q3 = $_POST['q3'];
      
      
      if($q1>0){
      $sql4 = "INSERT INTO orders ". "(UserId, LevelId , Date, Quantity) ". "VALUES('$login_session','1',$emp_salary, $q1)";
	  mysqli_query($db,$sql4);
               }
			   if($q2>0){
      $sql5 = "INSERT INTO orders ". "(UserId, LevelId , Date, Quantity) ". "VALUES('$login_session','2',$emp_salary, $q2)";
	  mysqli_query($db,$sql5);
               }
			   if($q3>0){
      $sql6 = "INSERT INTO orders ". "(UserId, LevelId , Date, Quantity) ". "VALUES('$login_session','3',$emp_salary, $q3)";
	  mysqli_query($db,$sql6);
               }
      $result1 = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);	
     
   }
?>
<html>
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      <h1>Welcome <?php echo $login_session; ?></h1> 
      <h2><a href = "logout.php">Sign Out</a></h2><table>
<tbody>
<tr>
<td width="115">
<p>Date</p>
</td>
<td width="131">
<p>Admission Level</p>
</td>
<td width="100">
<p>Quantity</p>
</td>
<td width="115">
<p>Price</p>
</td>
<td width="115">
<p>Remaining</p>
</td>
</tr>
<tr>
<td width="115">
<p>&nbsp;</p>
</td>
<td width="131">
<p>&nbsp;</p>
</td>
<td width="100">
<p>&nbsp;</p>
</td>
<td width="115">
<p>&nbsp;</p>
</td>
<td width="115">
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td width="115">
<p>Mar 20 , 2016</p>
</td>
<td width="131">
<p>General</p>
</td>
<td width="100"><input name="genquan" size="1" type="q1" /></td>
<td width="115">
<p>$ 30.00</p>
</td>
<td width="115">
<p><?php echo $result1;?></p>
</td>
</tr>
<tr>
<td width="115">
<p>&nbsp;</p>
</td>
<td width="131">
<p>&nbsp;</p>
</td>
<td width="100">
<p>&nbsp;</p>
</td>
<td width="115">
<p>&nbsp;</p>
</td>
<td width="115">
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td width="115">
<p>&nbsp;</p>
</td>
<td width="131">
<p>Upgrade</p>
</td>
<td width="100">
<p><input name="genquan" size="1" type="q2" /></p>
</td>
<td width="115">
<p>$ 40.00</p>
</td>
<td width="115">
<p><?php echo $result2;?></p>
</td>
</tr>
<tr>
<td width="115">
<p>&nbsp;</p>
</td>
<td width="131">
<p>&nbsp;</p>
</td>
<td width="100">
<p>&nbsp;</p>
</td>
<td width="115">
<p>&nbsp;</p>
</td>
<td width="115">
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td width="115">
<p>&nbsp;</p>
</td>
<td width="131">
<p>V.I.P.</p>
</td>
<td width="100">
<p><input name="genquan" size="1" type="q3" /></p>
</td>
<td width="115">
<p>$ 50.00</p>
</td>
<td width="115">
<p><?php echo $result3;?></p>
</td>
</tr>
<tr>
<td width="115">
<p>&nbsp;</p>
</td>
<td width="131">
<p>&nbsp;</p>
</td>
<td width="100">
<p>&nbsp;</p>
</td>
<td width="115">
<p>&nbsp;</p>
</td>
<td width="115">
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td width="115">
<p>&nbsp;</p>
</td>
<td width="131">
<p>&nbsp;</p>
</td>
<td width="100">
<p>&nbsp;</p>
</td>
<td width="115">
<p>&nbsp;</p>
</td>
<td width="115">
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td width="115">
<p><em>delivery</em></p>
</td>
<td width="131">
<p>Will - Call</p>
</td>
<td width="100">
<p><select>
<option value="yes">yes</option>
<option value="no">no</option>
</select></p>
</td>
<td width="115">
<p>&nbsp;</p>
</td>
<td width="115">
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td width="115">
<p>&nbsp;</p>
</td>
<td width="131">
<p>&nbsp;</p>
</td>
<td width="100">
<p>&nbsp;</p>
</td>
<td width="115">
<p>&nbsp;</p>
</td>
<td width="115">
<p>&nbsp;</p>
</td>
</tr>
</tbody>
</table>
   </body>
   
</html>
