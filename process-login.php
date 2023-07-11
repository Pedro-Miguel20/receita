<?php

require __DIR__ . "/database.php";

$sql01 = sprintf("SELECT * FROM user WHERE username = '%s'", $conn->real_escape_string($_POST["username2"]));

$result = $conn->query($sql01);

$user = $result->fetch_assoc();

if ( ! $user) {
    
    header("Location: home.php");
    exit;
    
    } else {
       
    if (password_verify($_POST["password2"], $user["hash"])) {
        
        session_start();
        
        session_regenerate_id();
        
        $_SESSION["user_id"] = $user["id"];
       
        header("Location: home.php");
        exit;
        
    }
}

?>
