<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CODE-NET</title>

  <!--
    - favicon
  -->
<link rel="shortcut icon" href="./assets/images/logo/codenet.png" type="image">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>

  <!--
    - #MAIN
  -->

  <main>

    <!--
      - #SIDEBAR
    -->

    <aside class="sidebar" data-sidebar>

      <div class="sidebar-info">

        <figure class="avatar-box">
          <img src="./assets/images/logo/codenet.png" alt="Codenet Logo" width="80">
        </figure>

        <div class="info-content">
          <h1 class="name" title="Code Net">CODENET</h1>

          <p class="title"> DEVELOPERS</p>
        </div>

        <button class="info_more-btn" data-sidebar-btn>
          <span>Show Contacts</span>

          <ion-icon name="chevron-down"></ion-icon>
        </button>

      </div>

      <div class="sidebar-info_more">

        <div class="separator"></div>

        <ul class="contacts-list">

        <li class="contact-item">

<div class="icon-box">
  <ion-icon name="phone-portrait-outline"></ion-icon>
</div>


<div class="contact-info">
  <p class="contact-title">Admin</p>

  <a href="admin/login.php" class="contact-link">Login</a>
</div>

</li>


<li class="contact-item">

<div class="icon-box">
  <ion-icon name="phone-portrait-outline"></ion-icon>
</div>


<div class="contact-info">
  <p class="contact-title">T & c'S</p>

  <a href="terms.php" class="contact-link">T & C's</a>
</div>
</li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Email</p>

              <a href="mailto:chandabreagan@gmail.com" class="contact-link">chandabreagan@gmail.com</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="phone-portrait-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Phone</p>

              <a href="tel:+260974297248" class="contact-link">+260974297248</a>
              
            </div>

          </li>

          <li class="contact-item">

<div class="icon-box">
  <ion-icon name="phone-portrait-outline"></ion-icon>
</div>

<div class="contact-info">
  <p class="contact-title">WhatsApp</p>

 
  <a href="https://wa.me/+260962512593" class="contact-link"> WhatsApp</a>

</div>

</li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="calendar-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Registred Since</p>

              <time datetime="2022-06-23">June 23, 2022</time>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Location</p>

              <address>Ndola, Copperbelt, Zambia</address>
            </div>

          </li>

        </ul>

        <div class="separator"></div>

        <ul class="social-list">

          <li class="social-item">
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          

        </ul>

      </div>

    </aside>





    <!--
      - #main-content
    -->

    <div class="main-content">

      <!--
        - #NAVBAR
      -->

      <nav class="navbar">

        <ul class="navbar-list">

          <li class="navbar-item">
            <button class="navbar-link  active" data-nav-link>About</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Resume</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Portfolio</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Blog</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Contact</button>
          </li>

        </ul>

      </nav>





      <!--
        - #ABOUT
      -->

      <article class="about  active" data-page="about">

        <header>
          <h2 class="h2 article-title">About US</h2>
        </header>

        <section class="about-text">
          <p>
            CodeNet, based in Ndola, Zambia, develops software for clients locally and internationally. We offer flexible payment plans, sometimes delivering free software based on contract terms. Led by a CEO with a BSc and MSc, and a Technical Director with a BSE, we operate 24/7.
          </p>

          <p>
            At CodeNet, we specialize in creating student portals, POS software, websites, and web systems. We also manage and design systems for companies, offer consulting services, and develop mobile applications. Our expertise extends to building comprehensive company systems, tailored to meet various business needs.
          </p>
        </section>


        <!--
          - service
        -->

        <section class="service">

          <h3 class="h3 service-title">What We Do!</h3>

          <ul class="service-list">

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/icon-design.svg
                " alt="design icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Web design</h4>

                <p class="service-item-text">
                  A modern, high-quality design crafted with professional expertise.
                </p>
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/icon-dev.svg" alt="Web development icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Web development</h4>

                <p class="service-item-text">
                  Professional, high-quality website development.
                </p>
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/icon-app.svg" alt="mobile app icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">School Portal</h4>

                <p class="service-item-text">
                  Professional development of portals to streamline all departments within an institution, such as a college.
                </p>
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/icon-design.svg" alt="camera icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Point Of Sales</h4>

                <p class="service-item-text">
                  Our POS systems provide professional reports, sales calculations, remote monitoring, employee management, etc for improved efficiency.
                </p>
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/icon-dev.svg" alt="camera icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">System development</h4>

                <p class="service-item-text">
                  We create customized systems based on your needs and deliver timely solutions.
                </p>
              </div>

            </li>

            
          </ul>

        </section>


        <!--
          - testimonials
        -->

        <section class="testimonials">

          <h3 class="h3 testimonials-title">Testimonials</h3>

          <ul class="testimonials-list has-scrollbar">

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/icon/male.png" alt="Kasanda" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Busy Bees CEO</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    Working with Codenet has been a transformative experience for us. Their expertise and willingness to collaborate have proven to be a game changer, allowing us to grow and adapt in an ever-evolving market.
                  </p>
                </div>

              </div>
            </li>

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/icon/female.png" alt="Given" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Kit Cats SCH CEO</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    The professionalism and dedication to quality demonstrated by Codenet have made a significant and lasting impact on our business operations. Their team consistently goes above and beyond to ensure we have the tools we need to succeed
                  </p>
                </div>

              </div>
            </li>

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/icon/female.png" alt="Musonda" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>POTECO GARDENS CEO</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    Our sales have seen remarkable growth since implementing Codenet's systems. Their innovative solutions have streamlined our sales processes, enabling our team to close deals more efficiently than ever before.
                  </p>
                </div>

              </div>
            </li>

          </ul>

        </section>


        <!--
          - testimonials modal
        -->

        <div class="modal-container" data-modal-container>

          <div class="overlay" data-overlay></div>

          <section class="testimonials-modal">

            <button class="modal-close-btn" data-modal-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>

            <div class="modal-img-wrapper">
              <figure class="modal-avatar-box">
                <img src="./assets/images/icon/make.png" alt="Kasanda" width="80" data-modal-img>
              </figure>

              <img src="./assets/images/icon-quote.svg" alt="quote icon">
            </div>

            <div class="modal-content">

              <h4 class="h3 modal-title" data-modal-title>Kasanda Pombwa</h4>

              <time datetime="2024-06-14">14 June, 2024</time>

              <div data-modal-text>
                <p>
                Working with Codenet has been a transformative experience for us. Their expertise and willingness to collaborate have proven to be a game changer, allowing us to grow and adapt in an ever-evolving market.

                </p>
              </div>

            </div>

          </section>

        </div>


        <!--
          - clients
        -->

        <section class="clients">

          <h3 class="h3 clients-title">OUR HOSTING</h3>

          <ul class="clients-list has-scrollbar">

            <li class="clients-item">
              <a href="https://www.namecheap.com/" target="_blank">
                <img src="./assets/images/namecheap.png" alt="client logo">
              </a>
            </li>

            <li class="clients-item">
              <a href="https://imbra.co.zm/" target="_blank">
                <img src="./assets/images/imbra.png" alt="client logo">
              </a>
            </li>

            <li class="clients-item">
              <a href="https://play.google.com/store/apps" target="_blank">
                <img src="./assets/images/play_store.png" alt="client logo">
              </a>
            </li>

            <li class="clients-item">
              <a href="https://www.phpmyadmin.net/" target="_blank">
                <img src="./assets/images/phpmyadmin.png" alt="client logo">
              </a>
            </li>

           

          </ul>

        </section>

      </article>





      <!--
        - #RESUME
      -->

      <article class="resume" data-page="resume">

        <header>
          <h2 class="h2 article-title">Testimonials</h2>
        </header>

        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline"></ion-icon>
            </div>

            <h3 class="h3">Work Done</h3>
          </div>

          <ol class="timeline-list">

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Busy Bees Pharmacy system</h4>

              <span>2023-2024</span>

              <p class="timeline-text">
              We designed developed, manage, and configure hosting-related data for POS systems and employee management.
              Additionally, we provide consultancy services for these systems.
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Poteco Gardens & Events system</h4>

              <span>2024 Jan — 2024 June</span>

              <p class="timeline-text">
              We designed developed, manage, its multiple stores system. System has intergrated POS, Management section, Data Entry Section, Register, Multiple stock level detection, etc.
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Boss Game </h4>

              <span>2024 June — 2024 August</span>

              <p class="timeline-text">
              Developed and manages a Japanesse store system designed to scale and support over 30 cashier selling points.
The system features dynamic and modern report generation capabilities and operates as a virtual store system integrated with physical operations.
              </p>

            </li>

            <li class="timeline-item">

<h4 class="h4 timeline-item-title">Code-Net Portfolio</h4>

<span>2022— 2024</span>

<p class="timeline-text">
Developed and manage our company's portfolio, which is the website you’re currently visiting. 
We ensure it remains operational and actively work to drive traffic to it.</p>

</li>

          </ol>

        </section>

        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline"></ion-icon>
            </div>

            <h3 class="h3">Experience</h3>
          </div>

          <ol class="timeline-list">

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">System developement</h4>

              <span>2022 — Present</span>

              <p class="timeline-text">
              Since our company's founding in 2022, we have been developing systems through our team of developers, following agile methodologies
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">System Management</h4>

              <span>2022 - Present</span>

              <p class="timeline-text">
              Since our company's founding in 2022, we manage more than 8 systems through our IT department.
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Database design and development</h4>

              <span>2022 - Present</span>

              <p class="timeline-text">
              We have built numerous dynamic databases to date, and we continue to develop even more complex and advanced databases.
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">System Hosting</h4>

              <span>2022 - Present</span>

              <p class="timeline-text">
              We have served as a liaison between external developers and agents for Imbra ZM, Namecheap, and other reliable companies that provide hosting and domain name services.

              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Training others</h4>

              <span>2022 - Present</span>

              <p class="timeline-text">
              We have trained over 200 individuals aspiring to become developers and programmers, demonstrating our extensive experience in this field.
              </p>

            </li>

          </ol>

        </section>

        <section class="skill">

          <h3 class="h3 skills-title">Our skills</h3>

          <ul class="skills-list content-card">

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Web design</h5>
                <data value="95">95%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 95%;"></div>
              </div>

            </li>

            
            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Web development</h5>
                <data value="97">97%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 97%;"></div>
              </div>

            </li>

            <li class="skills-item">

<div class="title-wrapper">
  <h5 class="h5">Database Design and Development</h5>
  <data value="90">90%</data>
</div>

<div class="skill-progress-bg">
  <div class="skill-progress-fill" style="width: 90%;"></div>
</div>

</li>

<li class="skills-item">

<div class="title-wrapper">
  <h5 class="h5">Web Application Development</h5>
  <data value="90">90%</data>
</div>

<div class="skill-progress-bg">
  <div class="skill-progress-fill" style="width: 90%;"></div>
</div>

</li>

<li class="skills-item">

<div class="title-wrapper">
  <h5 class="h5">Application Development</h5>
  <data value="88">88%</data>
</div>

<div class="skill-progress-bg">
  <div class="skill-progress-fill" style="width: 88%;"></div>
</div>

</li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Graphic design</h5>
                <data value="90">90%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 90%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">System Management</h5>
                <data value="99">99%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 99%;"></div>
              </div>

            </li>

            
            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Website Hosting Services</h5>
                <data value="90">90%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 90%;"></div>
              </div>

            </li>

            <li class="skills-item">

<div class="title-wrapper">
  <h5 class="h5">TUTORING: Java, C++, PHP, SQL, HTML, CSS, REACT, JS, API, Web dev, Mobile & App Dev</h5>
  <data value="100">100%</data>
</div>

<div class="skill-progress-bg">
  <div class="skill-progress-fill" style="width: 100%;"></div>
</div>

</li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">WordPress</h5>
                <data value="79">79%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 79%;"></div>
              </div>

            </li>

        

          </ul>

        </section>

      </article>





      <!--
        - #PORTFOLIO
      -->

      <article class="portfolio" data-page="portfolio">

        <header>
          <h2 class="h2 article-title">Portfolio</h2>
        </header>

        <section class="projects">

          <ul class="filter-list">

            <li class="filter-item">
              <button class="active" data-filter-btn>All</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>Web design</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>Applications</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>Web development</button>
            </li>

          </ul>

          <div class="filter-select-box">

            <button class="filter-select" data-select>

              <div class="select-value" data-selecct-value>Select category</div>

              <div class="select-icon">
                <ion-icon name="chevron-down"></ion-icon>
              </div>

            </button>

            <ul class="select-list">

              <li class="select-item">
                <button data-select-item>All</button>
              </li>

              <li class="select-item">
                <button data-select-item>Web design</button>
              </li>

              <li class="select-item">
                <button data-select-item>Applications</button>
              </li>

              <li class="select-item">
                <button data-select-item>Web development</button>
              </li>

            </ul>

          </div>

          <ul class="project-list">

            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="http://codenetdevelopers.lol/POS/index.php" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/busybees.png" alt="Pharmacy" loading="lazy">
                </figure>

                <h3 class="project-title">Pharmacy</h3>

                <p class="project-category">Web development</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="http://codenetdevelopers.lol/BOSSGAME/index.php" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/boss_game.png" alt="Boss Game" loading="lazy">
                </figure>

                <h3 class="project-title">Boss Game Pool House</h3>

                <p class="project-category">Web development</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web design">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/education.png" alt="Education" loading="lazy">
                </figure>

                <h3 class="project-title">Education</h3>

                <p class="project-category">Web design</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="applications">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/road_streaming.png" alt="Road Streaming" loading="lazy">
                </figure>

                <h3 class="project-title">Road Streaming</h3>

                <p class="project-category">Applications</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web design">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/zut.png" alt="ZUT." loading="lazy">
                </figure>

                <h3 class="project-title">Student Management System</h3>

                <p class="project-category">Web design</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web design">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/police.png" alt="Legal" loading="lazy">
                </figure>

                <h3 class="project-title">Legal Web App</h3>

                <p class="project-category">Web design</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="http://codenetdevelopers.lol/BAR/index.php" target="blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/poteco.png" alt="Poteco" loading="lazy">
                </figure>

                <h3 class="project-title">Poteco Gardens & Events</h3>

                <p class="project-category">Web development</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="applications">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/login.png" alt=" Smart task manager" loading="lazy">
                </figure>

                <h3 class="project-title">Smart Task Manager</h3>

                <p class="project-category">Applications</p>

              </a>
            </li>


          </ul>

        </section>

      </article>





      <!--
        - #BLOG
      -->

      <article class="blog" data-page="blog">

        <header>
          <h2 class="h2 article-title">Blog</h2>
        </header>

        <section class="blog-posts">

          <ul class="blog-posts-list">

            <li class="blog-post-item">
              <a href="https://www.linkedin.com/in/reagan-chanda-799446200/" target="blank">

                <figure class="blog-banner-box">
                  <img src="./assets/images/linkedin.png" alt="Linkedin" loading="lazy">
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Design</p>

                    <span class="dot"></span>

                    <time datetime="2024-02-23">Fab 23, 2024</time>
                  </div>

                  <h3 class="h3 blog-item-title">Experience</h3>

                  <p class="blog-text">
                  Visit our LinkedIn profile to discover how our team addresses challenges across all areas of programming. We regularly share insights and expertise gained through years of hands-on experience.
                  </p>

                </div>

              </a>
            </li>

            <li class="blog-post-item">
            

            

          </ul>

        </section>

      </article>





      <!--
        - #CONTACT
      -->

      <article class="contact" data-page="contact">

        <header>
          <h2 class="h2 article-title">Contact</h2>
        </header>

        <section class="mapbox" data-mapbox>
          <figure>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.051121237585!2d28.638283774262582!3d-12.968580659746838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x196cb51d00c462b9%3A0x7aa5fbfbdcb05a1d!2sBroadway%2C%20Ndola!5e0!3m2!1sen!2szm!4v1729703095177!5m2!1sen!2szm" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </figure>
        </section>

        <section class="contact-form">

          <h3 class="h3 form-title">Contact Form</h3>

          <form id="contactForm" action="send_email.php" method="POST" class="form" data-form>
    <div class="input-wrapper">
        <input type="text" name="fullname" class="form-input" placeholder="Full name" required data-form-input>
        <input type="email" name="email" class="form-input" placeholder="Email address" required data-form-input>
    </div>
    
    <textarea name="message" class="form-input" placeholder="Your Message" required data-form-input></textarea>

    <button id="sendMessageButton" class="form-btn" type="button" data-form-btn disabled>
        <ion-icon name="paper-plane"></ion-icon>
        <span>Send Message</span>
    </button>
</form>

<script>
    // Function to redirect to WhatsApp
    function redirectToWhatsApp() {
        const phoneNumber = "+260962512593";
        const message = encodeURIComponent("CODENET SYSTEM!. *Write Message below*!"); // Default message can be modified or captured from the form
        const url = `https://wa.me/${phoneNumber}?text=${message}`;
        window.location.href = url; // Redirect to WhatsApp
    }

    // Event listener for the button
    document.getElementById('sendMessageButton').addEventListener('click', function() {
        redirectToWhatsApp(); // Call the redirect function
    });
</script>

        

        </section>

      </article>

    </div>

  </main>






  <!--
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>