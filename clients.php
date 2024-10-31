<?php
include 'includes/db.php';

function addClient($fullName, $dateOfBirth, $age, $gender, $contactNo, $email, $address) {
    global $pdo;
    $sql = "INSERT INTO clientrecord (FullName, DateOfBirth, Age, Gender, ContactNo, EmailAdd, Address) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$fullName, $dateOfBirth, $age, $gender, $contactNo, $email, $address]);
}

function deleteClient($clientID) {
    global $pdo;
    $sql = "DELETE FROM clientrecord WHERE ClientID = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$clientID]);
}

function updateClient($clientID, $fullName, $dateOfBirth, $age, $gender, $contactNo, $email, $address) {
    global $pdo;
    $sql = "UPDATE clientrecord SET FullName = ?, DateOfBirth = ?, Age = ?, Gender = ?, ContactNo = ?, EmailAdd = ?, Address = ? WHERE ClientID = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$fullName, $dateOfBirth, $age, $gender, $contactNo, $email, $address, $clientID]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin_panel.css">
    <title>Admin Panel - Manage Clients</title>
</head>
<body>
    <div class="navbar">
        <img src="img/hdlogo.png" class="hdlogo">
        <h1>HD Smile Studio</h1>
        <form method="POST" action="clients.php">
            <button class="admin-btn" type="back" name="back">Back to Admin Panel</button>
        </form>
        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (isset($_POST['back'])) {
                    header('Location: admin.php');
                    exit();
                }
                if (isset($_POST['appoint'])) {
                    header('Location: appointment2.php');
                    exit();
                }
            }
        ?>
    </div>
    <div class="container">
        <section>
            <div class="search-container">
                <form method="GET">
                    <input class="search-input" type="text" name="search" placeholder="Search by Name or Email">
                    <button class="search-btn" type="submit">Search</button>
                </form>
            </div>
            <div class="search-container">
                <form method="POST" action="clients.php">
                    <button class="search-btn" type="appoint" name="appoint">Appoint a Client</button>
                </form>
            </div>
            <h2>Client/s List</h2>
            <table>
                <thead>
                    <tr>
                        <th>Client Name</th>
                        <th>Date of Birth</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Appointments</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'includes/db.php';
                    $search = isset($_GET['search']) ? $_GET['search'] : '';
                    $sql = "SELECT clientrecord.*, services.ServName, appointment.AppointmentDate 
                            FROM clientrecord 
                            LEFT JOIN appointment ON clientrecord.ClientID = appointment.ClientID 
                            LEFT JOIN services ON appointment.ServiceID = services.ServiceID 
                            WHERE clientrecord.FullName LIKE ? OR clientrecord.EmailAdd LIKE ? 
                            ORDER BY appointment.AppointmentDate DESC, appointment.AppointmentTime DESC";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute(['%' . $search . '%', '%' . $search . '%']);
                    $currentClientID = null;
                    while ($row = $stmt->fetch()) {
                        if ($currentClientID != $row['ClientID']) {
                            if ($currentClientID != null) {
                                echo "</td></tr>";
                            }
                            $currentClientID = $row['ClientID'];
                            echo "<tr>";
                            echo "<td>{$row['FullName']}</td>";
                            echo "<td>{$row['DateOfBirth']}</td>";
                            echo "<td>{$row['Age']}</td>";
                            echo "<td>{$row['Gender']}</td>";
                            echo "<td>{$row['ContactNo']}</td>";
                            echo "<td>{$row['EmailAdd']}</td>";
                            echo "<td>{$row['Address']}</td>";
                            echo "<td>";
                        }
                        if ($row['AppointmentDate']) {
                            echo "{$row['ServName']} on {$row['AppointmentDate']}<br>";
                        }
                    }
                    if ($currentClientID != null) {
                        echo "</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </section>
    </div>
</body>
</html>
