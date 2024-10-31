<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HD Smile Studio - Login</title>
    <link rel="stylesheet" href="./css/about.css">
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
            <div id="backBtn">
                    <img src="img/return.png" id="back"><p>back</p>
                </div>
                    <script> var backBtn = document.getElementById("backBtn").addEventListener("click", function() {
                            window.location.href = "index.php";
                            }
                            ); 
                    </script>
        </div>
        <div class="about">
        <div class="title-text">
            <h1>ABOUT US</h1>
            <p>At HD Smile, we are dedicated to delivering top-notch dental care in a warm and welcoming environment. 
                Our team of experienced professionals is committed to providing personalized treatment tailored to 
                each patient's unique needs. With a focus on preventive care and the latest advancements in dentistry, 
                we aim to be your trusted partner in achieving optimal oral health. Whether you're here for a routine 
                check-up or a specialized procedure, we strive to make every visit comfortable and rewarding. Your smile 
                is our priority, and we look forward to serving you and your family.</p>
        </div>
        <div class="about-box">
            <div class="about">
                <h1>Our Mission</h1>
                <div class="about-desc">
                    <div class="about-icon">
                    <img src="img/pic.png" class="pic">
                    </div>
                    <div class="about-text">
                        <p>To provide exceptional dental care with compassion and integrity, 
                           fostering healthy smiles and lifelong oral wellness in our community.</p>
                    </div>
                </div>
                <h1>Our Vision</h1>
                <div class="about-desc">
                    <div class="about-icon">
                    <img src="img/pic.png" class="pic">
                    </div>
                    <div class="about-text">
                        <p>To be the trusted partner in oral health, where patients experience 
                           personalized care, advanced treatments, and a welcoming environment 
                           that promotes overall well-being.</p>
                    </div>
                </div>
            </div>
            <div class="about-img"> <img src="img/dental.jpg" class="dental">
            </div>
        </div>
    </div>    
</body>
</html>