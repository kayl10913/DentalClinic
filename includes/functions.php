<?php
    include 'db.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['updateStatus']) && isset($_POST['appointmentId'])) {
             updateAppointmentStatus($_POST['appointmentId'], $_POST['updateStatus']);
             }
    } 

    function getNewAppointments() {
        global $pdo;
        try {
            $stmt = $pdo->prepare("SELECT a.*, c.FullName, s.ServName FROM appointment a
                                JOIN clientrecord c ON a.ClientID = c.ClientID
                                JOIN services s ON a.ServiceID = s.ServiceID
                                WHERE a.Status = 'Pending'");
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            die("<div style='text-align: center;
            color: #D8000C;
            background-color: #FFD2D2;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid red;'>Error fetching new appointments: </div>" . $e->getMessage());
        }
    }

    function updateAppointmentStatus($appointmentId, $status) {
        global $pdo;
        try {
            $stmt = $pdo->prepare("UPDATE appointment SET Status = ? WHERE AppointmentID = ?");
            $stmt->execute([$status, $appointmentId]);
            if ($stmt->rowCount() > 0) {
                echo "<div style='text-align: center;
                color: #4CAF50;
                background-color: #DFF2BF;
                padding: 10px;
                margin: 10px 0;
                border: 1px solid green;'>Appointment updated successfully.</div>";
            } else {
                echo "<div style='text-align: center;
                color: black; 
                background-color: #f9c851;
                padding: 10px;
                margin: 10px 0;
                border: 1px #f9c851;'>No changes made or appointment not found.</div>";
            }
        } catch (PDOException $e) {
            die("<div style='text-align: center;
            color: #D8000C;
            background-color: #FFD2D2;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid red;'>Error updating appointment status: </div>" . $e->getMessage());
        }
    }    

    function getAppointmentsByStatus($status) {
        global $pdo;
        $sql = "SELECT a.AppointmentID, a.AppointmentDate, a.AppointmentTime, a.Status,
                       c.FullName as ClientName, s.ServName
                FROM appointment a
                JOIN clientrecord c ON a.ClientID = c.ClientID
                JOIN services s ON a.ServiceID = s.ServiceID
                WHERE a.Status = ?";
        $stmt = $pdo->prepare($sql);
        if (!$stmt) {
            die("<div style='color: #D8000C;
            background-color: #FFD2D2;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid red;'>MySQL prepare error: </div>" . $pdo->errorInfo());
        }
        $stmt->bindParam(1, $status, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function deleteAppointment($appointmentId) {
        global $pdo; 
        try {
            $sql = "DELETE FROM appointment WHERE `appointment`.`AppointmentID` = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$appointmentId]);
            return true;
        } catch (PDOException $e) {
            echo "Error deleting appointment: " . $e->getMessage();
            return false;
        }
    }
    function updateAppointment($appointmentId, $newDate, $newTime) {
        global $pdo;
        $sql = "UPDATE appointment SET AppointmentDate = ?, AppointmentTime = ? WHERE AppointmentID = ?";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([$newDate, $newTime, $appointmentId]);
    }
    
    function getAppointmentById($appointmentId) {
        global $pdo;
        $sql = "SELECT * FROM appointment WHERE AppointmentID = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$appointmentId]);
        return $stmt->fetch();
    }
?>