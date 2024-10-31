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
            <button class="client-btn" type="home" name="home">Back to Home</button>
            </form>
            </ul>
        </div>
        <div class="container">
            <div class="card">
                <h2>Welcome Admin!</h2>
                <p class="admin-p">Read/Delete/Update:</p>
                <form method="POST" action="Admin.php">
                    <button class="client-btn" type="demo" name="demo">View Demographics</button>
                    <button class="client-btn" type="appointment" name="appointment">Appointment</button>
                    <button class="client-btn" type="doctor-admin" name="doctor-admin">Doctor</button>
                    <button class="client-btn" type="client-admin" name="client-admin">Client</button>
                </form>
                <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        if (isset($_POST['appointment'])) {
                            header('Location: admin_appointment.php');
                            exit();
                        }
                        if (isset($_POST['doctor-admin'])) {
                            header('Location: doctor.php');
                            exit();
                        }
                        if (isset($_POST['client-admin'])) {
                            header('Location: clients.php');
                            exit();
                        }
                        if (isset($_POST['demo'])) {
                            header('Location: demographics.php');
                            exit();
                        }
                        if (isset($_POST['home'])) {
                            header('Location: index.php');
                            exit();
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
