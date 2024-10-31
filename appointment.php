<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "code"; 


    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $doctorQuery = "SELECT DentistID, FullName FROM Dentist";
    $doctorResult = $conn->query($doctorQuery);
    $servicesQuery = "SELECT ServiceID, ServName FROM Services";
    $servicesResult = $conn->query($servicesQuery);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fullName = $conn->real_escape_string($_POST['fullName']);
        $dateofbirth = $conn->real_escape_string($_POST['dateofbirth']);
        $age = $conn->real_escape_string($_POST['age']);
        $gender = $conn->real_escape_string($_POST['gender']);
        $email = $conn->real_escape_string($_POST['email']);
        $address = $conn->real_escape_string($_POST['address']);
        $phone = $conn->real_escape_string($_POST['phone']);

        $sqlClient = "INSERT INTO ClientRecord (FullName, DateOfBirth, Age, Gender, EmailAdd, Address, ContactNo)
                    VALUES ('$fullName', '$dateofbirth', '$age', '$gender', '$email', '$address', '$phone')";
        
        if ($conn->query($sqlClient) === TRUE) {
            $clientId = $conn->insert_id;

            $date = $conn->real_escape_string($_POST['date']);
            $time = $conn->real_escape_string($_POST['time']);
            $doctorId = $conn->real_escape_string($_POST['doctor']);
            $serviceId = $conn->real_escape_string($_POST['services']);
            $status = $conn->real_escape_string($_POST['status']);

            $sqlAppointment = "INSERT INTO Appointment (AppointmentDate, AppointmentTime, Status, ServiceID, ClientID, DentistID)
                                VALUES ('$date', '$time', '$status', '$serviceId', '$clientId', '$doctorId')";

            if (isset($_POST['submit']) && $conn->query($sqlAppointment) === TRUE) {
                echo "";
                } else {
                    echo "Error in appointment record: " . $conn->error;
                }
                } else {
                    echo "Error in client record: " . $conn->error;
                }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book an Appointment</title>
    <link rel="stylesheet" href="./css/appointment.css">
</head>
<body>
    <div class="container">
        <h1>Book an Appointment</h1>
        <form action="appointment.php" method="post">
            <a class="personal-text">Personal Information</a>
                <label for="fullName">Full Name:</label>
                <input type="text" id="fullName" name="fullName" required>

                <label for="dateofbirth">Date of Birth:</label>
                <input type="date" id="dateofbirth" name="dateofbirth" required>

                <label for="age">Age:</label>
                <input type="number" id="age" name="age" required>

                <label for="gender">Gender:</label>
                    <select id="gender" name="gender" required>
                        <option value="PreferNotToSay">Select Options:</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="PreferNotToSay">Prefer not to say</option>
                    </select>

                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required>

                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required>

                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required>

            <label class="appointment-text">Appointment Schedule</label>
                <label for="date">Date of Appointment:</label>
                <input type="date" id="date" name="date" required>
                <label for="time">Time of Appointment:</label>
                <input type="time" id="time" name="time" required>
                <input type="hidden" name="status" value="Pending">


            <label for="doctor">Select Doctor:</label>
            <select id="doctor" name="doctor">
                <?php while ($row = $doctorResult->fetch_assoc()) {
                    echo "<option value='{$row['DentistID']}'>{$row['FullName']}</option>";
                } ?>
            </select>

            <label for="services">Select Services:</label>
            <select id="services" name="services">
                <?php while ($row = $servicesResult->fetch_assoc()) {
                    echo "<option value='{$row['ServiceID']}'>{$row['ServName']}</option>";
                } ?>
            </select>
            <div id="serviceFee">Service Fee: ₱<span id="feeValue">0.00</span></div>

            <button type="submit" name="submit">Book Now</button>
            <?php 
                if (isset($_POST['submit'])) {
                    echo "<div style='text-align: center;
                    color: #014421;
                    background-color: #DFF2BF;
                    padding: 10px;
                    margin-top: 2rem;   
                    margin: 10px 0;
                    border-radius: 4px;
                    border: 2px solid #014421;
                    font-weight:bold;'>Appointment Successfuly recorded. You will be contacted if you are approved or not.</div>";
                } 
            ?>
        </form>
        <button class="back-btn" type="back" name="back" onclick="location.href='home.php'">Back to the Home Page</button>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#services').change(function() {
            var serviceID = $(this).val();
            if (serviceID) {
                $.ajax({
                    url: 'includes/get_service_fee.php',
                    type: 'POST',
                    data: { serviceID: serviceID },
                    success: function(data) {
                        $('#feeValue').text(data);
                    },
                    error: function() {
                        alert('Error fetching service fee');
                    }
                });
            } else {
                $('#feeValue').text('0.00');
            }
        });
    });
</script>
</html>
<?php
    $conn->close();
?>