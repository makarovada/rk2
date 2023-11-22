<?php
    include 'header.html';
    include "db.php";
?>

<!doctype html>
<html>

<body>   
    <main>
    <?php
        $id = $_GET['id'];

        $sql = "SELECT * FROM models WHERE id = '$id'";
        $result = mysqli_query($mysql, $sql);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            echo "<h2>" . $row['id'] . "</h2>";
            echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" title="'.$row['id'].'" style="width:500px;"/>';
            echo "<h1>Цена: " . $row['cost'] . "</h1>";
            echo "<h1>Категория: " . $row['category'] . "</h1>";
            echo "<h1>Количество: " . $row['count'] . "</h1>";
        }
        ?>
    </main>
    <footer>
        <p>8 (800) 700-88-66 (круглосуточно)</p>
        <p>© ООО «Рандеву», 2023</p>
    </footer>
</body>
 
</html>