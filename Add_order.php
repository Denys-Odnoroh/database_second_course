<?php
include "Constants.php";

// Обробка даних форми та вставка в базу даних
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $Date = isset($_POST['date']) ? mysqli_real_escape_string($link, $_POST['date']) : '';
    $Price = isset($_POST['price']) ? mysqli_real_escape_string($link, $_POST['price']) : '';
    $UserID = isset($_POST['userId']) ? mysqli_real_escape_string($link, $_POST['userId']) : '';
    $Admin_phone_number = isset($_POST['admin_phone_number']) ? mysqli_real_escape_string($link, $_POST['admin_phone_number']) : '';
    $SpareID = isset($_POST['spareId']) ? mysqli_real_escape_string($link, $_POST['spareId']) : '';

    $sql = "SELECT * FROM orders";
    $result = $link->query($sql);

    mysqli_query($link, "INSERT INTO orders (OrderID, Date, Price, UserID, Admin_phone_number, SpareID) 
        VALUES (NULL, '$Date', '$Price', '$UserID', '$Admin_phone_number', '$SpareID')");

    header('Location: /Order.php'); 
}
?>
