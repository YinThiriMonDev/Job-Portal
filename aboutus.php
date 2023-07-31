<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/aboutus.css?v=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap/min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

  <title>About us page</title>
  <style>
   @import url('https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400&display=swap');

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
    text-decoration: none;
}

.container {
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
        <div class="container">
            <nav class="navbar d-flex">
                <a href="#" class="brand" style="font-family: 'Poppins', sans-serif;">Job<span class="brand-text">Portal</span></a>
                <div class="burger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="navigation-bar">
                    <ul class="links">
                        <li><a href="home.php">Home</a></li>
                        <li><a href="contactus.php">Contact Us</a></li>
                        <li><a href="aboutus.php">About Us</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><select name="Login" class="btn" onchange="handleRegistration(this.value)">
                            <option value="">Login</option>
                            <option value="login.php">Admin</option>
                            <option value="user_login.php">Job Seeker</option>
                            <option value="employer_login.php">Employer</option>
                        </select></li>
                        <li><select name="Register" class="btn" onchange="handleRegistration(this.value)">
                            <option value="">Register</option>
                            <option value="job_seeker_registration.php">Job Seeker </option>
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
          <!-- Start Landing Page -->
          <div class="landing-page">
        <div class="content">
          <div class="container">
            <div class="info" style="padding-left:75px;">
              <h1>About Us</h1>
              <p>Job Portal is Myanmar's most widely used online professional job site and digital recruitment platform which effectively matches employers with the most suitable candidates to fill their jobs. </p>
              <p>In addition, Job Portal delivers advanced online recruitment software modules, aimed at helping organizations digitize their recruitment function, save time and reduce cost to hire. </p>
              <button>Read more</button>
            </div>
            <div class="image">
              <img src="images/p1.jpg">
            </div>
          </div>
        </div>
      </div>
      <!-- End Landing Page -->

       <!--Service Section Starts-->

      <section>
      <div class="row">
        <h2 class="section-heading">Our Services</h2>
      </div><br><br><br>
      <div class="row">
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fas fa-laptop"></i>
            </div>
            <h3>User-Friendly Interface</h3>
            <p>
              A user who have zero experince with web based application, this job portal will make it ease to use.
            </p>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fas fa-address-book"></i>
            </div>
            <h3>Easy Registration</h3>
            <p>
              Depending on the user level such as job seeker and employer, the user can easily register by filling the pop up form.
            </p>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fas fa-briefcase"></i>
            </div>
            <h3>Unlimited Job Opportunities</h3>
            <p>
              This job portal website have an array of job vacancies from all the top companies. So, one can easily browse through the list to choose the job they have desired for.
            </p>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fas fa-bullhorn"></i>
            </div>
            <h3>Recruitment Analytics</h3>
            <p>
            Job portals may provide data and insights on job postings, candidate engagement, and other recruitment metrics to help employers optimize their hiring strategies.
            </p>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fas fa-grin-hearts"></i>
            </div>
            <h3>Resume/CV Creation:</h3>
            <p>
            Many job portals offer tools or templates to create and format resumes or CVs, making it easier for job seekers to showcase their skills and qualifications.
            </p>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fas fa-user-alt"></i>
            </div>
            <h3>Employer Branding</h3>
            <p>
            Job portals may offer features to enhance an employer's brand by providing company profiles, showcasing their culture, values, and benefits to attract top talent.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!--Service Section Ends-->
    <br><br><br><br>

      <section id="testimonials">
          <div class="testimonial-heading">
            <span>Comments</span>
            <h1>What Our Clients Say</h1>
          </div>

          <div class="testimonial-box-container">
            <div class="testimonial-box">
              <div class="box-top">
                <div class="profile">
                  <div class="profile-img">
                    <img src="images/human1.jpg">
                  </div>
                  <div class="name-user">
                    <strong>Emily</strong>
                    <span>@emilyisme</span>
                  </div>
                </div>
                <div class="reviews">
                    <i class='fas fa-star'></i>
                    <i class='fas fa-star'></i>
                    <i class='fas fa-star'></i>
                    <i class='fas fa-star'></i>
                    <i class='fas fa-star'></i>
                </div>
              </div>

              <div class="client-comment">
                <p>Thank you for being so accessible to those of us who are looking for very specific jobs! I never would have heard about this great opportunity if it weren’t for FlexJobs. I can work anywhere in Myanmar as long as I have an internet connection! Thank you so much.</p>
              </div>
            </div>

            <div class="testimonial-box">
              <div class="box-top">
                <div class="profile">
                  <div class="profile-img">
                    <img src="images/human2.jpg">
                  </div>
                  <div class="name-user">
                    <strong>Stacy</strong>
                    <span>@hithisisstacy</span>
                  </div>
                </div>
                <div class="reviews">
                    <i class='fas fa-star'></i>
                    <i class='fas fa-star'></i>
                    <i class='fas fa-star'></i>
                    <i class='fas fa-star'></i>
                    <i class='far fa-star'></i>
                </div>
              </div>

              <div class="client-comment">
                <p>Using Job Portal was easy and great! It happened so fast! Finding flexible work opened some great ideas, and I will have more time for myself. I found researching companies effective. Job Portal is very efficient, and all job seekers should check it out.</p>
              </div>
            </div>

            <div class="testimonial-box">
              <div class="box-top">
                <div class="profile">
                  <div class="profile-img">
                    <img src="images/human3.jpg">
                  </div>
                  <div class="name-user">
                    <strong>Michael</strong>
                    <span>@michaeldeveloper</span>
                  </div>
                </div>
                <div class="reviews">
                    <i class='fas fa-star'></i>
                    <i class='fas fa-star'></i>
                    <i class='fas fa-star'></i>
                    <i class='fas fa-star'></i>
                    <i class='far fa-star'></i>
                </div>
              </div>

              <div class="client-comment">
                <p>Job Portal is one of the best platforms where you can explore, find jobs and get hired. This job portal website is very nice and well managed which provides the best opportunities relevant to our profile</p>
              </div>
            </div>

            <div class="testimonial-box">
              <div class="box-top">
                <div class="profile">
                  <div class="profile-img">
                    <img src="images/human4.jpg">
                  </div>
                  <div class="name-user">
                    <strong>Jonathan</strong>
                    <span>@Jonaisnexttothan</span>
                  </div>
                </div>
                <div class="reviews">
                    <i class='fas fa-star'></i>
                    <i class='fas fa-star'></i>
                    <i class='fas fa-star'></i>
                    <i class='fas fa-star'></i>
                    <i class='far fa-star'></i>
                </div>
              </div>

              <div class="client-comment">
                <p>We've hired several qualified applicants who report first seeing the position on Job Portal, and we'll definitely utilize your services again in future recruiting efforts. It's been great working with you!</p>
              </div>
            </div>
          </div>
      </section>

      <section>
    <h1 class="title">Frequently Asked Questions</h1>

    <div class="questions-container">
    <div class="question">
            <button>
                <span>What is the Job Portal?</span>
                <i class="fas fa-chevron-down d-arrow"></i>
            </button>
            <p>Job Portal is a free, fully managed, interactive, and user-friendly web application designed to connect between employers and job seekers.</p>
        </div>

        <div class="question">
            <button>
                <span>What can it do?</span>
                <i class="fas fa-chevron-down d-arrow"></i>
            </button>
            <p>It allows employers to create and post tourism related vacancies and can easily make edits to any job submissions.
It allows job seekers to upload their resumes and search for jobs by using key words. Job seekers can also remain in the loop by creating job alerts, this feature sends new jobs straight to their email.</p>
        </div>
        <div class="question">
            <button>
                <span> How can I apply for a job?</span>
                <i class="fas fa-chevron-down d-arrow"></i>
            </button>
            <p>If you are interested in applying for a position, you can directly apply for the job from our Job Portal website by creating your own user profile.</p>
        </div>

        <div class="question">
            <button>
                <span>Do I have to pay a service fee to Job Portal as a candidate?</span>
                <i class="fas fa-chevron-down d-arrow"></i>
            </button>
            <p>No, candidates do not need to pay us for our service. All service fees are charged to the company we represent.</p>
        </div>
    </div>
</section>



<footer class="bg-light text-dark pt-5 pb-4">
      <div class="container text-center text-md-left">
        <div class="row text-center text-md-left">
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h5 class="text-uppercase mb-4 font-weight-bold text-info">About us</h5>
            <hr class="mb-4">
            <p>Job Portal is one of the job search platforms where you can find the widest selection of the best jobs in Myanmar. Our mission is to provide you with an easy way to search for the best job opportunities in Myanmar</p>
          </div>

          <div class="col-md-4 col-lg-4 col-xl-2 mx-auto mt-3">
            <h5 class="text-uppercase mb-4 font-weight-bold text-info">Quick Links</h5>
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
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h5 class="text-uppercase mb-4 font-weight-bold text-info">Let us help</h5>
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

          <hr class="mb-4">
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
        </div>
      </div>
    </footer>

<script src="js/about.js"></script>
<script src="js/main1.js"></script>

</body>

</html>