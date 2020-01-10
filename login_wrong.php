<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" />
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,600&display=swap" rel="stylesheet">
  <link href="css/styles1.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <title>Login | SGSS</title>
  <header class="top-bar">
    <span class="title-left-pane">
      <span class="logo">
        <img class="header-image" src="assets/logo_p.png" alt="Government of Andhra Pradesh"></img>
      </span>
      <span class="branding">
        <h1 class="header-text">
          Government of Andhra Pradesh <br />
          ఆంధ్రప్రదేశ్ ప్రభుత్వం </br>
        </h1>
      </span>
    </span>
    <span class="date-time">
      <iframe src="http://free.timeanddate.com/clock/i73ldroc/n553/fn16/fcfff/tct/pct/tt0/tw0/tm1/td2/th2/tb4"
        frameborder="0" width="84" height="34" allowTransparency="true"></iframe>
    </span>
    <span class="nav-bar">
      <h2>
        Students Grievance Support System
        <span class="nav">
          <span class="dropdown">
            <button class="dropbtn"><i class="material-icons-outlined md-18">menu</i></button>
            <div class="dropdown-content">
              <a href="#">About</a>
              <a href="#">Contact</a>
              <a href="#">More</a>
            </div>
          </span>
          <a class="nav-links" href="help.html"><i class="material-icons-outlined md-18">help_outline</i></a>
          <a class="nav-links" href="home.html"><i class="material-icons-outlined md-18">home</i></a>
        </span>
      </h2>
    </span>
  </header>
  <div class="heading">
    <span class="page-head">
      Login
    </span>
  </div>
</head>

<body>
  <div class="container-special">
    <form action="validate.php?usr=<?php echo $_REQUEST["usr"];?>" method="POST">

      Email ID: <br> <input type="text" name="userid" class="text-box-err" required></input><br />
      Password: <br> <input type="password" name="pwd" class="text-pass-err" required></input><br>
      <button class="button-gen" type="submit">
        <span class="button-icon"><i class=" material-icons-outlined md-18">arrow_forward</i></span>
        <span class="button-text">Login</span>
      </button>
    </form>

    <br>
    Wrong email id or password. <br>
    <a href="signup.html">Sign Up</a> | <a href="forgot.html">Forgot Password</a>
  </div>
</body>
<footer class="footer">
  <div class="quick-links">
    <p>
      <a href="home.php">Home</a> |
      <a href="Contact.html">Contact</a> |
      <a href="Feedback.html">Feedback</a> |
      <a href="privacy.html">Privacy</a>
    </p>
  </div>
  <div class="contents">
    <p class="footer-text">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore ipsa sapiente, placeat minima ducimus minus
      dolore quo, voluptas exercitationem neque quisquam omnis commodi magnam nobis incidunt cum veniam. Velit,
      eveniet!
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem vel, laudantium, corrupti temporibus
      dolorem optio blanditiis minus impedit praesentium modi unde numquam ipsa asperiores cupiditate veritatis
      dolores
      sed fugit recusandae. Lorem ipsum dolor, sit amet consectetur adipisicing elit. A dignissimos facere minus,
      nesciunt magnam libero sapiente ad animi hic autem in voluptatibus nam? A quia aperiam voluptas, neque
      accusantium
      ea!
    </p>
  </div>
  <div class="copyright-notes">
    <span class="copyight-info">
      &copy; All rights reserved. 2019-2020, Government of AP.
    </span c>
  </div>
</footer>

</html>
