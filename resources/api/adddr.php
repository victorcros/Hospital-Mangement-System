<?php
session_start();
include_once("../config/database.php");
include_once("../../tool.php");
$email = $password = $contact = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_firstname = isset($_POST['drfname']) ? $_POST['drfname'] : '';
    $_lastname = isset($_POST['drlname']) ? $_POST['drlname'] : '';
    $_contact = isset($_POST['drmobile']) ? $_POST['drmobile'] : '';
    $_gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $_dob = isset($_POST['dateofbirth']) ? $_POST['dateofbirth'] : '';
    $_qulifications = isset($_POST['dgr']) ? $_POST['dgr'] : '';
    $_qulification = "";
    foreach ($_qulifications as $dg) {
        $_qulification = $_qulification . " " . $dg;
    }


    $query = "INSERT INTO `doctor`(`fname`, `lname`, `contact`, `gender`, `dob`, `degree`) VALUES 
	('" . $_firstname . "','" . $_lastname . "','" . $_contact . "','" . $_gender . "','" . $_dob . "','" . $_qulification . "')";
    if (mysqli_query($conn, $query)) {
        header('Location: ' . "http://localhost/Hospital-Mangement-System/dashboard.php");
    } else {
        if (isset($_SESSION["userid"])) {
            unset($_SESSION["userid"]);
            header('Location: ' . "http://localhost/Hospital-Mangement-System/Login.php");
        } else {
            header('Location: ' . "http://localhost/Hospital-Mangement-System/Login.php");
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>