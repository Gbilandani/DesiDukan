<?php
session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Men</title>
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
          <li><a href="stores.php">Stores</a></li>
          
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
		  <?php /*
		  if(!empty($_REQUEST['logout']))
		  {
			
			session_destroy();
		  
		  }
		  */
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
	  <center><h3>T-Shirts</h3></center>
      
      <table width="1080" border="0" align="center">
    <tr> 
      <td height="400" colspan="2"><center>	

        <a href="cm1.php"> </a><a href="tm1.php"><img src="image/Man/cloth/mt1.jpg" width="243" height="340" name="img"/></a> 
      </center></td>
      <td width="622"> 
	  <center> <table border="1">
          <tr> 
            <td><div align="center" style="color:#666;font-size:16px;">Color</div></td>
            <td width="254" align="center"><div align="center"> 
                <p>
                  <select name="xyz1">
                    <option value="Black">Black</option>
                    <option value="white">White</option>
                    <option value="blue">Blue</option>
                  </select>
                </p>
                <p>&nbsp;</p>
              </div></td> <td></td>
          </tr>
		  
		  <tr>
		  <td style="color:#666;font-size:16px;">
		  <div align="center">Size</div></td>
            <td width="254" align="center"><div align="center"> 
                <p>
                  <select name="xyz1">
                    <option value="24">24</option>
                    <option value="36">36</option>
                    <option value="42">42</option>
                    <option value="50">50</option>
                  </select> 
                </p>
                <p>&nbsp;</p>
              </div>
		  </td> <td></td>
		  </tr> 
		  
		  <tr>
		  <td style="color:#666;font-size:16px;">
		  <div align="center">Quantity</div></td>
            <td width="254" align="center"><div align="center"> 
                <p>
                  <select name="xyz1">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                  </select>
                </p>
                <p>&nbsp;</p>
              </div>
		  </td> <td></td>
		  </tr> 
		
		<tr>
          <td style="color:#666;font-size:16px;">Price </td>
          <td><center>
                <p><span><img src="image/rupeeSymbol.png" width="9" height="13" />&nbsp;1199</span> 
                </p>
                <p>&nbsp; </p>
              </center></td> <td></td>
        </tr> 
		
         <tr><td colspan="2">
		<center>
		<input type="submit" value="Add To Cart" onClick="insertcart.php"/></center>
             </td></tr>

          </table></center></td>
      <!--  <td width="311">&nbsp;</td> 
      <td width="325">&nbsp;</td> -->
    </tr>
    
  </table>
      
	  <div class="clr"></div>
		 </div>
      <div class="clr"></div>
    </div>
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
		<li class="active"><a href="categories.php">Categories</a></li>
        <li><a href="stores.php">Stores</a></li>
        
      </ul>
      <div class="clr"></div>
    </div>
  </div>
</div>
</div>
 </body>
</html>