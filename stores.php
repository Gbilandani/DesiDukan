<?php
session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Stores</title>
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
          <li><a href="index.php">Home</a></li>
          <li><a href="myprofile.php">MyProfile</a></li>
		  <li><a href="categories.php">Categories</a></li>
          <li class="active"><a href="stores.php">Stores</a></li>
          
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
		  //session_destroy();
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
        
		
		<hr style="height:5px;border-width:0;color:gray;background-color:gray">
        <div class="article" >
          <center><h3>Stores</h3></center>
		  <a href="https://www.google.com/search?q=kalaniketan+stores+mehsana&source=lmns&bih=714&biw=1519&rlz=1C1OKWM_enIN956IN956&hl=en&sa=X&ved=2ahUKEwjet-_Bovz1AhUURmwGHcJrDRUQ_AUoAHoECAEQAA">
          <img src="images/kalaniketan.jpg" height="130px" width="160px"	>	
		  <h2>KALANIKETAN DRESSES</h2>
		  <p><h5>Address: Satyanarayan Road, opp. Municipal Office, Mehsana, Gujarat 384001</h5></p></a><br><br>
		  <a href="https://www.google.com/search?q=ranjan+stores+mehsana&source=lmns&bih=656&biw=1536&rlz=1C1OKWM_enIN956IN956&hl=en&sa=X&ved=2ahUKEwjkmZSIp_z1AhX-gmMGHd1zA2UQ_AUoAHoECAEQAA">
		  <img src="images/ranjan.jpg" width="160px" height="130px">
		  <h2>RANJAN READYMADE STORES </h2>
		  <p><h5>Address: 1-2-3, Municipal Vegetable Market , Opposite Palika Bjar, Police Station Road-384001.</h5></p></a><br><br>
		  <a href="https://www.justdial.com/Mehsana/J-K-Store-Opposite-Seva-Kendra-Mehsana-Industrial-Estate/9999P2762-2762-190705113014-G8L8_BZDET">
          <img src="images/jkchemist.jpg" height="130px" width="160px"	>	
		  <h2>JK CHEMIST</h2>
		  <p><h5>Address: Toran Vali Chowak, Station Road, Opp. Seva Kendra , Mehsana - 384001</h5></p></a><br><br>
		  <a href="https://www.google.com/search?q=jilla%20panchayat%20shopping%20center%20panchvati%20stores%20mehsana&source=lmns&bih=614&biw=1142&hl=en&sa=X&ved=2ahUKEwiZvpunn5v2AhVBwosBHRETCHcQvS56BAgKEAE&tbs=lf:1,lf_ui:10&tbm=lcl&rflfq=1&num=10&rldimm=392624140097046200&lqi=CjhqaWxsYSBwYW5jaGF5YXQgc2hvcHBpbmcgY2VudGVyIHBhbmNodmF0aSBzdG9yZXMgbWVoc2FuYUjC9pf8nrGAgAhaWBAAEAEQAhADEAQQBRgCGAQYBRgGIjhqaWxsYSBwYW5jaGF5YXQgc2hvcHBpbmcgY2VudGVyIHBhbmNodmF0aSBzdG9yZXMgbWVoc2FuYSoICAMQAhADEAWSARRpbmRpYW5fZ3JvY2VyeV9zdG9yZaoBOBABKjQiMGppbGxhIHBhbmNoYXlhdCBzaG9wcGluZyBjZW50ZXIgcGFuY2h2YXRpIHN0b3JlcygA&phdesc=iLTw9lugm0E&rlst=f#rlfi=hd:;si:,23.61601357114768,72.4364379395752;mv:[[23.6199011,72.416557],[23.5855413,72.344224]]">
          <img src="images/panchvati.jpg" height="130px" width="160px"	>	
		  <h2>PANCHVATI STORES</h2>	
		  <p><h5>Address: Jilla Panchayat Shopping Center, Opp. ST Bus Stand, Mehsana, Gujarat 384001</h5></p></a>
		</div>
      </div>
     
      <div class="clr"></div>
    </div>
    </div>
	<div class="clr"></div>
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
        <li class="active"><a href="stores.php">Stores</a></li>
        
      </ul>
      <div class="clr"></div>
    </div>
  </div>
</div>
</div>
 </body>
</html>
