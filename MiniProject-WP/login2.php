<?php
define('DB_USER', "root"); // db user
define('DB_PASSWORD', "123456"); // db password (mention your db password here)
define('DB_DATABASE', "Complaint_portal"); // database name
define('DB_SERVER', "127.0.0.1"); // db server

$conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE) or die("unable to connect");

if ( isset($_POST['a_user']) && isset($_POST['a_pwd']) ) {
    
    $entered_username = $_POST['a_user'];
    $entered_password = $_POST['a_pwd'];
    
    $sql = "SELECT * FROM student WHERE s_sap = '$entered_username' AND pass ='$entered_password'";
    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_array($result);
    if(mysqli_num_rows($result) > 0) {
        session_start();
        $_SESSION['uname'] = $res['s_sap'];
        $_SESSION['id'] = $res['s_id'];
        header("Location: complaintform.php");
    } 
    else {
        header("location:a_login.php?activity=error");
    }
}

?>