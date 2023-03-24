<?php

$conn = mysqli_connect('localhost','root','Yes','appoint_db') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'appointment made successfully!';
   }else{
      $message[] = 'appointment failed';
   }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive hospital website create by win coder</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-heartbeat"></i> <strong>med</strong>care </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#services">services</a>
        <a href="#doctors">doctors</a>
        <a href="#appointment">appointment</a>
        <a href="#review">review</a>
        <a href="#blogs">blogs</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="image">
        <img src="image/home-img.svg" alt="">
    </div>

    <div class="content">
        <h3>we take care of your healthy life</h3>
        <p> A person who has good physical health is likely to have bodily functions and processes working at their peak.</p>
        <a href="#appointment" class="btn"> appointment us <span class="fas fa-chevron-right"></span> </a>
    </div>

</section>

<!-- home section ends -->

<!-- icons section starts  -->

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-user-md"></i>
        <h3>150+</h3>
        <p>doctors at work</p>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <h3>1030+</h3>
        <p>satisfied patients</p>
    </div>

    <div class="icons">
        <i class="fas fa-procedures"></i>
        <h3>490+</h3>
        <p>bed facility</p>
    </div>

    <div class="icons">
        <i class="fas fa-hospital"></i>
        <h3>70+</h3>
        <p>available hospitals</p>
    </div>

</section>

<!-- icons section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="https://drive.google.com/uc?id=1B4-zMZEYOjlr2zbwQwZRlW1vLVT_FpLt" alt="">
        </div>

        <div class="content">
            <h3>Health Is Wealth </h3>
            <p>If your health deteriorates, it can overshadow everything going on in your life. From relatively minor health issues like aches and pains, to major health issues like lethargy and indigestion that can threaten your existence, health can really affect happiness and stress levels.

                So we have brought medcare for you which will cure yoLour minor ailments instantly</p>
            <a href="https://www.healthylifestylesliving.com/health/healthy-lifestyle/what-is-a-healthy-lifestyle/#:~:text=The%20actual%20definition%20of%20Healthy%20Living%20is%20the,the%20future.%20So%20healthy%20living%20would%20consist%20of%3A" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-notes-medical"></i>
            <h3>free checkups</h3>
            <p>A free medical check-up is a periodical or routine set of medical tests that you can take in designated health centres or hospitals based on your health insurance plan. It will help you analyse your current health conditions and motivates you to stay healthy in the longer term.</p>
            <a href="https://meddco.com/free-health-checkup-camp" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-ambulance"></i>
            <h3>24/7 ambulance</h3>
            <p>Ambulances are not merely means of transporting an ill person to the hospital. They are mobile hospitals equipped with basic facilities required during a medical emergency. Most hospitals offer ambulance facility on a 24/7 basis. This service is very helpful for bed ridden patients or those who face a medical emergency unexpectedly.</p>
            <a href="https://www.meddcoambulance.com/" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-user-md"></i>
            <h3>expert doctors</h3>
            <p>All Expert Witness Doctors medical expert witnesses are respected, board-certified physicians with extensive private practice experience diagnosing and treating conditions within their respective medical specialty.</p>
            <a href="https://expertdoctor.in/" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-pills"></i>
            <h3>medicines</h3>
            <p>fully tested and fresh medicines are sold in this platform so it is very important for this managment of hospital as well as any of the diseases  medicines is available on this platform and its very helpful for the clients alss it is very less expensive .</p>
            <a href="https://pharmeasy.in/" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-procedures"></i>
            <h3>bed facility</h3>
            <p>bad facilities is very clean in this hospital as well as there is very advance level of beds. in this hospital also takes while chair facilities and much many more facilities are there so its very wonderful .</p>
            <a href="https://www.globalspec.com/learnmore/specialized_industrial_products/medical_equipment_supplies/hospital_beds#:~:text=Hospital%20beds%20are%20commonly%20made%20of%20a%20combination,long%20term%20care%20beds%20and%20psychiatric%20care%20beds." class="btn"> learn more <span class="fas fa-chevron-right" ></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-heartbeat"></i>
            <h3>total care</h3>
            <p>Total Care recognizes doctors that focus on health care instead of sick care. These doctors go above and beyond to enhance the overall health of their patients, providing preventive services and wellness coaching, as well as working with patients with chronic conditions to better meet their care needs. Total Care is coordinated, patient-focused and, in many cases, more affordable healthcare.</p>
            <a href="https://www.totalcareservices.in/services" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<!-- services section ends -->



<!-- doctors section starts  -->

<section class="doctors" id="doctors">

    <h1 class="heading"> our <span>doctors</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="https://drive.google.com/uc?id=1mzOPIEuYcHCyM5_HD-bACKlmjum3nuPt" alt="">
            <h3>Dr.Gitanjali Magare </h3>
            <span>dentist</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
                
            </div>
        </div>

        <div class="box">
            <img src="https://drive.google.com/uc?id=1S9Tm9gZ_20lxxiNC7AE0prLnSQcE-5xN" alt="">
            <h3>Dr.Kamlesh Magare </h3>
            <span>neurologist</span>
            <div class="share">
            <a href="https://www.facebook.com/profile.php?id=100019309929352" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="https://drive.google.com/uc?id=1jNVMroEU0zo-COADPIPKn3vYwzBIfrKo" alt="">
            <h3>Dr.Divya Magare</h3>
            <span>Anaesthesiologist</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="https://drive.google.com/uc?id=1Y2kJHM83OGc7GkRMcvRfeHuvxd7oDS3a" alt="">
            <h3>Dr.Janavi mahajan</h3>
            <span>Acupuncturist</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="https://drive.google.com/uc?id=11IZCzHasqqfvgPB8htopwpsgUoYmA5Yz" alt="">
            <h3>Dr. jayesh Magare</h3>
            <span>Allergy specialist</span>
            <div class="share">
            <a href="https://www.facebook.com/profile.php?id=100089024529029" class="fab fa-facebook-f"></a>
                <a href="https://twitter.com/JayeshMagare68" class="fab fa-twitter"></a>
                <a href="https://www.instagram.com/__.jayesh_magare.__/?igshid=YmMyMTA2M2Y%3D" class="fab fa-instagram"></a>
                <a href="https://www.linkedin.com/in/jayesh-magare-a86444254/" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="https://drive.google.com/uc?id=1b608-Z7pL1IUW6nfJpBWydOkiTKhmoSu" alt="">
            <h3>Dr.Kalpesh Magare </h3>
            <span>Andrologist</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            
            </div>
        </div>
        <div class="box">
            <img src="https://drive.google.com/uc?id=1MfxRr63H6wykvRtEocSfduA1zKibEhjs" alt="">
            <h3>Dr. Priyanshu Mahajan </h3>
            <span>intern doctor</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box">
            <img src="image/doc-8.jpg" alt="">
            <h3>Dr. Sandip Magare </h3>
            <span>MD</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box">
            <img src="https://drive.google.com/uc?id=1M31U-X_VId6MUxbuFXzGRwPWMgSER4fd" alt="">
            <h3>Dr. Ravindra Magare  </h3>
            <span>BHMS</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

    </div>

</section>

<!-- doctors section ends -->

<!-- appointmenting section starts   -->

<section class="appointment" id="appointment">

    <h1 class="heading"> <span>appointment</span> now </h1>    

    <div class="row">

        <div class="image">
            <img src="https://drive.google.com/uc?id=1HcYPzZBXBIiq-p1ex_iK_zPrziJZV_Op" alt="">
        </div>

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <!-- 
            
            <?php
            if(isset($message)) {
                foreach($message as $message) {
                echo'<p class ="message">'.$message.'</p>';
            }
            }
        ?>
        -->
    
      
            <h3>make appointment</h3>
            <input type="text"name="name" placeholder="your name" class="box">
            <input type="number"name="number" placeholder="your number" class="box">
            <input type="email"name="email" placeholder="your email" class="box">
            <input type="date"name="date" class="box">
            <input type="submit" name="submit" value="appointment now" class="btn">
        </form>

    </div>

</section>

<!-- appointmenting section ends -->

<!-- review section starts  -->

<section class="review" id="review">
    
    <h1 class="heading"> client's <span>review</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="https://drive.google.com/uc?id=1ZmnLQQ1GJrVjsH109ZcXrr7n0uwt2nfa" alt="">
            <h3>Rahul Tadvi</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">The services that I receive from (medcare) is excellent. Dr. Jayesh Magare  and the staff are friendly and ensure that I am properly informed about my health and care. I would have no qualms in recommending them to friendly and friends!</p>
        </div>

        <div class="box">
            <img src="https://drive.google.com/uc?id=1FIKouJsn6AQFUTBHz6R7yVNWI7kYU2UX" alt="">
            <h3>Aashiyana Bhaduka </h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">Great experience as a first timer. I barely waited to be helped when I checked in. The staff and Dr. Pranav Chaudhari were all very friendly and helpful. I especially loved how Dr. Pranav Chaudhari really took his time to explain my conditions with me as well as my treatment options. I had a great visit and the doctor’s demeanor has really put me at ease so I highly recommend this clinic!</p>
        </div>

        <div class="box">
            <img src="https://drive.google.com/uc?id=1ugo4dHUMkL8vVCAaWRFZhcb_uBOoMFQV" alt="">
            <h3>Lokesh Singh </h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">Dr.Gitanjali Magare is incredible. Not only has she taken great care of my health, but also she is lovely to speak with at every appointment. It’s rare to find a doctor that combines such personal touches and care for a patient as a person with outstanding quality of medical care. I highly recommend becoming her patient!</p>
        </div>

    </div>

</section>

<!-- review section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <h1 class="heading"> our <span>blogs</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="https://drive.google.com/uc?id=1XHu_NUdjaNcte5SsdS-UeUwth5A_-KYG" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i>1st may, 2021 </a>
                    <a href="#"> <i class="fas fa-user"></i> Dr.Rangan Chatterjee </a>
                </div>
                <h3>BLOG</h3>
                <p>Dr.Rangan Chatterjee investigates and treats many conditions including diabetes, autoimmune disorders, digestive problems, food allergies, skin problems, migraines and irritable bowel syndrome. He works with a wide range of people, from those who have specific health conditions to those who simply wish to optimize their health and performance.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="https://drive.google.com/uc?id=1Gwa5CHDinKyVkClB7oVsObTXJUVbv5sy" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 21 november, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i> Dr. K. P. V. Rao </a>
                </div>
                <h3>BLOG</h3>
                <p>I write articles in a simple way so that you all can understand a particular illness or disease in a better way, be aware of its consequences and get an idea to either prevent it or get treated in a proper way by consulting your family healthcare provider/physician.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="https://drive.google.com/uc?id=1sazOJxH3moTpHUjGegjont0ffCulurcM" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 17 march, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i> Dr. Jay Bhatt  </a>
                </div>
                <h3>BLOG</h3>
                <p>Jay Bhatt, D.O., MPH, MPA is a physician executive, internist, geriatrician, public health innovator, and widely quoted expert on healthcare transformation and improving healthcare outcomes. Dr. Jay Bhatt explains and discusses issues in public health, healthcare technology, and innovation, social determinants of care, community health, and the caregivers of the future.</p>
                <a href="https://www.feedspot.com/infiniterss.php?_src=feed_title&followfeedid=5180813&q=site:https%3A%2F%2Fwww.drjaybhatt.com%2Ffeed%2F" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="https://drive.google.com/uc?id=19pdoECKMKEBkiAPHivkclpRw_6C7Xsmw" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 4 june, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i>  TheTwinDoctors </a>
                </div>
                <h3>BLOG</h3>
                <p>Twindoctors is the creation of twin Doctors Jamil and Idries Abdur-Rahman. This is an interactive viewer centered social and medical information platform that serves to inform, enlighten, motivate, educate and entertain, all while stimulating a discussion and establishing common ground all in the name of a healthier planet..</p>
                <a href="https://www.feedspot.com/infiniterss.php?_src=feed_title&followfeedid=4882179&q=site:http%3A%2F%2Fthetwindoctors.com%2Ffeed%2F" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="https://drive.google.com/uc?id=18QkX90zcUH3rzr14gFo33QkFaVWrxK32" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 27 feb, 2019 </a>
                    <a href="#"> <i class="fas fa-user"></i>  Doctor Rachel</a>
                </div>
                <h3>BLOG</h3>
                <p>Doctor Rachel is an award winning family practice doctor who has been on the forefront of using integrative medicine principles to help her patients heal from the inside out. She's a physician, author, speaker, and teacher in the US and abroad.</p>
                <a href="https://www.feedspot.com/infiniterss.php?_src=feed_title&followfeedid=4882779&q=site:https%3A%2F%2Fwww.doctorrachel.com%2Fblog%3Fformat%3DRSS" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="https://drive.google.com/uc?id=1HMHjLWJs0d7-RxZV8sAnAH9_fnTNOyg0" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 7 aug,2020 </a>
                    <a href="#"> <i class="fas fa-user"></i> Doctor Mike  </a>
                </div>
                <h3>BLOG</h3>
                <p>Dr. Mikhail 'Mike' Varshavski is a Board Certified Family Medicine Doctor living in NYC. His goal is to make the field of medicine relatable, understandable, and fun!</p>
                <a href="https://www.feedspot.com/infiniterss.php?_src=feed_title&followfeedid=4882976&q=site:https%3A%2F%2Fwww.youtube.com%2Ffeeds%2Fvideos.xml%3Fchannel_id%3DUC0QHWhjbe5fGJEPz3sVb6nw" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>

    </div>

</section>

<!-- blogs section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#home"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="#about"> <i class="fas fa-chevron-right"></i> about </a>
            <a href="#services"> <i class="fas fa-chevron-right"></i> services </a>
            <a href="#doctors"> <i class="fas fa-chevron-right"></i> doctors </a>
            <a href="#appointment"> <i class="fas fa-chevron-right"></i> appointment </a>
            <a href="#review"> <i class="fas fa-chevron-right"></i> review </a>
            <a href="#blogs"> <i class="fas fa-chevron-right"></i> blogs </a>
        </div>

        <div class="box">
            <h3>our services</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> dental care </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> message therapy </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> cardioloty </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> diagnosis </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> ambulance service </a>
        </div>

        <div class="box">
            <h3>appointment info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +7709006931 </a>
            <a href="#"> <i class="fas fa-phone"></i> +7620043970 </a>
            <a href="https://mail.google.com/mail/u/0/#inboxc"> <i class="fas fa-envelope"></i> jayeshmagare1956@gmail.com </a>
            <a href="https://mail.google.com/mail/u/0/#inbox"> <i class="fas fa-envelope"></i> harshjain76200@gmail.com </a>
            <a href="https://www.google.co.in/maps/place/Jalgaon,+Maharashtra/@20.9900808,75.5404037,13z/data=!4m5!3m4!1s0x3bd90fa4a1eab90f:0x37f67bd21bff0a3c!8m2!3d21.0076578!4d75.5626039!5m1!1e4"> <i class="fas fa-map-marker-alt"></i> Jalgaon, India </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-faceappointment-f"></i> faceappointment </a>
            <a href="https://twitter.com/JayeshMagare68"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="https://www.instagram.com/__.jayesh_magare.__/?igshid=YmMyMTA2M2Y%3D"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="https://www.linkedin.com/in/jayesh-magare-a86444254/"> <i class="fab fa-linkedin"></i> linkedin </a>
            
        </div>

    </div>

    <div class="credit"> created by <span> Jayesh Magare </span> | all rights reserved </div>

</section>

<!-- footer section ends -->


<!-- js file link  -->
<script src="js/script.js"></script>

</body>
</html>

