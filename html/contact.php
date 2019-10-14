<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ace Medical Center">
    <meta name="keywords" content="Doctor,Hospital,Center,Emergency,Health Care">
    <meta name="author" content="Jeanefer Jenny Retuerto,Darwin Serocefino,Mark Timbal,Marvin Capa">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <title>Ace Medical Center | Contacts</title>
</head>
<body>
    <!-- Header Logout -->
    <header class="header">
        <a href="../index.php">Logout</a>
    </header>
    <!-- Nav Section -->
    <nav class="nav">
        <div class = "logo"></div>
        <ul class="menu">
            <li><a href="home.php">Home</a></li>
            <li class="about"><a href="about.php">About</a>
                <div class="ddabout">
                    <a href="about.php#company-profile">Company Profile</a>
					<a href="about.php#mission-vission">Mission & Vision</a>
					<a href="about.php#accreditation">Accreditation</a>
                </div>
            </li>	
            <li class="service"><a href="services.php">Services</a>
                <div class="ddservice">
                    <a href="services.php#top-service-department">Department</a>
                    <a href="services.php#bottom-service-department">Services</a>
                </div>
            </li>	
            <li><a href="contact.php">Contacts</a></li>
        </ul>
    </nav>
    <!-- Upper Contacts -->
    <section class="upperCon">
        <div class="container">
            <div class="left">
                <div class="logo"></div>
            </div>
            <div class="right">
                <form action="../php/contact.php" method="POST" onSubmit = "return validateContact();">
                    <div class="appointment">
                        <h1>Make an appointment</h1>
                        <div class="input_field">
                        <input type="text" placeholder="Full Name" class="input" name="fullname" id="fullnameID">
                        </div>
                        <div class="input_field">
                        <input type="email" placeholder="Email" class="input" name="email" id="emailID">
                        </div>
                        <div class="input_field">
                        <textarea cols="30" rows="10" placeholder="Message" class="input" name="message" id="messageID"></textarea>
                        </div>
                        <div class="btn">
                            <input type="submit" value="Submit" class="btn-submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Lower Contacts -->
    <section class="lowerCon">
        <div class="container">
            <div class="contact-details">
                <p>CALL US AT: 8-888-223(ACE)<br>
                   ADDRESS: ACE MEDICAL CENTER - Cebu<br>
                   494 National Highway<br>
                   Basak, Pardo<br>
                   Cebu City, Philippines 6000
                   EMAIL US AT: Office.Staff@acemccebu.com<br>
                   APPLICANTS EMAIL US AT: HR.Recruitment@acemccebu.com
                </p>
            </div>
            <div class="logo"></div>
        </div>
    </section>
    <!-- Footer -->
    <footer>
        <p class="p1">Copyright 2019, TEAM PATIENTS, ALL RIGHTS RESERVED</p>
        <p class="p2">Designed by Team Patients</p>
    </footer>
    <script src="../js/validate.js"></script>
</body>
</html>