<?php
session_start();//Allows for php data to be saved
error_reporting(0);//prevent database errors showing on site
include_once"mysql.php";
require"encrypt-decrypt.php";

//check user login
if (isset($_POST['upload'])) {
  $Password = $_POST['psw'];
  $Username = $_POST['uname'];
  $sql=mysqli_query($dbconnect, "CALL SearchCustomer('$Username');");
}else{
  $sql = null;
}

$ProductID = $_GET["uid"];
$_SESSION['SellID'] = $ProductID;
$ProductID = $_SESSION['SellID'];
$product=mysqli_query($dbconnect, "CALL SearchProduct('$ProductID');");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="StyleSheet.css" media="screen"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="images/Logo8.png"/>
    <title>Brighton Market</title>
</head>
<body>
    <div id="index_page_wrapper">
      <div id="home_header">
        <div id="top_bar_wrapper">
            <div id="top_bar">
              <!--top bar containing sign up and login------------------------------------------->
              <ul>
                <li><a href="signup.html">Sign Up</a></li>
                <li>/</li>
                <li><a onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</a></li>
                <?php
                  //if new user signs in
                  if($sql != null){
                    while ($row = mysqli_fetch_array($sql)) {
                      $key = md5('hjsjJKWKsksskKK');
                      $encryptedPassword = $row['CusPassword'];
                      $deryptedPassword = decrypt($encryptedPassword, $key);
                      if($deryptedPassword == $Password){
                        $Fname = $row['CusFname'];
                        $Sname = $row['CusSname'];
                        $Fname = decrypt($Fname, $key);
                        $Sname = decrypt($Sname, $key);
  
                        echo "<li id='UserTag'> Hello ".$Fname." ".$Sname." </li>";
  
                        $UserID = $row['CusID'];
                        $_SESSION['CusID'] = $UserID;
                        $_SESSION['CusFname'] = $Fname;
                        $_SESSION['CusSname'] = $Sname;
                      }else{
                        echo "<li id='UserTag'> Wrong Password! </li>";
                      }
                    }
                  //ifuser has signed in display stored results
                  }elseif($_SESSION['CusFname'] != null){
                    echo "<li id='UserTag'> Hello ".$_SESSION['CusFname']." ".$_SESSION['CusSname']." </li>";
                  //if user hasnt logged in 
                  }else{
                    echo "<li id='UserTag'> Not Logged In </li>";
                  }
                ?>
              </ul>
            </div>
        </div>
        <!--Header-------------------------------------------------->
        <div class="header_wrapper">
          <header id="HomeHeader">
            <div class="logo_wrapper">
              <div class="logo_holder">
                <div id="logo">BRIGHTON MARKET</div>
              </div>
            </div>
            <nav>
              <ul>
                <li><a id="" href="index.php">Home</a></li>
                <li><a id="link2" href="electronics.php">Electronics</a></li>
                <li><a id="link3" href="fashion.php">Fashion</a></li>
                <li><a id="link4" href="sports.php">Sports</a></li>
                <li><a id="link5" href="furniture.php">Furniture</a></li>
                <li><a id="link6" href="toys.php" >Toys</a></li>
                <li>
                  <?php
                    //if userID is stored the give access to basket
                    if($_SESSION['CusID'] != null){
                      echo "<a id='basket' href='basket.php'><img src='https://img.icons8.com/material/96/000000/shopping-cart--v1.png'/></a>";
                    }else{
                      echo "<a id='basket' href='' onclick='LoginError()' title='Login required!'><img src='https://img.icons8.com/material/96/000000/shopping-cart--v1.png'/></a>";
                    }
                  ?>
                </li>
              </ul>
            </nav>
          </header>
        </div>
      </div>
      <!--Login form ------------------------------------------------------->
      <div id="id01" class="modal">

        <form class="modal-content animate" action="itemPage.php" method="post">
          <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
          </div>
      
          <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required maxlength="32" pattern="[a-zA-Z0-9]+$">
      
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required maxlength="32" pattern="[a-zA-Z0-9]+$">
              
            <button type="submit" name="upload">Login</button>
            <label>
              <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
          </div>
      
          <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
          </div>
        </form>
      </div>
      <!--Product main content----------------------------------------------------->
      <div id="main_product_content">
          <?php
            while ($row = mysqli_fetch_array($product)){
                
                $_SESSION['ProductImage'] = $row['ProductImage'];
                $_SESSION['ProductName'] = $row['ProductName'];
                $_SESSION['DeliveryOption'] = $row['DeliveryOption'];
                $_SESSION['ProductCost'] = $row['ProductCost'];
                echo"<div id='ProductWrapper'>";
                    echo"<div id='ProductTitleWrapper'>";
                        echo"<h1>".$row['ProductName']."</h1>";
                    echo "</div>";
                    echo"<div id='ProductIMGWrapper'>";
                        echo"<img src='ProductImages/".$row['ProductImage']."' >";
                    echo "</div>";
                    echo"<div id='ProductConditionWrapper'>";
                        echo"<p>Condition: ".$row['ProductCondition']."</p>";
                    echo "</div>";
                    echo"<div id='ProductTXTWrapper'>";
                        echo"<h3>Product Description:</h3>";
                        echo"<p>".$row['ProductDescription']."</p>";
                    echo "</div>";
                    echo"<div id='ProductCostWrapper'>";
                        echo"<h4>Price: £".$row['ProductCost']."</h4>";
                    echo "</div>";
                    echo"<div id='ProductDeliveryWrapper'>";
                        echo"<p>DELIVERY OPTIONS: ".$row['DeliveryOption']."</p>";
                    echo "</div>";
                    echo"<div id='BasketWrapper'>";
                        if($_SESSION['CusID'] != null){
                            if($row['Sold'] == 0){
                                echo"<a href='basketAdd.php'>ADD TO BASKET</a>";
                            }else{
                                echo"<a href='' onclick='soldError()'>ADD TO BASKET</a>";
                            }
                        }else{
                            echo"<a href='' onclick='LoginError()'>ADD TO BASKET</a>";
                        }
                    echo "</div>";
                    echo"<div id='line'></div>";
                echo "</div>";
                
            }
          ?>
      </div>
    </div>
    <script src="index.js"></script>
</body>
</html>