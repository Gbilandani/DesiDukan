<?php
session_start();
?>




<html>
	<head>
		<script>
		function login()
		{
		}
		</script>
		<title>Login</title>
		<link href="style.css" rel="stylesheet" type="text/css" />
		<style>
			#divdiv img
			{
				position:relative;
				height:90%;
				width:99%;
				margin:10px;
			}
				

			#div1
			{
				position:absolute;
				top:20%;
				left:40%;
				font-weight:bold;
			}
			
			#loginbtn
			{
				
				margin-right:50px;
				float:left;
				height:30px;
				width:70px;
				border-radius:10px;
			}

		</style>
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
          
          
        </ul>
      </div>
	  <br><br><br><br><br>
	  <div class="menu_login" >
        <ul>
          <li><a href="los_signup.php">Signup</a></li>
          <li  class="active"><a href="los_login.php">Login</a></li>
		  <li><a href="index.php">Guest</a></li>
		  <li><a href="admin/login.php">Admin</a></li>
          
        </ul>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
		<div class="mainbar" >
<?php
//echo "TRYING CONNECTING WITH MYSQL DATABASE LOS";
include_once("connection.php");
/*
echo "<br>";
echo "Connected successfully";
echo "<br>";
*/
$request = $_SERVER['REQUEST_METHOD'];
$data = array();
switch ($request){
    case 'GET':
    //response(getData());
    break;
    default:
    #code....
    break;
}
function getData() {
    global $conn;
    $query = mysqli_query($conn, "select * from databaselos");
    while ($row = mysqli_fetch_assoc($query)){
        $data[] = array("Email "=>$row['email'], "Password"=>$row['password'], "Mobile number"=>$row['mobilenumber']);
    }
    return $data;
}

if(isset($_POST['login']))
{
	$emil=$_POST['email'];
	$pass=$_POST['password'];
	$q="select * from databaselos where email='$emil' and password='$pass'";
	$query = mysqli_query($conn, $q);
	
    /*while ($row = mysqli_fetch_assoc($query)){
        $data[] = array("Email "=>$row['email'], "Password"=>$row['password'], "Mobile number"=>$row['mobile number']);
    }*/
	$row = mysqli_fetch_assoc($query);
	$count=mysqli_num_rows($query);
	
	if($count>0)
	{
		$_SESSION['username']=$row['firstname'];
		$_SESSION['email']=$row['email'];
		// $_SESSION['phone']=$row['mobilenumber'];
		// $_SESSION['lname']=$row['lastname'];
		header('location:index.php');
	}else
	{
		echo "Invalid Username OR Password";
	}
	
}

function response($data) {
    echo json_encode($data);
}
?>

		<center><form method="post">
        <table align="center">
        <tr>
				<td><h5>Email Id</h5></td><td><h5>:</h5></td><td> <input type="text" name="email"  placeholder="Email" required></td></tr>
						
		<tr>	<td><h5>Password</h5></td><td><h5>:</h5></td><td> <input type="password" name="password"  required></td></tr>
						
		<tr>		<td><input type="submit" name="login" value="login"/></td><td></td><td><h5><a href="frgtpassword.php">Forgot Password?</a></h5></td></tr>
		<tr>   	<td colspan='3'><a href="los_signup.php">NEW USER? GET Register .</a></td>	</tr>		
                        
                        </table>
				</form>
				
				
				</center>




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
      <ul class="fmenu">
        <li><a href="index.php">Home</a></li>
        <li ><a href="myprofile.php">MyProfile</a></li>
		<li><a href="categories.php">Categories</a></li>
        <li><a href="stores.php">Stores</a></li>
        
      </ul>
      <div class="clr"></div>
    </div>
  </div>
  </div>
 </div>
</body>

</html>