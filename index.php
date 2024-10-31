<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HD Smile Studio - Login</title>
    <link rel="stylesheet" href="./css/index.css">
</head>
<body>
    <div class="banner">
        <div class="navbar">
            <img src="img/hdlogo.png" class="hdlogo">
            <h1>HD Smile Studio</h1>
            <ul>
                <li class="about"><a href="about.php">ABOUT</a></li>
                <li class="contact"><a href="contact.php">CONTACT</a></li>
            </ul>
        </div>
        <div class="container">
            <div class="card">
                <h2>Welcome to our Clinic!</h2>
                <form method="POST" action="index.php">
                    <button class="doc-btn" type="submit" name="doctor">Are you a Doctor?</button>
                    <?php if (isset($_POST['doctor'])): ?>
                        <input class="pass" type="password" name="password" placeholder="Enter password" required>
                        <button class="login-btn" type="submit" name="doctorLogin">Login</button>
                    <?php endif; ?>
                </form>
                <form method="POST" action="index.php">
                    <button class="client-btn" type="submit" name="client">Are you a Client?</button>
                </form>
                <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        if (isset($_POST['doctorLogin'])) {
                            $password = $_POST['password'];
                            if ($password == 'admin1234') {
                                header('Location: admin.php');
                                exit();
                            } else {
                                echo '<p class="pass-wrong">Incorrect password!</p>';
                            }
                        }
                        
                        // Direct to client page
                        if (isset($_POST['client'])) {
                            header('Location: home.php');
                            exit();
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
