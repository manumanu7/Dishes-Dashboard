<?php
    require "conn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dish Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .dish {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
            display: flex;
            align-items: center;
        }
        .dish img {
            width: 100px;
            height: 100px;
            margin-right: 20px;
        }
        .dish button {
            margin-left: auto;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Dish Dashboard</h1>
        <?php
            $sql = "select * from dishes";
            $res = $conn->query($sql);
            while($row = $res->fetch_assoc()){

            
        ?>
        <div class="dish">
            <img src=<?php echo $row['imageUrl']; ?> alt="${dish.dishName}">
            <div>
                <h3><?php echo $row['dishName']; ?></h3>
                <p>Published: <span id="status"><?php 
                    if($row['isPublished']){
                        echo "Yes";
                    }else{
                        echo "No";
                    }
                ?></span></p>
            </div>
            <button id="button" onclick="togglePublish(<?php echo $row['dishId'] ?>)">
                <?php 
                    if($row['isPublished']){
                        echo "Unpublish";
                    }else{
                        echo "Publish";
                    }
                ?>
            </button>
        </div>
        <?php
            }
        ?>
    </div>

    <script>
        function togglePublish(x){
            window.location.replace("updatedata.php?id="+x);
        }
    </script>
    
</body>
</html>