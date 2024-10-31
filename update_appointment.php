<?php
include 'includes/db.php';
include 'includes/functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $appointmentId = $_POST['appointmentId'];
    $newDate = $_POST['newDate'];
    $newTime = $_POST['newTime'];
    if (updateAppointment($appointmentId, $newDate, $newTime)) {
        header('Location: total_appointment.php');
        exit();
    } else {
        echo "Failed to update appointment.";
    }
}

$appointmentToUpdate = null;
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $appointmentToUpdate = getAppointmentById($_GET['id']);
}

if (!$appointmentToUpdate) {
    header('Location: total_appointment.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin_panel.css">
    <title>Appointment Rescheduling</title>
</head>
<body>
    <div class="navbar">
        <img src="img/hdlogo.png" class="hdlogo">
        <h1>HD Smile Studio</h1>
        <ul>
            <form method="POST" action="update_appointment.php">
                <button class="client-btn" type="back" name="back">Back</button>
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
            <h2>Update Appointment</h2>
            <form method="POST" action="update_appointment.php">
                <input type="hidden" name="appointmentId" value="<?php echo $appointmentToUpdate['AppointmentID']; ?>">
                <label for="newDate">New Date:</label>
                <input type="date" id="newDate" name="newDate" value="<?php echo $appointmentToUpdate['AppointmentDate']; ?>" required>
                <label for="newTime">New Time:</label>
                <input type="time" id="newTime" name="newTime" value="<?php echo $appointmentToUpdate['AppointmentTime']; ?>" required>
                <button class = "saveapp-btn" type="submit" name="updateAppointment">Save Appointment</button>
            </form>
        </section>
    </div>
</body>
</html>
