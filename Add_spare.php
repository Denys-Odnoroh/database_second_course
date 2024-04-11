<?php
include "Constants.php";

// Обробка даних форми та вставка в базу даних
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Name = isset($_POST['name']) ? mysqli_real_escape_string($link, $_POST['name']) : '';
    $Automotive_unit = isset($_POST['automotive_unit']) ? mysqli_real_escape_string($link, $_POST['automotive_unit']) : '';
    $Price = isset($_POST['price']) ? mysqli_real_escape_string($link, $_POST['price']) : '';
    $Quantity = isset($_POST['quantity']) ? mysqli_real_escape_string($link, $_POST['quantity']) : '';
    $Car_model = isset($_POST['car_model']) ? mysqli_real_escape_string($link, $_POST['car_model']) : '';

    $sql = "SELECT * FROM spare";
    $result = $link->query($sql);

    mysqli_query($link, "INSERT INTO spare (SpareID, Name, Automotive_unit, Price, Quantity, Car_model) 
        VALUES (NULL, '$Name', '$Automotive_unit', '$Price', '$Quantity', '$Car_model')");

    header('Location: /Spares.php'); 
}
?>