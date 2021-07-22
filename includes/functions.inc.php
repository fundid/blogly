<?php
function userExists($conn, $usersUser) {
    $sql = "SELECT * FROM users WHERE usersUser = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=userexists");
        exit();
                }
        mysqli_stmt_bind_param($stmt, "s" ,$usersUser);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($resultData)) {
            return $row;
        }
        else{
            $result = false;
            return $result;
        }
        mysqli_stmt_close($stmt);
}
function emailExists($conn, $usersEmail){
    $sql = "SELECT * FROM users WHERE usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=emailexists");
        exit();
                }
        mysqli_stmt_bind_param($stmt, "s" ,$usersUser);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($resultData)) {
            return $row;
        }
        else{
            $result = false;
            return $result;
        }
        mysqli_stmt_close($stmt);
}
    
function phoneExists($conn, $usersPhone) {
    $sql = "SELECT * FROM users WHERE usersPhone = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=phoneexists");
        exit();
                }
        mysqli_stmt_bind_param($stmt, "s" ,$usersPhone);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($resultData)) {
            return $row;
        }
        else{
            $result = false;
            return $result;
        }
        mysqli_stmt_close($stmt);
}
function passMatch($usersPass, $usersPass2){
    $result;
    if ($usersPass !== $usersPass2){
        $result = true;
    }
    else {
        $result = false;

    }
    return $result;
}
function createUser($conn,  $usersFirst, $usersMiddle, $usersLast, $usersPhone, $usersEmail, $usersUser, $usersPass) {
    $sql = "INSERT INTO users (usersFirst,	usersMiddle,	usersLast,	usersPhone,	usersEmail,	usersUser,	usersPass) VALUES (?, ?, ?, ?, ?, ?, ? );";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
                }
        mysqli_stmt_bind_param($stmt, "sssssss" , $usersFirst, $usersMiddle, $usersLast, $usersPhone, $usersEmail, $usersUser, $usersPass);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: ../signup.php?error=success");
        exit();

}
function loginUser($conn, $usersUser, $usersPass){
    $userExists = userExists($conn, $usersUser);

    if($userExists == false){
        header("location: ../login.php?error=wronglogin");
        exit();
    }

   $pass = $userExists["usersPass"];
   if($pass != $usersPass){
    header("location: ../login.php?error=wrongpassword");
    exit();
   }
   else if($pass == $usersPass){
    session_start();
    $_SESSION["userid"] = $userExists["usersId"];
    $_SESSION["user-name"] = $userExists["usersUser"];
    header("location: ../index.php");
    
    exit();
   }
}
function cExists($conn, $cCode) {
    $sql = "SELECT * FROM courses WHERE cCode = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../courses.php?error=courseexists");
        exit();
                }
        mysqli_stmt_bind_param($stmt, "s" ,$cCode);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($resultData)) {
            return $row;
        }
        else{
            $result = false;
            return $result;
        }
        mysqli_stmt_close($stmt);
}