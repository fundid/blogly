<?php
if (isset($_POST["submit"])) {
 $usersFirst = $_POST["first-name"];
 $usersMiddle = $_POST["middle-name"];
 $usersLast = $_POST["last-name"];
 $usersPhone = $_POST["phone-number"];
 $usersEmail = $_POST["email"];
 $usersUser = $_POST["user-name"];
 $usersPass = $_POST["password"];
 $usersPass2 = $_POST["password-repeat"];
 
 require_once 'dbh.inc.php';
 require_once 'functions.inc.php';

 if (userExists($conn, $usersUser) !== false) {
    header("location: ../signup.php?error=usernametaken");
    exit();
 }

 if (emailExists($conn, $usersEmail) !== false) {
    header("location: ../signup.php?error=emailtaken");
    exit();
 }

 if (phoneExists($conn, $usersPhone) !== false) {
    header("location: ../signup.php?error=phonetaken");
    exit();
 }
 if (passMatch($usersPass, $usersPass2) !== false) {
   header("location: ../signup.php?error=pass-invalid");
   exit();
}

createUser($conn, $usersFirst, $usersMiddle, $usersLast, $usersPhone, $usersEmail, $usersUser, $usersPass);

}
else {
    header("location: ../signup.php");
    exit();
}