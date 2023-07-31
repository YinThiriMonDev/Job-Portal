<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Portal Home Page</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap/min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css?v=1">
    <link rel="stylesheet" href="css/slide.css?v=1">
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

:root {
    --primary-color: #F78F7D;
    --secondary-color: #F6BCAD;
    --info-color: #FFDCD4;
}

body {
    font-family: 'Poppins', sans-serif;
}

a {
    text-decoration: none
}

.containerss {
    width: 100%;
    max-width: 1300px;
    margin: 0 auto;
}

.d-flex {
    display: flex;
    justify-content: space-between;
    align-items: center
}

header {
    position: relative;
    height: 83px;
    width: 100%;
}



nav {
    height: 83px;
    width: 100%;
    padding: 20px 0px;
}

.brand {
    color: #021300;
    font-size: 50px;
    text-transform: capitalize;
    font-weight: 900;
    margin-left: 20px;
    font-family: 'Permanent Marker', cursive;
}

.brand-text {
    color: var(--primary-color);
}

.navigation-bar ul {
    margin: 0px;
    padding: 0px;
}

.navigation-bar ul li {
    display: inline-block;
    margin: 0px 25px;
}

.navigation-bar ul li:last-child {
    margin-right: 0px;
}

.navigation-bar ul li a {
    color: #222222;
    font-size: 16px;
    font-weight: normal;
    font-weight: 600;
    text-transform: capitalize;
    animation: all 1s ease-in-out;
}

.navigation-bar ul li a:hover {
    color: var(--primary-color);
    border-bottom: 1px solid var(--secondary-color);
}

.btn {
    display: inline-block;
    padding: 10px 28px;
    color: #222222;
    background-color: var(--info-color);
    border-radius: 5px;
    font-weight: normal;
    font-weight: 600;
}

.navigation-bar ul li a.btn:hover {
    background-color: var(--primary-color);
    color: #fff;
}

.navigation-bar.active {
    display: flex;
}

.burger {
    width: 25px;
    cursor: pointer;
    display: none;
}

.burger span {
    display: block;
    margin-bottom: 3px;
    height: 3px;
    color: #021300;
    width: 100%;
    background-color: var(--primary-color);
}


@media (min-width: 991px) {
    .navigation-bar {
        display: block !important;
    }
}

@media (max-width: 991px) {
    .burger {
        display: block;
        position: absolute;
        right: 20px;
    }

    .navigation-bar {
        display: none;
        position: absolute;
        left: 0;
        top: 70px;
        width: 100%;
        background-color: var(--info-color);
        padding: 20px 0;
        text-align: center;
        justify-content: center;
        z-index: 2;
    }

    .navigation-bar ul li {
        display: block;
        margin: 15px 0;
    }

    .navigation-bar ul li a.btn {
        background-color: var(--secondary-color);
        color: #fff;
    }

    .navigation-bar ul li a:hover {
        color: var(--primary-color);
    }

    .navigation-bar ul li a.btn:hover {
        background-color: var(--primary-color);
        color: #fff;
    }


}
    </style>

</head>

<body>
<header>
<div class="containerss">
            <nav class="navbar d-flex">
                <a href="#" class="brand" style="text-decoration:none;">Job<span class="brand-text">Portal</span></a>
                <div class="burger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="navigation-bar">
                    <ul class="links">
                        <li><a href="home.php" style="text-decoration:none;">Home</a></li>
                        <li><a href="contactus.php" style="text-decoration:none;">Contact Us</a></li>
                        <li><a href="aboutus.php" style="text-decoration:none;">About Us</a></li>
                        <li><a href="blog.php" style="text-decoration:none;">Blog</a></li>

                        <li><select name="Login" class="btn" onchange="handleRegistration(this.value)">
                            <option value="">Login</option>
                            <option value="login.php">Admin</option>
                            <option value="user_login.php">Job Seeker</option>
                            <option value="employer_login.php">Employer</option>
                        </select></li>

                        <li><select name="Register" class="btn" onchange="handleRegistration(this.value)">
                            <option value="">Register</option>
                            <option value="job_seeker_registration.php">Job Seeker</option>
                            <option value="employer_registration.php">Employer</option>
                        </select></li>

                        <script>
                            function handleRegistration(url) {
                                if (url) {
                                    window.location.href = url;
                                }
                            }
                        </script>
                    </ul>
                </div>
            </nav>
        </div>

    </header>
<br><br><br>
    <!-- Main -->
    <main>
        <!-- home -->
        <section class="about " id="about">
            <div class="container">
                <div class="aboutus-wrapper d-flex">

                    <div class="aboutus-content">
                        <h2>Advanced your career with Job Portal</h2>
                        <p>Job Portal delivers advanced online recruitment software modules, aimed at helping organizations digitize their recruitment function, save time and reduce cost to hire </p>
                        <p>It further supports the advancement of Myanmar’s human resources community, hosting an annual calendar of career conferences and educational seminars. </p>


<a href="aboutus.php" class="btn" style="margin-top:20px;">read more</a>
                    </div>
                    <div class="aboutus-img">
                        <img src="images/cover3.jpg" alt="about image" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
        <br>
          <!--brand logo section-->
          <div class="container">
                <h2 style="text-align:center; padding: 20px;">Our Top Employers</h2>
                <section class="customer-logos slider">
                <div class="slide"><img src="https://i.ibb.co/3009nS6/aya-bank.jpg"></div>
                <div class="slide"><img src="https://i.ibb.co/vcBxbqG/aia.jpg"></div>
                <div class="slide"><img src="https://i.ibb.co/LdbChbT/coca1.png"></div>
                <div class="slide"><img src="https://i.ibb.co/vJhpG6R/yomabank.jpg"></div>
                <div class="slide"><img src="https://i.ibb.co/rkst2X3/hein1.jpg"></div>
                <div class="slide"><img src="https://i.ibb.co/RDm8cbm/download.jpg"></div>
                <div class="slide"><img src="https://i.ibb.co/MVkjgSt/download.png"></div>
                </section>
           </div>
        <br><br><br>
        <section class="about " id="about">
            <div class="container">
                <div class="aboutus-wrapper d-flex">
                    <div class="aboutus-img">
                        <img src="images/cover4.jpg" alt="about image" class="img-fluid">
                    </div>
                    <div class="aboutus-content">
                        <h2>About us</h2>
                        <p>Job Portal is Myanmar's most widely used online professional job site and digital recruitment platform which effectively matches employers with the most suitable candidates to fill their jobs. </p>
                        <p>Since the beginning of 2023, Job Portal is also the founding sponsor of the annual Myanmar Employer Awards that encourage and recognize best practices in human resource management.</p>

                        <a href="aboutus.php" class="btn" style="margin-top: 20px;">read more</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Newsletter -->
        <section class="newsletter ptb-100" id="newsletter">
            <div class="container">
                <!-- section title -->
                <div class="title-section">
                    <h2>Newsletter</h2>
                    <p>Subscribe to our newsletter and stay updated.</p>
                </div>
                <div class="newsletter-wrapper d-flex">
                    <input type="text" placeholder="Your email address...">
                    <a href="#" class="btn" style="padding:16px 10px;">Subscribe</a>
                </div>
            </div>
        </section>
        <footer class="bg-light text-dark pt-5 pb-4">
      <div class="container text-center text-md-left">
        <div class="row text-center text-md-left">
          <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-3">
            <h5 class="text-uppercase mb-4 font-weight-bold text-info" style="font-size:20px;">About us</h5>
            <hr class="mb-4">
            <p>Job Portal is one of the job search platforms where you can find the widest selection of the best jobs in Myanmar. Our mission is to provide you with an easy way to search for the best job opportunities in Myanmar</p>
          </div>


<div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-3">
            <h5 class="text-uppercase mb-4 font-weight-bold text-info" style="font-size:20px;">Quick Links</h5>
            <hr class="mb-4">
            <p>
              <a href="home.php" class="text-dark" style="text-decoration:none">Home</a>
            </p>
            <p>
              <a href="contactus.php" class="text-dark" style="text-decoration:none">Contact Us</a>
            </p>
            <p>
              <a href="aboutus.php" class="text-dark" style="text-decoration:none">About Us</a>
            </p>
            <p>
              <a href="blog.php" class="text-dark" style="text-decoration:none">Blog</a>
            </p>
          </div>
          <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-3">
            <h5 class="text-uppercase mb-4 font-weight-bold text-info" style="font-size:20px;">Let us help</h5>
            <hr class="mb-4">
            <p>
              <li class="fas fa-home mr-3"></li> Yangon, Myanmar
            </p>
            <p>
              <li class="fas fa-envelope mr-3"></li> jobportalmyanmar@gmail.com
            </p>
            <p>
              <li class="fas fa-phone mr-3"></li> 09421084583
            </p>
          </div>
        </div>
      </div>
          <hr class="mb-4">
          <section>
          <div class="row d-flex justify-content-center">
            <div>
              <p>
                Copyright 2023 All Rights Reserved By :
                <a href="#" style="text-decoration:none;">
                  <strong class="text-info">Group 5</strong>
              </a>
              </p>
            </div>
          </div>

          <div class="row d-flex justify-content-center">
            <div class="text-center">
              <ul class="list-unstyled list-inline">
                <li class="list-inline-item">
                  <a href="#" class="text-dark"><li class="fab fa-facebook"></li></a>
                </li>
                <li class="list-inline-item">
                  <a href="#" class="text-dark"><li class="fab fa-twitter"></li></a>
                </li>
                <li class="list-inline-item">
                  <a href="#" class="text-dark"><li class="fab fa-google-plus"></li></a>
                </li>
                <li class="list-inline-item">
                  <a href="#" class="text-dark"><li class="fab fa-linkedin-in"></li></a>
                </li>
                <li class="list-inline-item">
                  <a href="#" class="text-dark"><li class="fab fa-youtube"></li></a>
                </li>
              </ul>
            </div>
          </div>
          </section>
    </footer>
    </main>
    <!-- Footer -->

    <!-- Scroll up -->
    <a href="javascript:void(0)" class="scrollup show">
        <img src="images/arrow-up.svg" alt="arrow up">
    </a>
</body>
<script src="js/main.js"></script>
<script src="js/script1.js"></script>
</html>