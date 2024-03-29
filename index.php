﻿<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Basic Bank Management</title>
	<link rel="shortcut icon" href="/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Caveat&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Caveat|Cookie&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Delius&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" crossorigin="anonymous">
      
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
</head>

<body style="background-color:White;">
<!-- including navbar -->
<?php
  include 'navbar.php';
?>

<!-- main content -->
<div class="container">
<div class="two" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Welcome to</div>
<h1><font size="65">
<span style="color: peru;">THE</span>
<span style="color: peru;">BASIC</span>
<span style="color: peru;">BANK</span>
</font>
</h1>


<!-- cards -->
<div class="card-group">
  <div class="mybox" style="width:100%; margin:auto;">

    <div class="card">
    <center><img style="width:40%;" src="images/create.JPG" alt="Card image cap">
      <div>
        <h5>CREATE ACCOUNT</h5>
        <p>Open a new bank account online at The Basic Bank & enjoy hassle free digital banking services.<br>Exclusive privileges & exciting ...</p>
		<p>Click the below button</p></center>
        <a href="create.php" class="btn btn-primary">Create Account</a>
      </div>
    </div>
  </div>
  <div class="mybox" style="width:100%; margin:auto;">

    <div class="card">
    <center><img style="width: 40%;" src="images/transferring.PNG" alt="Card image cap">
      <div>
        <h5>TRANSFER MONEY</h5>
        <p> The Best Ways To Send Money — Without Face-to-Face Contact.</p></center>
        <a href="transfermoney.php" class="btn btn-primary">Transfer Money</a>
      </div>
    </div>
  </div>
  <div class="mybox" style="width:100%; margin:auto;">

    <div class="card">
    <center><img style="width: 40%;" src="images/history.JPG" alt="Card image cap">
      <div>
        <h5>TRANSACTION HISTORY</h5>
        <p>The Transaction History page lets you view information record of every transaction within a certain period of time.</p>
    </center>
        <a href="transactionhistory.php" class="btn btn-primary">Transaction History</a>
      </div> 
    </div>
  </div>
</div>
</div>
<!-- end of main part -->


<!-- footer -->
<footer class="text-center mt-5 py-2 bg-light text-dark">
            <p> <b> Copyright &copy  2021 Made by Abhirup Chakraborty</b> <br>  
            <a href="mailto:abhirupchakraborty2014@gmail.com" onmouseover="this.style.color='aqua'" onmouseout="this.style.color='blue'">abhirupchakraborty2014@gmail.com<i class="fab fa-mail fa-2x"></i></a>
            </p>
          <div class="symbol">
                  <a href="https://www.linkedin.com/in/abhirup-chakraborty-790b511b5/" onmouseover="this.style.color='blue'" onmouseout="this.style.color='blue'"><i class="fab fa-linkedin fa-2x"></i></a>
				   <a href="https://www.instagram.com/abhirup._.chakraborty/" onmouseover="this.style.color='red'" onmouseout="this.style.color='red'"><i class="fab fa-instagram fa-2x"></i></a>
        
 </div>    
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>