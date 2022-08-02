<?php
session_start();
include_once('connection1.php');
$email=$_SESSION['email'];
$pid=$_GET['pid'];

$sql="select * from cart where productid='$pid' and email='$email'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
//print_r($row);


if(isset($_POST['submit']))
{
	$size=$_POST['t1'];
	$quantity=$_POST['t2'];
	
	$sql="update cart set size='$size', quantity='$quantity' where productid='$pid' and email='$email'";
	if(mysqli_query($conn,$sql))
	{
		header("location:cart.php");
	}
}
?>





<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Cart</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<!-- CuFon: Enables smooth pretty custom font rendering. 100% SEO friendly. To disable, remove this section 
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
 CuFon ends -->
</head>
<body>
<div class="main">

  <div class="header">
    <div class="header_resize">
      <div class="logo"><h1><a href="index.php" class="nobg">
	  <i>DESI DUKAN</i></a></h1></div>
      <div class="menu_nav">
        <ul>
          <li ><a href="index.php">Home</a></li>
          <li><a href="myprofile.php">MyProfile</a></li>
		  <li><a href="categories.php">Categories</a></li>
          <li><a href="cart.php">Cart</a></li>
         <!-- <li><a href="stores.php">Stores</a></li>  --->
          
        </ul>
      </div>
	  <br><br><br><br><br>
	  <div class="menu_login" >
        <ul>
          <li><a href="logout.php" ><?php
          if(!isset($_SESSION['username']))
          {
            echo "Login";
          }
          else
          {
            echo "Logout";  
          }
          ?></a>
		  <?php/*
		  if(!empty($_REQUEST['logout']))
		  {
			
			session_destroy();
		  
		  }*/
		  
		  ?>
          </li>
          <li class="active"><a>
		  <?php
			if(empty($_SESSION['username']))
			{
				//$_SESSION['username']="Guest"
        echo "Guest";
			}
      else
      {
			echo $_SESSION['username'];
      }
		  ?>
		  </a></li>
        </ul>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
	  
	  <div class="cate">
	  	<form method='post'>
		  <table align=center border=0>
			<tr><td>Product Id</td><td>:</td><td>
			<input type="text" value="<?php echo $row['productid'];?>" readonly /></td></tr>
			<tr><td>Size</td><td>:</td><td><input type="text" name="t1" value="<?php echo $row['size'];?>"/></td></tr>
			<tr><td>Quantity</td><td>:</td><td><input type="text" name="t2" value="<?php echo $row['quantity'];?>"/></td></tr>
			<tr><td colspan=3><center><input type="submit" name="submit" value='update' /></center></td></tr>
		  </table>

		</form>

		</div>
		<div class="clr"></div><br>
		<hr style="height:5px;border-width:0;color:gray;background-color:gray">
      
    </div>
	<div class="clr"></div>
  </div>
  <div class="fbg">
    <div class="fbg_resize">
      
      <div class="col c2">
        <h2 style="color:#194e5c">About US</h2>
		<a href="images/gb.jpg"><img src="images/gb.jpg" style="float:left" title="Gaurav" width="170px" height="150px"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="images/ishika.jpg"><img src="images/ishika.jpg" style="float:center" title="Ishika" width="100px" height="150px"></a>
        <p>Enrollment Number:<li>19012011004 Bilandani Gauravkumar Jayeshkumar</li>
		<li>20012012012 Jain Ishika</li><br>
		Students of 6th Semester Computer Engineering in U. V. Patel College Of Engineering</p>
        <ul class="sb_menu">	
         
        </ul>
        <p>OH MY GAWD! Yeh toh Bohot Krazy Kar Diya Maine</p>
      </div>
      <div class="col c3">
        <h2 style="color:#194e5c">Contact</h2>
        <a href="images/photo.jpg"><img src="images/photo.jpg" width="100" height="150px" alt="photo" /></a>
        <p></p>	
        <p><strong>Phone:</strong><a style="color:#194e5c" href="callto:+919998819801">+91 9998819801</a><br>
          <strong>Address:</strong><br><a style="color:#194e5c" href="https://www.google.com/maps/dir//23.5285594,72.458591/@23.5275462,72.4571784,18.19z/data=!4m2!4m1!3e0">
		  6CEIT-C,&nbsp; B-Tech,<br>U. V. Patel College Of Engineering,<br> Ganpat University - 384012 .</a>
		  <br>
		  <br><br><br>
          <strong>E-mail:</strong>
		  <ul> 
		  <li><a style="color:#194e5c" href="mailto:gauravkumarbilandani19@gnu.ac.in">gauravkumarbilandani19@gnu.ac.in</a></li>
		  <li><a style="color:#194e5c" href="mailto:ishikajain20@gnu.ac.in">ishikajain20@gnu.ac.in</a></li>
		  </ul>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf" style="color:#cff6f4">&copy; Gaurav Bilandani and Jain Ishika </a></p>
      
      <div class="clr"></div>
    </div>
  </div>
</div>
</div>
 </body>
</html>
