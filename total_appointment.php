<?php
include 'includes/db.php';
include 'includes/functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['deleteAppointment'])) {
        $appointmentId = $_POST['appointmentId'];
        if (deleteAppointment($appointmentId)) {
            header('Location: total_appointment.php');
            exit();
        } else {
            echo "Failed to delete appointment.";
        }
    }
}

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
            <form method="POST" action="total_appointment.php">
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
            <h2>Total Appointments</h2>
            <table>
                <thead>
                    <tr>
                        <th>Client Name</th>
                        <th>Service</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $totalAppointments = array_merge(getAppointmentsByStatus('Approved'), getAppointmentsByStatus('Cancelled'));
                    foreach ($totalAppointments as $appointment) {
                        echo "<tr>";
                        echo "<td>{$appointment['ClientName']}</td>";
                        echo "<td>{$appointment['ServName']}</td>";
                        echo "<td>{$appointment['AppointmentDate']}</td>";
                        echo "<td>{$appointment['AppointmentTime']}</td>";
                        echo "<td>{$appointment['Status']}</td>";
                        echo "<td>
                                <form method='POST' style='display:inline-block;'>
                                    <input type='hidden' name='appointmentId' value='{$appointment['AppointmentID']}'>
                                    <button class='delete' type='submit' name='deleteAppointment'>Delete</button>
                                </form>
                                <form method='GET' action='update_appointment.php' style='display:inline-block;'>
                                    <input type='hidden' name='id' value='{$appointment['AppointmentID']}'>
                                    <button class='update' type='submit'>Update</button>
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
