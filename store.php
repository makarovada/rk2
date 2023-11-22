<?php
    include 'header.html';
    include "db.php";
?>
<!doctype html>
<html>

<body>   
    <main>
            <div class="table">
                <?php
                
                $sql = "SELECT image, cost, id FROM models";
                $result = $mysql->query($sql);

                if ($result->num_rows > 0) {
                    
                    echo "<table><tr><th>Модель</th><th>Цена</th><th>Изображение</th>";
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td><a href='model.php?id=".$row['id']."'>".$row['id']."</a></td><td>".$row["cost"].'</td><td><img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" title="'.$row['id'].'" style="width:500;height:225px;"/></td></tr>';
                    }
                    echo "</table>";
                }
                    
                ?> 
            </div> 
    </main>
    <footer>
        <p>8 (800) 700-88-66 (круглосуточно)</p>
        <p>© ООО «Рандеву», 2023</p>
    </footer>
</body>
 
</html>