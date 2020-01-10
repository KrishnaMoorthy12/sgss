<!DOCTYPE html>

<?php 

session_start();
$_SESSION["logged_in"] = true;       
$userid = $_SESSION["userid"];
$name = $_SESSION["name"];
$usr = $_SESSION["usr"];

?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" />
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,600&display=swap" rel="stylesheet">
  <link href="css/styles1.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <title>New Complaint | SGSS</title>
  <header class="top-bar">
    <span class="logo">
      <img class="header-image" src="assets/logo_p.png" alt="Government of Andra Pradesh"></img>
    </span>
    <span class="branding">
      <h1 class="header-text">
        Government of Andra Pradesh <br />
        ఆంధ్రప్రదేశ్ ప్రభుత్వం </br>
      </h1>
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
          <a class="nav-links" href="help.php"><i class="material-icons-outlined md-18">help_outline</i></a>
          <a class="nav-links" href="home.html"><i class="material-icons-outlined md-18">home</i></a>
        </span>
      </h2>
    </span>
  </header>
  <div class="heading">
    <span class="page-head">
      New Complaint
    </span>
    <span class="dropdown-user">
      <button class="dropbtn">
        <span class="user-info">
          <span class="info-text">
            <p>
          <?php echo $name; ?> <br />
          <?php echo $usr; ?>
        </p>
          </span>
          <span class="img-user">
            <img class="user-image" src="assets/user.png" width="50" height="50">
          </span>
        </span>
      </button>
      <div class="dropdown-content-user">
        <a href="#"> My Profile</a>
        <a href="logout.php"> Log out</a>
      </div>
  </div>
</head>

<body>
  <div class="container-special">
    <form action="submit.php" method="POST">

      Level: <br>
      <select class="categories-list" name="level" required>
        <option class="" value="University">University</option>
        <option class="" value="College">College</option>
        <option class="" value="Department">Department</option>
      </select>
      <br>
      <br>

      Category: <br>
      <select class="categories-list" name="category" required>
        <option class="option" value="Admission">Admission</option>
        <option class="option" value="Exams">Exams</option>
        <option class="option" value="Finance">Finance</option>
        <option class="option" value="Lecture">Lecture</option>
        <option class="option" value="Ragging">Ragging</option>
        <option class="option" value="Other">Other</option>
      </select>
      <br><br>

      Subject:<br>
      <input type="text" class="text-box" name="subject" placeholder="Type your subject here..." required></input>
      <br />

      Description: <br>
      <textarea class="description" name="description" placeholder="Your description goes here..." required></textarea>

      <br>

      <button class="button-gen" type="submit">
        <span class=" button-icon"><i class=" material-icons-outlined md-18">done</i></span>
        <span class="button-text">Submit</span>
      </button>

    </form>
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
