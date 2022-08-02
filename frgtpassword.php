<html>
	<head>
		<title>Forgot Password</title>
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
      <div class="logo">
        <h1>
          <a href="index.php" class="nobg"><i>DESI DUKAN</i></a>
        </h1>
      </div>
      <div class="menu_nav">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="myprofile.php">MyProfile</a></li>
		      <li><a href="categories.php">Categories</a></li>
        </ul>
      </div>
	    <br><br><br><br><br>
	    <div class="menu_login">
        <ul>
          <li><a href="los_signup.php">Signup</a></li>
          <li><a href="los_login.php">Login</a></li>
          <li><a href="index.php">Guest</a></li>
          <li><a href="admin/login.php">Admin</a></li>
        </ul>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
		<div class="mainbar">
      <center>
        <form method="post">
          <table>
            <tr>
              <td>
                <h5>Email Id</h5>
              </td>
              <td>
                <h5>:</h5>
              </td>
              <td> 
                <input type="email" name="email" placeholder="Email Address" required>
              </td>
            </tr>         	
            <tr>		
              <td>
                <input type="submit" name="forgot" value="Reset Password"/>
              </td>
            </tr>           
          </table>
        </form>
        <?php
    //echo "TRYING CONNECTING WITH MYSQL DATABASE LOS";
    include_once("connection.php");
    if(isset($_POST['forgot']))
    {
      $email = mysqli_real_escape_string($conn, $_POST['email']);
      $sql = "SELECT * FROM `databaselos` WHERE email = '$email'";
      $res = mysqli_query($conn, $sql);
      $result = mysqli_fetch_assoc($res);
      
      $count = mysqli_num_rows($res);
      if($count == 1)
      {
        $password = $result['password'];
        require "Mail/phpmailer/PHPMailerAutoload.php";
        $mail = new PHPMailer;

        $mail->isSMTP();
        $mail->Host='smtp.gmail.com';
        $mail->Port=587;
        $mail->SMTPAuth=true;
        $mail->SMTPSecure='tls';

        $mail->Username='vaccination12@gmail.com';
        $mail->Password='vaccination@123';

        $mail->setFrom('vaccination12@gmail.com', 'Forgot Password');
        $mail->addAddress($_POST["email"]);

        $mail->isHTML(true);
        $mail->Subject="Desi Dukan";
        $mail->Body="<p>Dear User, </p> <h3>Your Password is $password <br></h3>
        <br><br>
        <p>With regrads,</p><br><br>
        <b>Team Desi Dukan</b>";

        if($mail->send()){
            echo "<center>Password has been sent successfully via email.</center>";
        }
      }
      else
      {
        echo "<h5><center>No Account is linked with this Email.<br>Please <a href='los_signup.php'>Register</a>.</center></h5>";
      }
    }
?>
      </center>
		</div>	
		<div class="clr"></div>
	</div>
	<div class="fbg">
    <div class="fbg_resize">
      <div class="col c2">
        <h2 style="color:#194e5c">About US</h2>
		      <a href="images/gb.jpg">
            <img src="images/gb.jpg" style="float:left" title="Gaurav" width="170px" height="150px">
          </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		      <a href="images/ishika.jpg">
            <img src="images/ishika.jpg" style="float:center" title="Ishika" width="100px" height="150px">
          </a>
          <p>Enrollment Number:
            <li>19012011004 Bilandani Gauravkumar Jayeshkumar</li>
		        <li>20012012012 Jain Ishika</li><br>
		        Students of 6th Semester Computer Engineering in U. V. Patel College Of Engineering
          </p>
          <ul class="sb_menu"></ul>
          <p>OH MY GAWD! Yeh toh Bohot Krazy Kar Diya Maine</p>
      </div>
      <div class="col c3">
        <h2 style="color:#194e5c">Contact</h2>
        <a href="images/photo.jpg">
          <img src="images/photo.jpg" width="100" height="150px" alt="photo" />
        </a>
        <p><strong>Phone:</strong><a style="color:#194e5c" href="callto:+919998819801">+91 9998819801</a><br>
        <strong>Address:</strong><br><a style="color:#194e5c" href="https://www.google.com/maps/dir//23.5285594,72.458591/@23.5275462,72.4571784,18.19z/data=!4m2!4m1!3e0">6CEIT-C,&nbsp; B-Tech,<br>U. V. Patel College Of Engineering,<br> Ganpat University - 384012 .</a>
		    <br><br><br><br>
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

