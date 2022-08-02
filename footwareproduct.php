<?php
session_start();
include_once('connection1.php');
$id=$_GET['id3'];
//echo "hello".$id;
$sql="select * from product where ProductId='$id'";
$result = mysqli_query($conn, $sql);
$row2=mysqli_fetch_assoc($result)
?>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Desi Dukan</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<!-- CuFon: Enables smooth pretty custom font rendering. 100% SEO friendly. To disable, remove this section 
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
 CuFon ends -->
</head>



<?php
if(isset($_POST['addcart']))
{

  
    if(empty($_SESSION['email'] || $_SESSION['username']))
    {
        header('location:gprofile.php');
    }


  $email=$_SESSION['email'];
  $pid=$id;
  $pname=$row2['ProductName'];
  $image=$row2['ProductImage'];
  $size=$_POST['siz'];
  $quan=$_POST['quan'];
  $price=$row2['ProductPrice'];
  //echo $pid." ".$pname." ".$image." ".$size." ".$quan." ";
  $q2="INSERT INTO cart(email, productid, image, productname, size, quantity, price) 
      VALUES ('$email','$pid','$image','$pname','$size','$quan','$price')  ";
  if(mysqli_query($conn,$q2))
  {
    header("location:cart.php");

  }


}

?>




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
          <li><a href="cart.php">Cart</a></li>
          <li><a href="myorder.php">My Orders</a></li>
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
	  <center><h3>Footware</h3></center>
      <form method='post'>
      <table width="1080" border="0" align="center">
    <tr> 
      <td height="400" colspan="2"><center>	

      <?php
    
        echo "<table align='center' cellspacing='50'><tr>";
        
        
        
    
        $target_path1="./admin/images/";
	      $image=$target_path1.$row2['ProductImage'];
	      echo "<td><a href=clothproduct.php?id3=".$row2['ProductId'].">
                <img src=".$image." width=200 height=300/></a></td>";
        echo "</tr>";
        echo "<tr><td>";
        echo "<center><h4>".$row2['ProductName']."</h4></center>";
        echo "</td></tr></table>";

        ?>
      </center></td>
      <td width="622"> 
	  <center> <table border="0">
        <tr><span>
          <td><div align="center" style="color:#666;font-size:16px;">Description </div></td>
          <td>
                
                        <?php 
                        
                        echo $row2['ProductDescription'];
                        /*echo "<table align='center' cellspacing='50'><tr>";

                        echo "<td>".$row2['ProductPrice']."
                                </td>";                       
                        echo "</tr></table>"*/
                        ?>
                   
                
                
             </td> </span>
        </tr>
        <!-----  
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
              </div></td> 
          </tr>
		  ----->
		  <tr>
		  <td style="color:#666;font-size:16px;">
		  <div >Size</div></td>
            <td  align="center"><div align="center"> 
                <p>
                  <select name="siz">
                    <option value="24">24</option>
                    <option value="36">36</option>
                    <option value="42">42</option>
                    <option value="50">50</option>
                  </select> 
                </p>
               
              </div>
		  </td> 
		  </tr> 
		  
		  <tr>
		  <td style="color:#666;font-size:16px;">
		  <div >Quantity</div></td>
            <td  align="center"><div align="center"> 
                <p>
                  <select name="quan">
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
                
              </div>
		  </td> 
		  </tr> 
		
		<tr>
          <td><div style="color:#666;font-size:16px;">Price </div></td>
          <td><center>
                
                        <?php 
                        echo "<h2><img src='image/rupeeSymbol.png' width='9' height='13' />";
                        echo " ".$row2['ProductPrice']."</h2>";
                        /*echo "<table align='center' cellspacing='50'><tr>";

                        echo "<td>".$row2['ProductPrice']."
                                </td>";                       
                        echo "</tr></table>"
*/
                        ?>
                   
                
                
              </center></td>
        </tr> 
		
         <tr><td colspan="2">
		<center>
		<input type="submit" value="Add To Cart" name='addcart'/></center>
             </td></tr>
    </form>
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
      
      <div class="clr"></div>
    </div>
  </div>
</div>
</div>
 </body>
</html>