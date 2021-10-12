<?php
  $username="root";
  $server="localhost";
  $pwd="Rio19032001#";
  $dbname="edu";
  $conn=mysqli_connect($server,$username,$pwd,$dbname);
  if(!$conn){
    echo "Error in Ajax";
    die();
  }
  $uname=$_GET['uname'];
  $email=$_GET['email'];
  $pwd=$_GET['pwd'];
  $sql="insert into signupform values('$uname','$email','$pwd')";
  $r=mysqli_query($conn,$sql);
  if($r){
    echo "<span class='fas fa-check-circle'></span> 
          <span class='msg' id='smodalmessage'></span>
          <span class='close-btn'>
              <span class='fas fa-times'></span>  
          </span>";
  }
  else
    echo "Error in SQL";
?>
<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="stylesheet" href="">
</head>

<body>
  <script src=""></script>
</body>
</html>
