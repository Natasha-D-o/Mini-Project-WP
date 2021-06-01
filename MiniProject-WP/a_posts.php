<?php

define('DB_USER', "root"); // db user
define('DB_PASSWORD', "123456"); // db password (mention your db password here)
define('DB_DATABASE', "Complaint_portal"); // database name
define('DB_SERVER', "127.0.0.1"); // db server

    session_start();

    $conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE) or die("unable to connect");

    if ( !isset($_SESSION['id']) ) {
        header("Location: a_login.php?activity=expired");
    }

    $sql = "SELECT Id, Roomno, Name, Email, SapId,Phone,Subject,Comments FROM register order by Id asc";
    $result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>College Portal</title>
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./home.css">
</head>
<body>
    <nav>
        <img id="logo" src="img\logo.png" alt="">
        <ul>
            <!-- <li id="navbar">
                <a href="#">Boys Hostel</a>
            </li> -->
            <li id="navbar">
                <a href="logout.php">Logout</a>
            </li>
        </ul>
    </nav>
    <div class="box">
        <ul class="dashboard">
            <div class="profile">
                <img id="profile" src="src\profile.png" alt="">
                <a style="font-size: 25px" href="#"><?php echo $_SESSION["uname"] ?></a>
            </div>
            <hr>
            <div class="leftbox">    
                <li id="left-box"><a href="a_posts.php" style="color: black">Complaints</a></li>
            </div> 
        </ul>

        <div class="box2">
        <?php
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
        ?>

            
            <div class="post-container">
                <label class="post">
                    <b><?php echo "Sno.: ".$row["Id"]; ?></b>
                </label>
                <br>
                <label class="post">
                    <b><?php echo "Room No.: ".$row["Roomno"]; ?></b>
                </label>
                <br>
                <label class="post">
                    <b><?php echo "Name: ".$row["Name"]; ?></b>
                </label>
                <br>
                <label class="post">
                    <b><?php echo "Email: ".$row["Email"]; ?></b>
                </label>
                <br>
                 <label class="post">
                    <b><?php echo "Sap Id: ".$row["SapId"]; ?></b>
                </label>
                <br>
                <label class="post">
                    <b><?php echo "Phone: ".$row["Phone"]; ?></b>
                </label>
                <br>
                <label class="post">
                    <b><?php echo "Issue: ".$row["Subject"]; ?></b>
                </label>
                <br>
               <label class="post">
                <p style="white-space:pre-wrap"><?php echo "Details: ".$row["Comments"]; ?></p>
                </label>
            </div>
        
        <?php
                }
        }
        $conn->close();

        ?>
    </div>
    </div>
</body>
</html>