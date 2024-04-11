<?php 
include "Constants.php";
    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $Model = $_POST["model"];
    $Production_start_date = $_POST["year"];
    $Brand = $_POST["brand"];
    $Country = $_POST["country"];

    $query = "UPDATE car_model SET Model='$Model', Production_start_date=$Production_start_date, Brand='$Brand', Country='$Country' WHERE ModelID=$id";

    if (mysqli_query($link, $query)) {
        echo "Дані про автомобіль оновлені успішно";
    } else {
        echo "Помилка при оновленні даних про автомобіль: " . mysqli_error($link);
    }
}
?>
