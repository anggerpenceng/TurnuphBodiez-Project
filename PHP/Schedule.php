<!DOCTYPE html>
<html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Schedule</title>
    <link rel="shortcut icon" href="../Image/icon_tab.png">
    <link rel="stylesheet" href="../CSS/StyleSheet.css" type="text/css">
    <script type="text/javascript" src="../JS/JQuery.js"></script>
    <script type="text/javascript" src="../JS/jv-page.js"></script>
  </head>
  <body>
    <div class="loding">
      <img src="../Image/default.gif" alt="">
    </div>
    <!-- Menu at media screen in 768px-->
    <div class="newmenu">
      <div class="close">&times;</div>
      <img src="../Image/Logo.png" alt="">
      <ul>
        <a href="../Index.php">Home</a><br>
        <div class="line7"></div>
        <a href="Classes.php">Classes</a><br>
        <div class="line7"></div>
        <a href="Schedule.php">Schedule</a><br>
        <div class="line7"></div>
        <a href="Program.php">Program</a><br>
        <div class="line7"></div>
        <a href="Rates.php">Rates</a><br>
        <div class="line7"></div>
        <a href="About.php">About Richard</a><br>
        <div class="line7"></div>
        <a href="Contact.php">Contact</a><br>
        <div class="line7"></div>
        <a href="TurnupBodies.php">TurnupBodies</a><br>
      </ul>
    </div>
    <!-- Way to call navbar new-->
    <div class="butt">
      <img src="../Image/menuhitam.png" alt="">
      <img src="../Image/logo bk.png" alt="" id="imleft">
    </div>
    <nav>
      <ul>
        <a href="../index.php">Home</a> &ensp;|&ensp; <a href="Classes.php">Classes</a> &ensp;|&ensp; <a href="#">Schedule</a> &ensp;|&ensp; <a href="Program.php">Program</a> &ensp;|&ensp;
        <a href="Rates.php">Rates</a> &ensp;|&ensp; <a href="About.php">About Richard</a> &ensp;|&ensp; <a href="Contact.php">Contact</a> &ensp;|&ensp; <a href="TurnupBodies.php">TurnupBodies</a>
      </ul>
      <img src="../Image/Logo.png" alt="">
    </nav>
    <section class="background2">
        <center><p class="headbox2">Schedule</p></center>
    </section>
    <div class="headclass">
      <img src="../Image/Schedule.png" alt="">
    </div>
    <section class="container" style="clear:both;margin-top:5%">
      <form class="form1" action="Logic-mail.php" method="post">
        <div class="boxget">
          <div class="boxleft">
            <p>Who Are you?</p>
          </div>
          <div class="boxright">
            Name:<br>
            <input type="text" name="name" placeholder="Alnord" class="place2"><br>
            Email:<br>
            <input type="email" name="email" placeholder="exemple@mail.com" class="place2"><br>
            Number Phone: <br>
            <input type="number" name="phone" placeholder="(404) 000 000" class="place2">
            <p></p>
          </div>
        </div>
        <div class="line3"></div>
          <!-- box 1-->
          <div class="boxget">
            <div class="boxleft">
              <p>WHAT ARE YOU LOKING FOR?</p>
            </div>
            <div class="boxright">
              <input type="text" name="train" placeholder="Personal Training" class="place2">
              <p></p>
            </div>
          </div>
          <div class="line3"></div>
          <!-- box 2-->
          <div class="boxget">
            <div class="boxleft">
              <p>Which Personal Training</p>
            </div>
            <div class="boxright" style="padding-top:0%">
              <input type="radio" name="rad1" value="All Personal Training (appointments)" id="rd1" class="form-radio"><label class="text1" for="rd1">All Personal Training (appointments)</label><br>
              <input type="radio" name="rad1" value="Senior Trainer-60 Minute Personal Training" id="rd2" class="form-radio"><label class="text1" for="rd2">Senior Trainer-60 Minute Personal Training</label><br>
              <input type="radio" name="rad1" value="Senior Trainer-30 Minute Personal Training" id="rd3" class="form-radio"><label class="text1" for="rd3">Senior Trainer-30 Minute Personal Training</label><br>
              <input type="radio" name="rad1" value="Master Trainer-60 Minute Personal Training" id="rd4" class="form-radio"><label class="text1" for="rd4">Master Trainer-60 Minute Personal Training</label>
            </div>
          </div>
          <div class="line3"></div>
          <!-- box 2-->
          <div class="boxget">
            <div class="boxleft">
              <p>With whom?</p>
            </div>
            <div class="boxright" style="margin-top:-1%;">
              <p>Select instructor:</p>
              <select class="" name="instructor">
                <option value="All Instructor">All Instructor</option>
                <option value="Richard">Richard</option>
                <option value="Bryan">Bryan</option>
              </select>
            </div>
          </div>
          <div class="line3" style="margin-top:3%;"></div>
          <!-- box 2-->
          <div class="boxget">
            <div class="boxleft">
              <p>When?</p>
            </div>
            <div class="boxright" style="margin-top:-1%;">
              <p>Week day:</p>&emsp;
                <input type="checkbox" name="Sunday" value="Sunday">Sun<input type="checkbox" name="Monday" value="Monday">Mon
                <input type="checkbox" name="Tuesday" value="Tuesday">Tue<input type="checkbox" name="Wednesday" value="Wednesday">Wed<input type="checkbox" name="Thursday" value="Thursday">Thu
                <input type="checkbox" name="Friday" value="Friday">Fri<input type="checkbox" name="Saturday" value="Saturday">Sat
              <!--________-->
              <div class="newbox">
                <p>Date(s):</p>&emsp;
                <select class="" name="dates1">
                  <option value="">--|--</option>
                  <option value="As soon as posible">As soon as posible</option>
                  <option value="next week">next week</option>
                </select> &ensp;<span class="or">or</span>&ensp; <input type="date" name="date"><br>
              </div>
              <!--________-->
              <div class="newbox">
                <p>Time(s):</p>&emsp;
                <select class="" name="times1">
                  <option value="">--|--</option>
                  <option value="Anytime">Anytime</option>
                  <option value="One week">one week</option>
                  <option value="One month">one month</option>
                </select> &ensp;<span class="or">or</span>&ensp; <input type="text" name="time1" placeholder="Choose your own time">
              </div>
            </div>
          </div>
          <div class="line3"></div>
          <center style="clear:both">
          <input type="submit" name="takeform" value="SUBMIT">
        </center>
    </section>
    <div class="copy">
      &copy; 2017 Duckskool
    </div>
  </body>
</html>
