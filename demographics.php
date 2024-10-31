<?php
    include 'includes/db.php';

    function getGenderCount() {
        global $pdo;
        $sql = "SELECT Gender, COUNT(*) as count FROM clientrecord GROUP BY Gender";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function getIndividualAges() {
        global $pdo;
        $sql = "SELECT Age, COUNT(*) as count FROM clientrecord GROUP BY Age ORDER BY Age";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function getAddressCount() {
        global $pdo;
        $sql = "SELECT Address, COUNT(*) as count FROM clientrecord GROUP BY Address ORDER BY count DESC";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function getServiceCount() {
        global $pdo;
        $sql = "SELECT s.ServName, COUNT(a.ServiceID) as count 
                FROM appointment a
                JOIN services s ON a.ServiceID = s.ServiceID 
                GROUP BY s.ServName";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Demographics</title>
    <link rel="stylesheet" href="css/demographics.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div class="navbar">
        <img src="img/hdlogo.png" class="hdlogo">
        <h1>HD Smile Studio</h1>
        <ul>
            <form method="POST" action="demographics.php">
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
        <h1>Demographics</h1>
        <section class="genderChart">
            <h2>Gender Distribution</h2>
            <canvas id="genderChart"></canvas>
        </section>

        <section class="ageChart">
            <h2>Age Distribution</h2>
            <canvas id="ageChart"></canvas>
        </section>

        <section class="servicesChart">
            <h2>Services Availed</h2>
            <canvas id="servicesChart"></canvas>
        </section>

        <section class="addressChart">
            <h2>Address Distribution</h2>
            <canvas id="addressChart"></canvas>
        </section>
    </div>

    <script>
        <?php
            $genders = getGenderCount();
            $genderLabels = array_map(function($gender) { 
                return $gender['Gender']; }, $genders);
            $genderData = array_map(function($gender) { 
                return $gender['count']; }, $genders);

            $ages = getIndividualAges();
            $ageLabels = array_map(function($age) { 
                return $age['Age']; }, $ages);
            $ageData = array_map(function($age) { 
                return $age['count']; }, $ages);

            $addresses = getAddressCount();
            $addressLabels = array_map(function($address) { 
                return $address['Address']; }, $addresses);
            $addressData = array_map(function($address) { 
                return $address['count']; }, $addresses);

            $services = getServiceCount();
            $serviceLabels = array_map(function($service) { 
                return $service['ServName']; }, $services);
            $serviceData = array_map(function($service) { 
                return $service['count']; }, $services);
        ?>

        var genderCtx = document.getElementById('genderChart').getContext('2d');
        var genderChart = new Chart(genderCtx, {
            type: 'pie',
            data: {
                labels: <?php echo json_encode($genderLabels); ?>,
                datasets: [{
                    label: 'Gender Distribution',
                    data: <?php echo json_encode($genderData); ?>,
                    backgroundColor: ['#3A4D39', '#4F6F52', '#739072', '#79AC78', '#618264', '#B0D9B1', '#1A4D2E', '#8DECB4', '#41B06E'],
                    borderColor: ['#3A4D39', '#4F6F52', '#739072', '#79AC78', '#618264', '#B0D9B1', '#1A4D2E', '#8DECB4', '#41B06E'],
                    borderWidth: 1
                }]
            }
        });

        var ageCtx = document.getElementById('ageChart').getContext('2d');
        var ageChart = new Chart(ageCtx, {
            type: 'pie',
            data: {
                labels: <?php echo json_encode($ageLabels); ?>,
                datasets: [{
                    label: 'Age Distribution',
                    data: <?php echo json_encode($ageData); ?>,
                    backgroundColor: ['#3A4D39', '#4F6F52', '#739072', '#79AC78', '#618264', '#B0D9B1', '#1A4D2E', '#8DECB4', '#41B06E'],
                    borderColor: ['#3A4D39', '#4F6F52', '#739072', '#79AC78', '#618264', '#B0D9B1', '#1A4D2E', '#8DECB4', '#41B06E'],
                    borderWidth: 1
                }]
            }
        });

        var servicesCtx = document.getElementById('servicesChart').getContext('2d');
        var servicesChart = new Chart(servicesCtx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($serviceLabels); ?>,
                datasets: [{
                    label: 'Services Availed',
                    data: <?php echo json_encode($serviceData); ?>,
                    backgroundColor: ['#3A4D39', '#4F6F52', '#739072', '#79AC78', '#618264', '#B0D9B1', '#1A4D2E', '#8DECB4', '#41B06E'],
                    borderColor: ['#3A4D39', '#4F6F52', '#739072', '#79AC78', '#618264', '#B0D9B1', '#1A4D2E', '#8DECB4', '#41B06E'],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        var addressCtx = document.getElementById('addressChart').getContext('2d');
        var addressChart = new Chart(addressCtx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($addressLabels); ?>,
                datasets: [{
                    label: 'Address Distribution',
                    data: <?php echo json_encode($addressData); ?>,
                    backgroundColor: ['#3A4D39', '#4F6F52', '#739072', '#79AC78', '#618264', '#B0D9B1', '#1A4D2E', '#8DECB4', '#41B06E'],
                    borderColor: ['#3A4D39', '#4F6F52', '#739072', '#79AC78', '#618264', '#B0D9B1', '#1A4D2E', '#8DECB4', '#41B06E'],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
</body>
</html>
