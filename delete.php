<?php
    //  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
    session_start();
if(isset($_POST["id"]))
{
    $conn = new mysqli("localhost", "root", "", "shug");
    if($conn->connect_error){
        die("Ошибка: " . $conn->connect_error);
    }
    $userid = $conn->real_escape_string($_POST["id"]);
    $sql = "DELETE FROM users WHERE id = '$userid'";
    if($conn->query($sql)){
    }
    else{
        echo "Ошибка: " . $conn->error;
    }
    $conn->close();
}
header('Location:users.php')
?>