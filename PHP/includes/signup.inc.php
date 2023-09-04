<?php
if (isset($_POST["submit"])){
    $Firstname = $_POST["Firstname"];
    $Lastname  = $_POST["Lastname"];
    $Email     = $_POST["Email"];
    $Mobile_No = $_POST["Mobile_No"];
    $NIC_No    = $_POST["NIC_No"];
    $username  = $_POST["username"];
    $Password  = $_POST["Password"];
    $Re_password = $_POST["Re_password"];
    $Address   = $_POST["Address"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    
    $emptyInputs = emtyInputsSignup($Firstname, $Lastname, $Email, $Mobile_No, $NIC_No,  $username, $Password, $Re_password, $Address);
    $invalidUid  = invalidUid($username);
    $invalidEmail= invalidEmail($Email);
    $PwdMatch    = pwdMatch($Password ,$Re_password);
    $uidExists   = uidExists($conn, $username, $Email);


    if($emtyInputs !==false){
        header("Location:../signin.php?error=emtyinput");
        exit();
    }

    if($invalidUid!==false){
        header("Location:../signin.php?error=invalidUid");
        exit();
    }

    if($invalidEmail!==false){
        header("Location:../signin.php?error=invalidEmail");
        exit();
    }
    if($PwdMatch!==false){
        header("Location:../signin.php?error=PasswordDoseNotMatch");
        exit();
    }
    
    if($uidExists!==false){
        header("Location:../signin.php?error=uidExists");
        exit();
    }

    createUser($conn, $name, $email, $username, $password);
}   
else {
    header('Location:../login.php');
}