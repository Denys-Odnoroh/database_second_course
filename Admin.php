<?php include "Constants.php"; ?>

<!DOCTYPE html>

<html lang="ua">

<head>
    
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Адміністратори</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <link href="css/style1.css" media="screen" rel="stylesheet">
    
    
    <style>
        /* Ваш стиль оформления */
        
    </style>
    
    
</head>

<body>
        <h1>Додати адміністратора</h1>
        <div class="form-container">
                <form action="add_admin.php" method="post">            
                        <label for="Name">Ім'я:</label>
                        <input type="text" name="name" id="Name" pattern="[a-zA-ZА-Яа-яЁёІіЇїЄєҐґ]+" required>
            
                        <label for="phone">Телефон:</label>
                        <input type="text" name="phone" id="phone" pattern="\d*" required>

                        <label for="password">Пароль:</label>
                        <input type="text" name="password" id="password" maxlength="30" minlength="5" required>
            
                        <button type="submit">Додати адміністратора</button>
            
        </form>
        
    </div>
    
</body>

</html>


<!DOCTYPE html>

<html lang="ua">

<head>
    
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Редагувати інформацію про адміністратора</title>
    
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
        <h1>Редагувати інформацію про адміністратора</h1>
        <div class="form-container">
                <form action="edit_admin.php" method="post">
                        <label for="admin_id">ID адміністратора для редагування:</label>
                        <input type="text" name="id" id="admin_id" required>
            
                        <label for="Name">Ім'я:</label>
                        <input type="text" name="name" id="Name" pattern="[a-zA-ZА-Яа-яЁёІіЇїЄєҐґ]+" required>
            
                        <label for="phone">Телефон:</label>
                        <input type="text" name="phone" id="phone" pattern="\d*" required>

                        <label for="password">Пароль:</label>
                        <input type="text" name="password" id="password" minlength="5" required>
            
                        <button type="submit">Зберегти зміни</button>
            
        </form>
        
    </div>
    
</body>

</html>


<html lang="ua">

<head>
    
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Видалення адміністратора</title>
    
</head>

<body>
        <h1>Видалення адміністратора</h1>
        <div class="form-container">
                <form action="delete_admin_process.php" method="post" onsubmit="return 
                    confirm('Ви впевнені, що хочете видалити цього адміністратора?');">
                        <label for="admin_id">ID адміністратора для видалення:</label>
                        <input type="text" name="id" id="admin_id" required>
                        <button type="submit">Видалити адміністратора</button>
            
        </form>
        
    </div>
    
</body>

</html>


<!DOCTYPE html>

<html lang="ua">

<head>
    
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Список адміністраторів</title>
    
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

        
        .admin.expanded {
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
                function toggleDetails(adminId) {
                        var adminDetails = document.getElementById('admin_' + adminId);
                        adminDetails.classList.toggle('expanded');
            
        }
        
                function toggleAdminsVisibility() {
           	            var admins = document.getElementsByClassName('admin');
           	            for (var i = 0; i < admins.length; i++) {
               	                admins[i].classList.toggle('hidden');
               
            }
            
                        var button = document.getElementById('toggleButton');
                        button.textContent = (button.textContent === 'Показати всіх адміністраторів') ? 'Сховати адміністраторів' : 'Показати всіх адміністраторів';
            
        }
        </script>
    
</head>

<body>
        <h1>Список адміністраторів</h1>
    
            <button id="toggleButton" onclick="toggleAdminsVisibility()">Показати всіх адміністраторів</button>
    
            <table>
        
        <thead>
            
            <tr>
                
                <th>ID адміністратора</th>
                
                <th>Ім'я</th>
                
                <th>Телефон</th>
                
            </tr>
            
        </thead>
        
        <tbody>
                            <?php
                            $result = mysqli_query($link, "SELECT * FROM admin");
            
                            if ($result) {
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "
            <tr class='admin hidden' id='admin_" . $row[' id'] . "'>" ;
                echo "<td>" . $row['AdminID'] . "</td>" ;
                echo "<td>" . $row['Name'] . "</td>" ;
                echo "<td>" . $row['Phone'] . "</td>" ;
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
