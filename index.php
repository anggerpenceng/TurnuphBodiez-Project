<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>TURNUPHBODIEZ</title>
    <link rel="shortcut icon" href="Image/icon_tab.png">
    <link rel="stylesheet" href="CSS/StyleSheet.css" type="text/css">
    <script type="text/javascript" src="JS/JQuery.js"></script>
    <script type="text/javascript" src="JS/javalogic.js"></script>
  </head>
  <body>
    <div class="loding">
      <img src="Image/default.gif" alt="">
    </div>
    <!-- Menu at media screen in 768px-->
    <div class="newmenu">
      <div class="close">&times;</div>
      <img src="Image/Logo.png" alt="">
      <ul>
        <a href="#">Home</a><br>
        <div class="line7"></div>
        <a href="PHP/Classes.php">Classes</a><br>
        <div class="line7"></div>
        <a href="PHP/Schedule.php">Schedule</a><br>
        <div class="line7"></div>
        <a href="PHP/Program.php">Program</a><br>
        <div class="line7"></div>
        <a href="PHP/Rates.php">Rates</a><br>
        <div class="line7"></div>
        <a href="PHP/About.php">About Richard</a><br>
        <div class="line7"></div>
        <a href="PHP/Contact.php">Contact</a><br>
        <div class="line7"></div>
        <a href="PHP/TurnupBodies.php">TurnupBodies</a><br>
      </ul>
    </div>
    <!-- Way to call navbar new-->
    <div class="butt">
      <img src="Image/menuhitam.png" alt="">
      <img src="Image/logo bk.png" alt="" id="imleft">
    </div>
    <nav>
      <ul>
        <a href="#">Home</a> &ensp;|&ensp; <a href="PHP/Classes.php">Classes</a> &ensp;|&ensp; <a href="PHP/Schedule.php">Schedule</a> &ensp;|&ensp; <a href="PHP/Program.php">Program</a> &ensp;|&ensp;
        <a href="PHP/Rates.php">Rates</a> &ensp;|&ensp; <a href="PHP/About.php">About Richard</a> &ensp;|&ensp; <a href="PHP/Contact.php">Contact</a> &ensp;|&ensp; <a href="PHP/TurnupBodies.php">TurnupBodies</a>
      </ul>
      <img src="Image/Logo.png" alt="">
    </nav>
    <header>
      <div class="profile">
        <div class="line">
        </div>
        <h1>PERSONAL TRAINING<br>
        <span id="op2">AND LIFE COACHING</span></h1>
        <div class="line2">
        </div>
          <img src="Image/trainer.png" alt="">
      </div>
    </header>
    <!-- CONTENT -->
    <section class="container">
      <div class="head1" style="margin-top:-0.5%;" id="headid">
        <center><h1 class="headbox" id="newid">Classes</h1></center>
      </div>
      <p>Click on a day to view schedule</p>
      <div class="group_button">
          <button type="button" name="button1" class="gov" id="cli1">Sunday</button>
          <button type="button" name="button2" class="btn1" id="cli2">Monday</button>
          <button type="button" name="button3" class="btn1" id="cli3">Tuesday</button>
          <button type="button" name="button4" class="btn1" id="cli4">Wednesday</button>
          <button type="button" name="button5" class="btn1" id="cli5">Thursday</button>
          <button type="button" name="button6" class="btn1" id="cli6">Friday</button>
          <button type="button" name="button7" class="btn1" id="cli7">Saturday</button>
      </div>
      <div class="class">
        <img src="Image/classes sun.png" alt="" id="img1">
        <img src="Image/classes mon.png" alt="" id="img2">
        <img src="Image/classes Tue.png" alt="" id="img3">
        <img src="Image/classes Wed.png" alt="" id="img4">
        <img src="Image/classes Thu.png" alt="" id="img5">
        <img src="Image/classes fri.png" alt="" id="img6">
        <img src="Image/classes sat.png" alt="" id="img7">
	  </div>
    </section>
    <section class="container" style="clear:both;">
      <img src="Image/pexels-photo-136410.jpg" alt="">
      <div class="head1" style="margin-top:-0.5%;" id="headid">
        <center><h1 class="headbox">Schedule</h1></center>
      </div>
      <form class="form1" action="PHP/Logic-mail.php" method="post"><!-- box 1-->
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
      </form>
    </section>
    <!-- Line hiet -->
    <div class="head2">
      <p>BEGIN YOUR JOURNEY TO A BETTER PHYSIQUE TODAY!</p>
    </div>
    <section class="contaner" style="clear:both">
      <div class="head1" style="margin-bottom:-2.5%;width:101.4%;margin-left:-1%;">
        <center><h1 class="headbox" id="newid">Programs</h1></center>
      </div>
      <div class="boxget">
        <div class="boxleft2">
          <center>
          <span class="textbox1">Welcome to TURNUPHBODIEZ</span>
        </center>
        </div>
        <div class="boxright2">
          <p>Training Program <br>
          <span class="textlogo">&emsp;How It Works</span><span class="aks">?</span></p>
        </div>
        </div>
    </section>
    <section class="minicontent" style="clear:both">
      <div class="minnileft">
        <ul>
          <li>PERSONAL TRAINING</li>
        </ul>
        <p>Our Personal Trainers are skilled professionals with extensive experience and are nationally certified by the
          American College of Sports Medicine, the International Fitness Professionals Association, and/or American Council on Exercise.
          They possess the knowledge and skills needed to design and implement safe and effective workout programs for both general and special populations.
          Your Personal Trainer will work hard to help you achieve your goals while keeping you motivated and most importantly, accountable.  They are invested in seeing you succeed!</p>
        <ul>
          <li>NUTRITIONAL GUIDANCE</li>
        </ul>
        <p>No amount of exercise will reshape your body without appropriate nutrition.
          If you want to lose weight easily, never feel hungry, have increased energy, and keep the fat off forever, there is only one surefire way,
           and MPT trainers know it well.  We know that maintaining a well-rounded diet can be challenging.  Poor eating habits, busy lifestyles and
           conflicting information about food make it even more challenging.  We offer straightforward simple solutions that will have you and your
           family headed in the right direction. </p>
      </div>
      <!-- line right -->
      <div class="minniright">
      <ul>
        <li>ONLINE TRAINING</li>
      </ul>
      <p>KMO offers affordable,quality training for highly motivated individulas that are unwilling or unable to work with me in the studio.
        I equip you with the knowledge and tools you need to succeed in your wellness goals.  Training is customized to the individual and covers
        nutrition,supplements,workout programs,on-line support and that accountability that will help you achieve your goals and reach your personal best.
         Email for more information at info@moffettpersonaltraining.com <br><br></p>
      <ul>
        <li>COMPETITION TRAINING</li>
      </ul>
      <p>As a top 3 Nationally ranked Figure and Bikini competitor, I know what it takes to succeed in this sport.  Competition training encompasses every detail that
        goes into transitioning from gym to stage-including nutrition,workouts and image prep.  If you are serious about being the best that you can be and competing
        at your personal best you owe it to yourself to invest in a coach that walks the walk and knows what it takes to be a winner.  Email me today for more information
        at info@moffettpersonaltraining.com </p>
      </div>
    </section>
    <!-- RATES LINE -->
    <section class="container" style="clear:both;">
      <div class="head1">
        <center><h1 class="headbox" style="width:11%">Rates</h1></center>
      </div>
      <div class="line4">
      </div>
      <p class="textcover">THE MOST AFFORDABLE AND EXPERIENCED TRAINERS IN Atlanta</p>
    </div>
    <div class="line4">
    </div>
    <p>Please call 404-964-9685 to schedule an appointment for your free consultation</p>
    </section>
    <section class="container" style="clear:both;">
      <table class="tablenew">
        <tr>
          <th>Nummber of session</th>
          <th id="bactab1">Price per session</th>
          <th>Total Price</th>
          <th id="bactab2">Saving</th>
          <th>Avarage lenght of session</th>
        </tr>
        <!-- line table -->
        <tr>
          <td style="background-color:#008582;color:white">1</td>
          <td>$80</td>
          <td>$80</td>
          <td>-</td>
          <td>-</td>
        </tr>
        <!-- line table -->
        <tr>
          <td style="background-color:#009899;color:white;">4</td>
          <td>$70</td>
          <td>$280</td>
          <td>$55</td>
          <td>1-2 weeks</td>
        </tr>
        <!-- line table -->
        <tr>
          <td style="background-color:#008582;color:white">12</td>
          <td>$65</td>
          <td>$780</td>
          <td>$195</td>
          <td>4-6 weeks</td>
        </tr>
        <!-- line table -->
        <tr>
          <td style="background-color:#009899;color:white;">24</td>
          <td>$60</td>
          <td>$1,440</td>
          <td>$480</td>
          <td>2-3 months</td>
        </tr>
        <!-- line table -->
        <tr>
          <td style="background-color:#008582;color:white">48</td>
          <td>$55</td>
          <td>$2,640</td>
          <td>$1,215</td>
          <td>4-6 months</td>
        </tr>
      </table>
    </section>
    <section class="container" style="clear:both;">
      <div class="boxleft3">
        <img src="Image/tag2.png" alt="">
        <p>&emsp;CURRENT SPECIAL<br>
        <span class="text2">&emsp;$49 PER SESSION + TAX</span></p>
        <ul class="listnew">
          <li><p>&#9745; 5 TRAINING SESSION FOR ONLY $250</p></li>
          <div class="line5"></div>
          <li><p>&#9745; Buddy Training Discount</p></li>
          <div class="line5"></div>
          <li><p>&#9745; Senior Discount</p></li>
        </ul>
      </div>
      <div class="boxright3">
      <a href="#">
        <div class="alert">
          <p>Ask<br>
          me</p>
        </div>
        <div class="textcir">
          <p>about my discount <br>
          for "<b>non-prime</b>" hours!</p>
        </div>
        </a>
      </div>
    </section>
    <!-- Skype is -->
    <section class="container" style="clear:both;">
      <div class="background1">
        <center><img src="Image/skyp.png" alt=""></center>
        <p>Skype Personal Training/Consulting <span class="regu">(Pricing vary)</span> <br> Corporate or Home Training</p>
        <div class="newbox2">
          <span class="newtext1">Each session runs an hour in length. There is no membership fee, or any other fees.
            Unlike other gyms, you can pay as you go at FLEX—there is no big sign-up to get our
            special. Your training with us also includes a diet and cardio program — everything will be
            laid out for you. Generally our clients book 2 to 3 sessions a week to obtain their fitness
            goals. If you are interested, we can set you up with a free 30 minute consultation!</span>
        </div>
        <div class="cirbox1">
          <p>Contact Us Now For a Free Consultation</p>
        </div>
      </div>
    </section>
    <!-- ABOUT RICHARD -->
    <section class="container">
      <div class="head1">
        <center><h1 class="headbox" style="width:20%;">About Richard</h1></center>
      </div>
      <div class="img2">
        <img src="Image/Instagram-Logo.png" alt="">
      </div>
      <div class="img">
      <img src="Image/instagram.png" alt="">
      </div>

    </section>
    <section class="container">
      <div class="background1 heighnew" style="padding-top:5%;">
        <form class="form2" action="PHP/Logic-mail.php" method="post">
          <h5>Contact</h5>
          <p>Are you ready to get in the best shape of your life?</p>
          <span class="newtext2">The first step to get started with personal training is to fill out the form below.
          I'll get <br>back to you within 24 Hours. Thank you!</span><br><br>
          <span class="subs">Full Name:</span><br>
          <input type="text" name="YFname" value="" placeholder="First Name" class="place2"><input type="text" name="YLname" value="" placeholder="Last Name" class="place2"><br><br>
          <span class="subs">Phone:</span><br>
          <input type="text" name="Phone" value="" placeholder="Phone" class="place2"><br><br>
          <span class="subs">Email:</span><br>
          <input type="email" name="email2" value="" placeholder="username@email.com" class="place2"><br><br>
          <span class="subs">Your Message:</span><br>
          <textarea name="massa"></textarea>
          <input type="submit" name="send_mail" value="SEND">
        </form>
        <div class="boxright4">
          <img src="Image/Picture1.png" alt="">
          <div class="line6">
          </div>
          <h5>Richard Dillwood <br>(404) 964-9685</h5>
          <div class="line6" style="margin-top:3%">
          </div>
        </div>
      </div>
    </section>
    <div class="copy">
      &copy; 2017 Duckskool
    </div>
  </body>
</html>
