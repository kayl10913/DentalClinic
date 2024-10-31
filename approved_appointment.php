<?php
    include 'includes/db.php';
    include 'includes/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin_panel.css">
    <title>Admin Panel</title>
</head>
<body>
    <div class="navbar">
        <img src="img/hdlogo.png" class="hdlogo">
        <h1>HD Smile Studio</h1>
        <ul>
            <form method="POST" action="approved_appointment.php">
                <button class="client-btn" type="back" name="back">Back to Appointment Panel</button>
            </form>
            <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    if (isset($_POST['back'])) {
                        header('Location: admin_appointment.php');
                        exit();
                    }
                }
            ?>
        </ul>
    </div>
    <div class="container">
        <section>
            <h2>Approved Appointments</h2>
            <table>
                <thead>
                    <tr>
                        <th>Client Name</th>
                        <th>Service</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $approvedAppointments = getAppointmentsByStatus('Approved');
                    foreach ($approvedAppointments as $appointment) {
                        echo "<tr>";
                        echo "<td>{$appointment['ClientName']}</td>";
                        echo "<td>{$appointment['ServName']}</td>";
                        echo "<td>{$appointment['AppointmentDate']}</td>";
                        echo "<td>{$appointment['AppointmentTime']}</td>";
                        echo "<td>{$appointment['Status']}</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </section>
    </div>
</body>
</html>