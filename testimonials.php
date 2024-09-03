<?php
    include "assets/db_connection.php";
  
    
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    

    <!-- Page Title -->
    <title>Maditrones | Testimonials</title>

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
                <div class="stg-row">
                    <div class="stg-col-6 stg-offset-3 align-center">
                        <h1 class="bringer-page-title" data-appear="fade-up" data-unload="fade-up">Testimonials</h1>
                        <p class="bringer-large-text" data-split-appear="fade-up" data-delay="100" data-split-unload="fade-up">Here are some of the most inspiring reviews from our clients 🌟. Your opinion is very important to us.</p>
                    </div>
                </div>
            </section>

            <!-- Section: Image -->
            <section data-padding="top" data-appear="zoom-in" data-unload="zoom-out">
                <div class="bringer-expand-on-scroll">
                    <img class="bringer-lazy" src="img/null.png" data-src="img/home/cover5.png" alt="Testimonials" width="1920" height="960">
                </div>
            </section>

            <!-- Section: Testimonials -->
            <section>
                <!-- Grid Testimonials -->
                <div class="bringer-grid-2cols" data-stagger-appear="fade-up" data-stagger-unload="fade-up">
                    <!-- Card Item 01 -->
                     <?php $sql1= "select * from Testimonials_details";
                                $result =  mysqli_query($conn,$sql1);
                                while($row = mysqli_fetch_row($result))
                                {
                               
                                 ?>
                    <div class="bringer-block bringer-tetimonials-card">
                        <div class="bringer-tetimonials-card-descr">
                            <?php echo $row[3]; ?>
                        </div>
                        <div class="bringer-tetimonials-card-footer">
                            <div class="bringer-tetimonials-card-name">
                                <h6><?php echo $row[1]; ?></h6>
                                <span class="bringer-meta"><?php echo $row[2]; ?></span>
                            </div>
                            <div class="bringer-tetimonials-card-rate">
                                <span class="bringer-tetimonials-stars5"></span>
                            </div>
                        </div>
                    </div><!-- .bringer-tetimonials-card -->
                      <?php } ?>
                    <!-- Card Item 02 -->
                    
                   
                   
                   
                </div>
            </section>
            
                  <!-- Section: Marquee -->
            <section class="is-fullwidth is-stretched" data-padding="none">
                <div class="bringer-marquee" data-speed="5000">
                    <div class="bringer-marquee-inner">
                        <ul class="bringer-marquee-list">
                            <li>
                                <h2>Branding</h2>
                            </li>
                            <li>
                                <h2>Marketing</h2>
                            </li> 
                            <li>
                                <h2>Graphic Design</h2>
                            </li>
                            <li>
                                <h2>Web Design</h2>
                            </li>
                            <li>
                                <h2>UX/UI</h2>
                            </li>
                        </ul>
                    </div><!-- .bringer-marquee-inner -->
                </div><!-- .bringer-marquee -->
            </section>

            <!-- Section: What Makes Us Best -->
            <section class="divider-top">
                <!-- Section Title -->
                <div class="stg-row bringer-section-title">
                    <div class="stg-col-8 stg-offset-2">
                        <div class="align-center">
                            <h2 data-appear="fade-up" data-unload="fade-up">What Makes Us Best</h2>
                            <p class="bringer-large-text" data-appear="fade-up" data-delay="100" data-unload="fade-up">We are a passionate team of designers and developers who believe in the power of creativity. We help creative professionals create a strong online presence that showcases their work and tells their story.</p>
                        </div>
                    </div>
                </div>
                <!-- Content Grid -->
                <div class="bringer-grid-2cols bringer-tp-grid-1col" data-stagger-appear="zoom-in" data-stagger-delay="100" data-delay="100" data-unload="fade-up">
                    <!-- Card Item 01 -->
                    <div class="bringer-block">
                        <h4>We don't just design, we <span class="bringer-accent">unleash creative</span> firestorms<span class="bringer-accent">.</span></h4>
                        <p>Tired of bland marketing and cookie-cutter websites? We infuse your brand with bold ideas and strategic brilliance, igniting campaigns that capture hearts and drive tangible results. Forget sparklers, we're here to light the fire.</p>
                    </div><!-- .bringer-block -->
                    <!-- Card Item 02 -->
                    <div class="bringer-block">
                        <h4>We <span class="bringer-accent">fuel creativity</span> with data, guide passion with precision<span class="bringer-accent">.</span></h4>
                        <p>We're not just artistic dreamers, we're strategic alchemists. We blend data-driven insights with unbridled passion, ensuring your campaigns reach the right audience, hit the right chords, and deliver measurable results. Because passion without direction is a beautiful mess.</p>
                    </div><!-- .bringer-block -->
                    <!-- Card Item 03 -->
                    <div class="bringer-block">
                        <h4>We craft <span class="bringer-accent">emotional connections</span>, not just visuals and copy<span class="bringer-accent">.</span></h4>
                        <p>We delve deeper than pixels and prose. We understand the human heart, the language of emotions. We weave stories that resonate, visuals that linger in minds, and content that sparks conversations. Because true connection is the foundation of brand loyalty.</p>
                    </div><!-- .bringer-block -->
                    <!-- Card Item 04 -->
                    <div class="bringer-block">
                        <h4>We don't just work with you, we become your <span class="bringer-accent">creative champions.</span></h4>
                        <p>We don't see clients, we see collaborators. We believe in building partnerships, in understanding your vision, and becoming an extension of your team. Your goals are our canvas, your success our masterpiece. We paint your dreams into reality, together.</p>
                    </div><!-- .bringer-block -->
                </div>
            </section>

            <!-- Section: CTA Form -->
            <!--<section class="backlight-top is-fullwidth">-->
            <!--    <div class="stg-row stg-valign-middle stg-cta-with-image stg-tp-column-reverse">-->
            <!--        <div class="stg-col-5" data-unload="fade-left">-->
            <!--            <div class="bringer-offset-image" data-bg-src="img/cta/contact-section-bg.jpg" data-appear="fade-up" data-threshold="0.25"></div>-->
            <!--            <form action="" method="post" class="bringer-contact-form bringer-block" data-fill-error="Please, fill out the contact form." data-appear="fade-right" data-threshold="0.25">-->
            <!--                <div class="bringer-form-content">-->
                               
            <!--                    <label for="name">Your Name</label>-->
            <!--                    <input type="text" id="name" name="name" placeholder="Your Name" required>-->
                              
            <!--                    <label for="email">Your Email</label>-->
            <!--                    <input type="email" id="email" name="email" placeholder="email@example.com" required>    -->
                               
            <!--                    <label for="message">Your Message</label>-->
            <!--                    <textarea id="message" name="message" placeholder="Your Message" required></textarea>-->
                             
            <!--                    <button type="submit" value="Send Message">Get a FREE Quote</button>-->
            <!--                    <div class="bringer-contact-form__response"></div>-->
            <!--                </div>-->
            <!--                <span class="bringer-form-spinner"></span>-->
            <!--            </form>-->
            <!--        </div>-->
            <!--        <div class="stg-col-6 stg-offset-1" data-unload="fade-right">-->
            <!--            <div class="bringer-cta-form-content">-->
            <!--                <div class="bringer-cta-form-title" data-split-appear="fade-up" data-split-delay="100" data-split-by="line">-->
            <!--                    Let's discuss your next creative project.-->
            <!--                </div>-->
            <!--                <div class="bringer-cta-text">-->
            <!--                    <div class="stg-row stg-valign-middle">-->
            <!--                        <div class="stg-col-2 stg-offset-2 stg-tp-col-1 stg-tp-offset-3 stg-m-col-1 stg-m-offset-2" data-appear="fade-right">-->
            <!--                            <i class="bringer-cta-icon"></i>-->
            <!--                        </div>-->
            <!--                        <div class="stg-col-8 stg-tp-col-7 stg-m-col-8 stg-m-offset-1" data-appear="fade-left">-->
            <!--                            <p class="bringer-large-text">We help creative agencies, designers, and other creative people showcase their perfect work.</p>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--                <div class="bringer-cta-counters bringer-grid-3cols bringer-m-grid-3cols" data-stagger-appear="fade-up" data-stagger-delay="100">-->
                   
            <!--                    <div class="bringer-counter bringer-small-counter" data-delay="3000">-->
            <!--                        <div class="bringer-counter-number">420</div>-->
            <!--                        <div class="bringer-counter-label">Projects Done</div>-->
            <!--                    </div>-->
                            
            <!--                    <div class="bringer-counter bringer-small-counter" data-delay="3000">-->
            <!--                        <div class="bringer-counter-number" data-suffix="K+">8</div>-->
            <!--                        <div class="bringer-counter-label">Happy Clients</div>-->
            <!--                    </div>-->
                                
            <!--                    <div class="bringer-counter bringer-small-counter" data-delay="3000">-->
            <!--                        <div class="bringer-counter-number" data-suffix="+">12</div>-->
            <!--                        <div class="bringer-counter-label">Years in Work</div>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</section>-->
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