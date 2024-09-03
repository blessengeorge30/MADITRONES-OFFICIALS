<?php
    include "assets/db_connection.php";
  
    

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Page Title -->
    <title> Maditrones | Get in Touch </title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&amp;display=swap" rel="stylesheet">
    <!-- Config -->
    <link type="text/css" rel="stylesheet" href="css/config.css">
    <!-- Libraries -->
    <link type="text/css" rel="stylesheet" href="css/libs.css">
    <!-- Template Styles -->
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <!-- Responsive -->
    <link type="text/css" rel="stylesheet" href="css/responsive.css">

    <!-- Favicon -->
    <link rel="icon" href="img/favicon.png" sizes="32x32">
</head>
<body>
    <!-- Header -->
  <?php include "assets/header.php"; ?>

    <!-- Page Main -->
    <main id="bringer-main">
        <div class="stg-container">
            <!-- Section: Page Title -->
            <section class="backlight-bottom">
                <div class="stg-row stg-bottom-gap-l">
                    <div class="stg-col-6 stg-offset-3 align-center">
                        <h1 class="bringer-page-title" data-appear="fade-up" data-unload="fade-up">Get in Touch</h1>
                        <p class="bringer-large-text" data-appear="fade-up" data-delay="100" data-unload="fade-up">We help businesses of all sizes achieve their goals. We believe every brand, big or small, deserves to shine.</p>
                    </div>
                </div>
                <div class="bringer-parallax-media" data-parallax-speed="20" data-appear="fade-up" data-delay="200" data-unload="fade-up">
                    <img class="bringer-lazy" src="img/null.png" data-src="img/home/cover5.png" alt="Get in Touch" width="1920" height="960">
                </div><!-- .bringer-parallax-media -->
            </section>

            <!-- Section: About Us -->
            <section>
                <!-- Section Title -->
                <div class="stg-row stg-bottom-gap">
                    <div class="stg-col-8">
                        <h2 data-split-appear="fade-up" data-unload="fade-up">Ready to ignite your brand's fire? 🔥 Let's connect! 🤝</h2>
                    </div>
                    <div class="stg-col-4"></div>
                </div>
                <!-- Section Content -->
                <div class="stg-row stg-bottom-gap-l">
                    <div class="stg-col-6 stg-offset-6" data-appear="fade-up" data-delay="200" data-unload="fade-up">
                        <p>At Bringer, we believe in the power of collaboration and shared passion. We're not just a creative agency, we're your partners in igniting your brand's unique potential. So, whether you're brimming with ideas or just starting to spark, reach out and let's chat!</p>
                    </div>
                </div>
                <!-- Grid Galery -->
                <div class="bringer-grid-3cols bringer-parallax-media bringer-m-grid-3cols stg-m-small-gap" data-stagger-appear="fade-up" data-delay="200" data-stagger-unload="fade-up">
                    <a href="img/inner-pages/contacts02.jpg" class="bringer-lightbox-link" data-size="960x960">
                        <img class="bringer-lazy" src="img/null.png" data-src="img/inner-pages/contacts02.jpg" alt="Bringer" width="960" height="960">
                    </a>
                    <a href="img/inner-pages/contacts03.jpg" class="bringer-lightbox-link" data-size="960x960">
                        <img class="bringer-lazy" src="img/null.png" data-src="img/inner-pages/contacts03.jpg" alt="Bringer" width="960" height="960">
                    </a>
                    <a href="img/inner-pages/contacts04.jpg" class="bringer-lightbox-link" data-size="960x960">
                        <img class="bringer-lazy" src="img/null.png" data-src="img/inner-pages/contacts04.jpg" alt="Bringer" width="960" height="960">
                    </a>
                </div>
            </section>

            <!-- Section: Let's Talk -->
            <section class="backlight-top divider-bottom">
                <!-- Section Title -->
                <div class="stg-row bringer-section-title">
                    <div class="stg-col-8 stg-offset-2">
                        <div class="align-center">
                            <h2 data-appear="fade-up" data-unload="fade-up">Let's 🗣 talk!</h2>
                            <p class="bringer-large-text" data-appear="fade-up" data-delay="100" data-unload="fade-up">Here's how you can connect with the Bringer team:</p>
                        </div>
                    </div>
                </div>
                <!-- Contacts Grid -->
                <div class="stg-row" data-stagger-appear="fade-up" data-delay="200" data-stagger-unload="fade-up">
                    <div class="stg-col-4 stg-tp-col-6 stg-tp-bottom-gap">
                        <!-- Phone -->
                        <div class="bringer-block stg-aspect-square stg-vertical-space-between">
                            <a href="tel:+12345556789" class="bringer-grid-item-link"></a>
                            <div>
                                <h5>Phone<span class="bringer-accent">.</span></h5>
                                <h6>+91 89214 80896</h6>
                            </div>
                            <p>Give us a call and chat directly with our friendly team. We're always happy to answer any questions.</p>
                        </div>
                    </div>
                    <div class="stg-col-4 stg-tp-col-6 stg-tp-bottom-gap">
                        <!-- Email -->
                        <div class="bringer-block stg-aspect-square stg-vertical-space-between">
                            <a href="mailto:bringer@example.com" class="bringer-grid-item-link"></a>
                            <div>
                                <h5>Email<span class="bringer-accent">.</span></h5>
                                <h6>info@maditrones.com</h6>
                            </div>
                            <p>Send us a detailed message. We'll get back to you as soon as possible to discuss your creative project further.</p>
                        </div>
                    </div>
                    <div class="stg-col-4 stg-tp-col-12">
                        <!-- Social Media -->
                        <div class="bringer-block stg-aspect-square stg-tp-aspect-rectangle stg-vertical-space-between">
                            <div>
                                <h5>Social Media<span class="bringer-accent">.</span></h5>
                                   <ul class="bringer-socials-list stg-small-gap" data-stagger-appear="fade-up" data-stagger-delay="75">
                                    <!--<li>-->
                                    <!--    <a href="#" target="_blank" class="bringer-socials-facebook">-->
                                    <!--        <i></i>-->
                                    <!--    </a>-->
                                    <!--</li>-->
                                    <li>
                                        <a href="https://www.instagram.com/maditrones/" target="_blank" class="bringer-socials-instagram">
                                            <i></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/company/maditrones/posts/?feedView=all" target="_blank" class="bringer-socials-linkedin">
                                            <i></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/@MADITRONES" target="_blank" class="bringer-socials-youtube">
                                            <i></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.behance.net/maditrones" target="_blank" class="bringer-socials-behance">
                                            <i></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <p>Follow us on Social Media Platforms for a glimpse into our creative world, industry insights, and projects.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Map -->
            <section>
                <!-- Section Title -->
                <div class="stg-row bringer-section-title">
                    <div class="stg-col-8 stg-offset-2">
                        <div class="align-center">
                            <h2 data-appear="fade-up" data-unload="fade-up">Visit our Studio</h2>
                            <p class="bringer-large-text" data-appear="fade-up" data-delay="100" data-unload="fade-up">Come visit! We love welcoming potential collaborators into our vibrant space. Schedule a tour and get inspired by our creative energy.</p>
                        </div>
                    </div>
                </div>
                <!-- Contacts Grid -->
                <div class="stg-row">
                    <div class="stg-col-4 stg-tp-col-6 stg-m-bottom-gap" data-appear="fade-right" data-delay="100" data-unload="fade-left">
                        <!-- Phone -->
                        <div class="bringer-block stg-aspect-square stg-vertical-space-between">
                            <a href="https://maps.app.goo.gl/WbTG6EKuF9dE1Xuy8" class="bringer-grid-item-link"></a>
                            <div>
                                <h5>Address<span class="bringer-accent">.</span></h5>
                                <h6>Heavenly Plaza, Civil Line Rd, Chembumukku, Vazhakkala, Kakkanad, Kochi, Kerala <br>682021</h6>
                            </div>
                            <p>Drop by our vibrant studio. We'd love to welcome you and share our creative vibe. Let's fuel your vision!</p>
                        </div>
                    </div>
                    <div class="stg-col-8 stg-tp-col-6" data-appear="fade-left" data-delay="200" data-unload="fade-right">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19687.409041413284!2d76.32150300931863!3d10.023963232107857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b080d1f0c9f1b2d%3A0x53475f13707cc487!2sMaditrones!5e0!3m2!1sen!2sin!4v1724671873182!5m2!1sen!2sin" width="800" height="380" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </section>

            <!-- Section: CTA Form -->
<!--            <section class="backlight-top is-fullwidth">-->
<!--                <div class="stg-row stg-valign-middle stg-cta-with-image stg-tp-column-reverse">-->
<!--<div style="width: 600px; background: #1a1a1a; border: 1px solid #3d3d3d; margin-bottom: 60px; padding: 32px 24px; font-size: 14px; font-family: inherit; color: white; display: flex; flex-direction: column; gap: 20px; box-sizing: border-box; border-radius: 16px;">-->
<!--    <form style="display: flex; flex-direction: column; gap: 20px;">-->
<!--        <div style="display: flex; flex-direction: column; gap: 2px;">-->
<!--            <label for="name" style="display: block; margin-bottom: 10px; margin-top: 30px; color: #b3b3b3; font-weight: 800; font-size: 12px;">Your Name</label>-->
<!--            <input type="text" id="name" name="name" placeholder="Your Name" required style="width: 230%; padding: 12px 16px; border-radius: 8px; color: #b3b3b3; font-family: inherit; background-color: #2c2c2c; border: 1px solid #414141;" />-->
<!--        </div>-->
<!--        <div style="display: flex; flex-direction: column; gap: 2px;">-->
<!--            <label for="email" style="display: block; margin-bottom: 10px; color: #b3b3b3; font-weight: 800; font-size: 12px;">Your Email</label>-->
<!--            <input type="email" id="email" name="email" placeholder="email@example.com" required style="width: 230%; padding: 12px 16px; border-radius: 8px; color: #b3b3b3; font-family: inherit; background-color: #2c2c2c; border: 1px solid #414141;" />-->
<!--        </div>-->
<!--        <div style="display: flex; flex-direction: column; gap: 2px;">-->
<!--            <label for="textarea" style="display: block; margin-bottom: 10px; color: #b3b3b3; font-weight: 700; font-size: 12px;">Your Message</label>-->
<!--            <textarea name="textarea" id="textarea" rows="10" placeholder="Your Message" required style="width: 230%; padding: 12px 16px; border-radius: 8px; resize: none; color: #b3b3b3; height: 96px; border: 1px solid #414141; background-color: #2c2c2c; font-family: inherit;"></textarea>-->
<!--        </div>-->
<!--        <button type="submit" style="display: flex;  justify-content: center; align-self: center; font-family: inherit; color: #fff; font-weight: 600; width: 230%; background: #1a73e8; border: none; padding: 12px 16px; font-size: inherit; gap: 8px; margin-top: 40px; margin-left: 40px; cursor: pointer; border-radius: 6px;">Get a FREE Quote</button>-->
<!--    </form>-->
<!--</div>-->


<!--                    <div class="stg-col-6 stg-offset-1" data-unload="fade-right">-->
<!--                        <div class="bringer-cta-form-content">-->
<!--                            <div class="bringer-cta-form-title" data-split-appear="fade-up" data-split-delay="100" data-split-by="line">-->
<!--                                Let's discuss your next creative project.-->
<!--                            </div>-->
<!--                            <div class="bringer-cta-text">-->
<!--                                <div class="stg-row stg-valign-middle">-->
<!--                                    <div class="stg-col-2 stg-offset-2 stg-tp-col-1 stg-tp-offset-3 stg-m-col-1 stg-m-offset-2" data-appear="fade-right">-->
<!--                                        <i class="bringer-cta-icon"></i>-->
<!--                                    </div>-->
<!--                                    <div class="stg-col-8 stg-tp-col-7 stg-m-col-8 stg-m-offset-1" data-appear="fade-left">-->
<!--                                        <p class="bringer-large-text">We help creative agencies, designers, and other creative people showcase their perfect work.</p>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="bringer-cta-counters bringer-grid-3cols bringer-m-grid-3cols" data-stagger-appear="fade-up" data-stagger-delay="100">-->
<!--                                 Counter Item -->
<!--                                <div class="bringer-counter bringer-small-counter" data-delay="3000">-->
<!--                                    <div class="bringer-counter-number">420</div>-->
<!--                                    <div class="bringer-counter-label">Projects Done</div>-->
<!--                                </div><!-- .bringer-counter -->
<!--                                 Counter Item -->
<!--                                <div class="bringer-counter bringer-small-counter" data-delay="3000">-->
<!--                                    <div class="bringer-counter-number" data-suffix="K+">8</div>-->
<!--                                    <div class="bringer-counter-label">Happy Clients</div>-->
<!--                                </div><!-- .bringer-counter -->
<!--                                 Counter Item -->
<!--                                <div class="bringer-counter bringer-small-counter" data-delay="3000">-->
<!--                                    <div class="bringer-counter-number" data-suffix="+">12</div>-->
<!--                                    <div class="bringer-counter-label">Years in Work</div>-->
<!--                                </div><!-- .bringer-counter -->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </section>-->

        </div><!-- .stg-container -->

        <!-- Footer -->
 <?php include "assets/footer.php"; ?>
          
	</main>

    <!-- Right Click Protection Block -->
    <div class="bringer-rcp-wrap">
        <div class="bringer-rcp-overlay"></div>
        <div class="bringer-rcp-container">
            <h2>The context menu is not allowed on this page.</h2>
        </div>
    </div>

    <!-- Dynamic Backlight -->
    <div class="bringer-backlight"></div>

    <!-- JS Scripts -->
    <script src="js/lib/jquery.min.js"></script>
    <script src="js/lib/libs.js"></script>
    <script src="js/contact_form.js"></script>
    <script src="js/st-core.js"></script>
    <script src="js/classes.js"></script>
    <script src="js/main.js"></script>
</body>

</html>