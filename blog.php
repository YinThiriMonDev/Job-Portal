<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <!-- Font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap/min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">

    <!-- css -->
    <link rel="stylesheet" href="css/blog.css?v=1">

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
    text-decoration: none
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
  <script></script>

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


    <section class="blog">
        <h1 class="heading">our latest blog</h1>

        <div class="box-container">

            <div class="box shadow">

                <div class="image">
                    <img src="images/blog1e.jpg" alt="">
                    <h3><i class="fas fa-heart"></i> 82</h3>
                </div>
                <div class="content">
                    <h3>6 Reasons Why You Need to Take a Workation</h3>
                    <p>If you are a professional that works from your home office, you may need to spice things up a bit. Take a good look around your office and ask yourself if you need a change of scenery. Do you find the walls of your home office closing in on you as you repeat the same…</p>
                    <a href="#" class="btn">read more</a>
                </div>

            </div>

            <div class="box shadow">

                <div class="image">
                    <img src="images/blog2e.jpg" alt="">
                    <h3><i class="fas fa-heart"></i> 77</h3>
                </div>
                <div class="content">
                    <h3>How Startups Can Create an Unbeatable Culture</h3>
                    <p>It’s undeniable that there are many benefits of great work culture, although they can be difficult to pin down as each organization has its own unique mission, history, and personality. Albeit extensive, it’s almost impossible to create a ‘one size fits all’ list. A strong team is the driving force of success. In the early…</p>
                    <a href="#" class="btn">read more</a>
                </div>

            </div>

            <div class="box shadow">

                <div class="image">
                    <img src="images/blog3.jpg" alt="">
                    <h3><i class="fas fa-heart"></i> 52</h3>
                </div>
                <div class="content">
                    <h3>The 5 Best Recruiting Software Tools in 2023</h3>
                    <p>Looking for the best recruiting software on the market? You’re in the right place! Hiring a new employee can be costly and time-consuming. According to Indeed, you can expect to pay up to 30% of the hired employee’s first-year salary to a recruiter – and it can take up to 52 days to fill a position. </p>
                    <a href="#" class="btn">read more</a>
                </div>

</div>

            <div class="box shadow">

                <div class="image">
                    <img src="images/blog4.jpg" alt="">
                    <h3><i class="fas fa-heart"></i> 80</h3>
                </div>
                <div class="content">
                    <h3>5 Ways Workplace Bonding Improves Employee Satisfaction </h3>
                    <p>For many working professionals, the workplace is like a second family. And even though remote working has put a damper on the process, many workers today still think of the workplace as the place to create lifelong relationships and forge friendships. That’s why many companies today are enabling and encouraging workplace bonding. It has now…</p>
                    <a href="#" class="btn">read more</a>
                </div>

            </div>

            <div class="box shadow">

                <div class="image">
                    <img src="images/blog5.jpg" alt="">
                    <h3><i class="fas fa-heart"></i> 50</h3>
                </div>
                <div class="content">
                    <h3>5 Tips to ‘Quiet Thriving’ in the Workplace</h3>
                    <p>‘Quiet thriving’ is a concept that emerged after the trend ‘quiet quitting’ became widely discussed at the end of last year. Quiet quitting refers to completing the minimum requirements of one’s job. Individuals put in no additional enthusiasm, effort, time or energy than needed. In contrast, ‘quiet thriving’ involves the opposite with employees reconsidering their relationship with…</p>
                    <a href="#" class="btn">read more</a>
                </div>

            </div>

            <div class="box shadow">

                <div class="image">
                    <img src="images/blog6.jpg" alt="">
                    <h3><i class="fas fa-heart"></i> 40</h3>
                </div>
                <div class="content">
                    <h3>How to Effectively Respond to Candidates’ Final Interview Questions</h3>
                    <p>The seismic shift during the last two years has turned the labor market on its head. Today, there is a near record of ~11.2 million jobs available, with almost two job openings for every unemployed American. And with the constantly shifting landscape, companies continue to face high employee turnover and difficulty acquiring quality talent to…</p>
                    <a href="#" class="btn">read more</a>
                </div>

            </div>

            <div class="box shadow">

                <div class="image">
                    <img src="images/blog7.jpg" alt="">
                    <h3><i class="fas fa-heart"></i> 40</h3>
                </div>
                <div class="content">
                    <h3>5 Automation Habits of Highly Effective Recruiting Teams </h3>
                    <p>In a talent-short market, having a consistently engaged talent pool sets recruitment firms apart from their competitors. Thankfully, cutting-edge automation tools are helping recruiters to engage, nurture, and, ultimately, place top-level talent into new roles at the pace and scale demanded by their clients. In fact, according to Bullhorn’s aggregated data, agencies that use automation…</p>
                    <a href="#" class="btn">read more</a>
                </div>

            </div>

            <div class="box shadow">
<div class="image">
                    <img src="images/blog8.jpg" alt="">
                    <h3><i class="fas fa-heart"></i> 40</h3>
                </div>
                <div class="content">
                    <h3>What Candidates Want Most, According to New Research</h3>
                    <p>The labor market continues to favor candidates. With more than 11.4 million job openings and two positions for each unemployed person, according to the latest BLS data, most organizations are scrambling to keep up with the rapid volume of hiring. Workers are leveraging this power to secure new jobs, higher wages, and better benefits. According…</p>
                    <a href="#" class="btn">read more</a>
                </div>

            </div>


            <div class="box shadow">

                <div class="image">
                    <img src="images/blog9.jpg" alt="">
                    <h3><i class="fas fa-heart"></i> 40</h3>
                </div>
                <div class="content">
                    <h3>What Should Your Facebook Budget Be When Targeting Your Next Candidate?</h3>
                    <p>As one of the ‘original’ social media platforms, Facebook broke the mold when it came to market in 2004. Initially, a place for friends and family to connect – while that’s still the case – many businesses are noticing how effective it can be when engaging a relevant audience. And for organizations and HR teams…</p>
                    <a href="#" class="btn">read more</a>
                </div>

            </div>
        </div>
    </section>

    <footer class="bg-light text-dark pt-5 pb-4">
      <div class="container text-center text-md-left">
        <div class="row text-center text-md-left">
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h5 class="text-uppercase mb-4 font-weight-bold text-info" style="font-size:20px;">About us</h5>
            <hr class="mb-4">
            <p>Job Portal is one of the job search platforms where you can find the widest selection of the best jobs in Myanmar. Our mission is to provide you with an easy way to search for the best job opportunities in Myanmar</p>
          </div>

          <div class="col-md-4 col-lg-4 col-xl-2 mx-auto mt-3">
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
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
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


    <script src="js/main1.js"></script>

</body>
</html>