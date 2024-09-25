<?php

include 'components/connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Personal Portfolio - Pawan Kumavat</title>

    <!-- bootstrap css cdn link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />

    <!-- custom css file -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- google font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />

    <!-- bootstrap icon cdn link  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css" />

    <!-- for adding animation to website we have use AOS library 
    AOS Library css file cdn link -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- jquery cdn link  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <style>
        /* appling google font over the website  */
        *
{
margin: 0;
padding: 0;
box-sizing: border-box;
font-family: 'poppins' 3 sans-serif;
}
body
{
color: #ededed;
}
.header
{
position: fixed;
top: 0;
left: 0;
width: 100%;
padding: 20px 10%;
background: transparent;
display: flex;
justify-content: space-between;
align-items: center;
z-index: 100;
}
.logo {
position: relative;
font-size: 25px;
color: #fff;
text-decoration: none;
font-weight: 600;
}
.navbar a {
display: inline-block;
font-size: 25px;
color: #fff;
text-decoration:none;
font-weight: 500;
margin-left: 35px;
transition: .3s;
}
.navbar a:hover{
color: #0ef;
}
        #body {
            font-family: 'Josefin Sans', sans-serif;
            font-weight: 400;
        }

        /* styling menu icon */
        .nav-menu {
            border: none;
            background-color: #fff;
            font-size: 1.5rem;
            color: #fca61f;
        }

        /* styling navbar links  */
        .navbar-nav a {
            color: black;
            position: relative;
        }

        .navbar-nav a:hover {
            color: #fca61f;
        }

        .navbar-nav a:after {
            background: none repeat scroll 0 0 transparent;
            bottom: 0;
            content: "";
            display: block;
            height: 2px;
            left: 50%;
            top: 35px;
            position: absolute;
            background: #fca61f;
            transition: width 0.3s ease 0s, left 0.3s ease 0s;
            width: 0;
        }

        .navbar-nav a:hover:after {
            width: 100%;
            left: 0;
        }

        /* styling contact btn  */
        .c-btn {
            border: none;
            background: #fca61f;
            color: #fff;
            font-size: 1.2rem;
        }

        /* styling home section starts */
        .home {
            background: linear-gradient(33deg, rgba(242, 242, 255, 1) 0%, rgba(235, 249, 255, 1) 100%);
            padding: 30px 0px 10px 0px;
        }

        .home h2 {
            font-size: 3rem;
            line-height: 4rem;
        }

        .c-orange {
            color: #6f34fe;
            font-weight: 700;
            font-size: 4rem;
        }

        .home p {
            width: fit-content;
            margin-top: 1rem;
            font-size: 1.2rem;
        }

        .h-btn:hover {
            background: #6f34fe;
            color: #fff;
            transform: translateY(-20px);
            transition-duration: 1s;
        }

        .link {
            text-decoration: none;
            font-size: 1.2rem;
            color: #fca61f;
            position: relative;
        }

        .link::after {
            content: '';
            position: absolute;
            width: 100%;
            transform: scaleX(0);
            height: 2px;
            bottom: 0;
            left: 0;
            top: 20px;
            background-color: #6f34fe;
            transform-origin: bottom right;
            transition: transform 0.25s ease-out;
        }

        .link:hover {
            color: #6f34fe;
        }

        .link:hover::after {
            transform: scaleX(1);
            transform-origin: bottom left;
        }

        /* adding animation to home section image  */
        .home img {
            animation: floatimg 4s ease-in-out infinite;
        }

        @keyframes floatimg {
            0% {
                transform: translateX(0);
            }

            50% {
                transform: translateX(-24px);
            }

            100% {
                transform: translateX(0);
            }
        }

        /* expertise section starts */
        .heading small {
            color: #6f34fe;
            font-size: 1.5rem;
            font-weight: 600;
        }

        .heading h3 {
            margin-top: 0.5rem;
            color: #3f396d;
            font-size: 2.5rem;
            font-weight: 700;
        }

        .expertise h4 {
            color: #3f396d;
            font-weight: 700;
        }

        .expertise a {
            text-decoration: none;
            color: #fca61f;
        }

        .expertise a:hover {
            color: #6f34fe;
        }

        .expertise .service-card {
            text-align: center;
            padding: 15px 15px;
            border-radius: 0.7rem;
        }

        /* skill section starts */
        .skill {
            background-color: rgb(234, 234, 249);
        }

        .progress-card {
            padding: 12% 10% 10% 15%;
            background-color: #fff;
            text-align: center;
            border-radius: 10%;
        }

        .progress-card:hover {
            transform: scale(1.1, 1.1);
            transition-duration: 0.6s;
        }

        .circular-progress {
            position: relative;
            height: 130px;
            width: 130px;
            border-radius: 50%;
            background: conic-gradient(#7d2ae8 3.6deg, #ededed 0deg);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .circular-progress::before {
            content: "";
            position: absolute;
            height: 120px;
            width: 120px;
            border-radius: 50%;
            background-color: #fff;
        }

        .progress-value {
            position: relative;
            font-size: 1.5rem;
            font-weight: 600;
        }

        .html-progress {
            color: #fca61f;
        }

        .javascript-progress {
            color: #6f34fe;
        }

        .php-progress {
            color: #20c997;
        }

        .reactjs-progress {
            color: #3f396d;
        }

        .text {
            font-size: 1.2rem;
            font-weight: 500;
        }

        .heading p {
            font-size: 1.3rem;
        }

        /* portfolio section starts */
        #myBtnContainer {
            margin-bottom: 45px;
        }

        #myBtnContainer button {
            border: none;
            color: black;
            background: transparent;
            font-size: 20px;
            font-weight: 600;
            cursor: pointer;
            display: inline-block;
            margin: 0 25px;
        }

        #myBtnContainer button:hover {
            color: #fca61f;
        }

        #myBtnContainer button:focus {
            outline: none;
        }

        .post .content h4 {
            font-size: 1rem;
            font-weight: 700;
        }

        .post .card {
            border: none;
        }

       
        /* contact section starts */
        .contact {
            background-color: #f3f3f3;
        }

        .contact-details i {
            font-size: 1.5rem;
            color: #fca61f;
        }

        .contact-details p {
            font-size: 1.2rem;
            margin-left: 1rem;
        }

        .contact-form .form-control:focus {
            box-shadow: none;
            border: 1px solid #fca61f;
        }

        .contact-form .form-control {
            padding: 10px 10px;
            width: 80%;
        }

        /* footer section starts */
        footer {
            background-color: #211e39;
        }

        footer .link-group a {
            margin-left: 10px;
            margin-right: 10px;
            text-decoration: none;
            color: #6c757d;
            font-size: 1.1rem;
            margin-top: 1rem;
        }

        footer .link-group a:hover {
            color: #fca61f;
        }

        .social-links button {
            border: none;
            margin-right: 1rem;
            font-size: 1.2rem;
            background-color: #fff;
            padding: 14px 15px 10px 15px;
        }

        .social-links .dribble {
            color: #f33a7e;
        }

        .social-links button:hover {
            color: #fff;
            transform: translateY(-20px);
            transition-duration: 1s;
        }

        .social-links .dribble:hover {
            background-color: #f33a7e;
        }

        .social-links .whatsapp {
            color: #25D366;
        }

        .social-links .whatsapp:hover {
            background-color: #25D366;
        }

        .social-links .behance {
            color: #255afc;
        }

        .social-links .behance:hover {
            background-color: #255afc;
        }

        /* styling back to top button */
        #btn-back-to-top {
            position: fixed;
            bottom: 40px;
            right: 40px;
            display: none;
            font-size: 1.4rem;
            background-color: #fca61f;
            color: #fff;
            animation: pulse 3s infinite;
        }
    </style>
</head>

<body>
    <!-- navbar starts -->
    
    <!-- navbar ends here -->

    <!-- home section starts  -->
    <section class="home pt-5 pb-5" id="home">
        <div class="row justify-content-evenly align-middle">
            <!-- here data-aos is used for adding aos animation  -->
            <div class="col-10 col-md-6 text-center text-md-start" data-aos="slide-right">
                <h2 style="color: #3f396d">
                    Hello! I Am <br /><span class="c-orange">Abdul Sami</span>
                </h2>
                <p class="text-muted">
                    I'm A Web Developer having 1 years of experience in expertise of
                    creating website with fully responsive Also with web designing part too.
                </p>
                <button class="c-btn h-btn mt-3 py-3 px-5 rounded-pill">
                    Hire Me
                </button>
                <a href="" class="link ms-4 d-none">See My Work</a>
            </div>
            <div class="col-10 col-md-4 d-none d-done d-block ">
                <img src="" class="img-fluid" alt="" />
            </div>
        </div>
    </section>
    <!-- home section ends here -->

    <!-- expertise section starts -->
    <section class="expertise mt-5" id="service">
        <div class="heading text-center">
            <small>My Expertise</small>
            <h3>
                Provide Wide Range of <br />
                Digital Services
            </h3>
        </div>
        <div class="row justify-content-evenly mt-5">
            <div class="col-10 col-md-4" data-aos="fade-up">
                <div class="service-card">
                    <div class="img">
                        <img src="../website no 4/service-icon1.png" class="w-25 img-fluid img" alt="" />
                    </div>
                    <div class="content mt-3">
                        <h4>Web Design</h4>
                        <p class="text-muted">
                            As a web designer, I create visually appealing, user-friendly websites that align with your brand. I focus on responsive design for all devices and a seamless user experience. Whether it's a new design or a redesign, I deliver sites that are both attractive and functional to help you reach your business goals                        </p>

                        <a href="" class="link">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-10" data-aos="fade-up">
                <div class="service-card">
                    <div class="img">
                        <img src="../website no 4/service-icon2.png" class="w-25 img-fluid img" alt="" />
                    </div>
                    <div class="content mt-3">
                        <h4>Web Development</h4>
                        <p class="text-muted">
                            As a web developer, I build high-quality, efficient websites tailored to your business needs. My expertise includes creating responsive, fast-loading sites with clean, maintainable code. Whether it's building a site from scratch or adding new functionality, I ensure your website performs smoothly and delivers a great user experience.
                        </p>
                        <a href="" class="link">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-10" data-aos="fade-up">
                <div class="service-card">
                    <div class="img">
                        <img src="../website no 4/service-icon3.png" class="w-25 img-fluid img" alt="" />
                    </div>
                    <div class="content mt-3">
                        <h4>Logo Designing</h4>
                        <p class="text-muted">
                            As a logo designer, I create unique and memorable logos that reflect your brand's identity and values. I work closely with you to ensure the design resonates with your target audience and leaves a lasting impression. My focus is on crafting simple yet impactful logos that stand out across all platforms and help your brand make a strong visual statement.
                        </p>
                        <a href="" class="link">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- expertise section ends here -->

    <!-- skill section starts -->
    <a href="home.php">Home</a>
    <section class="skill mt-5 py-5" id="about">
        <div class="row justify-content-evenly">
            <div class="col-10 col-md-5 skill-with-progress" data-aos="slide-right">
                <div class="row justify-content-evenly">
                    <div class="col-10 col-md-6">
                        <div class="progress-card ms-3 ms-md-0">
                            <div class="circular-progress html-css">
                                <span class="progress-value html-progress">80%</span>
                            </div>
                            <br />
                            <span class="text">HTML & CSS</span>
                        </div>
                    </div>
                    <div class="col-10 col-md-6 mt-4 mt-md-0">
                        <div class="progress-card ms-3 ms-md-0">
                            <div class="circular-progress javascript">
                                <span class="progress-value javascript-progress">40%</span>
                            </div>
                            <br />
                            <span class="text">JavaScript</span>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-evenly mt-4">
                    <div class="col-10 col-md-6">
                        <div class="progress-card ms-3 ms-md-0">
                            <div class="circular-progress php">
                                <span class="progress-value php-progress">50%</span>
                            </div>
                            <br />
                            <span class="text">PHP</span>
                        </div>
                    </div>
                    <div class="col-10 col-md-6 mt-4 mt-md-0">
                        <div class="progress-card ms-3  ms-md-0">
                            <div class="circular-progress reactjs">
                                <span class="progress-value reactjs-progress">40%</span>
                            </div>
                            <br>
                            <span class="text">ReactJS</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-10 col-md-5 skill-detail" data-aos="slide-left">
                <div class="heading mt-5 mt-md-3">
                    <small>My Skills</small>
                    <h3>Beautiful & Unique Digital Experiences</h3>
                    <p class="text-muted">
                        Front-End Web Developer with strong proficiency in HTML and CSS, experienced in building responsive and user-friendly websites. Familiar with JavaScript, React.js, and PHP for dynamic web development. Skilled in creating visually appealing and functional designs that align with modern web standards and best practices.
                    </p>
                    <button class="c-btn h-btn mt-3 py-3 px-5 rounded-pill">
                        <!-- here download attribute is used for adding download functionality to button  -->
                        <a href="../website no 4/Cv.pdf" download="SampleCV"
                            style="text-decoration: none;color: #fff;">Download CV</a>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- skill section end here -->

    <!-- portfolio section starts here -->
    <section class="portfolio" id="portfolio">
        <div class="heading text-center pt-5">
            <small>Creative Work</small>
            <h3>Check My Portfolio</h3>
        </div>

        <div id="myBtnContainer" class="text-center mt-4">
            <!-- here we will create custom attribute using data- for filtering -->
        
            <button class="filter-item" data-filter="game">Website Clone</button>
            <button class="filter-item" data-filter="webapp">Website Projects</button>
            <button class="filter-item" data-filter="website">Portfolios</button>
            <button class="filter-item" data-filter="brand">LOGOs</button>
        </div>
        <div class="portfolio-body">
            <div class="row justify-content-evenly px-4">
                <div class="post col-md-4 game all col-10 mt-3 mt-md-0" data-aos="fade-up">
                    <div class="card">
                        <img src="../website no 4/img/microsoft.PNG" class="card-img-top" alt="..." />
                        <div class="card-body text-center">
                            <h4 class="card-title">Microsoft Website Clone</h4>
                            <span class="badge bg-secondary badge-pill">HTML</span>
                            <span class="badge bg-secondary badge-pill">CSS</span>
                            <a href="#" class="link">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="post col-md-4 website all col-10 mt-3 mt-md-0" data-aos="fade-up">
                    <div class="card">
                        <img src="../website no 4/img/buildnox construction.PNG" class="card-img-top" alt="..." />
                        <div class="card-body text-center">
                            <h4 class="card-title">buildnox Website Clone</h4>
                            <span class="badge bg-secondary badge-pill">HTML</span>
                            <span class="badge bg-secondary badge-pill">CSS</span>
                            <a href="#" class="read-more-btn link">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="post col-md-4 webapp all col-10 mt-3 mt-md-0" data-aos="fade-up">
                    <div class="card">
                        <img src="../website no 4/img/portfolio.PNG" class="card-img-top" alt="..." />
                        <div class="card-body text-center">
                            <h4 class="card-title">Portfolio website</h4>
                            <span class="badge bg-secondary badge-pill">HTML</span>
                            <span class="badge bg-secondary badge-pill">CSS</span><br />
                            <a href="#" class="read-more-btn link">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-evenly mt-4 px-4">
                <div class="post col-md-4 game all col-10 mt-3 mt-md-0" data-aos="fade-up">
                    <div class="card">
                        <img src="../website no 4/img/karma.PNG" class="card-img-top" alt="..." />
                        <div class="card-body text-center">
                            <h4 class="card-title">Karma Website Clone</h4>
                            <span class="badge bg-secondary badge-pill">HTML</span>
                            <span class="badge bg-secondary badge-pill">CSS</span>
                            <a href="#" class="read-more-btn link">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="post col-md-4 website all col-10 mt-3 mt-md-0" data-aos="fade-up">
                    <div class="card">
                        <img src="../website no 4/img/1.PNG" class="card-img-top" alt="..." />
                        <div class="card-body text-center">
                            <h4 class="card-title">Driving Licence Checker</h4>
                            <span class="badge bg-secondary badge-pill">HTML&CSS</span>
                            <span class="badge bg-secondary badge-pill">JavaScript</span>
                            <a href="#" class="read-more-btn link">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="post col-md-4 all col-10 mt-3 mt-md-0" data-aos="fade-up">
                    <div class="card">
                        <img src="../website no 4/img/calculator.PNG" class="card-img-top" alt="..." />
                        <div class="card-body text-center">
                            <h4 class="card-title">Calculator</h4>
                            <span class="badge bg-secondary badge-pill">HTML&CSS</span>
                            <span class="badge bg-secondary badge-pill">JavaScript</span>
                            <a href="#" class="read-more-btn link">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- portfolio section ends here -->

    <!-- here we will make modals if Read more link is clicked the modal will popup -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <button type="button" class="btn-c rounded-pill" data-bs-dismiss="modal"><i
                        class="bi bi-x-circle-fill"></i></button>

                <div class="modal-body px-4">
                    <div class="img">
                        <img src="../Website no 2/asset/back.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="content mt-3">
                        <small>By Pawan Kumavat</small><span class="text-muted ms-2">Mar 8,2022</span>
                        <h4 class="card-title mt-3">Quis autem vea eum iure reprehenderit</h4>
                        <div class="social-links mt-4">
                            <button href="" class="rounded-pill dribble">
                                <i class="bi bi-dribbble"></i>
                            </button>
                            <button href="" class="rounded-pill whatsapp">
                                <i class="bi bi-whatsapp"></i>
                            </button>
                            <button href="" class="rounded-pill behance">
                                <i class="bi bi-behance"></i>
                            </button>
                        </div>
                        <p class="text-muted mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
                            tempor eros a tellus auctor, nec suscipit nunc dignissim. Ut suscipit gravida augue sed
                            elementum. Sed sed luctus nisl. Donec scelerisque nisi in sodales mattis. Vestibulum
                            suscipit odio ac enim blandit sollicitudin. Aliquam ultrices sem quis urna placerat
                            interdum. Etiam rutrum, quam sagittis tristique mollis, libero arcu scelerisque erat, eget
                            tincidunt eros diam quis nunc.</p>
                    </div>
                </div>
                <div class="heading px-2">
                    <h3 class="fs-3 ms-3">Leave A Comment</h3>
                </div>
                <div class="contact-form ms-3 mt-3 pb-4 px-2">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name" />
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="E-mail" />
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Mobile No." />
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Message"
                            rows="5"></textarea>
                    </div>
                    <button class="c-btn h-btn mt-3 py-2 px-4 rounded-pill">
                        Submit
                    </button>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <button type="button" class="btn-c rounded-pill" data-bs-dismiss="modal"><i
                        class="bi bi-x-circle-fill"></i></button>

                <div class="modal-body px-4">
                    <div class="img">
                        <img src="images/currency-converter.png" class="img-fluid" alt="">
                    </div>
                    <div class="content mt-3">
                        <small>By Pawan Kumavat</small><span class="text-muted ms-2 ms-md-0">Mar 8,2022</span>
                        <h4 class="card-title mt-3">Quis autem vea eum iure reprehenderit</h4>
                        <div class="social-links mt-4">
                            <button href="" class="rounded-pill dribble">
                                <i class="bi bi-dribbble"></i>
                            </button>
                            <button href="" class="rounded-pill whatsapp">
                                <i class="bi bi-whatsapp"></i>
                            </button>
                            <button href="" class="rounded-pill behance">
                                <i class="bi bi-behance"></i>
                            </button>
                        </div>
                        <p class="text-muted mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
                            tempor eros a tellus auctor, nec suscipit nunc dignissim. Ut suscipit gravida augue sed
                            elementum. Sed sed luctus nisl. Donec scelerisque nisi in sodales mattis. Vestibulum
                            suscipit odio ac enim blandit sollicitudin. Aliquam ultrices sem quis urna placerat
                            interdum. Etiam rutrum, quam sagittis tristique mollis, libero arcu scelerisque erat, eget
                            tincidunt eros diam quis nunc.</p>
                    </div>
                </div>
                <div class="heading px-2">
                    <h3 class="fs-3 ms-3">Leave A Comment</h3>
                </div>
                <div class="contact-form ms-3 mt-3 pb-4 px-2">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name" />
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="E-mail" />
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Mobile No." />
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Message"
                            rows="5"></textarea>
                    </div>
                    <button class="c-btn h-btn mt-3 py-2 px-4 rounded-pill">
                        Submit
                    </button>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <button type="button" class="btn-c rounded-pill" data-bs-dismiss="modal"><i
                        class="bi bi-x-circle-fill"></i></button>

                <div class="modal-body px-4">
                    <div class="img">
                        <img src="images/dictionary.png" class="img-fluid" alt="">
                    </div>
                    <div class="content mt-3">
                        <small>By Pawan Kumavat</small><span class="text-muted ms-2 ms-md-0">Mar 8,2022</span>
                        <h4 class="card-title mt-3">Quis autem vea eum iure reprehenderit</h4>
                        <div class="social-links mt-4">
                            <button href="" class="rounded-pill dribble">
                                <i class="bi bi-dribbble"></i>
                            </button>
                            <button href="" class="rounded-pill whatsapp">
                                <i class="bi bi-whatsapp"></i>
                            </button>
                            <button href="" class="rounded-pill behance">
                                <i class="bi bi-behance"></i>
                            </button>
                        </div>
                        <p class="text-muted mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
                            tempor eros a tellus auctor, nec suscipit nunc dignissim. Ut suscipit gravida augue sed
                            elementum. Sed sed luctus nisl. Donec scelerisque nisi in sodales mattis. Vestibulum
                            suscipit odio ac enim blandit sollicitudin. Aliquam ultrices sem quis urna placerat
                            interdum. Etiam rutrum, quam sagittis tristique mollis, libero arcu scelerisque erat, eget
                            tincidunt eros diam quis nunc.</p>
                    </div>
                </div>
                <div class="heading px-2">
                    <h3 class="fs-3 ms-3">Leave A Comment</h3>
                </div>
                <div class="contact-form ms-3 mt-3 pb-4 px-2">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name" />
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="E-mail" />
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Mobile No." />
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Message"
                            rows="5"></textarea>
                    </div>
                    <button class="c-btn h-btn mt-3 py-2 px-4 rounded-pill">
                        Submit
                    </button>
                </div>

            </div>
        </div>
    </div>
    </div>
    </section>
    <!-- blog section ends here -->

    <!-- contact section starts -->
    <section class="contact py-5" id="contact">
        <div class="heading text-center">
            <small>Get in Touch</small>
            <h3>Any Questions? Feel Free to Contact</h3>
        </div>
        <div class="row justify-content-evenly mt-5">
            <div class="col-md-5 col-10 contact-details" data-aos="slide-right">
                <div class="row justify-content-evenly">
                    <div class="col-1">
                        <i class="bi bi-geo-alt-fill"></i>
                    </div>
                    <div class="col-11">
                        <p>Hostel City Street Number 5, Islamabad</p>
                    </div>
                </div>
                <div class="row justify-content-evenly">
                    <div class="col-1">
                        <i class="bi bi-telephone-fill"></i>
                    </div>
                    <div class="col-11">
                        <p>+923488118956</p>
                    </div>
                </div>
                <div class="row justify-content-evenly">
                    <div class="col-1">
                        <i class="bi bi-send-fill"></i>
                    </div>
                    <div class="col-11">
                        <p>Samiirfan091@gmail.com</p>
                    </div>
                </div>
                <div class="row justify-content-evenly">
                    <div class="col-1">
                        <i class="bi bi-globe-americas"></i>
                    </div>
                    <div class="col-11">
                        <p>Samiportfolio.com</p>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-10 mt-3 mt-md-0" data-aos="slide-left">
                <div class="contact-form">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name" />
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="E-mail" />
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Mobile No." />
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Message"
                            rows="5"></textarea>
                    </div>
                    <button class="c-btn h-btn mt-3 py-3 px-5 rounded-pill">
                        Submit
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- contact section ends here -->

    <!-- now we will make back to top button when user click on it it will be redirected to top page  -->
    <button type="button" class="btn btn-floating btn-lg rounded-pill" id="btn-back-to-top">
        <i class="bi bi-arrow-up"></i>
    </button>

    <!-- footer section starts  -->
    <footer class="text-center text-muted py-4">
        <h3 class="text-white pt-4" data-aos="fade-up">Portfolio</h3>
        <div class="link-group mt-5" data-aos="fade-up">
            <a href="#home">Home</a>
            <div class="vr"></div>
            <a href="#about">About</a>
            <div class="vr"></div>
            <a href="#service">Service</a>
            <div class="vr"></div>
            <a href="#portfolio">Portfolio</a>
            
            <div class="vr"></div>
            <a href="#contact">Contact</a>
        </div>
        <div class="social-links mt-5" data-aos="fade-up">
            <button href="" class="rounded-pill dribble">
                <i class="bi bi-dribbble"></i>
            </button>
            <button href="" class="rounded-pill whatsapp">
                <i class="bi bi-whatsapp"></i>
            </button>
            <button href="" class="rounded-pill behance">
                <i class="bi bi-behance"></i>
            </button>
        </div>
        <hr class="text-muted my-4" />

        <p>Copyright 2022 Portfolio | All Rights Reserved.</p>
    </footer>
    <!-- footer section ends here -->

    <!-- bootstrap javascript cdn link  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>

    <!-- AOS library javascript link  -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        // initializing AOS library
        AOS.init({
            duration: 1000,
            offset: 50,
        });
    </script>
    <!-- custom js file linking -->
    <script src="js/script.js">// htmlcss progress circular bar 
        let htmlProgress = document.querySelector(".html-css"),
            htmlValue = document.querySelector(".html-progress");

        let htmlStartValue = 0,
            htmlEndValue = 90,
            htmlspeed = 30;

        let progresshtml = setInterval(() => {
            htmlStartValue++;

            htmlValue.textContent = `${htmlStartValue}%`;
            htmlProgress.style.background = `conic-gradient(#fca61f ${htmlStartValue * 3.6
                }deg, #ededed 0deg)`;

            if (htmlStartValue == htmlEndValue) {
                clearInterval(progresshtml);
            }
        }, htmlspeed);

        // javasript progress circular bar 
        let javascriptProgress = document.querySelector(".javascript"),
            javascriptValue = document.querySelector(".javascript-progress");

        let javascriptStartValue = 0,
            javascriptEndValue = 75,
            jsspeed = 30;

        let progressjs = setInterval(() => {
            javascriptStartValue++;

            javascriptValue.textContent = `${javascriptStartValue}%`;
            javascriptProgress.style.background = `conic-gradient(#7d2ae8 ${javascriptStartValue * 3.6
                }deg, #ededed 0deg)`;

            if (javascriptStartValue == javascriptEndValue) {
                clearInterval(progressjs);
            }
        }, jsspeed);

        // php progress circular bar 
        let phpProgress = document.querySelector(".php"),
            phpValue = document.querySelector(".php-progress");

        let phpStartValue = 0,
            phpEndValue = 80,
            phpspeed = 30;

        let progressphp = setInterval(() => {
            phpStartValue++;

            phpValue.textContent = `${phpStartValue}%`;
            phpProgress.style.background = `conic-gradient(#20c997 ${phpStartValue * 3.6
                }deg, #ededed 0deg)`;

            if (phpStartValue == phpEndValue) {
                clearInterval(progressphp);
            }
        }, phpspeed);

        // reactjs progress circular bar 
        let reactProgress = document.querySelector(".reactjs"),
            reactValue = document.querySelector(".reactjs-progress");

        let reactStartValue = 0,
            reactEndValue = 30,
            rjsspeed = 30;

        let progressreact = setInterval(() => {
            reactStartValue++;

            reactValue.textContent = `${reactStartValue}%`;
            reactProgress.style.background = `conic-gradient(#3f396d ${reactStartValue * 3.6
                }deg, #ededed 0deg)`;

            if (reactStartValue == reactEndValue) {
                clearInterval(progressreact);
            }
        }, rjsspeed);


        // filter using javascript
        $(document).ready(function () {
            $(".filter-item").click(function () {
                const value = $(this).attr("data-filter");
                if (value == "all") {
                    $(".post").show("1000");
                } else {
                    $(".post")
                        .not("." + value)
                        .hide("1000");
                    $(".post")
                        .filter("." + value)
                        .show("1000");
                }
            });
        });


        // javascript for sticky navbar even if u scroll the navbar will be fixed
        document.addEventListener("DOMContentLoaded", function () {
            window.addEventListener('scroll', function () {
                if (window.scrollY > 50) {
                    document.getElementById('navbar-top').classList.add('fixed-top');
                    // add padding top to show content behind navbar
                    navbar_height = document.querySelector('.navbar').offsetHeight;
                    document.body.style.paddingTop = navbar_height + 'px';
                } else {
                    document.getElementById('navbar-top').classList.remove('fixed-top');
                    // remove padding top from body
                    document.body.style.paddingTop = '0';
                }
            });
        });


        // adding funtionality to back to top button 

        //Get the button
        let mybutton = document.getElementById("btn-back-to-top");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction();
        };
        function scrollFunction() {
            if (
                document.body.scrollTop > 20 ||
                document.documentElement.scrollTop > 20
            ) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }
        // When the user clicks on the button, scroll to the top of the document
        mybutton.addEventListener("click", function () {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        });</script>
    sc
</body>

</html>
<?php include 'components/footer.php'; ?>
