<head>
<title>Confirmation</title>
<style type="text/css">
  body{

    height=100%;
  }     
.bg {
      background-image:url(img/shirpur5.jpg);
     background-repeat:no-repeat;
    background-size:cover;
     height: 100%; 
}
  .button {
  background-color:crimson;
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
</style>
<meta charset="UTF-8" />
  <meta name="viewport" content= "width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<?php
$roomno = $_POST['RoomNo'];
$name = $_POST['Name'];
$email = $_POST['Email'];
$sap = $_POST['SapId'];
$phone = $_POST['Telephone'];
$sub = $_POST['Subject'];
$comm = $_POST['Comment'];
if (!empty($roomno) || !empty($name) || !empty($email) || !empty($sap) || !empty($phone) || !empty($sub) || !empty($comm)){
  $host = "127.0.0.1";
  $dbUsername = "root";
  $dbPassword = "123456";
  $dbname = "Complaint_portal";

  $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

  if (mysqli_connect_error()) {
    die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
  }
  else{
    $INSERT = "INSERT Into register (Roomno, Name, Email, SapId, Phone, Subject, Comments) values(?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($INSERT);
    $stmt->bind_param("issssss", $roomno, $name, $email, $sap, $phone, $sub, $comm);
    $stmt->execute();
    //echo "New Complaint recorded Successfully!"; 
  }
  $stmt->close();
  $conn->close();
}
else {
  echo "All fields are required";
  die();
}
?>
<body>
<div class="bg">
<br>
<br>
<div class="heading" id="home">
  <p>Complaint Registered<br>Successfully!</p>
</div><br><br><br><br><br><br><br><br><br><br><br><br>
<center><button type="button" class="button" onclick="window.location='complaintform.php'">New Complaint</button><br><br>
<button type="button" class="button" onclick="window.location='logout.php'">Logout</button>
</center>
</div>
</body>
