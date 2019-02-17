<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Personal Portfolio</title>
        <meta name="description" content="project image">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/main.css">
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300"
            rel="stylesheet">
        <link href="css/hover.css" rel="stylesheet" media="all">

        <link rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">

        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <header>
            <div class="nav-logo-container">    
                    <img src="img/Logo.gif" alt="logo" class="logo">
                    <nav>
                        <a class='hvr-sweep-to-top' href="#banner">Home</a>
                        <a class='hvr-sweep-to-top' href="#my-skills-section">Skills</a>
                        <a class='hvr-sweep-to-top' href="#portfolio-section"
                            class="porftolio_nav">Portfolio</a>
                        <a class='hvr-sweep-to-top' href="#about-me-section">About
                            me</a>
                        <a class='hvr-sweep-to-top' href="#contacts-section">Contacts</a>
                    </nav>
            </div>
        </header>
        <div class="content">
            <!-- BANNER -->
            <div class="banner" id="banner">
                <h1>
                    Hello My Name is Tomas Polan <br>
                    I am Full-stack Web Developer
                </h1>
            </div>
            <!-- CALL TO ACTION -->
            <div class="call-to-action">
                <h2>
                    Let's work together to make your product stand out. I create
                    beautiful and functional websites. I work with my clients step
                    by <span> step from the idea stage until the fully functioning
                        web application. </span>
                </h2>
            </div>
            <!-- DEV PATH SECTION -->
            <div class="dev-path">
                <div class="dev-path-container">
                    <div class="path">
                        <h3>Discover</h3>
                        <p>Tell me about your project and we brainstorm together the
                            features to create a plan for your product to launch.</p>
                    </div>
                    <div class="path">
                        <h3>Design</h3>
                        <p>We design the wireframe and agree together how to create
                            the best experience for your users to present your
                            brand.</p>
                    </div>
                    <div class="path">
                        <h3>Deploy</h3>
                        <p>We prototype and develop your product. We work together
                            intensily to incorporate your feedback.</p>
                    </div>
                    <div class="path">
                        <h3>Be Ready</h3>
                        <p>We deploy your product and now your website is ready to
                            get the traction. Get out there and grow your audience.</p>
                    </div>
                </div>
            </div>
            <!-- MY SKILLS -->
            <div class="my-skills">
                <h2 class="skills" id="my-skills-section">My Skills</h2>
                <div class="skills-percentage">
                    <div class="skill-bar" data-aos="flip-right" data-aos-duration="2000" data-aos-offset="150" data-aos-easing="ease-in-sine">
                        <p class="skill-label">HTML</p>
                        <p class="skill-percentage eighty">80%</p>
                    </div>
    
                    <div class="skill-bar" data-aos="flip-right" data-aos-duration="2000" data-aos-offset="150" data-aos-easing="ease-in-sine">
                        <p class="skill-label">CSS, Sass</p>
                        <p class="skill-percentage eighty">80%</p>
                    </div>
    
                    <div class="skill-bar" data-aos="flip-right" data-aos-duration="2000" data-aos-offset="150" data-aos-easing="ease-in-sine">
                        <p class="skill-label">JavaScript</p>
                        <p class="skill-percentage seventy">70%</p>
                    </div>
    
                    <div class="skill-bar" data-aos="flip-right" data-aos-duration="2000" data-aos-offset="150" data-aos-easing="ease-in-sine">
                        <p class="skill-label">React</p>
                        <p class="skill-percentage sixty">60%</p>
                    </div>
    
                    <div class="skill-bar" data-aos="flip-right" data-aos-duration="2000" data-aos-offset="150" data-aos-easing="ease-in-sine">
                        <p class="skill-label">UX</p>
                        <p class="skill-percentage seventy">70%</p>
                    </div>
    
                    <div class="skill-bar" data-aos="flip-right" data-aos-duration="2000" data-aos-offset="150" data-aos-easing="ease-in-sine">
                        <p class="skill-label">jQuery</p>
                        <p class="skill-percentage sixty">60%</p>
                    </div>
    
                    <div class="skill-bar" data-aos="flip-right" data-aos-duration="2000" data-aos-offset="150" data-aos-easing="ease-in-sine">
                        <p class="skill-label">PHP</p>
                        <p class="skill-percentage sixty">60%</p>
                    </div>
    
                    <div class="skill-bar" data-aos="flip-right" data-aos-duration="2000" data-aos-offset="150" data-aos-easing="ease-in-sine">
                        <p class="skill-label">Laravel</p>
                        <p class="skill-percentage fifty">50%</p>
                    </div>
                </div>
            </div>
            <!-- MY PORTFOLIO -->
            <div class="container-fluid d-flex portfolio">
                <div class="row d-flex project-containers align-content-around justify-content-center">
                    <h2 class="my-portfolio-h2">My portfolio</h2>
    
                    <div class="card col-12 col-sm-4">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Generic Hipster Coffee</h5>
                            <p class="card-text">Website for a coffee sho. Student Project for the Coding Bootcamp Praha. Coded based on provided psd design. Tech stack: HTML, CSS, Sass, Bootstrap</p>
                            <a href="#" class="btn btn-primary">Take a look</a>
                        </div>
                    </div>
    
                    <div class="card col-12 col-sm-4">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Blackjack</h5>
                            <p class="card-text">Website based game of Blackjack. Created the entire logic in Javascript. The visuals were provided. Tech stack: HTML,CSS, Javascript</p>
                            <a href="#" class="btn btn-primary">Take a look</a>
                        </div>
                    </div>
    
                    <div class="card col-12 col-sm-4">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Jukebox</h5>
                            <p class="card-text">Website that allows you to create playlist of youtube based song videos. Build with Laravel framework and MySQL databse. </p>
                            <a href="#" class="btn btn-primary">Take a look</a>
                        </div>
                    </div>
                
                    <div class="card col-12 col-sm-4">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Project 4</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, voluptate nam. Laborum consequuntur, atque officia, accusantium</p>
                            <a href="#" class="btn btn-primary">Take a look</a>
                        </div>
                    </div>
    
                    <div class="card col-12 col-sm-4">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Project 5</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, voluptate nam. Laborum consequuntur, atque officia, accusantium</p>
                            <a href="#" class="btn btn-primary">Take a look</a>
                        </div>
                    </div>
    
                    <div class="card col-12 col-sm-4">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Final Project</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, voluptate nam. Laborum consequuntur, atque officia, accusantium</p>
                            <a href="#" class="btn btn-primary">Take a look</a>
                        </div>
                    </div>
                </div>
    
            </div>
            <!-- ABOUT ME -->
            <div class="about-me-container">
                <h2 class="about-me" id="about-me-section">About Me</h2>
                <div class="button-text-image">
                    <img src="img/placeholder.jpg" alt="personal-photo" class="my-photo">
                    <div class="button-and-text">
                        <p>
                            I'm currently studying full-stack web development in
                            Europe's #1 Coding Bootcamps according to Digital Skills
                            Award (HTML, CSS, PHP, Javascript, React, Laravel ). I
                            reside in Prague and am available for hire from the
                            beginning of April 2019, so feel free to contact me. I
                            am passionate, precise and have detail-oriented mindset.
                            Constantly driven to learn new skills, technologies and
                            generaly improve myself in all ways possible. I used to
                            work as administrative worker for a international
                            corporate and after two years I could not see myself
                            doing it for years to come. So i decided to switch
                            carriers for something I will be truely passionate
                            about. I found Web Development and Programming to be the
                            perfect fit.
                        </p>
                    </div>
                </div>
            </div>
            <!-- FIND ME HERE -->
            <div class="find-me-here">
                <h2 class="find-me-here">Find me here:</h2>
                <div class="find-me-here-links">
                    <a href="https://github.com/TPolan"><img
                            src="img/github.svg"
                            alt="github logo"></a>
                    <a
                        href="https://www.linkedin.com/in/tom%C3%A1%C5%A1-polan/"><img
                            src="img/linkedin.svg" alt="linked in logo"></a>
                    <a href="https://www.facebook.com/tomas.polan.1"><img
                            src="img/facebook.svg" alt="facebook logo"></a>
                </div>
            </div>
            <!-- CONTACT ME -->
            <div class="contact-me-section">
                <h2 class="contact-me_header" id="contacts-section">Contact
                    me</h2>
                <form class="project image" method="post" action="mailer.php">
                    <div class="form-up">
                        <input type="text" name="first-name" placeholder="First Name*">
                        <input type="text" name="last-name" placeholder="Last Name*">
                    </div>
                    <div class="form-down">
                        <input type="text" name="email" placeholder="Email*">
                        <input type="text" name="phone" placeholder="Phone*">
                    </div>
                    
                    <div class="submit">
                        <textarea name="message" rows="5" cols="55">
                            
                        </textarea>
                    </div>  
                    <div>  
                        <input type="submit" value="Send message"
                            class="send-my-message-button">
                    </div>
                </form>
            </div>
        </div>
        <!-- FOOTER -->
        <footer>
            <h3>NICE TO MEET YOU</h3>
            <p>Copyright @Tomas Polan 2019</p>
        </footer>


        <script src="script/script.js"></script>
        <script
            src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
    </body>
</html>