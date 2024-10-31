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
            <form method="POST" action="admin_panel.php">
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
            <h2>New Appointments</h2>
            <table>
                <thead>
                    <tr>
                        <th>Client Name</th>
                        <th>Service</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $newAppointments = getNewAppointments();
                    foreach ($newAppointments as $appointment) {
                        echo "<tr>";
                        echo "<td>{$appointment['FullName']}</td>";
                        echo "<td>{$appointment['ServName']}</td>";
                        echo "<td>{$appointment['AppointmentDate']}</td>";
                        echo "<td>{$appointment['AppointmentTime']}</td>";
                        echo "<td>
                            <form method='POST' action='admin_panel.php'>
                                <input type='hidden' name='appointmentId' value='{$appointment['AppointmentID']}'>
                                <button class='approved' type='submit' name='updateStatus' value='Approved'>Approve</button>
                                <button class='cancelled' type='submit' name='updateStatus' value='Cancelled'>Cancel</button>
                            </form>                
                        </td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </section>
    </div>
</body>
</html>