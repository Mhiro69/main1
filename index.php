<?php 

session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Login </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<div class="topnav" id="navbar">
  <a style="float: left;">Welcome</a>
</div>

<div class="content full-height">
<h2>Login your Account </h2>
  <div  style="padding: 200px 0;">
 
  
    <div class="center-screen" id="rcorners2">
    <?php 
    //If User exists
    if(isset($_SESSION['userexists'])) {
      ?>
      <div>
        <p class="text-center" style="color: red;"><?php echo $_SESSION['userexists']; ?></p>
      </div>
    <?php
     unset($_SESSION['userexists']); }
    ?>  
    <?php 
    //If User created 
    if(isset($_SESSION['usercreated'])) {
      ?>
      <div>
        <p class="text-center" style="color: red;"><?php echo $_SESSION['usercreated']; ?></p>
      </div>
    <?php
     unset($_SESSION['usercreated']); }
    ?><?php 
    //If User not existing 
    if(isset($_SESSION['usernotexisting'])) {
      ?>
      <div>
        <p class="text-center" style="color: red;"><?php echo $_SESSION['usernotexisting']; ?></p>
      </div>
    <?php
     unset($_SESSION['usernotexisting']); }
    ?>    
      <form  method="post" action="chklogin.php">
        <label for="uname">Username:</label>
        <input type="text" id="uname" name="uname" required>
  
        <label for="pword">Password:</label>
        <input type="password" id="pword" name="pword" required>
        
        <input class="button" type="submit" value="Submit">
      </form>
      <a id="myBtn" style="float: right;">Register?</a>
    </div>
  </div>
</div>

<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <h1>Register Here</h1>
    <div class="center-screen" id="rcorners3">
      <form method="post" action="adduser.php">
        
      <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="pnumber">Phone Number:</label>
        <input type="text" id="pnumber" name="pnumber" required> 

        <label for="uname1">Username:</label>
        <input type="text" id="uname1" name="uname1" required>
  
        <label for="pword1">Password:</label>
        <input type="password" id="pword1" name="pword1" required>
        
        <input class="button" type="submit" value="Submit">
      </form>
    </div>
  </div>

</div>

<div class="footer">
  <p>Hello </p>
</div>

<style>
  * {
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
  }
  
  body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
  }
  html, body {
    height: 100%;
    margin: 0;
  }
  .full-height {
    height:100%;
    width:100%;
    overflow:hidden;
  }
  /* Style the top navigation bar */
  .topnav {
    overflow: hidden;
    background-color: #333;
  }
  
  /* Style the topnav links */
  .topnav a {
    float: right;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }
  
  /* Change color on hover */
  .topnav a:hover {
    background-color: #ddd;
    color: black;
  }
  
  /* Style the content */
  .content {
    background-color: #ddd;
    padding: 10px;
  }
  
  /* Style the footer */
  .footer {
    background-color: #f1f1f1;
    padding: 10px;
  }
  #navbar {
    overflow: hidden;
    background-color: #333;
  }

  #navbar a.active {
    background-color: #04AA6D;
    color: white;
  }
  .sticky {
    position: fixed;
    top: 0;
    width: 100%;
  }

  .sticky + .content {
    padding-top: 60px;
  }
  #rcorners2 {
    border-radius: 25px;
    border: 2px solid #73AD21;
    padding: 20px; 
    width: 500px;
    height: 300px;
  }
  #rcorners3 {
    border-radius: 25px;
    border: 2px solid #73AD21;
    padding: 20px; 
    width: 100%;
    height: 100%;
  }
  input {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    border-bottom: 2px solid rgb(105, 186, 218);
  }
  .center-screen {
    margin: auto;
    width: 60%;
  }
  .button {
    background-color: #04AA6D;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
  }
  /* The Modal (background) */
  .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  }

  /* Modal Content */
  .modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 30%;
  }

  /* The Close Button */
  .close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
  }

  .close:hover,
  .close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
  }

  </style>
  <script>
    window.onscroll = function() {myFunction()};
    
    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;
    
    function myFunction() {
      if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
      } else {
        navbar.classList.remove("sticky");
      }
    }
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
      modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
    </script>
</body>
</html>


