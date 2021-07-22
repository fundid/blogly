<?php

if (isset($_POST["submit"])) {
 $usersUser = $_POST["user-name"];
 $usersPass = $_POST["password"];

 require_once 'dbh.inc.php';
 require_once 'functions.inc.php';


loginUser($conn, $usersUser, $usersPass);

}
else {
    header('Location: ../login.php?error=fail');
    exit();
}
