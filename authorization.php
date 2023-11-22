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
                <h1>Авторизация</h1>
                <form action="#" method="POST" enctype="multipart/form-data">
                    <label for="login">Логин:</label>
                    <input type="text" id="login" name="login" required><br><br>
            
                    <label for="password">Пароль:</label>
                    <input type="password" id="password" name="password" required><br><br>

                    <input type="checkbox" id="rememberme" name="rememberme" value="yes">
                    <label for="rememberme">Запомнить меня</label><br><br>

                    <button class="btn" type="submit">Войти</button>
                    <?php                
                        $sql1 = "SELECT login, password, id FROM users";
                        $result = $mysql->query($sql1);
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                if (isset($_POST['login']) & isset($_POST['password'])) {if ($_POST['login'] == $row["login"] & $_POST['password'] == $row["password"]) echo "<p style='margin-top: 10px'>Авторизация прошла успешно!</p>";}
                            }
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