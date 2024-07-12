<?php

    require "conn.php";

    $id = $_GET['id'];

    $sql = "UPDATE dishes SET isPublished = NOT isPublished WHERE dishId = '$id'";

    $res = $conn->query($sql);

    if($res){
        $sql = "SELECT dishId, dishName, imageUrl, isPublished FROM dishes WHERE dishId = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $updatedDish = $result->fetch_assoc();

        // Update JSON file
        $jsonFilePath = 'dishes.json';
        $jsonData = file_get_contents($jsonFilePath);
        $dishes = json_decode($jsonData, true);

        foreach ($dishes as &$dish) {
            if ($dish['dishId'] == $updatedDish['dishId']) {
                $dish['isPublished'] = (bool) $updatedDish['isPublished'];
                break;
            }
        }

        file_put_contents($jsonFilePath, json_encode($dishes, JSON_PRETTY_PRINT));

        echo json_encode(["success" => true, "isPublished" => $updatedDish['isPublished']]);

        header("Location:index.php");
    }

    
?>