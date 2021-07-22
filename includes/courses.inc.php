<?php

$cName = $_POST['cName'];
$cCode = $_POST['cCode'];
$cDesc = $_POST['cDesc'];
$cDept = $_POST['cDept'];
$Sem = $_POST['Sem'];
$Yr = $_POST['Yr'];
$Inst = $_POST['cInst'];
$results = $_POST['results'];

require_once 'functions.inc.php';
require_once 'dbh.inc.php';

if (!$conn) {
    die("connection failed" . mysqli_connect_error());
}
if (cExists($conn, $cCode) !== false) {
    header("location: ../signup.php?error=courseexists");
    exit();
 }
$sql = "INSERT INTO courses ( cCode, cName, cDesc, cDept, Sem, Yr, cInst,  Result)
VALUES ( '$cCode ','$cName', '$cDesc', '$cDept', '$Sem' , '$Yr' ,'$Inst' , '$results' )";
if (mysqli_query($conn, $sql)) {
    header("Location: ../courses.php?success");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    // header("Location: courses.php");
}

mysqli_close($conn);
