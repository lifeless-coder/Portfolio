<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('user/userStylesheet.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">
    <link id='favicon' rel="shortcut icon" href="./assets/images/favicon.png" type="image/x-png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Portfolio</title>


</head>

<body style="font-family: 'Roboto', sans-serif;">

    <!-- Navigation -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top navbar-custom">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="#">Adrita Hasan</a>

            <!-- Toggler button for mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links aligned to right -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="#hero">Home</a>
                    <a class="nav-item nav-link" href="#about">About</a>
                    <a class="nav-item nav-link" href="#skills">Skills</a>
                    <a class="nav-item nav-link" href="#edu">Education</a>
                    <a class="nav-item nav-link" href="#experience">Experience</a>
                    <a class="nav-item nav-link" href="#achivement">Achievements</a>
                    <a class="nav-item nav-link" href="#contact">Contact</a>
                </div>
            </div>
        </div>
    </nav>






    <!-- hero Sections -->
    <section id="hero">
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="text-align: left;">
                    <div class="hero-text">
                        <h2 style="font-family: 'Paytone One', sans-serif; color: #072d55; font-size: 50px;">Hi There,<br>
                            I'm Adrita Hasan</h2>
                        <p style="color: #9d151e;"><strong>I am into Web Development</strong></p>
                        <button type="button" class="btn"><a href="#about" style="text-decoration: none; color: white;"> About me</a></button>
                    </div>
                    <div class="socials">
                        <a href=""><i class="bi bi-github"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="img\WhatsApp Image 2025-12-10 at 14.52.46_30fbb86b.jpg" alt="">
                </div>
            </div>
        </div>

    </section>

    <!-- About me -->
    <section id="about">
        <h1 style="text-align: center; color:black;"><i class="bi bi-person-fill" ></i><strong>About Me</strong> </h1>
        <div class="container">
  <div class="side-by-side">
    <div class="left">
      <h2>Left Side</h2>
      <p>Content for left side.</p>
    </div>
    <div class="right">
      <h2>Right Side</h2>
      <p>Content for right side.</p>
    </div>
  </div>
</div>

    </section>

    <section id="skills">
        <h1>My Skills</h1>
    </section>

    <section id="contact">
        <h1>Contact Me</h1>
    </section>

</body>
<script
    type="text/javascript"
    src="https://cdn.jsdelivr.net/npm/emailjs-com@3/dist/email.min.js"></script>

</html>