<?php include "Constants.php"; ?>

<!DOCTYPE html>

<html lang="ua">

<head>
    
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Деталі</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <link href="css/style1.css" media="screen" rel="stylesheet">
    
    
    <style>
        /* Ваш стиль оформления */
        
    </style>
    
    
</head>

<body>
        <h1>Додати деталь</h1>
        <div class="form-container">
                <form action="add_spare.php" method="post">            
                        <label for="name">Назва:</label>
                        <input type="text" name="name" id="name" required>
            
                        <label for="automotive_unit">Автомобільний вузол:</label>
                        <input type="text" name="automotive_unit" id="automotive_unit" pattern="[a-zA-ZА-Яа-яЁёІіЇїЄєҐґ]+" required>
            
                        <label for="price">Ціна:</label>
                        <input type="number" name="price" id="price" pattern="\d*" required>
            
                        <label for="quantity">Кількість:</label>
                        <input type="number" name="quantity" id="quantity" pattern="\d*" required>
            
                        <label for="car_model">Модель авто:</label>
                        <input type="text" name="car_model" id="car_model" required>
            
                        <button type="submit">Додати деталь</button>
            
        </form>
        
    </div>
    
</body>

</html>


<!DOCTYPE html>

<html lang="ua">

<head>
    
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Редагувати деталь</title>
    
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
        <h1>Редагувати деталь</h1>
        <div class="form-container">
                <form action="edit_spare.php" method="post">
                        <label for="spare_id">ID деталі для редагування:</label>
                        <input type="text" name="id" id="spare_id" required>
            
                        <label for="name">Назва:</label>
                        <input type="text" name="name" id="name" required>
            
                        <label for="automotive_unit">Автомобільний вузол:</label>
                        <input type="text" name="automotive_unit" id="automotive_unit" pattern="[a-zA-ZА-Яа-яЁёІіЇїЄєҐґ]+" required>
            
                        <label for="price">Ціна:</label>
                        <input type="number" name="price" id="price" pattern="\d*" required>
            
                        <label for="quantity">Кількість:</label>
                        <input type="number" name="quantity" id="quantity" pattern="\d*" required>
            
                        <label for="car_model">Модель авто:</label>
                        <input type="text" name="car_model" id="car_model" required>
            
                        <button type="submit">Зберегти зміни</button>
            
        </form>
        
    </div>
    
</body>

</html>


<html lang="ua">

<head>
    
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Видалення деталі</title>
    
</head>

<body>
        <h1>Видалення деталі</h1>
        <div class="form-container">
                <form action="delete_spare_process.php" method="post" onsubmit="return confirm('Ви впевнені, що хочете видалити цю деталь?');">
                        <label for="spare_id">ID деталі для видалення:</label>
                        <input type="text" name="id" id="spare_id" required>
                        <button type="submit">Видалити деталь</button>
            
        </form>
        
    </div>
    
</body>

</html>


<!DOCTYPE html>

<html lang="ua">

<head>
    
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Список деталей</title>
    
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

        
        .spare.expanded {
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
                function toggleDetails(spareId) {
                        var spareDetails = document.getElementById('spare_' + spareId);
                        spareDetails.classList.toggle('expanded');
            
        }
        
                function toggleSparesVisibility() {
           	            var spares = document.getElementsByClassName('spare');
           	            for (var i = 0; i < spares.length; i++) {
               	                spares[i].classList.toggle('hidden');
               
            }
            
                        var button = document.getElementById('toggleButton');
                        button.textContent = (button.textContent === 'Показати всі деталі') ? 'Сховати деталі' : 'Показати всі деталі';
            
        }
        </script>
    
</head>

<body>
        <h1>Список автомобілів</h1>
    
            <button id="toggleButton" onclick="toggleSparesVisibility()">Показати всі деталі</button>
    
            <table>
        
        <thead>
            
            <tr>
                
                <th>ID деталі</th>
                
                <th>Назва</th>
                
                <th>Автомобільний вузол</th>
                
                <th>Ціна</th>
                
                <th>Кількість</th>
                
                <th>Модель авто</th>

            </tr>
            
        </thead>
        
        <tbody>
                            <?php
                            $result = mysqli_query($link, "SELECT * FROM spare");
            
                            if ($result) {
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "
            <tr class='spare hidden' id='spare_" . $row[' id'] . "'>" ;
                echo "<td>" . $row['SpareID'] . "</td>" ;
                echo "<td>" . $row['Name'] . "</td>" ;
                echo "<td>" . $row['Automotive_unit'] . "</td>" ;
                echo "<td>" . $row['Price'] . "</td>" ;
                echo "<td>" . $row['Quantity'] . "</td>" ;
                echo "<td>" . $row['Car_model'] . "</td>" ;
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
