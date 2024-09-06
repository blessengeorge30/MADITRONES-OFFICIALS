<?php
    include "assets/db_connection.php";
  
    
    if(isset($_POST["submit"]))
    {
     $user1 = $_POST["user_email"];
   

  
    date_default_timezone_set('Asia/Kolkata');
    $currentTime = date('d-m-Y H:i:s');
        $sql = "INSERT INTO home_mail VALUES (NULL, '$user1', '$currentTime')";
        if (mysqli_query($conn, $sql)) 
        {
            function submitForm() 
            {
                echo("<script type='text/javascript'>window.alert('Submission Successful.')</script>");
            }
            sleep(1);
            submitForm(); 
            sleep(1);
        } 
        else 
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Maditrones | Digital Agency</title>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&amp;display=swap" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/config.css">
        <link type="text/css" rel="stylesheet" href="css/libs.css">
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link type="text/css" rel="stylesheet" href="css/responsive.css">
        <link rel="icon" href="img/favicon.png" sizes="32x32">
    </head>
    <body>
        
        <?php include "assets/header.php"; ?>
        
   <!-- Page Main -->
    <main id="bringer-main">
        <div class="stg-container">
            <!-- Hero Section -->
            <section>
                <div class="bringer-hero-block bringer-hero-type01">
                    <!-- Main Line -->
                    <div class="stg-row stg-bottom-gap-l stg-m-bottom-gap-l">
                        <div class="stg-col-9 stg-tp-col-8 stg-m-col-12">
                            <!-- Title -->
                            <h1 class="bringer-page-title" data-split-appear="fade-up" data-split-unload="fade-up">Unleash Your Creativity And Bring IT to Reality</h1>
                        </div>
                        <div class="stg-col-3 stg-tp-col-4 stg-m-col-12">
                            <!-- Social Proof -->
                            <div class="bringer-hero-social-proof">
                                <div data-stagger-appear="fade-up" data-stagger-delay="100" data-stagger-unload="fade-up">
                                    <img src="img/home/social-proof01.jpg" alt="Client 01">
                                    <img src="img/home/social-proof02.jpg" alt="Client 02">
                                    <img src="img/home/social-proof03.jpg" alt="Client 03">
                                    <a href="testimonials">20K+</a>
                                </div>
                                <p data-appear="fade-up" data-unload="fade-up" data-delay="200">Trusted by 20+ clients</p>
                            </div>
                        </div>
                    </div><!-- .stg-row -->

                    <!-- Masked Media Container -->
                    <div class="bringer-hero-media-wrap bringer-masked-bottom-right bringer-masked-block stg-bottom-gap-l" data-appear="zoom-out" data-unload="zoom-out">
                        <!-- Masked Media -->
                        <div class="bringer-masked-media bringer-masked-media bringer-parallax-media">
                            <img src="img/home/cover5.png" alt="Unleash Your Creativity">

                        </div>
                        <!-- Content -->
                        <div class="bringer-masked-content at-bottom-right">
                            <a href="portfolio-infinite-list" class="bringer-square-button" data-appear="fade-left">
                                <span class="bringer-icon bringer-icon-arrow-down"></span>
                            </a>
                        </div>
                    </div>

                    <!-- Additional Information Line -->
                    <div class="stg-row stg-valign-bottom">
                        <div class="stg-col-3 stg-tp-col-3 stg-m-col-6" data-appear="fade-up" data-delay="200" data-unload="fade-up">
                            <div class="bringer-counter bringer-small-counter" data-delay="3000">
                                <div class="bringer-counter-number"data-suffix="+">100 </div>
                                <div class="bringer-counter-label">Completed Projects</div>
                            </div><!-- .bringer-counter -->
                        </div>
                        <div class="stg-col-3 stg-tp-col-3 stg-m-col-6" data-appear="fade-up" data-delay="300" data-unload="fade-up">
                            <div class="bringer-counter bringer-small-counter" data-delay="3000">
                                <div class="bringer-counter-number" data-suffix="st">1 </div>
                                <div class="bringer-counter-label">Year Aniversary</div>
                            </div><!-- .bringer-counter -->
                        </div>
                        <div class="stg-col-6 stg-tp-col-6 stg-m-col-12 stg-m-top-gap" data-appear="fade-up" data-delay="400" data-unload="fade-up">
                            <p class="bringer-large-text">We help creative agencies, designers, and other creative people showcase their work and connect with clients.</p>
                        </div>
                    </div><!-- .stg-row -->
                </div><!-- .bringer-hero-block -->
            </section>

            <!-- Section: Steps -->
            

            <!-- Section: About Us -->
            <section class="backlight-bottom divider-top">
                
                
                 <div class="stg-row stg-large-gap stg-valign-middle stg-bottom-gap-l stg-tp-bottom-gap-xl stg-tp-column-reverse stg-m-bottom-gap-l stg-m-normal-gap">
                    <div class="stg-col-6" data-appear="fade-right" data-unload="fade-left">
                        <h3>Welcome to Maditrones, where creativity meets expertise.</h3>
                        <p class="bringer-large-text">We help creative agencies, designers, and other creative people to connect with potential clients.</p>
                        <p>We are a team of passionate and experienced designers, developers, and marketers who specialize in helping businesses of all sizes achieve their goals. We believe that creativity is the key to success, and we are committed to helping our clients unleash their full potential.</p>
                        <p>We believe in the power of creativity. We help creative professionals create a strong online presence that showcases their work and tells their story.</p>
                    </div>
                    <div class="stg-col-6 stg-tp-bottom-gap-l stg-m-bottom-gap" data-appear="fade-left" data-unload="fade-right">
                        <div style="margin-left: 30px; overflow: hidden;">
    <img src="img/favicon.png" 
         data-src="img/favicon.png" 
         alt="About Us" 
         width="360" 
         height="450" 
         style="transition: transform 0.3s ease; display: block; margin: 0 auto;"
         onmouseover="this.style.transform='scale(1.1)'" 
         onmouseout="this.style.transform='scale(1)'">
</div>

                    </div>
                </div><!-- .stg-row -->
                
               
                
                
                
            </section>

            <!-- Section: Portfolio Carousel -->
            <section class="is-fullwidth is-stretched">
                <!-- Section Title -->
                <div class="stg-row bringer-section-title is-boxed">
                    <div class="stg-col-8 stg-offset-2">
                        <div class="align-center">
                            <h2 data-appear="fade-up" data-unload="fade-up">Our Work</h2>
                            <p class="bringer-large-text" data-appear="fade-up" data-unload="fade-up" data-delay="100">We are proud of our work, and we are always looking for new challenges. Take a look at some of our recent portfolio:</p>
                        </div>
                    </div>
                </div>
                <!-- Portfolio Carousel -->
                <div class="swiper bringer-carousel stg-bottom-gap-l" data-appear="fade-up" data-unload="fade-up" data-delay="200" data-count="4" data-m-count="1.5">
                    <div class="swiper-wrapper">
                        <!-- Card Item 01 -->
                        <div class="bringer-block bringer-portfolio-card swiper-slide">
                            <div class="bringer-portfolio-card-image">
                                <img class="bringer-lazy" src="img/null.png" data-src="img/portfolio/pothys1.png" alt="" width="1200" height="1200">
                            </div>
                            <div class="bringer-portfolio-card-footer">
                                <div class="bringer-portfolio-card-title">
                                    <span class="bringer-meta">Branding</span>
                                    <h6>Pothys Textiles</h6>
                                </div>
                                <span class="bringer-icon bringer-icon-explore"></span>
                            </div>
                            <a href="portfolio-post01"></a>
                        </div>
                                                
                        <!-- Card Item 02 -->
                        <div class="bringer-block bringer-portfolio-card swiper-slide">
                            <div class="bringer-portfolio-card-image">
                                <img class="bringer-lazy" src="img/null.png" data-src="img/portfolio/odyssia25.png" alt="" width="1200" height="1200">
                            </div>
                            <div class="bringer-portfolio-card-footer">
                                <div class="bringer-portfolio-card-title">
                                    <span class="bringer-meta">Advertising</span>
                                    <h6>Odyssia-TUFF Classics.</h6>
                                </div>
                                <span class="bringer-icon bringer-icon-explore"></span>
                            </div>
                            <a href="portfolio-post02"></a>
                        </div>
                                                
                        <!-- Card Item 03 -->
                        <div class="bringer-block bringer-portfolio-card swiper-slide">
                            <div class="bringer-portfolio-card-image">
                                <img class="bringer-lazy" src="img/null.png" data-src="img/portfolio/odyssia.png" alt="" width="1200" height="1200">
                            </div>
                            <div class="bringer-portfolio-card-footer">
                                <div class="bringer-portfolio-card-title">
                                    <span class="bringer-meta">Marketing</span>
                                    <h6>Odyssia Footwear's</h6>
                                </div>
                                <span class="bringer-icon bringer-icon-explore"></span>
                            </div>
                            <a href="portfolio-post03"></a>
                        </div><!-- .bringer-portfolio-card -->
                                                
                        <!-- Card Item 04 -->
                        <div class="bringer-block bringer-portfolio-card swiper-slide">
                            <div class="bringer-portfolio-card-image">
                                <img class="bringer-lazy" src="img/null.png" data-src="img/portfolio/pothys.png" alt="" width="1200" height="1200">
                            </div>
                            <div class="bringer-portfolio-card-footer">
                                <div class="bringer-portfolio-card-title">
                                    <span class="bringer-meta">Advertising</span>
                                    <h6>Pothys Textiles</h6>
                                </div>
                                <span class="bringer-icon bringer-icon-explore"></span>
                            </div>
                            <a href="portfolio-post04"></a>
                        </div><!-- .bringer-portfolio-card -->
                                                
                        <!-- Card Item 05 -->
                        <div class="bringer-block bringer-portfolio-card swiper-slide">
                            <div class="bringer-portfolio-card-image">
                                <img class="bringer-lazy" src="img/null.png" data-src="img/portfolio/everfast.png" alt="" width="1200" height="1200">
                            </div>
                            <div class="bringer-portfolio-card-footer">
                                <div class="bringer-portfolio-card-title">
                                    <span class="bringer-meta">Marketing</span>
                                    <h6>Everfast logistics</h6>
                                </div>
                                <span class="bringer-icon bringer-icon-explore"></span>
                            </div>
                            <a href="portfolio-post05"></a>
                        </div><!-- .bringer-portfolio-card -->
                                                
                        <!-- Card Item 06 -->
                        <div class="bringer-block bringer-portfolio-card swiper-slide">
                            <div class="bringer-portfolio-card-image">
                                <img class="bringer-lazy" src="img/null.png" data-src="img/portfolio/manapuramjewellers.jpg" alt="" width="1200" height="1200">
                            </div>
                            <div class="bringer-portfolio-card-footer">
                                <div class="bringer-portfolio-card-title">
                                    <span class="bringer-meta">Branding</span>
                                    <h6>Manapuram Jewellers</h6>
                                </div>
                                <span class="bringer-icon bringer-icon-explore"></span>
                            </div>
                            <a href="portfolio-post06"></a>
                        </div><!-- .bringer-portfolio-card -->
                                                
                       
                    <!-- Pagination -->
                    <div class="swiper-pagination bringer-dots"></div>
                </div><!-- .bringer-portfolio-carousel -->
                <div class="align-center" data-appear="fade-up" data-unload="fade-up" data-delay="100" style="margin-top: 80px";>
                    <a href="portfolio-infinite-list" class="bringer-button">Discover Full Portfolio</a>
                </div>
            </section>

            <!-- Section: Our Services -->
            <section class="backlight-top">
                <!-- Section Title -->
                <div class="stg-row bringer-section-title">
                    <div class="stg-col-8 stg-offset-2">
                        <div class="align-center">
                            <h2 data-appear="fade-up" data-unload="fade-up">Our Services</h2>
                            <p class="bringer-large-text" data-appear="fade-up" data-unload="fade-up" data-delay="100">We offer a wide range of creative services to help businesses of all sizes achieve their goals. Our services include:</p>
                        </div>
                    </div>
                </div>
                <!-- Services List -->
                <div class="bringer-detailed-list-wrap" data-appear="fade-up" data-unload="fade-up" data-delay="200">
                    <ul class="bringer-detailed-list">
                        <?php $sql2 = "select * from Services";
                          $result2 = mysqli_query($conn,$sql2);
                          while ($row = mysqli_fetch_row($result2)) 
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
                <div class="align-center stg-top-gap" data-appear="fade-up" data-unload="zoom-out" data-delay="100">
                    <a href="services" class="bringer-button">Explore All Services</a>
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
            <section class="backlight-bottom">
                
                                <!-- Section Title -->
                <div class="stg-row bringer-section-title">
                    <div class="stg-col-8 stg-offset-2">
                        <div class="align-center">
                            <h2 data-appear="fade-up" data-unload="fade-up">What Our Clients Say</h2>
                            <p class="bringer-large-text" data-appear="fade-up" data-unload="fade-up" data-delay="100">Read what our clients have to say about our work.</p>
                        </div>
                    </div>
                </div>
                <!-- Testimonials -->
                <div class="stg-row">
                    <div class="stg-col-6 stg-tp-col-8 stg-tp-offset-2 stg-tp-bottom-gap" data-unload="fade-left">
                        <div class="bringer-parallax-media" data-appear="fade-right" data-threshold="0">
                            <img class="bringer-lazy" src="img/null.png" data-src="img/testdmonial.png" alt="What Our Clients Say" width="850" height="1200">
                        </div>
                    </div>
                    <div class="stg-col-6" data-unload="fade-right">
                        <div class="bringer-grid-1col stg-normal-gap">
                          
                                                        
                            <!-- Card Item -->
                            <?php $sql1= "select * from Testimonials";
                                $result =  mysqli_query($conn,$sql1);
                                while($row = mysqli_fetch_row($result))
                                {
                               
                                 ?>
                       
                            
                            <div class="bringer-block bringer-tetimonials-card" data-appear="fade-left" data-delay="50">
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
                                                        
                       
                            
                            <!-- Learn More -->
                            <div class="align-right">
                                <a href="testimonials" class="bringer-arrow-link">Read all testimonials</a>
                            </div>
                        </div><!-- .bringer-grid -->
                    </div>
                </div>
                 <!-- Partners Section -->
                   
                    <div class="bringer-partners" style="margin-top: 60px;">
                        <span class="bringer-label" data-appear="fade-up" data-unload="fade-up">Trusted by Industry Leaders</span>
                      <div class="bringer-grid-6cols bringer-tp-grid-3cols bringer-m-grid-2cols stg-top-gap-s" data-stagger-appear="fade-up" data-stagger-unload="fade-up" data-stagger-delay="100" data-delay="100">
    <?php 
    $sql3 = "select * from Clients";
    $result3 = mysqli_query($conn, $sql3);
    while ($row = mysqli_fetch_row($result3)) { ?>
        <div class="bringer-block">
            <img src="img/clients/<?php echo $row[2];?>" alt="Partner Logo" style="filter: brightness(1.5) grayscale(100%); transition: filter 0.2s ease-in-out;">
        </div>
    <?php } ?>
    
   
</div>

<script>
    document.querySelectorAll('.bringer-block img').forEach(function(img) {
        img.addEventListener('mouseover', function() {
            this.style.filter = 'none';
        });
        img.addEventListener('mouseout', function() {
            this.style.filter = 'brightness(0.9) grayscale(100%)';
        });
    });
</script>

                    </div>
                </div><!-- .bringer-hero-block -->
            </section>


        
        
          

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
