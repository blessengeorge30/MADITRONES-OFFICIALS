<?php
    include "assets/db_connection.php";
  
    
    // if(isset($_POST["submit"]))
    // {
    //  $user1 = $_POST["Service_name"];
    //  $user2 = $_POST["Service_description"];
    //  $user3 = $_POST["Service_image"];

  
    // date_default_timezone_set('Asia/Kolkata');
    // $currentTime = date('d-m-Y H:i:s');
    //     $sql = "Select * from Services VALUES (NULL, '$user1', '$user2', '$user3', '$currentTime')";
    //     if (mysqli_query($conn, $sql)) 
    //     {
    //         function submitForm() 
    //         {
    //             echo("<script type='text/javascript'>window.alert('Submission Successful.')</script>");
    //         }
    //         sleep(1);
    //         submitForm(); 
    //         sleep(1);
    //     } 
    //     else 
    //     {
    //         echo "Error: " . $sql . "<br>" . $conn->error;
    //     }
    // }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Page Title -->
    <title>Maditrones | Our Services</title>

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
                    <div class="stg-col-6 stg-offset-3 align-center stg-tp-col-10 stg-tp-offset-1">
                        <h1 class="bringer-page-title" data-appear="fade-up" data-unload="fade-up">Our Services</h1>
                        <p class="bringer-large-text" data-split-appear="fade-up" data-delay="100" data-split-unload="fade-up">We offer a wide ↔ range of creative services to help businesses of all sizes achieve 🏆 their goals.</p>
                    </div>
                </div>
            </section>

            <!-- Section: Intro -->
            <section>
                <!-- Section Image -->
                <!--<div class="bringer-parallax-media stg-bottom-gap-l" data-appear="fade-up" data-unload="fade-up">-->
                <!--    <img class="bringer-lazy" src="img/null.png" data-src="img/home/cover5.png" alt="Bringer Services" width="1920" height="960">-->
                <!--</div>-->

                <!-- Section Title -->
                <div class="stg-row stg-bottom-gap">
                    <div class="stg-col-6" data-unload="fade-left">
                        <h2 class="stg-bottom-gap" data-split-appear="fade-up">Discover the spark ✨ with  Maditrone's Services.</h2>
                    </div>
                    <div class="stg-col-6"></div>
                </div>

                <!-- Section Content -->
                <div class="stg-row stg-tp-column-reverse">
                    <div class="stg-col-6 stg-valign-bottom" data-unload="fade-left">
                        <div class="align-right">
                            <a href="pricing.html" class="bringer-icon-link" data-appear="fade-right">
                                <div class="bringer-icon-link-content">
                                    <h6>
                                        Unleash your
                                        <br>
                                        Brand's potential
                                    </h6>
                                    <span class="bringer-label">Discover Price List</span>
                                </div>
                                <div class="bringer-icon-wrap">
                                    <i class="bringer-icon bringer-icon-explore"></i>
                                </div>
                            </a><!-- .bringer-icon-link -->
                        </div>
                    </div>
                    <div class="stg-col-6 stg-tp-col-9 stg-tp-bottom-gap" data-appear="fade-left" data-unload="fade-right">
                        <p class="bringer-large-text">Unleash your brand's full potential. Your brand is a fire waiting to be ignited. We provide the fuel, the spark, and the expert guidance to watch your brand blaze a trail and captivate the world. Explore our services and discover how Bringer can help you achieve your goals.</p>
                    </div>
                </div>
            </section>

            <!-- Section: Our Services -->
         <!-- Section: Our Services -->
            <section class="backlight-top">
                <!-- Section Title -->
                <div class="stg-row bringer-section-title">
                    <div class="stg-col-10 stg-offset-1">
                        <div class="align-center">
                            <h2 data-split-appear="fade-up" data-split-unload="fade-up">The full spectrum of brand 🪄 magic. Choose your adventure.</h2>
                        </div>
                    </div>
                </div>
                <!-- Services List -->
                <div class="bringer-detailed-list-wrap" data-appear="fade-up" data-delay="200" data-unload="fade-up">
                    <ul class="bringer-detailed-list">
                        <?php $sql8 = "select * from Services";
                          $result8 = mysqli_query($conn,$sql8);
                          while ($row = mysqli_fetch_row($result8)) 
                          {
                            ?>
                        <li>
                            <div class="bringer-detailed-list-title">
                                <h4><?php echo $row[1]; ?><span class="bringer-accent">.</span></h4>
                            </div>
                            <div class="bringer-detailed-list-description">
                                <p><?php echo $row[2]; ?></p>
                            </div>
                            <div class="bringer-detailed-list-button">
                                <span class="bringer-icon bringer-icon-explore"></span>
                            </div>
                            <a href="service-details"></a>
                        </li>
                        <?php } ?>
                        
                    </ul>
                </div>
            </section>
            <!-- Section: Marquee -->
            <section class="is-fullwidth is-stretched" data-padding="none">
                <div class="bringer-marquee" data-speed="5000">
                    <div class="bringer-marquee-inner">
                        <ul class="bringer-marquee-list">
                            <li>
                                <h2>Unleash Your Creativity</h2>
                            </li>
                            <li>
                                <h2>Spark Imagination</h2>
                            </li>
                            <li>
                                <h2>Creative Firestorms</h2>
                            </li> 
                            <li>
                                <h2>Ignite Results</h2>
                            </li>
                        </ul>
                    </div><!-- .bringer-marquee-inner -->
                </div><!-- .bringer-marquee -->
            </section>

            <!-- Section: What Makes Us Best -->
            <section class="backlight-bottom">
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

            <!-- Section: Grid CTA -->
            <section>
                <div class="bringer-bento-grid bringer-grid-cta">
                    <div class="is-large bringer-masked-block" data-appear="fade-right" data-unload="fade-left">
                        <div class="bringer-grid-cta-media bringer-masked-media" data-bg-src="img/cta/grid-cta-background.jpg">
                            <div class="bringer-grid-cta-heading">Need to amplify your voice?</div>
                        </div>
                        <div class="bringer-masked-content at-bottom-right">
                            <p class="bringer-large-text" data-appear="fade-right" data-delay="100">Let's chat about your goals &rarr;</p>
                        </div>
                    </div>
                    <div class="is-medium bringer-block" data-appear="fade-down" data-unload="fade-right">
                        <h3>We will design campaigns that make the world listen</h3>
                    </div>
                    <div class="is-small" data-appear="zoom-out" data-delay="100" data-unload="zoom-out">
                        <a href="contacts.html" class="bringer-square-button">
                            <span class="bringer-icon bringer-icon-explore"></span>
                        </a>
                    </div>
                    <div class="is-small" data-appear="zoom-out" data-delay="200" data-unload="zoom-out">
                        <img src="img/home/logo_m.png" alt="Let's Chat" width="960" height="960">
                    </div>
                </div>
            </section>

        </div><!-- .stg-container -->


            <!-- Section: CTA Form -->
         
<!--<div style="display: flex; justify-content: center; align-items: center; height: 100vh;">-->
<!--    <form action="" method="get"  style="padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); max-width: 400px; width: 100%; text-align: center;">-->
<!--        <h2 style="margin-bottom: 15px; font-size: 24px;">Contact Us</h2>-->
        
<!--        <label for="name" style="display: block; margin-bottom: 5px; font-weight: bold;">Your Name</label>-->
<!--        <input type="text" id="name" name="user_name" placeholder="Enter your name" required style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ddd; border-radius: 3px; font-size: 16px;">-->
        
<!--        <label for="email" style="display: block; margin-bottom: 5px; font-weight: bold;">Your Email</label>-->
<!--        <input type="email" id="email" name="user_email" placeholder="Enter your email" required style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ddd; border-radius: 3px; font-size: 16px;">-->
        
<!--        <label for="message" style="display: block; margin-bottom: 5px; font-weight: bold;">Your Message</label>-->
<!--        <textarea id="message" name="user_message" placeholder="Enter your message" required style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ddd; border-radius: 3px; font-size: 16px; resize: vertical; height: 100px;"></textarea>-->
        
<!--        <button type="submit" style="width: 100%; padding: 10px; background-color: #007bff; color: #fff; border: none; border-radius: 3px; font-size: 16px; cursor: pointer;">Submit</button>-->
<!--    </form>-->
<!--</div>-->






            
            
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