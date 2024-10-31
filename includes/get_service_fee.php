<?php
    include 'db.php'; 

    if (isset($_POST['serviceID'])) {
        $serviceID = intval($_POST['serviceID']);

        $query = "SELECT ServFee FROM services WHERE ServiceID = :serviceID";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':serviceID', $serviceID, PDO::PARAM_INT);
        $stmt->execute();
        
        $result = $stmt->fetch();
        if ($result) {
            echo number_format($result['ServFee'], 2);
        } else {
            echo "0.00";
        }
    }
?>
