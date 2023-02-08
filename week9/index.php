<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mico's Portfolio</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/aos.css">
    <link rel="stylesheet" href="./assets/css/line-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="icon" type="image/x-icon" href="./assets/images/icon.png">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" onload=display_ct();>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container flex-lg-column">
            <a class="navbar-brand mx-lg-auto mb-lg-4  rounded-circle" href="#">
                <img src="./assets/images/person.jpg" class="d-none d-lg-block rounded-circle" alt="Mico">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto flex-lg-column text-lg-center">

                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#project">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About Me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#interests">Interests</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#resources">resources</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#form">Register & Login</a>
                    </li>

                </ul>
                
            </div>
        </div>
    </nav>
    <!-- //NAVBAR -->
    

    <!-- CONTENT WRAPPER -->
    <div id="content-wrapper">

        <!-- HOME -->
        <section id="home" class="full-height px-lg-5 background-video-overlay">

            <div class="container">

                <video autoplay muted loop id="background-video1">
                    <source src="./assets/images/project-vid.mp4" type="video/mp4">
                </video>

                <div class="row">
                    <div class="col-lg-10 custom-home">
                        <h1 class="display-4 fw-bold" data-aos="fade-up">I'M A <span class="auto-type"></span> 
                            <p>FROM PHILIPPINES, MANILA</p></h1>
                        <p class="lead mt-2 mb-4" data-aos="fade-up" data-aos-delay="300">I am Mico, a BS Com Sci student specializing in CyberSecurity on its 2nd Year. For the most part I enjoy back-end coding as well as a little bit of front-end.</p>
                        <div data-aos="fade-up" data-aos-delay="1000">
                            <a href="#project" class="btn btn-brand me-3" id="custom-button">Explore My Work</a>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- //HOME -->

        <!-- SERVICES -->
        <section id="services" class="full-height px-lg-5">
            <div class="container">

                <div class="row pb-4" data-aos="fade-up">
                    <div class="col-lg-8">
                        <h6 class="text-brand">SERVICES</h6>
                        <h1>Services That I Provide</h1>
                    </div>
                </div>

                <div class="row gy-4">

                    <div class="col-md-4" data-aos="fade-up">
                        <div class="service p-4 bg-base rounded-4 shadow-effect">
                            <div class="iconbox rounded-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-file-earmark-code-fill" viewBox="0 0 16 16">
                                    <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM6.646 7.646a.5.5 0 1 1 .708.708L5.707 10l1.647 1.646a.5.5 0 0 1-.708.708l-2-2a.5.5 0 0 1 0-.708l2-2zm2.708 0 2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L10.293 10 8.646 8.354a.5.5 0 1 1 .708-.708z"/>
                                  </svg>
                            </div>
                            <h5 class="mt-4 mb-2">Full stack Developer</h5>
                            <p>Has knowledege in Java, JavaScript, PHP Frameworks, MySQL, Python.</p>
                        </div>
                    </div>

                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="service p-4 bg-base rounded-4 shadow-effect">
                            <div class="iconbox rounded-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-camera-reels-fill" viewBox="0 0 16 16">
                                    <path d="M6 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                    <path d="M9 6a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                    <path d="M9 6h.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 7.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 16H2a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h7z"/>
                                  </svg>
                            </div>
                            <h5 class="mt-4 mb-2">Video Editing</h5>
                            <p>Has knowledege in Da Vinci Resolve and Adobe Premiere.</p>
                        </div>
                    </div>

                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
                        <div class="service p-4 bg-base rounded-4 shadow-effect">
                            <div class="iconbox rounded-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-palette-fill" viewBox="0 0 16 16">
                                    <path d="M12.433 10.07C14.133 10.585 16 11.15 16 8a8 8 0 1 0-8 8c1.996 0 1.826-1.504 1.649-3.08-.124-1.101-.252-2.237.351-2.92.465-.527 1.42-.237 2.433.07zM8 5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm4.5 3a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zM5 6.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm.5 6.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                                  </svg>
                            </div>
                            <h5 class="mt-4 mb-2">Graphic Artist</h5>
                            <p>Has knowledege in Adobe Photoshop and Canva.</p>
                        </div>
                    </div>

                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="900">
                        <div class="service p-4 bg-base rounded-4 shadow-effect">
                            <div class="iconbox rounded-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-microsoft" viewBox="0 0 16 16">
                                    <path d="M7.462 0H0v7.19h7.462V0zM16 0H8.538v7.19H16V0zM7.462 8.211H0V16h7.462V8.211zm8.538 0H8.538V16H16V8.211z"/>
                                  </svg>
                            </div>
                            <h5 class="mt-4 mb-2">Microsoft Office Skills</h5>
                            <p>Has knowledege in MS Word, Excel, Powerpoint.</p>
                        </div>
                    </div>

                    

                </div>

            </div>
        </section>
        <!-- SERVICES -->

        <!-- PROJECTS -->
        <section id="project" class="full-height px-lg-5 background-video-overlay"  style="position: relative; border-left: 0px solid rgba(245, 245, 245, 0.323);">
            <div class="full-height px-lg-5" style="position: absolute; top: 0; left: 0;  width: 100%; height: 100%!important; overflow: hidden;">
                <video autoplay muted loop id="background-video2">
                    <source src="./assets/images/coding.mp4" type="video/mp4">
                </video>
            </div>

            <div class="container">

                <div class="row pb-4" data-aos="fade-up">
                    <div class="col-lg-8">
                        <h6 class="text-brand">Projects</h6>
                        <h1>My Recent Projects</h1>
                    </div>
                </div>

                <div class="row gy-4">

                    <div class="col-md-12" data-aos="fade-up">
                        <div class="card-custom rounded-4 bg-base shadow-effect">
                            <div class="card-custom-image rounded-4">
                                <video autoplay controls muted loop id="meditect-vid">
                                    <source class="rounded-4" src="./assets/images/meditect.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="card-custom-content p-4">
                                <h4>Meditect</h4>
                                <p>MediTect is a website that lets users search the most equipped clinic, health center, and hospital in the nearest location possible. This was a proposed solution for the team’s clients Sgt. Ma. Jelu B. Bundal and Nurse Melvie B. Urbanozo, who claim to have difficulties with: (1) knowing the availability on doctors and services since this information are hard to find or unavailable on their platforms at a given time; (2) finding the closest hospital from a given location; (3) lack of information as which healthcare facility has the proper equipment and/or facilities to treat a patient; and (4) a background of the healthcare facility. To solve this problem, the team offered a solution which allows users to know information about the facility’s contact information, address, availability, and provided services. </p>
                                <p>
                                    Team Members:
                                    <br>Guen Joy Alimodian
                                    <br>Daniel Andrey Angat
                                    <br>Ma. Gracia Kim Brela
                                    <br>Jonathan Angelo Bueno 
                                    <br>Ma. Regina Sencisco
                                    <br>Keisha Maury Viadoy

                                </p>
                    
                                <a href="#" class="link-custom">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-7" data-aos="fade-up" data-aos-delay="300">
                        <div class="card-custom rounded-4 bg-base shadow-effect">
                            <div class="card-custom-image rounded-4">
                                <img class="rounded-4" src="./assets/images/movieflix.png" alt="">
                            </div>
                            <div class="card-custom-content p-4">
                                <h4>MovieFlix</h4>
                                <p>A website inspired by putlocker and 123movies. It hosts trailers for different movies in the database. Purely done for academic purposes only.</p>
                                <a href="#" class="link-custom">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5" data-aos="fade-up" data-aos-delay="600">
                        <div class="card-custom rounded-4 bg-base shadow-effect">
                            <div class="card-custom-image rounded-4">
                                <img class="rounded-4" src="./assets/images/scicon.png" alt="" style="width: auto; height: 447px;">
                            </div>
                            <div class="card-custom-content p-4">
                                <h4>SciCon</h4>
                                <p>It is a java based application that converts different scientifical related calculations to its other units. Also purely done for academic purposes only.</p>
                                <a href="#" class="link-custom">Read More</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- //PROJECTS -->

        <!-- ABOUT ME-->
        <section id="about" class="full-height px-lg-5">
            <div class="container">

                <div class="row pb-4" data-aos="fade-up">
                    <div class="col-lg-8">
                        <h6 class="text-brand">ABOUT</h6>
                        <h1>My Education & Experience</h1>
                    </div>
                </div>

                <div class="row gy-5">
                    <div class="col-lg-6">

                        <h3 class="mb-4" data-aos="fade-up" data-aos-delay="300">Education</h3>
                        <div class="row gy-4">

                            <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                                <div class="bg-base p-4 rounded-4 shadow-effect">
                                    <h4>High School</h4>
                                    <p class="text-brand mb-2">Pasay City National Science High School (2015 - 2019)</p>
                                </div>
                            </div>

                            <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                                <div class="bg-base p-4 rounded-4 shadow-effect">
                                    <h4>Senior High School</h4>
                                    <p class="text-brand mb-2">Asia Pacific College (2019 - 2021)</p>
                                    <p class="mb-0">Graduated with High Honors</p>
                                </div>
                            </div>

                            <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                                <div class="bg-base p-4 rounded-4 shadow-effect">
                                    <h4>BS Computer Science with specialization in Cybersecurity and Forensics</h4>
                                    <p class="text-brand mb-2">Asia Pacific College (2021 - 2025)</p>
                                    <p class="mb-0">Currently an Undergraduate student</p>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-6">

                        <h3 class="mb-4" data-aos="fade-up" data-aos-delay="300">Experience</h3>
                        <div class="row gy-4">

                            <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                                <div class="bg-base p-4 rounded-4 shadow-effect">
                                    <h4>Back-end Developr and Quality Assurance Officer</h4>
                                    <p class="text-brand mb-2">SoCIT Bootcamp A (2020 - 2021)</p>
                                    <p class="mb-0">Created the web base app called Meditect.</p>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- //ABOUT -->

        <!-- INTERESTS -->
        <section id="interests" class="full-height px-lg-5" style="position: relative;">
            <div class="container">
                <div id="interest-vid-container">
                    <video autoplay loop controls muted id="interest-vid" data-aos="fade-in" data-aos-delay="250">
                        <source src="./assets/images/sportsbike-colorgraded.mp4" type="video/mp4">
                    </video>
                        <div class="btn btn-brand me-3 muted" id="unmute-button" data-aos="fade-up" onclick="clicked()">Unmute Video</div>
                </div>
            </div>
            <div class="container" id="interest-content">

                <div class="row pb-4" data-aos="fade-up">
                    <div class="col-lg-8">
                        <h6 class="text-brand">MY INTERESTS</h6>
                        <h1>Sportsbike is my dream and passion...</h1>
                        <h7 class="text-brand" id="disclaimer">Disclaimer: Video not mine, used for academic purposes only.<span id="rev"></span></h7>
                        <br>
                        <br>
                        <p align="justify" class="lead mt-2 mb-4" data-aos="fade-up" data-aos-delay="300">
                            I have always had a passion for sport bikes. The sleek design, powerful engine, and exhilarating speed all contribute to the appeal of these motorcycles. Another aspect that I appreciate about sport bikes is the sense of freedom and independence that comes with riding one. There is something about being on a motorcycle, feeling the wind in my face and the open road ahead, that is truly liberating. It is a great way to clear my mind and escape from the stress of daily life.


                        </p>
                    </div>
                </div>

            </div>
        </section>
        <!-- //INTERESTS -->

        <!-- RESOURCES -->
        <section id="resources" class="full-height px-lg-5">
            <div class="container">

                <div class="row pb-4" data-aos="fade-up">
                    <div class="col-lg-8">
                        <h6 class="text-brand">RESOURCES</h6>
                        <h1>Resources used on this website</h1>
                    </div>
                </div>

                <div class="row gy-4">


                    <div class="col-md-3" data-aos="fade-up">
                        <div class="card-custom rounded-4 bg-base shadow-effect">
                            <div class="card-custom-image rounded-4">
                                <img class="rounded-4 custom-img-src" src="https://i.pinimg.com/originals/1d/c3/d4/1dc3d43600d5787cce5718e13390d881.png" alt="">
                            </div>
                            <div class="card-custom-content p-4">
                                <h4>HTML Sources</h4>
                                <a href="https://my-learning.w3schools.com/tutorial/html" class="link-custom" target="_blank">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3" data-aos="fade-up">
                        <div class="card-custom rounded-4 bg-base shadow-effect">
                            <div class="card-custom-image rounded-4">
                                <img class="rounded-4 custom-img-src" src="https://www.w3schools.com/w3css/img_demo_material.jpg" alt="">
                            </div>
                            <div class="card-custom-content p-4">
                                <h4>CSS Sources</h4>
                                <a href="https://my-learning.w3schools.com/tutorial/css" class="link-custom" target="_blank">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3" data-aos="fade-up">
                        <div class="card-custom rounded-4 bg-base shadow-effect">
                            <div class="card-custom-image rounded-4">
                                <img class="rounded-4 custom-img-src" src="https://res.cloudinary.com/practicaldev/image/fetch/s---NueoOpQ--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_880/https://dev-to-uploads.s3.amazonaws.com/i/wj40cwqlkbypjuw4x77k.png" alt="">
                            </div>
                            <div class="card-custom-content p-4">
                                <h4>JAVASCRIPT Sources</h4>
                                <a href="https://my-learning.w3schools.com/tutorial/js" class="link-custom" target="_blank">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3" data-aos="fade-up">
                        <div class="card-custom rounded-4 bg-base shadow-effect">
                            <div class="card-custom-image rounded-4">
                                <img class="rounded-4 custom-img-src" src="https://blog.templatetoaster.com/wp-content/uploads/2019/09/What-is-Bootstrap-Facebook.png" alt="">
                            </div>
                            <div class="card-custom-content p-4">
                                <h4>BOOTSTRAP Sources</h4>
                                <a href="https://getbootstrap.com/docs/5.0/getting-started/introduction/" class="link-custom" target="_blank">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-custom rounded-4 bg-base shadow-effect">
                            <div class="card-custom-image rounded-4">
                                <img class="rounded-4 custom-img-src" src="https://cdn.hashnode.com/res/hashnode/image/upload/v1633302630197/wKPIyyAYB.png" alt="">
                            </div>
                            <div class="card-custom-content p-4">
                                <h4>AOS JS Sources</h4>
                                <a href="https://michalsnik.github.io/aos/" class="link-custom" target="_blank">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-custom rounded-4 bg-base shadow-effect">
                            <div class="card-custom-image rounded-4">
                                <img class="rounded-4 custom-img-src" src="https://www.gstatic.com/images/icons/material/apps/fonts/1x/catalog/v5/opengraph_color.png" alt="">
                            </div>
                            <div class="card-custom-content p-4" style="height: 109px!important;">
                                <h5>GOOGLEFONTS Sources</h5>
                                <a href="https://fonts.google.com/" class="link-custom" target="_blank">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-custom rounded-4 bg-base shadow-effect">
                            <div class="card-custom-image rounded-4">
                                <img class="rounded-4 custom-img-src" src="https://kinsta.com/wp-content/uploads/2018/04/what-is-github-1-1-1024x512.png" alt="">
                            </div>
                            <div class="card-custom-content p-4">
                                <h4>GITHUB Sources</h4>
                                <a href="https://github.com/SA7MAN/joncarter" class="link-custom" target="_blank">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-custom rounded-4 bg-base shadow-effect">
                            <div class="card-custom-image rounded-4">
                                <img class="rounded-4 custom-img-src" src="https://www.elegantthemes.com/blog/wp-content/uploads/2019/02/000a-Font-Awesome-WordPress.png" alt="">
                            </div>
                            <div class="card-custom-content p-4" style="height: 109px!important;">
                                <h5>FONTAWESOME Sources</h5>
                                <a href="https://fontawesome.com/icons" class="link-custom" target="_blank">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-custom rounded-4 bg-base shadow-effect">
                            <div class="card-custom-image rounded-4">
                                <img class="rounded-4 custom-img-src" src="http://sweetalert2.github.io/images/sweetalert2-social.png" alt="">
                            </div>
                            <div class="card-custom-content p-4" style="height: 109px!important;">
                                <h5>SWEETALERT2 Sources</h5>
                                <a href="https://sweetalert2.github.io/" class="link-custom" target="_blank">Read More</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- //RESOURCES -->

        <!-- FORM -->
        <section id="form" class="full-height px-lg-5">
            <div class="container">

                <div class="row pb-4" data-aos="fade-up">
                    <div class="col-lg-8">
                        <h6 class="text-brand">Register & Login</h6>
                        <h2>Become Awesome! Register to our group</h2>
                    </div>
                </div>

                <?php
                // define variables and set to empty values
                $nameErr = $usr_passwordErr = $emailErr = $genderErr = $websiteErr = "";
                $name = $usr_password = $email = $gender = $comment = $website = "";

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["name"])) {
                    $nameErr = "Name is required";
                } else {
                    $name = test_input($_POST["name"]);
                }
                if (empty($_POST["usr_password"])) {
                    $usr_passwordErr = "Password is required";
                } else {
                    $usr_password = test_input($_POST["usr_password"]);
                }
                if (empty($_POST["email"])) {
                    $emailErr = "Email is required";
                } else {
                    $email = test_input($_POST["email"]);
                }
                if (empty($_POST["website"])) {
                    $websiteErr = "Website is required";
                } else {
                    $website = test_input($_POST["website"]);
                }
                if (empty($_POST["comment"])) {
                    $comment = "";
                } else {
                    $comment = test_input($_POST["comment"]);
                }
                if (empty($_POST["gender"])) {
                    $genderErr = "Gender is required";
                } else {
                    $gender = test_input($_POST["gender"]);
                }

                echo "<h2>Your Input:</h2>";
                echo $name;
                echo "<br>";
                echo $encrypted_pass;
                echo "<br>";
                echo $email;
                echo "<br>";
                echo $website;
                echo "<br>";
                echo $comment;
                echo "<br>";
                echo $gender;
                echo "<br>";

                $servername = "localhost";
                $username = "webprogss211";
                $password = "webprogss211";
                $dbname = "webprogss211";
                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $encrypted_pass = md5($usr_password);

                $sql = "INSERT INTO ddangat_myguests (name, password, email, gender, comment, website)
                VALUES ('$name', '$encrypted_pass', '$email', '$gender', '$comment', '$website')";

                if ($conn->query($sql) === TRUE) {
                    echo "<p class='text-brand'>New record created successfully</p>";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }

                $conn->close();
                }

                function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
                }
                ?>

                <p><span class="error">* required field</span></p>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
                Name: <input type="text" name="name">
                <span class="error">* <?php echo $nameErr;?></span>
                <br><br>
                Password: <input type="password" name="usr_password">
                <span class="error">* <?php echo $usr_passwordErr;?></span>
                <br><br>
                E-mail: <input type="email" name="email">
                <span class="error">* <?php echo $emailErr;?></span>
                <br><br>
                Website: <input type="text" name="website">
                <span class="error">*<?php echo $websiteErr;?></span>
                <br><br>
                Comment: <textarea name="comment" rows="5" cols="40"></textarea>*
                <br><br>
                Gender:
                <input type="radio" name="gender" value="female">Female
                <input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="other">Other
                <span class="error">* <?php echo $genderErr;?></span>
                <br><br>
                <input type="submit" name="submit" value="Submit">  
                </form>
                
            </div>
        </section>
        <!-- //FORM -->

        <!-- FOOTER -->
        <footer class="py-5 px-lg-5 custom-footer">
            <div class="container">
                <div class="row gy-4 justify-content-between">
                    <div class="col-auto">
                        <p class="mb-0">Designed by <a href="#" class="fw-bold">Mico and SA7MAN</a></p>
                        <p class="mb-0">Inspired by <a href="#" class="fw-bold">KAWASAKI</a></p>
                        <h7 class="text-brand" id="ct">Place Holder</h7>
                    </div>
                    <div class="col-auto">
                        <div class="social-icons">
                            <a href="#"><i class="lab la-twitter"></i></a>
                            <a href="#"><i class="lab la-instagram"></i></a>
                            <a href="#"><i class="lab la-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- //FOOTER -->

    </div>
    <!-- //CONTENT WRAPPER -->


    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/aos.js"></script>
    <script src="./assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="./assets/js/app.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>
</body>

</html>