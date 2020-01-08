<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" />
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,600&display=swap" rel="stylesheet">
  <link href="../css/styles2.css" rel="stylesheet">
  <title>Subject</title>
  <header class="top-bar">
    <span class="title-left-pane">
      <span class="logo">
        <img class="header-image" src="../assets/logo_p.png" alt="Government of Andhra Pradesh"></img>
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
          <a class="nav-links" href="home.html"><i class="material-icons-outlined md-18">help_outline</i></a>
          <a class="nav-links" href="home.html"><i class="material-icons-outlined md-18">home</i></a>
        </span>
      </h2>
    </span>
  </header>
  <?php 

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "test_1";

        $conn = mysqli_connect("$servername", "$username", "$password", "$dbname");
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }
        
        $id = $_REQUEST["id"];
        $sql = "SELECT * FROM test_1.test where id = $id";
        $result = mysqli_query($conn, $sql);
        $report = mysqli_fetch_assoc($result);
?>
  <div class="heading">
    <span class="complaint-sub">
      <?php echo $report["subject"] ?>
    </span>
    <span class="dropdown-user">
      <button class="dropbtn"><span class="user-info">
        <span class="info-text">
        <p>
          User <br />
          Committee Member
        </p>
        </span>
        <span class="img-user">
          <img class="user-image" src="../assets/user.png" width="50" height="50">
        </span>
      </span>
    </button>
    <div class="dropdown-content-user">
      <a href="#"> My Profile</a>
      <a href="#"> Log out</a>
    </div>
  </div>
</head>


<body>
  <div class="container">
    <div class="details">
      <table class="detail-table">
        <tr>
          <td class="left"> Level : </td>
          <td><?php echo $report["level"] ?></td>
        </tr>
        <tr>
          <td class="left"> University : </td>
          <td><?php echo $report["university"] ?></td>
        </tr>
        <tr>
          <td class="left"> College : </td>
          <td><?php echo $report["college"] ?></td>
        </tr>
        <tr>
          <td class="left">Category : </td class="left">
          <td><?php echo $report["category"] ?></td>
        </tr>
      </table>
    </div>
    <div class="message">
      <textarea readonly class="message-box">
        <?php 
          echo $report["description"];
          mysqli_query($conn, "UPDATE test_1.test SET sts = 'Read' WHERE id = $id && sts = 'Unread'");
        ?>
      </textarea>
    </div>
    <div class="actions">
      <form type = "POST">
      <span class ="button-left">
      <button class="button" alt="Print Screen" onclick="window.print();">
        <span class="button-icon"><i class="material-icons-outlined md-18">print</i></span>
        <span class="button-text">Print Report</span>
      </button>
      </span>

      <span class="button-right">
      <button type = "submit" class="button-alert" onclick="<?php $cmd = "UPDATE test_1.test SET sts = 'Spam' WHERE id = $id";?>">
        <span class="button-icon"><i class="material-icons-outlined md-18">error_outline</i></span>
        <span class="button-text">Mark as Spam</span>
      </button>
      </span>

      <div class="send">

      <span class ="button-left">
        <button type = "submit" class="button-pending" onclick="<?php $cmd = "UPDATE test_1.test SET sts = 'Pending' WHERE id = $id";?>">
          <span class="button-icon"><i class="material-icons-outlined md-18">notification_important</i></span>
          <span class="button-text">Mark as Pending</span>
        </button>
      </span>

      <span class="button-right">
        <button type = "submit" class="button-positive" onclick="<?php $cmd = "UPDATE test_1.test SET sts = 'Sent' WHERE id = $id";?>">
          <span class="button-icon"><i class="material-icons-outlined md-18">send</i></span>
          <span class="button-text">Send to Head</span>
        </button>
      </span> 
      </form>
      <?php 
      if (isset($_POST["submit"])) {
        mysqli_query($conn, $cmd);
      }
      ?>
      </div>
    </div>
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
    </span>
  </div>
</footer>

</html>