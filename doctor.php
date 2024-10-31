<?php
    include 'includes/db.php';

    function addDoctor($fullName, $specialization, $contactNo, $email) {
        global $pdo; 
        $sql = "INSERT INTO dentist (FullName, Specialization, ContactNo, Email) VALUES (?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$fullName, $specialization, $contactNo, $email]);
    }

    function deleteDoctor($dentistID) {
        global $pdo; 
        $sql = "DELETE FROM dentist WHERE DentistID = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$dentistID]);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin_panel.css">
    <title>Admin Panel - Manage Doctors</title>
</head>
<body>
    <div class="navbar">
        <img src="img/hdlogo.png" class="hdlogo">
        <h1>HD Smile Studio</h1>
        <ul>
            <form method="POST" action="Admin.php">
                <button class="client-btn" type="back" name="back">Back to Admin Panel</button>
            </form>
            <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    if (isset($_POST['back'])) {
                        header('Location: admin.php');
                        exit();
                    }
                }
            ?>
        </ul>
    </div>
    <div class="container">
        <button class="add-doc-btn" type="button" onclick="location.href='add_doctor.php'">Add a Doctor</button>
        <section>
            <h2>Doctor/s List</h2>
            <table>
                <thead>
                    <tr>
                        <th>Doctor Name</th>
                        <th>Specialization</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'includes/db.php';
                    $sql = "SELECT * FROM dentist";
                    $stmt = $pdo->query($sql);
                    while ($row = $stmt->fetch()) {
                        echo "<tr>";
                        echo "<td>{$row['FullName']}</td>";
                        echo "<td>{$row['Specialization']}</td>";
                        echo "<td>{$row['ContactNo']}</td>";
                        echo "<td>{$row['Email']}</td>";
                        echo "<td><form method='POST'><input type='hidden' name='dentistID' value='{$row['DentistID']}'><button class='delete' type='submit' name='deleteDoctor'>Delete</button></form></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </section>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['deleteDoctor'])) {
            deleteDoctor($_POST['dentistID']);
        }
    }
    ?>
</body>
</html>