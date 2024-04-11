<?php
include "Constants.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $SupplyID = $_POST["id"];
    $Date = $_POST["date"];
    $Spare_quantity = $_POST["spare_quantity"];
    $SpareID = $_POST["spareID"];


    $query = "UPDATE supply SET Date='$Date', spare_quantity='$Spare_quantity', SpareID='$SpareID' WHERE SupplyID=$SupplyID";

    if (mysqli_query($link, $query)) {
        echo "Дані про поставку оновлені успішно";
    } else {
        echo "Помилка при оновленні даних про поставку: " . mysqli_error($link);
    }
}
?>
