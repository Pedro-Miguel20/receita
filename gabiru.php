<?php

require __DIR__ . "/database.php";

$usm = $_POST["nome"];
$psm = $_POST["password"];

$hash_pass = password_hash(($psm), PASSWORD_DEFAULT);

$sql = "INSERT INTO user(username, hash) VALUES (?,?)";

$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql)) {
 
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, 'ss', $usm, $hash_pass);

mysqli_stmt_execute($stmt);

mysqli_close($conn);

require __DIR__ . "/database.php";

$sql05 = sprintf("SELECT * FROM user WHERE username = '%s'", $conn->real_escape_string($_POST["username"]));

$result = $conn->query($sql05);

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
