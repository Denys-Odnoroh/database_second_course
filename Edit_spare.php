<?php
include "Constants.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $Name = $_POST["name"];
    $Automotive_unit = $_POST["automotive_unit"];
    $Price = $_POST["price"];
    $Quantity = $_POST["quantity"];
    $Car_model = $_POST["car_model"];

    $query = "UPDATE spare SET Name='$Name', Automotive_unit='$Automotive_unit', Price=$Price, Quantity='$Quantity', Car_model='$Car_model' WHERE SpareID=$id";

    if (mysqli_query($link, $query)) {
        echo "Дані про деталь оновлені успішно";
    } else {
        echo "Помилка при оновленні даних про деталь: " . mysqli_error($link);
    }
}
?>
