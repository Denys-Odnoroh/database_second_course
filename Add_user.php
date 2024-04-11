<?php
include "Constants.php";

// Обробка даних форми та вставка в базу даних
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $login = isset($_POST['login']) ? mysqli_real_escape_string($link, $_POST['login']) : '';
    $phone = isset($_POST['phone']) ? mysqli_real_escape_string($link, $_POST['phone']) : '';
    $email = isset($_POST['email']) ? mysqli_real_escape_string($link, $_POST['email']) : '';
    $address = isset($_POST['address']) ? mysqli_real_escape_string($link, $_POST['address']) : '';
    $password = isset($_POST['password']) ? mysqli_real_escape_string($link, $_POST['password']) : '';

    $sql = "SELECT * FROM users";
    $result = $link->query($sql);

    mysqli_query($link, "INSERT INTO users (id, login, phone, email, address, password) 
        VALUES (NULL, '$login', '$phone', '$email', '$address', '$password')");

    header('Location: /Users.php'); 
}
?>
