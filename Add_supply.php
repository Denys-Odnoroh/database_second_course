<?php
include "Constants.php";

// Обробка даних форми та вставка в базу даних
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Date = isset($_POST['date']) ? mysqli_real_escape_string($link, $_POST['date']) : '';
    $Spare_quantity = isset($_POST['spare_quantity']) ? mysqli_real_escape_string($link, $_POST['spare_quantity']) : '';
    $SpareID = isset($_POST['spareId']) ? mysqli_real_escape_string($link, $_POST['spareId']) : '';

    $sql = "SELECT * FROM supply";
    $result = $link->query($sql);

    mysqli_query($link, "INSERT INTO supply (SupplyID, Date, spare_quantity, SpareID) 
        VALUES (NULL, '$Date', '$Spare_quantity', '$SpareID')");

    header('Location: /Supply.php'); 
}
?>
