<!doctype html>
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <title>HD Smile Studio</title> 
    <link rel="stylesheet" href="./style.css"> 
    <script src="https://kit.fontawesome.com/1165876da6.js" crossorigin="anonymous"></script>
</head>
    <body>
        <div class="bg">
            <div class="navbar">
                <img src="img/hdlogo.png" class="hdlogo">
                <h1>HD Smile Studio</h1>
                <ul>
                    <li class="home"> <a href="home.php">HOME</a></li>
                    <li class="about"> <a href="#about">ABOUT</a></li>
                    <li class="contact"> <a href="#footer">CONTACT</a></li>
                </ul>
                <div id="backBtn">
                    <img src="img/back.png" id="back"><p>back</p>
                </div>
                    <script> var backBtn = document.getElementById("backBtn").addEventListener("click", function() {
                            window.location.href = "index.php";
                            }
                            ); 
                    </script>
            </div>

            <div class="content">
	            <h1 style="font-family:trebuchet ms;">Providing special</h1>
                <br><br><br><br>
		        <h1 style="font-family:trebuchet ms;">care for your teeth!</h1>
                <br><br><br><br><br>
		        <button type="button"> <a href="#service">VIEW OUR SERVICES</a></button>
	        </div>
        </div>
	    </div>
    </div>
    
    <!--About Us-->

    <section id="about">
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
    </section>

    <!--Service-->

    <section id="service">
       <div class="title-text">
        <h1>SERVICES</h1>
        <p>At HD Smile, we are committed to providing comprehensive dental services to a
            ddress all of your oral health needs. Whether you require routine preventive care, 
            restorative treatments, orthodontics, or specialized procedures, our skilled team 
            is here to deliver personalized care with a focus on your comfort and well-being. 
            We strive to create a positive dental experience for every patient, ensuring healthy 
            smiles for life. Contact us to schedule an appointment and embark on your journey 
            to optimal oral health.</p>
       </div>
       <div class="service-row">
        <div class="service-col">
            <div class="services">
                <img src="img/cleaning.png" class="cleaning">
                <div class="service-info">
                    <h4>ORAL PROPHYLAXIS</h4>
                </div>
            </div>
            <p>A professional dental cleaning procedure aimed at removing plaque, tartar, 
                and stains from the teeth, often performed as a preventive measure to maintain 
                oral health.</p>
            <h5><a href="appointment.php">BOOK NOW!</a></h5>
        </div>
        <div class="service-col">
            <div class="services">
                <img src="img/consultation.png" class="consultation">
                <div class="service-info">
                    <h4>CONSULTATION</h4>
                </div>
            </div>
            <p>An initial meeting between a patient and a dentist to discuss oral health concerns, 
                evaluate the condition of the teeth and gums, and create a treatment plan tailored 
                to the patient's needs.</p>
            <h5><a href="appointment.php">BOOK NOW!</a></h5>
        </div> 
        <div class="service-col">
            <div class="services">
                <img src="img/filling.png" class="filling">
                <div class="service-info">
                    <h4>TOOTH FILLING</h4>
                </div>
            </div>
            <p>A procedure to repair a cavity or damaged tooth by removing decayed material and filling 
                the space with a dental filling material such as amalgam, composite resin, or porcelain.</p>
            <h5><a href="appointment.php">BOOK NOW!</a></h5>
        </div> 
        <div class="service-col">
            <div class="services">
                <img src="img/extraction.png" class="extraction">
                <div class="service-info">
                    <h4>TOOTH EXTRACTION</h4>
                </div>
            </div>
            <p>The removal of a tooth from its socket in the jawbone, typically performed when a tooth is 
                severely damaged, decayed, or causing other oral health issues.</p>
            <h5><a href="appointment.php">BOOK NOW!</a></h5>
        </div> 
        <div class="service-col">
            <div class="services">
                <img src="img/dentures.png" class="dentures">
                <div class="service-info">
                    <h4>DENTURES</h4>
                </div>
            </div>
            <p>Removable prosthetic devices used to replace missing teeth and surrounding tissue. 
                Dentures can be partial (replacing some teeth) or complete (replacing all teeth) 
                and are custom-made to fit each patient's mouth.</p>
            <h5><a href="appointment.php">BOOK NOW!</a></h5>
        </div> 
        <div class="service-col">
            <div class="services">
                <img src="img/crown.png" class="crown">
                <div class="service-info">
                    <h4>CROWNS AND BRIDGES</h4>
                </div>
            </div>
            <p>Crowns and bridges are dental prosthetics that restore damaged teeth with tooth-shaped caps 
                and replace missing teeth by anchoring artificial teeth to adjacent natural teeth or implants.</p>
            <h5><a href="appointment.php">BOOK NOW!</a></h5>
        </div> 
        <div class="service-col">
            <div class="services">
                <img src="img/braces.png" class="braces">
                <div class="service-info">
                    <h4>ORTHODONTIC TREATMENT</h4>
                </div>
            </div>
            <p>The correction of misaligned teeth and jaws using devices such as braces, aligners, and 
                retainers to improve dental health, function, and aesthetics.</p>
            <h5><a href="appointment.php">BOOK NOW!</a></h5>
        </div> 
        <div class="service-col">
            <div class="services">
                <img src="img/surgery.png" class="surgery">
                <div class="service-info">
                    <h4>ORAL SURGERY</h4>
                </div>
            </div>
            <p>Surgical procedures performed in the oral cavity, including tooth extraction, wisdom tooth 
                removal, dental implant placement, jaw surgery, and treatment of oral diseases or injuries.</p>
            <h5><a href="appointment.php">BOOK NOW!</a></h5>
        </div> 
        <div class="service-col">
            <div class="services">
                <img src="img/whitening.png" class="whitening">
                <div class="service-info">
                    <h4>BLEACHING TEETH WHITENING</h4>
                </div>
            </div>
            <p>A cosmetic dental procedure aimed at lightening the color of the teeth and removing stains and 
                discoloration using bleaching agents or other whitening methods.</p>
            <h5><a href="appointment.php">BOOK NOW!</a></h5>
        </div> 
        <div class="service-col">
            <div class="services">
                <img src="img/veneers.png" class="veneers">
                <div class="service-info">
                    <h4>VENEERS</h4>
                </div>
            </div>
            <p>Thin, custom-made shells of tooth-colored material (such as porcelain or composite resin) bonded 
                to the front surface of teeth to improve their appearance by covering stains, chips, gaps, or
                misalignments.</p>
            <h5><a href="appointment.php">BOOK NOW!</a></h5>
        </div>
       </div>   
    </section>

    <!--feedback-->

    <section id="feedback">
       <div class="title-text">
        <h1>FEEDBACK</h1>
        <p>At HD Smile, we value your feedback as it helps us continually improve our services and 
            enhance your experience. Your satisfaction is our priority, and we welcome any comments, 
            suggestions, or concerns you may have. Whether you've had a positive experience or feel 
            there are areas where we can do better, we encourage you to share your thoughts with us. 
            Your feedback is invaluable in shaping the quality of care we provide. Thank you 
            for choosing HD Smile Studio, and we look forward to hearing from you!</p>
       </div>
       <div class="feedback-row">
        <div class="feedback-col">
            <div class="user">
                <img src="img/2x2.png" class="2x2">
                <div class="user-info">
                    <h4>Rose Ann   <img src="img/fb.png" class="fb"> </h4>
                    <small>@roseann</small>
                </div>
            </div>
            <p>Highly recommended, ,💯💯 💯, super gaan ng kamay at napakabait. 
                She's really one of the Best Dentists. 👍👍👍</p>
        </div>
        <div class="feedback-col">
        <div class="user">
                <img src="img/2x2.png" class="2x2">
                <div class="user-info">
                    <h4>Rita Magnaye Herrera   <img src="img/fb.png" class="fb"> </h4>
                    <small>@taritz</small>
                </div>
            </div>
        <p>very approachable si doc karla..nagpa-surgery ako dito and it went well..
            pinapaliwanag nya lahat ng procedure at yung mga mararamdaman ko during 
            and after procedure..</p>
        </div>
       </div>   
    </section>

    <!--footer-->

    <section id="footer">
    <div class="title-text">
        <h1>CONTACT US</h1>
        <p>At HD Smile, we prioritize your dental health and happiness above all else.
        Our dedicated team of professionals is committed to providing you with personalized 
        and compassionate care in a comfortable environment. 
        Get in touch with us today to schedule your next appointment and take the first 
        step towards achieving your best smile yet!
        </p>
       </div>
       <div class="footer-container">
       <div class="footer-content">
        <h3>Opening Hours</h3>
        <p>Monday to Friday - &emsp;&emsp; 8am to 5pm &emsp;&emsp;&emsp; &emsp; Walk-In & w/Appointment</p>
        <p>Saturday and Sunday - 8am to 5pm &emsp; &emsp;&emsp;&emsp;&emsp;With Appointment Only</p>
       </div>
       <div class="footer-content">
        <h3>Get In Touch</h3>
        <p>Ad's bldg., Mk Lina St., Brgy. 1, Lipa City, Philippines, 4217</p>
        <p>hdentalss@gmail.com</p>
        <p>(+63) 976 132 5110</p>
       </div>
       <div class="footer-content">
        <h3>Follow Us</h3>
        <ul class="social-icons">
        <li><a href="https://www.facebook.com/hdsmilestudio"><i class="fab fa-facebook"></i></a></li>
        </ul>
       </div>
       </div>
       <div class="bottom-bar">
        <p>&copy; Copyright 2024 &#124; All Rights Reserved</p>
       </div>
    </section>
    </body>
</html>