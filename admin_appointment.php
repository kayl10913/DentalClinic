<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HD Smile Studio - Login</title>
    <link rel="stylesheet" href="./css/admin_appointment.css">
</head>
<body>
    <div class="banner">
        <div class="navbar">
            <img src="img/hdlogo.png" class="hdlogo">
            <h1>HD Smile Studio</h1>
            <ul>
                <form method="POST" action="Admin.php">
                    <button class="client-btn" type="back" name="back">Back to Admin Panel</button>
                </form>
            </ul>
        </div>
        <div class="container">
            <div class="card">
                <h2>Appointment Panel</h2>
                <form method="POST" action="admin_appointment.php">
                    <button class="client-btn" type="new" name="new">New Appointment</button>
                    <button class="client-btn" type="approved" name="approved">Approved Appointment</button>
                    <button class="client-btn" type="cancelled" name="cancelled">Cancelled Appointment</button>
                    <button class="client-btn" type="total" name="total">Total Appointment</button>
                </form>
                <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        if (isset($_POST['back'])) {
                            header('Location: admin.php');
                            exit();
                        }
                        if (isset($_POST['new'])) {
                            header('Location: admin_panel.php');
                            exit();
                        }
                        if (isset($_POST['approved'])) {
                            header('Location: approved_appointment.php');
                            exit();
                        }
                        if (isset($_POST['cancelled'])) {
                            header('Location: cancelled_appointment.php');
                            exit();
                        }
                        if (isset($_POST['total'])) {
                            header('Location: total_appointment.php');
                            exit();
                        }
                        
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
