<?php
error_reporting(E_ALL);
if (isset($_POST['takeform'])) {
  if (empty($_POST['Sunday'])) {
    $sunday = "none";
  }else {
    $sunday = "Sunday";
  }
  if (empty($_POST['Monday'])) {
    $monday = "none";
  }else {
    $monday = "Monday";
  }
  if (empty($_POST['Tuesday'])) {
    $tuesday = "none";
  }else {
    $tuesday = "Tuesday";
  }
  if (empty($_POST['Wednesday'])) {
    $wednesday = "none";
  }else {
    $wednesday = "Wednesday";
  }
  if (empty($_POST['Thursday'])) {
    $thursday = "none";
  }else {
    $thursday = "Thursday";
  }
  if (empty($_POST['Friday'])) {
    $friday = "none";
  }else {
    $friday = "Friday";
  }
  if (empty($_POST['Saturday'])) {
    $saturday = "none";
  }else {
    $saturday = "Saturday";
  }
  $name = $_POST['name'];
  $email = $_POST['email'];
  $numb = $_POST['phone'];
  $trainer = $_POST['train'];
  $rad1 = $_POST['rad1'];
  $ins = $_POST['instructor'];
  $dates1 = $_POST['dates1'];
  $date = $_POST['date'];
  $times1 = $_POST['times1'];
  $time1 = $_POST['time1'];



  //operating
   $infor1 ='
  Name: '.$name.'
  Email: '.$email.'
  Number Phone: '.$numb.'
  Trainer: '.$trainer.'
  Personal Training: '.$rad1.'
  With Whom?: '.$ins.'
  When: On'.$sunday.' , '.$monday.' , '.$tuesday.' , '.$wednesday.' , '.$thursday.' , '.$friday.' , '.$saturday.'<br>
  ';
  if (empty($dates1)) {
    $out_date1 = 'Date(s):' .$date. '';
  }
  else {
    $out_date2 = 'Date(s):' .$dates1. '';
  }
  if (empty($times1)) {
    $out_time1 = 'Time(s):' .$time1. '';
  }
  else {
    $out_time2 = 'Time(s):' .$times1. '';
  }
  $infor2 = @$out_date1. '' .@$out_date2 .'
'.@$out_time1.''.@$out_time2;
  $infor = @$infor1 . '
' .@$infor2;
$from = $email;
$subject = "FeedBack";
$messages = $infor;
$to = 'richrdd68@gmail.com';
$headers = "From:" . $from;

@mail($to, $subject, $messages, $headers);
if(@mail)
{
    echo "pengiriman berhasil";
    header("Refresh:0.1;URL=../index.php");
}
else
{
    echo "pengiriman gagal";
    header("Refresh:0.1;URL=../index.php");
}
}


//secoind
if (isset($_POST['send_mail'])) {
  $yfname = $_POST['YFname'];
  $ylname = $_POST['YLname'];
  $phon = $_POST['Phone'];
  $mail = $_POST['email2'];
  $fill = $_POST['massa'];

  $incom = '
  First Name: '.$yfname.' Last Name: '.$ylname.'
  Number Phone: '.$phon.'
  Email: '.$mail.'
  Massangger: '.$fill.'
  ';
$from1 = $mail;
$subject1 = "Contack";
$messages1 = $incom;
$to1 = 'anggerpenceng10cm@gmail.com';
$headers1 = "From:" . $from1;

@mail($to1, $subject1, $messages1, $headers1);
if(@mail)
{
    echo "pengiriman berhasil";
    header("Refresh:0.1;URL=../index.php");
}
else
{
    echo "pengiriman gagal";
    header("Refresh:0.1;URL=../index.php");
}


}

 ?>
