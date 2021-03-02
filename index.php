<?php
error_reporting(0); //prevent database errors showing on site
$dbconnect=mysqli_connect('localhost', 'root', '', 'student_marketplace');

if (isset($_POST['upload'])) {
  $Username = $_POST['uname'];
  $Password = $_POST['psw'];
  
  $sql=mysqli_query($dbconnect, "CALL SearchCustomer('$Username', '$Password');");
}

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
              <ul>
                <li><a href="signup.html">Sign Up</a></li>
                <li>/</li>
                <li><a onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</a></li>
                <?php
                  while ($row = mysqli_fetch_array($sql)) {
                    echo "<li id='UserTag'> Hello ".$row['CusFname']." ".$row['CusSname']." </li>";
                    $userID = $row['CusID'];
                  }
                ?>
              </ul>
            </div>
        </div>
        <div class="header_wrapper">
          <header id="HomeHeader">
            <div class="logo_wrapper">
              <div class="logo_holder">
                <div id="logo">BRIGHTON MARKET</div>
              </div>
            </div>
            <nav>
              <ul>
                <li><a id="link1" href="index.php">Home</a></li>
                <li><a id="link2" href="">Electronics</a></li>
                <li><a id="link3" href="">Fashion</a></li>
                <li><a id="link4" href="">Sports</a></li>
                <li><a id="link5" href="">Furniture</a></li>
                <li><a id="link6" href="" >Toys</a></li>
                <li>
                  <?php
                    if($userID != null){
                      echo "<a id='link6' href='sell.php' >Sell</a>";
                    }else{
                      echo "<a id='link6' href='' title='Login required!'>Sell</a>";
                    }
                  ?>
                </li>
                <li>
                  <?php
                    if($userID != null){
                      echo "<a id='basket' href='basket.php'><img src='https://img.icons8.com/material/96/000000/shopping-cart--v1.png'/></a>";
                    }else{
                      echo "<a id='basket' href='' title='Login required!'><img src='https://img.icons8.com/material/96/000000/shopping-cart--v1.png'/></a>";
                    }
                  ?>
                </li>
              </ul>
            </nav>
          </header>
        </div>
      </div>
      <div id="id01" class="modal">

        <form class="modal-content animate" action="index.php" method="post">
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
      <div id="home_search_bar_wrapper">
        <div id="search_bar">
          <form action="/action_page.php">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit">Search</button>
          </form>
        </div>
      </div>

    </div>
    <script src="index.js"></script>
</body>
</html>