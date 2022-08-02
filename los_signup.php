
<html>
	<head>
			<title>Signup</title>
	<style>
			#signupbtn
					{
						
						margin-right:50px;
						float:left;
						height:30px;
						width:70px;
						border-radius:10px;
					}
	</style>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link href="style.css" rel="stylesheet" type="text/css" />
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
          <li class="active" ><a href="los_signup.php">Signup</a></li>
          <li><a href="los_login.php">Login</a></li>
		  <li><a href="index.php">Guest</a></li>
          
        </ul>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
		<div class="mainbar" >
		<form method="post">
		<table align="center">
		<tr>
				<td><h5>Firstname </h5></td><td><h5>:</h5></td><td>&nbsp;&nbsp;<input type="text" name="firstname" placeholder="Firstname" required></td>
						</tr>
		<tr>	<td><h5>Lastname</h5></td><td><h5>:</h5></td><td>&nbsp;&nbsp; <input type="text" name="lastname" placeholder="Lastname" required /></td>
						</tr>
						
		<tr>	<td><h5>Email-id</h5></td><td><h5>:</h5></td><td>&nbsp;&nbsp;
					<input type="text" name="email" placeholder="Email-id" id="email" required /></td><br>
						</tr>
		<tr>	<td><h5>Password</h5></td><td><h5>:</h5></td><td>&nbsp;&nbsp; <input type="password" name="password" id="password" required /></td>
						</tr>
        <tr>	<td><h5>Confirm Password</h5></td><td><h5>:</h5></td><td>&nbsp;&nbsp; <input type="password" name="cpassword" id="cpassword"  /></td>
						</tr>
		<tr>	<td><h5>Contact No.</h5></td><td><h5>:</h5></td><td>&nbsp;&nbsp; <input type="text" name="mobilenumber" id="mobile" placeholder="Mobile no" required /></td>
						</tr>
		<tr>	<td><h5>Address:</h5></td><td><h5>:</h5></td><td>&nbsp;&nbsp; <input type="text" name="society" id="mobile" placeholder="society" required /></td>
						</tr>
		<tr>	<td><h5>Street:</h5></td><td><h5>:</h5></td><td>&nbsp;&nbsp; <input type="text" name="road"  placeholder="Street" required /></td>
						</tr>
		<tr>	<td><h5>Area:</h5></td><td><h5>:</h5></td><td>&nbsp;&nbsp; <input type="text" name="area"  placeholder="Area" required /></td>
						</tr>
			<tr>		 <td>  
            <input type="submit" name="signup" value="signup" onClick="return checkdetails();" />      
					   </td></tr>
			<tr>	<td colspan='3'><a href="los_login.php">Already have an Account? GET login</a></td></tr>
		</table>
        <?php
//echo "TRYING CONNECTING WITH MYSQL DATABASE LOS";
include_once('connection.php');
/*
echo "<br>";
echo "Connected successfully";
echo "<br>";
*/

if(isset($_POST['signup']))
{
$fname=$_POST["firstname"];
$lname=$_POST["lastname"];
$email=$_POST["email"];
$password=$_POST["password"];
$cpassword=$_POST["cpassword"];
$mob=$_POST["mobilenumber"];
$soc=$_POST["society"];
$road=$_POST["road"];
$area=$_POST["area"];
$q="insert into databaselos(firstname,lastname,email,password,mobilenumber,society,street,area) VALUES ('$fname','$lname','$email','$password',$mob,'$soc','$road','$area')";
	$query = mysqli_query($conn, $q);
if(!$query)
{
echo"<script>alert('not submit');</script>";
}
else
{
	echo"<script>alert('sucessful submit');</script>";
	header('location:los_login.php');
	//header('location:los_login.php');
}

	
}
?>
				</form>	
                
				
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
		<!----
		<nav id="nav"  >
			<ul>
				<li><a href="" style="text-decoration:none">Home</a></li>
				<li><a href="" style="text-decoration:none">About us</a></li>
				<li><a href="" style="text-decoration:none">Contact</a></li>
			<ul>
		</nav>
		<div id="divdiv">
			<img src="https://cutewallpaper.org/22/online-shopping-wallpapers/214343105.jpg" alt="image">
			<div id="div1">
				Firstname <input type="text" name="firstname" id="Firstname" placeholder="Firstname"><br>
						 <div id="firstname"><br>
				Lastname <input type="text" name="lastname" id="Lastname"placeholder="Lastname"><br>
						<div id="lastname"><br>	
						<form action="/action_page.php"> <label for="email-id">Email-id </label>
					<input type="text" id="Email-id" placeholder="Email-id"required><br>
						<div id="email-id"><br> </form>
				Password <input type="password" name="Password" id="Pass" placeholder="Password"required><br>
						<div id="password"><br>
				Contact <input type="text" name="mobile-no:" id="mobile-no:"placeholder="Mobile no"><br>
						<div id="number"><br>
					   <button type="button" id="button" onclick="signup()">SIGNUP
					   </button>
					   --->

<script language="javascript" type="text/javascript">

function checkdetails(){
	var email = document.getElementById('email');
	var password = document.getElementById('password');
	var cpassword = document.getElementById('cpassword');
	if(email.value == "" ){
		alert("Please Enter Email_Id.");
		email.focus(); // set the focus to this input
		return false;
	}
	
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if(!email.value.match(emailExp)){
		alert("Please Enter Your Correct Email Address.");
		email.value="";
		email.focus(); // set the focus to this input
		return false;
	}
	

	   if(password.value.length < 8)
	{
		   alert('Please Enter Minimum 8 Character For Password.');
		   password.focus();
		   return false;
	}
	if(password.value == ""){
		alert('Please Enter Password.');	
		password.focus();
		return false;
	}
		if (cpassword.value == "" ){
                alert("Please enter confirm Password");
                document.getElementById('cpassword').focus();
                
                return false;
            }
            
            if ((password.value) != (cpassword.value))
            {
                alert("Password and Confirm Password should be same! Re-enter confirm-password!");
                document.getElementById('cpassword').value = "";
                cpassword.focus();
               
                return false;
            }

	
	 var mobile = document.getElementById('mobile');
	   if(mobile.value.length < 10)
	{
		   alert('Please Enter Minimum 10 Digit Number for PhoneNo.');
		   mobile.focus();
		   return false;
	}
	
	if(mobile.value == ""){
		alert('Please Enter PhoneNo.');	
		mobile.focus();
		return false;
	}

	return true;
}
</script> 