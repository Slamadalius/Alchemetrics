<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="./font/flaticon.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <!-- link to google fonts Lato -->

    <link rel="stylesheet" type="text/css" href="./assets/styles/icon-fonts.css"> <!-- link to icon fonts -->
    <link rel="stylesheet" type="text/css" href="./assets/styles/styles.css"> <!-- link to custom styles -->
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">

    <title>Alchemetrics | Integrated Multi-channel Marketing Services</title>
</head>
<body>

<div class="main_h">

    <a class="logo" href="#">Al/Metric</a>

    <div class="mobile-toggle">
        <span></span>
        <span></span>
        <span></span>
    </div>

    <nav class="nav">
        <ul class="nav__list">
            <li class="nav__list--item"><a href="#sec2">Products</a></li>
            <li class="nav__list--item"><a href="#sec3">How It Works</a></li>
            <li class="nav__list--item"><a href=".timeline">Our Story</a></li>
            <li class="nav__list--item"><a href="#sec5">Contact Us</a></li>
        </ul>
    </nav>

</div>


<header class="header"> <!-- start of the header -->
    <div class="header__logo-box">
        <img src="./assets/img/logo.png" alt="Logo" class="header__logo"> <!-- header Logo -->
    </div>

    <div class="header__text-box"> <!-- Main header text and button -->
        <h1 class="heading-primary">
            <span class="heading-primary--main">Alchemetrics</span>
            <span class="heading-primary--sub">we can help your marketing with</span>
            <span class="heading-primary--sub2">
    					<span class="sub-item1 heading-primary--content">Gathering</span> 
    					<span class="sub-item2 heading-primary--content">Storing</span> 
    					<span class="sub-item3 heading-primary--content">Analyzing</span>
    					<span class="sub-item4 heading-primary--content">Targeting</span> 

    				data</span>
        </h1>

    </div>
    <div class="mouse">
        <span></span>
    </div>
</header> <!-- header end -->

<div id="loader-wrapper">
    <div id="loader"></div>

    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>

</div>

<main>
    <section class="section-about"> <!-- section about start -->
        <div class="u-center-text u-margin-bottom-huge"> <!-- title of the sections -->
            <h2 class="heading-secondary" id="sec2">
                Our Products And Services
            </h2>
        </div>

        <div class="slideshow-container">
            <div class="mySlides fade"> <!-- my slides start -->
                <div class="single-item"> <!-- text of the section -->
                    <div class="row">
                        <div class="col-1-of-2">
                            <h3 class="heading-tertiary u-margin-bottom-small">Crm Experts</h3>
                            <p class="paragraph">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente
                                aspernatur libero repellat quis consequatur
                                ducimus quam nisi exercitationem omnis earum qui.
                            </p>

                            <h3 class="heading-tertiary u-margin-bottom-small">Single Costumer View</h3>
                            <p class="paragraph">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores nulla deserunt
                                voluptatum nam.
                            </p>

                            <a href="#" class="btn-text">Learn more &rarr;</a>
                        </div>
                        <div class="col-1-of-2">
                            <img class="about--img" src="./assets/img/5-2-online-marketing-transparent.png" alt="tree">
                        </div>
                    </div>
                </div> <!-- single item end -->
            </div> <!-- mySlides end -->
            <div class="mySlides fade"> <!-- my slides start -->
                <div class="single-item"> <!-- text of the section -->
                    <div class="row">
                        <div class="col-1-of-2">
                            <h3 class="heading-tertiary u-margin-bottom-small">Crm Experts</h3>
                            <p class="paragraph">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat.
                            </p>

                            <h3 class="heading-tertiary u-margin-bottom-small">Single Costumer View</h3>
                            <p class="paragraph">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores nulla deserunt
                                voluptatum nam.
                            </p>

                            <a href="#" class="btn-text">Learn more &rarr;</a>
                        </div>
                        <div class="col-1-of-2">
                            <img class="about--img" src="./assets/img/24853-4-marketing-photos.png" alt="screen">
                        </div>
                    </div>
                </div> <!-- single item end -->
            </div> <!-- mySlides end -->
            <div class="mySlides fade"> <!-- my slides start -->
                <div class="single-item"> <!-- text of the section -->
                    <div class="row">
                        <div class="col-1-of-2">
                            <h3 class="heading-tertiary u-margin-bottom-small">Crm Experts</h3>
                            <p class="paragraph">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>

                            <a href="#" class="btn-text">Learn more &rarr;</a>
                        </div>
                        <div class="col-1-of-2">
                            <img class="about--img" src="./assets/img/8-2-marketing-free-png-image.png" alt="marketing">
                        </div>
                    </div>
                </div> <!-- single item end -->
            </div> <!-- mySlides end -->
        </div>
        <div class="dots u-margin-top-small">
            <span class="dots__d" onclick="currentSlide(1)"></span>
            <span class="dots__d" onclick="currentSlide(2)"></span>
            <span class="dots__d" onclick="currentSlide(3)"></span>
        </div>

    </section> <!-- section about end -->

    <section class="section-features" id="sec3"> <!-- section fetures start -->
        <div class="row">
            <div class="col-1-of-4"> <!-- reusable feture box -->
                <div class="feature-box">
                    <i class="feature-box__icon icon-basic-world"></i>
                    <h3 class="heading-tertiary u-margin-bottom-small">Data Collection</h3>
                    <p class="feature-box__text">
                        Lorem ipsum dolor sit amet consectetur adipisiciasng elit. Apasderiam, ipsum saadspiente
                        aspernatur. Asdasd asad ads.
                    </p>
                </div>
            </div> <!-- feature box end -->

            <div class="col-1-of-4"> <!-- reusable feture box -->
                <div class="feature-box">
                    <i class="feature-box__icon icon-basic-server-upload"></i>
                    <h3 class="heading-tertiary u-margin-bottom-small">Storing In Our Database</h3>
                    <p class="feature-box__text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur.
                    </p>
                </div>
            </div> <!-- feature box end -->

            <div class="col-1-of-4"> <!-- reusable feture box -->
                <div class="feature-box">
                    <i class="feature-box__icon icon-basic-map"></i>
                    <h3 class="heading-tertiary u-margin-bottom-small">Analyzing Data with ease</h3>
                    <p class="feature-box__text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur.
                    </p>
                </div>
            </div> <!-- feature box end -->

            <div class="col-1-of-4"> <!-- reusable feture box -->
                <div class="feature-box">
                    <i class="feature-box__icon icon-basic-mail-open-text"></i>
                    <h3 class="heading-tertiary u-margin-bottom-small">Managing you eMails</h3>
                    <p class="feature-box__text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur.
                        Lasda asdasdaa sadsasd.
                    </p>
                </div>
            </div> <!-- feature box end -->
        </div>
    </section>

    <section class="timeline"> <!-- section timeline start -->
        <ul>
            <li class="timeline__list"> <!-- timeline list item -->
                <div class="timeline__content">
                    <p class="timeline__time">MARCH 21 ,1999</p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
            </li>
            <li class="timeline__list"><!-- timeline list item -->
                <div class="timeline__content">
                    <p class="timeline__time">MARCH 21 ,1999</p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
            </li>
            <li class="timeline__list"><!-- timeline list item -->
                <div class="timeline__content">
                    <p class="timeline__time">MARCH 21 ,1999</p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
            </li>
            <li class="timeline__list"><!-- timeline list item -->
                <div class="timeline__content">
                    <p class="timeline__time">MARCH 21 ,1999</p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
            </li>
            <li class="timeline__list"><!-- timeline list item -->
            </li>
        </ul>
    </section>


    <section class="section-stories"> <!-- section stories start -->
        <div class="bg-video"> <!-- background video -->
            <video class="bg-video__content" autoplay muted loop>
                <source src="./assets/img/Oculus.mp4" type="video/mp4"> <!-- importing 2 types of video -->
                <source src="./assets/img/Oculus.webm" type="video/webm">
                Your browser is not supported! <!-- if your browser doesn't support video -->
            </video>
        </div>

        <div class="u-center-text u-margin-bottom-big"> <!-- title of the section -->
            <h2 class="heading-secondary">
                We make people genuinely happy
            </h2>
        </div>

        <div class="row"> <!-- reusable story box -->
            <div class="story">
                <figure class="story__shape">
                    <img src="./assets/img/james.jpg" alt="Armadillo" class="story__img">
                    <figcaption class="story__caption">James Ray</figcaption>
                </figure>
                <div class="story__text">
                    <h3 class="heading-tertiary u-margin-bottom-small">Armadillo</h3>
                    <p class="paragraph">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur
                        libero repellat quis consequatur
                        ducimus quam nisi exercitationem omnis earum qui. Aperiam, ipsum sapiente aspernatur libero
                        repellat quis consequatur ducimus quam nisi exercitationem omnis earum qui.
                    </p>
                </div>
            </div>
        </div> <!-- story box end -->

        <div class="row"> <!-- reusable story box -->
            <div class="story">
                <figure class="story__shape">
                    <img src="./assets/img/james.jpg" alt="OgilvyOne" class="story__img">
                    <figcaption class="story__caption">Paul King</figcaption>
                </figure>
                <div class="story__text">
                    <h3 class="heading-tertiary u-margin-bottom-small">OgilvyOne</h3>
                    <p class="paragraph">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur
                        libero repellat quis consequatur
                        ducimus quam nisi exercitationem omnis earum qui. Aperiam, ipsum sapiente aspernatur libero
                        repellat quis consequatur ducimus quam nisi exercitationem omnis earum qui.
                    </p>
                </div>
            </div>
        </div>

        <div class="u-center-text u-margin-top-huge">
            <a href="#" class="btn-text">Read all stories &rarr;</a>
        </div>
    </section>

    <section class="section-book"> <!-- section contact us start -->
        <iframe
                class="map"
                frameborder="0"
                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCxxCjgA5I-liG8nRmhF3CsVHM6vr1yG7A
          &q=33+King's+Rd,+Reading+RG4+8DS,+UK
          &center=51.46544,-0.97527
          &zoom=15" allowfullscreen>
        </iframe> <!-- iframe for google maps -->


        <div class="row">
            <div class="book">
                <div class="book__form">

                    <?php
                    if (empty($_SESSION['token'])) {
                        $_SESSION['token'] = bin2hex(random_bytes(32));
                    }
                    ?> <!-- Creating $SESSION token with bin2hex function -->


                    <form id="contact_form" action="process_form.php" method="post" class="form">
                        <div class="u-margin-bottom-small">
                            <h2 class="heading-secondary" id="sec5">
                                Contact Us Now
                            </h2>
                        </div>

                        <p class="form-message"></p>

                        <div class="form__group">
                            <input type="text" class="form__input" placeholder="Full name" name="name" id="mail-name">
                            <label for="mail-name" class="form__label">Full name</label>

                            <input type="text" class="form__input" placeholder="familyname" name="familyname"
                                   id="familyname"> <!-- hidden input to protect against bots -->
                            <input type="hidden" id="token" name="token" value="<?php echo $_SESSION['token']; ?>">
                            <!-- Input with token value -->
                        </div>

                        <div class="form__group">
                            <input class="form__input" placeholder="Email address" name="email" id="mail-email">
                            <label for="mail-email" class="form__label">Email address</label>
                        </div>

                        <div class="form__group">
                            <textarea rows="9" cols="50" class="form__input" placeholder="Your message" name="message"
                                      id="mail-message"></textarea>
                            <label for="mail-message" class="form__label">Your Message</label>
                        </div>

                        <div class="form__group" id="messageSent">
                            <button id="mail-submit" type="submit" name="Submit" class="btn btn--green">Send Email
                                &rarr;
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<footer class="footer">
    <div class="row u-margin-bottom-medium">
        <div class="col-1-of-2 f-no-marg">
            <div class="footer__logo-box">
                <picture class="footer__logo">
                    <img src="./assets/img/logo.png" class="footer__log" alt="Full logo">
                </picture>
                <ul class="soc-icons">
                    <li><a href="https://plus.google.com/+AlchemetricsCoUk" target="_blank" class="footer__link--soc"><i
                                    class="glyph-icon flaticon-google-plus-symbol"></i></a></li>
                    <li><a href="https://twitter.com/alchemetrics?lang=en" target="_blank" class="footer__link--soc"><i
                                    class="glyph-icon flaticon-twitter-logo"></i></a></li>
                    <li><a href="https://www.linkedin.com/company/alchemetrics/" target="_blank"
                           class="footer__link--soc"><i class="glyph-icon flaticon-linkedin-logo"></i></a></li>
                    <li><a href="https://www.facebook.com/Alchemetrics/" target="_blank" class="footer__link--soc"><i
                                    class="glyph-icon flaticon-social"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="col-1-of-2">
            <div class="composition">

                <img src="./assets/img/the-drum-marketing-award-winners.png" alt="The drum marketing award winners"
                     class="composition__photo composition__photo--p1">
                <img src="./assets/img/MarketingTechFinalists2016-copy.png" alt="Marketing tech finalists"
                     class="composition__photo composition__photo--p2">
                <img src="./assets/img/talentawardstrans.png" alt="Talent awards"
                     class="composition__photo composition__photo--p3">

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-1-of-2">
            <div class="footer__navigation">
                <ul class="footer__list">
                    <li class="footer__item"><a href="#sec2" class="footer__link">Products</a></li>
                    <li class="footer__item"><a href="#sec3" class="footer__link">Services</a></li>
                    <li class="footer__item"><a href="#sec5" class="footer__link">Contact Us</a></li>
                    <li class="footer__item"><a href="http://home.alchemetrics.co.uk/privacy-policy/"
                                                class="footer__link">Privacy Policy</a></li>
                </ul>
            </div>
            <p class="footer__copyright">
                Copyright &copy;
            </p>
        </div>
    </div>
</footer>


<script src="../node_modules/jquery/dist/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIkSWsVHsnNvqwNc7NEGp631kz0nqPkag&callback=initMap"
        async defer></script>
<script src="./assets/scripts/app.js"></script>
</body>
</html>