<?php
    include "assets/db_connection.php";
  
    

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Page Title -->
    <title>Maditrones | Portfolio</title>

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
            <section>
                <!-- Block: Page Title -->
                <div class="bringer-bento-grid stg-bottom-gap-l">
                    <div class="is-large" data-appear="fade-right" data-unload="fade-left">
                        <img class="bringer-lazy" src="img/null.png" data-src="img/portfolio/odyssia.png" alt="Odyssia" width="1300" height="1500">
                    </div>
                         <?php $sql6 = "select * from Portfolio";
                          $result6 = mysqli_query($conn,$sql6);
                          while ($row = mysqli_fetch_row($result6)) 
                          {
                            ?>
                    <div class="is-medium bringer-block stg-vertical-space-between" data-appear="fade-down" data-delat="100" data-unload="fade-right">
                        <h1 ><?php echo $row[1]; ?></h1>
                        <p class="bringer-large-text"  ><?php echo $row[2]; ?></p>
                    </div>
                    <div class="is-small bringer-block" data-appear="fade-up" data-delat="100" data-unload="fade-left">
                        <ul class="bringer-meta-list">
                            <li>
                                <span class="bringer-meta">Client:</span>
                                <span class="bringer-highlight"><?php echo $row[3]; ?></span>
                            </li>
                            <li>
                                <span class="bringer-meta" >Service:</span>
                                <span class="bringer-highlight"><?php echo $row[4]; ?></span>
                            </li>
                            <li>
                                <span class="bringer-meta" >Date:</span>
                                <span class="bringer-highlight"><?php echo $row[5]; ?></span>
                            </li>
                        </ul>
                    </div>
                    <div class="is-small" data-appear="fade-left" data-delat="200" data-unload="fade-right">
                        <img class="bringer-lazy" src="img/null.png" data-src="img/portfolio/odyssialogo.jpg" alt="Cookie Dough" width="960" height="960">
                    </div>
                </div>

                <!-- Block: The Challenge -->
                <div class="stg-row stg-bottom-gap-l stg-tp-column-reverse">
                    <div class="stg-col-8 bringer-block stg-vertical-space-between" data-appear="fade-right" data-unload="fade-left">
                        <h2> Overview of the Company </h2>
                        <div>
                            <p name="Campaign_long_description_text" ><?php echo $row[6]; ?>. </p>
                            <p>At Odyssia, we understand that footwear is more than just an accessory—it is a reflection of one's personality, a statement of individuality, and a key element of personal style.Making every step you take in Odyssia shoes a step towards a better future.</p>
                        </div>
                    </div>
                    <div class="stg-col-4 stg-tp-bottom-gap" data-appear="fade-left" data-unload="fade-right">
                        <img  name="name" class="bringer-lazy" src="img/null.png" data-src="img/portfolio/odyssiaad2.jpg" alt="Cookie Dough" width="960" height="960">
                    </div>
                </div>
                 <?php } ?>

                <!-- Block: Our Approach -->
                <!--<div class="stg-row stg-bottom-gap-l">-->
                <!--    <div class="stg-col-4 stg-tp-bottom-gap" data-appear="fade-right" data-unload="fade-left">-->
                <!--        <img class="bringer-lazy" src="img/null.png" data-src="img/portfolio/portfolio02/image02.jpg" alt="Cookie Dough" width="960" height="960">-->
                <!--    </div>-->
                <!--    <div class="stg-col-8 bringer-block stg-vertical-space-between" data-appear="fade-left" data-unload="fade-right">-->
                <!--        <h2>Our Approach</h2>-->
                <!--        <div>-->
                <!--            <p>We knew we had to speak to two distinct audiences: cautious parents and craving adults. We conducted in-depth surveys and focus groups, delving into the psychological triggers and emotional connections associated with cookie dough. Our key takeaway? Cookie dough wasn't just a food; it was a nostalgic memory, a symbol of comfort and indulgence.</p>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->

                <!-- Block: The Solution -->
                <!--<div class="bringer-bento-grid stg-bottom-gap-l">-->
                <!--    <div class="is-large stg-vertical-space-between bringer-block stg-large-gap" data-bg-src="img/cta/grid-cta-background.jpg" data-appear="fade-right" data-unload="fade-left">-->
                <!--        <h2>The Solution</h2>-->
                <!--        <p class="bringer-large-text">We crafted a campaign that celebrated the joy of cookie dough, but with a modern twist: #DoughpWithoutDoubt, a playful nod to the safety concerns and a powerful message of guilt-free indulgence.</p>-->
                <!--    </div>-->
                <!--    <div class="is-medium bringer-block stg-valign-middle" data-appear="fade-left" data-delay="100" data-unload="fade-right">-->
                <!--        <ul class="bringer-marked-list">-->
                <!--            <li>Whimsical video ads: We created stop-motion animation shorts featuring vibrant cookie dough characters.</li>-->
                <!--            <li>Influencer partnerships: We teamed up with parenting bloggers and health-conscious chefs, showcasing how Doughp fit into their families and healthy lifestyles.</li>-->
                <!--            <li>Instagrammable pop-up shops: We created interactive pop-up shops brimming with colorful Doughp jars and activities. </li>-->
                <!--        </ul>-->
                <!--    </div>-->
                <!--    <div class="is-small" data-appear="fade-up" data-delay="100" data-unload="fade-left">-->
                <!--        <img class="bringer-lazy" src="img/null.png" data-src="img/portfolio/portfolio02/image03.jpg" alt="Cookie Dough" width="960" height="960">-->
                <!--    </div>-->
                <!--    <div class="is-small" data-appear="fade-up" data-delay="200" data-unload="fade-right">-->
                <!--        <img class="bringer-lazy" src="img/null.png" data-src="img/portfolio/portfolio02/image04.jpg" alt="Cookie Dough" width="960" height="960">-->
                <!--    </div>-->
                <!--</div>-->

                <!-- Block: Results & Impact -->
                <!--<div class="stg-row">-->
                <!--    <div class="stg-col-8 bringer-block stg-vertical-space-between stg-tp-bottom-gap" data-appear="fade-right" data-unload="fade-left">-->
                <!--        <h2>Results & Impact</h2>-->
                <!--        <div>-->
                <!--            <ul class="bringer-marked-list">-->
                <!--                <li><span class="bringer-highlight">Doubling of brand awareness:</span> Doughp became synonymous with safe, delicious edible cookie dough, capturing the attention of both skeptical parents and curious adults.</li>-->
                <!--                <li><span class="bringer-highlight">Significant sales growth:</span> Sales skyrocketed, propelled by new customers and repeat buys from families and individuals discovering the joy of guilt-free indulgence.</li>-->
                <!--                <li><span class="bringer-highlight">Shift in market perception:</span> Doughp successfully redefined the edible cookie dough category, moving from a niche product to a mainstream treat embraced by consumers.</li>-->
                <!--            </ul>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--    <div class="stg-col-4" data-appear="fade-left" data-unload="fade-right">-->
                <!--        <img class="bringer-lazy" src="img/null.png" data-src="img/portfolio/portfolio02/image05.jpg" alt="Cookie Dough" width="960" height="960">-->
                <!--    </div>-->
                <!--</div>-->
            </section>

            <!-- Section: Next Post -->
            <section class="divider-top" data-appear="fade-up">
                <div class="align-center" data-unload="zoom-in">
                    <a href="portfolio-post03.html" class="bringer-icon-link bringer-next-post">
                        <div class="bringer-icon-link-content">
                            <h6>Next Project</h6>
                            <h2>Gaming Power</h2>
                        </div>
                        <div class="bringer-icon-wrap">
                            <i class="bringer-icon bringer-icon-explore"></i>
                        </div>
                    </a><!-- .bringer-icon-link -->
                </div>
            </section>
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