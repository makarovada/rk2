<?php
include 'header.html';
include 'db.php';
?>

<!doctype html>
<html>
<body>  
    <main>
        <div class="wrapper">
            <div class="cell_at">
                <h1>Регистрация</h1>
                <form action="#" method="POST" enctype="multipart/form-data">
                <label for="login">Логин:</label>
                    <input type="text" id="name" name="name" required><br><br>
                    <label for="name">Имя:</label>

                    <input type="text" id="login" name="login" required><br><br>
            
                    <label for="password">Пароль:</label>
                    <input type="password" id="password" name="password" required><br><br>


                    <button class="btn" type="submit">Зарегистрироваться</button>
                    <?php                
                        $sql1 = "INSERT INTO users (login, password, name) VALUES ($_POST['login'], $_POST['password'], $_POST['name'])";
                        $result = $mysql->query($sql1);
                        if ($result> 0) {
                            echo "<p style='margin-top: 10px'>Регистрация прошла успешно!</p>";
                            
                        } 
                        
                    ?>   
                </form> 
            </div> 
        </div>
    </main>
    <footer>
        <p>8 (800) 700-88-66 (круглосуточно)</p>
        <p>© ООО «Рандеву», 2023</p>
    </footer>
</body>

</html>