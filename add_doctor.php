<?php
    include 'includes/db.php';

    function addDoctor($fullName, $specialization, $contactNo, $email) {
        global $pdo; 
        $sql = "INSERT INTO dentist (FullName, Specialization, ContactNo, Email) VALUES (?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$fullName, $specialization, $contactNo, $email]);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/add_doctor.css">
    <title>Admin Panel - Manage Doctors</title>
</head>
<body>
    <div class="container">
        <button class="back-btn" type="button" onclick="location.href='doctor.php'">Doctor/s List</button>
        <section>
            <h2>Add a New Doctor</h2>
            <form method="POST">
                <label for="fullName">Full Name:</label>
                <input type="text" name="fullName" placeholder="Enter Full Name" required>

                <label for="fullName">Scpecialization:</label>
                <input type="text" name="specialization" placeholder="Enter Specialization" required>
                
                <label for="fullName">Contact Number:</label>
                <input type="text" name="contactNo" placeholder="Enter Contact Number" required>
                
                <label for="fullName">Email:</label>
                <input type="email" name="email" placeholder="Enter Email" required>
                
                <button class="add-doc-btn" type="submit" name="addDoctor">Add Doctor</button>
            </form>
        </section>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['addDoctor'])) {
            addDoctor($_POST['fullName'], $_POST['specialization'], $_POST['contactNo'], $_POST['email']);
        }
    }
    ?>
</body>
</html>