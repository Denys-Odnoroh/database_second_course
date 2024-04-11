<?php
include "Constants.php";

// Обробка даних форми та вставка в базу даних
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    // Перевіряємо, чи існують ключі "Model", "Production_start_date", "Brand" і "Country" у масиві $_POST
    $Model = isset($_POST['model']) ? mysqli_real_escape_string($link, $_POST['model']) : '';
    $Production_start_date = isset($_POST['year']) ? intval($_POST['year']) : 0;
    $Brand = isset($_POST['brand']) ? mysqli_real_escape_string($link, $_POST['brand']) : '';
    $Country = isset($_POST['country']) ? mysqli_real_escape_string($link, $_POST['country']) : '';

    $sql = "SELECT * FROM Car_model";
    $result = $link->query($sql);

    mysqli_query($link, "INSERT INTO car_model (ModelID, Model, Production_start_date, Brand, Country) 
        VALUES (NULL, '$Model', '$Production_start_date', '$Brand', '$Country')");

    header('Location: /Car_model.php'); 
}
?>
