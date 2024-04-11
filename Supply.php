<?php include "Constants.php"; ?>

<!DOCTYPE html>

<html lang="ua">

<head>
    
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Поставки</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <link href="css/style1.css" media="screen" rel="stylesheet">
    
    
    <style>
        /* Ваш стиль оформления */
        
    </style>
    
    
</head>

<body>
        <h1>Додати поставку</h1>
        <div class="form-container">
                <form action="add_supply.php" method="post">
                        <label for="date">Дата поставки:</label>
                        <input type="date" name="date" id="date" required>
            
                        <label for="spare_quantity">Кількість деталей:</label>
                        <input type="number" name="spare_quantity" id="spare_quantity" pattern="\d*" required>
            
                        <label for="spareId">ID деталі:</label>
                        <input type="text" name="spareId" id="spareId" pattern="\d*" required>
            
                        <button type="submit">Додати поставку</button>
            
        </form>
        
    </div>
    
</body>

</html>


<!DOCTYPE html>

<html lang="ua">

<head>
    
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Редагувати поставку</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 50px;
            
        }

        
        .form-container {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            
        }

        h1 {
            margin: 30px;
            font-size: 30px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Add text shadow for the outline effect */
            
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            
        }

        
        button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            
        }

        
    </style>
    
</head>

<body>
        <h1>Редагувати поставку</h1>
        <div class="form-container">

                <form action="edit_supply.php" method="post">
                        <label for="supply_id">ID поставки для редагування:</label>
                        <input type="text" name="id" id="supply_id" required>
            
                        <label for="date">Дата поставки:</label>
                        <input type="date" name="date" id="date" required>
            
                        <label for="spare_quantity">Кількість деталей:</label>
                        <input type="number" name="spare_quantity" id="spare_quantity" pattern="\d*" required>
            
                        <label for="spareID">ID деталі:</label>
                        <input type="text" name="spareID" id="spareID" pattern="\d*" required>
            
                        <button type="submit">Зберегти зміни</button>
            
        </form>
        
    </div>
    
</body>

</html>


<html lang="ua">

<head>
    
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Видалення поставки</title>
    
</head>

<body>
        <h1>Видалення поставки</h1>
        <div class="form-container">
                <form action="delete_supply_process.php" method="post" onsubmit="return confirm('Ви впевнені, що хочете видалити цю поставку?');">
                        <label for="supply_id">ID поставки для видалення:</label>
                        <input type="text" name="id" id="supply_id" required>
                        <button type="submit">Видалити поставку</button>
            
        </form>
        
    </div>
    
</body>

</html>


<!DOCTYPE html>

<html lang="ua">

<head>
    
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Список поставок</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 50px;
            
        }

        
        .container {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            
        }

        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            
        }

        
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
            background-color: #fff;
            
        }

        
        th {
            background-color: #f2f2f2;
            
        }

        
        .supply.expanded {
            background-color: #f0f0f0;
            
        }

        
        .hidden {
            display: none;
            
        }

        
        button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            
        }

        
    </style>
    
    
    <script>
                function toggleDetails(supplyId) {
                        var supplyDetails = document.getElementById('supply_' + supplyId);
                        supplyDetails.classList.toggle('expanded');
            
        }
        
                function toggleSuppliesVisibility() {
           	            var supplies = document.getElementsByClassName('supply');
           	            for (var i = 0; i < supplies.length; i++) {
               	                supplies[i].classList.toggle('hidden');
               
            }
            
                        var button = document.getElementById('toggleButton');
                        button.textContent = (button.textContent === 'Показати всі поставки') ? 'Сховати поставки' : 'Показати всі поставки';
            
        }
        </script>
    
</head>

<body>
        <h1>Список поставок</h1>
    
            <button id="toggleButton" onclick="toggleSuppliesVisibility()">Показати всі поставки</button>
    
            <table>
        
        <thead>
            
            <tr>
                
                <th>ID поставки</th>
                
                <th>Дата поставки</th>
                
                <th>Кількість деталей</th>
                
                <th>ID деталі</th>
                                
            </tr>
            
        </thead>
        
        <tbody>
                            <?php
                            $result = mysqli_query($link, "SELECT * FROM supply");
            
                            if ($result) {
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "
            <tr class='supply hidden' id='supply_" . $row[' id'] . "'>" ;
                echo "<td>" . $row['SupplyID'] . "</td>" ;
                echo "<td>" . $row['Date'] . "</td>" ;
                echo "<td>" . $row['spare_quantity'] . "</td>" ;
                echo "<td>" . $row['SpareID'] . "</td>" ;
                }
                } else {
                echo "Помилка: " . mysqli_error($link);
                }
                ?>
                
        </tbody>
        
    </table>
        </div>
    
</body>

</html>
