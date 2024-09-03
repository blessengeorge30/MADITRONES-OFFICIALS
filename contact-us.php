           
           <?php
    include "import/db_connection.php";
  
    
    if(isset($_POST["submit"]))
    {
     $user1 = $_POST["user_name"];
     $user2 = $_POST["user_email"];
     $user3 = $_POST["user_message"];

  
    date_default_timezone_set('Asia/Kolkata');
    $currentTime = date('d-m-Y H:i:s');
        $sql = "INSERT INTO enquires VALUES (NULL, '$user1', '$user2', '$user3', '$currentTime')";
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
           
            <!-- Section: CTA Form -->
            <section class="backlight-top is-fullwidth">
                <div class="stg-row stg-valign-middle stg-cta-with-image stg-tp-column-reverse">
                    <div class="stg-col-5" data-unload="fade-left">
                        <div class="bringer-offset-image" data-bg-src="img/cta/contact-section-bg.jpg" data-appear="fade-up" data-threshold="0.25"></div>
                        <form action="" method="post" class="bringer-contact-form bringer-block" data-fill-error="Please, fill out the contact form." data-appear="fade-right" data-threshold="0.25">
                            <div class="bringer-form-content">
                                <!-- Field: Name -->
                                <label for="name">Your Name</label>
                                <input type="text" id="name" name="user_name" placeholder="Your Name" required>
                                <!-- Field: Email -->
                                <label for="email">Your Email</label>
                                <input type="email" id="email" name="user_email" placeholder="email@example.com" required>    
                                <!-- Field: Message -->
                                <label for="message">Your Message</label>
                                <textarea id="message" name="user_message" placeholder="Your Message" required></textarea>
                                <!-- Form Button -->
                                <button  name="submit" type="submit" value="Send Message">Get a FREE Quote</button>
                                <div class="bringer-contact-form__response"></div>
                            </div>
                            <span class="bringer-form-spinner"></span>
                        </form>
                    </div>
                  
                </div>
            </section>