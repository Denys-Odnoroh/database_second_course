<?php
include "Constants.php";

// Обробка даних форми та вставка в базу даних
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $name = isset($_POST['name']) ? mysqli_real_escape_string($link, $_POST['name']) : '';
    $phone = isset($_POST['phone']) ? mysqli_real_escape_string($link, $_POST['phone']) : '';
    $password = isset($_POST['password']) ? mysqli_real_escape_string($link, $_POST['password']) : '';

    $sql = "SELECT * FROM admin";
    $result = $link->query($sql);

    mysqli_query($link, "INSERT INTO admin (AdminID, Name, Phone, Password) 
        VALUES (NULL, '$name', '$phone', '$password')");

    header('Location: /Admin.php'); 
}
?>