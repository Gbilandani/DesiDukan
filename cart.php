<?php
session_start();
include_once('connection1.php');

$email=$_SESSION['email'];

$qe="select * from cart where email='$email'";
$re=mysqli_query($conn,$qe);
 
$count=mysqli_num_rows($re);
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Cart</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<!-- CuFo   n: Enables smooth pretty custom font rendering. 100% SEO friendly. To disable, remove this section 
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
 CuFon ends -->
</head>

<?php
    if(empty($_SESSION['email'] || $_SESSION['username']))
    {
        header('location:gprofile.php');
    }
?>

<?php


if(isset($_POST['order']))
{
  if(empty($_SESSION['email'] || $_SESSION['username']))
    {
        header('location:gprofile.php');
    }
    else{
    //echo "Your Order Has Been Successfully Placed";
    while($row=mysqli_fetch_assoc($re))
    {
      //print_r($row);
      $email=$_SESSION['email'];
      $pid=$row['productid'];
      $img=$row['image'];
      $pn=$row['productname'];
      $sz=$row['size'];
      $qn=$row['quantity'];
      $pr=$row['price']*$row['quantity'];

      $a="INSERT INTO `bill`(`email`, `productid`, `image`, `productname`, `size`, `quantity`, `price`) 
      VALUES ('$email','$pid','$img','$pn','$sz','$qn','$pr')";
      if(mysqli_query($conn,$a))
      {

        //echo "<br>Bill is ready";
       
      }

    }
    $b="delete from cart where email='$email'";
    if(mysqli_query($conn,$b))
    {
      //echo "<br>Deleted form cart";
      echo "<script>alert('Please Enter Password.');</script>";
      header("location:myorder.php");
    }
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
          <li ><a href="index.php">Home</a></li>
          <li><a href="myprofile.php">MyProfile</a></li>
		  <li><a href="categories.php">Categories</a></li>
          <li class=active><a href="cart.php">Cart</a></li>
          <li><a href="myorder.php">My Orders</a></li>
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
	  <center><h3>Cart</h3></center>
	  <div class="cate">
	    <?php
            echo "<table border=1 align='center' >";
            echo "<tr><th>Photo</th>
                    <th>Product Name</th>
                    <th>Size</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <tr>";
        
            $tprice=0;
            while($row2=mysqli_fetch_assoc($re))
            {
                $target_path1="./admin/images/";
                $image=$target_path1.$row2['image'];
                echo "<tr><td><img src=".$image." width=70 height=70/></td> ";
                echo "<td>".$row2['productname']."</td>";
                echo "<td>".$row2['size']."</td>";
                echo "<td>".$row2['quantity']."</td>";
                $pric=$row2['price']*$row2['quantity'];
                $tprice=$tprice+$pric;
                echo "<td>".$pric."</td>";
                echo "<td><a href=editcart.php?pid=".$row2['productid'].">Edit</td>";
                echo "<td><a href=deletecart.php?pid=".$row2['productid'].">Delete</td>";
                echo "</tr>";
            }
	  
            echo "</table>";
        ?>
        <form align=center method='post'><br>
            <h2>Total Price:<?php echo $tprice;?></h2>
            <h2>Payment Method : <input type='radio' name='payment' checked >Cash</input>&nbsp;
            <!---input type='radio' name='payment' >Card</input--></h2><br>
            <input type='submit' value='Place Order' name='order' />

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