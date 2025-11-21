<?php

$sql = "SELECT * FROM teacher_applications WHERE slug = '$slug' AND approved = 1 LIMIT 1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 0) {
    die("Teacher not found");
}

$row = mysqli_fetch_assoc($result);
$image = htmlspecialchars(trim($row['image'] ?: 'default-image.png'), ENT_QUOTES, 'UTF-8');
$fullName = htmlspecialchars(trim($row['full_name']), ENT_QUOTES, 'UTF-8');
$description = htmlspecialchars(trim($row['description']), ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars(trim($row['email']), ENT_QUOTES, 'UTF-8');
$course = htmlspecialchars(trim($row['course']), ENT_QUOTES, 'UTF-8');
$language = htmlspecialchars(trim($row['language']), ENT_QUOTES, 'UTF-8');
$location = htmlspecialchars(trim($row['location']), ENT_QUOTES, 'UTF-8');
$about = htmlspecialchars(trim($row['about']), ENT_QUOTES, 'UTF-8');
$teaching_styles_long = htmlspecialchars(trim($row['teaching_styles_long']), ENT_QUOTES, 'UTF-8');
$studio_address = htmlspecialchars(trim($row['studio_address']), ENT_QUOTES, 'UTF-8');
$facebook = htmlspecialchars(trim($row['facebook']), ENT_QUOTES, 'UTF-8');
$instagram = htmlspecialchars(trim($row['instagram']), ENT_QUOTES, 'UTF-8');
$linkedin = htmlspecialchars(trim($row['linkedin']), ENT_QUOTES, 'UTF-8');
$currentUrl = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];


$imageUrl = "$cdn_url/media/uploads/$image";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" type="image/x-icon" href="<?php echo $cdn_url; ?>/favicon.ico">  
  <title>Yogalife Yoga Teachers in Luxembourg – Certified Instructor Directory</title>
  <meta name="description" content="Browse the complete directory of certified Yogalife yoga teachers in Luxembourg. View profiles, experience, specialties, training background, and teaching styles. Connect with trusted, experienced yoga instructors near you." />
  <?php require_once('partials/html/global-header-includes.php') ?>
  <meta charset="UTF-8">
  <title><?= htmlspecialchars($teacher['full_name']) ?> - Yogalife</title>
  <link rel="stylesheet" href="style.css">
  <style>
      <?php require_once('partials/css/spark-grid.php') ?>
       <?php require_once('partials/css/global-critical.php') ?>
      <?php require_once('partials/css/global-header.php') ?>
        <?php require_once('partials/css/global-footer.php') ?>
        .hero-section{
            background-image: url('<?php echo $cdn_url ?>/media/pages/teacher/student-class.webp');
            height: 60vh;
            background-position-y: center;
        }
        .profile-image{
           margin-top: -100px;
            padding: 10px;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: #fff;
        }

        .profile-image img{
          width: 100%;
          border-radius: 50%; 
          padding: 10px;
        }
        .profile-name h1{
            margin-bottom: 0;
        }
        .profile-section .col{
          position: relative;
          display: flex;
          align-items: center;
          margin-top: -30px;
        }
        .profile-section .col-4{
            flex-direction: column;
            justify-content: center;
        }
        .container{
            margin-bottom: 50px;
        }

        .list-tab li{
          background: #eee;
          width: fit-content;
          justify-content: center;
          padding: 10px;
          margin-right: 10px;
          border-radius: 10px;
          overflow: hidden;
          font-size: 18px;
          list-style: none;
        }
        .style.list-tab li{
            display: inline-block;
            width: 31%;
            text-align: center;
        }
        .training li{
          margin-bottom: 20px;
        }
        .style{
          margin-bottom: 50px;
        }
        .review-image{
          width: 50px;
          height: 50px;
          border-radius: 50%;
          object-fit: cover;
        }
        .reviews-container{
          display: inline-flex;
          align-items: center;
          padding: 10px;
        }
        .reviews-container .left{
          margin-right: 10px;
        }

        .social-media-container ul{
            list-style: none;
            display: flex;
            margin-top: 10px;
        }
        .social-media-container li{
            margin-right: 5px;
        }
        .social-media-container ul li a{
            display: flex;
            background: #000;
            padding: 10px;
            border-radius: 50%;
            WIDTH: 40px;
            height: 40px;
            align-items: center;
            justify-content: center;
        }
        .social-media-container ul li img{
            width: 20px;
        }
        .icon-p{
            display: flex;
        }
        .icon-p img{
            margin-right: 5px;
        }
        .open-btn {
          background: #007bff;
          color: #fff;
          padding: 12px 20px;
          border: none;
          cursor: pointer;
          border-radius: 6px;
          font-size: 16px;
        }

        /* Overlay */
        .overlay {
          position: fixed;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background: rgba(0,0,0,0.6);
          display: none;
          align-items: center;
          justify-content: center;
          z-index: 9999;
        }

        /* Popup */
        .popup {
          background: #fff;
          width: 90%;
          max-width: 450px;
          padding: 25px;
          border-radius: 10px;
          position: relative;
          transform: scale(0.8);
          opacity: 0;
          transition: 0.2s ease-in-out;
        }

        /* Popup Show Animation */
        .overlay.active .popup {
          transform: scale(1);
          opacity: 1;
        }

        /* Close Button */
        .close-btn {
          position: absolute;
          right: 15px;
          top: 10px;
          font-size: 28px;
          cursor: pointer;
        }

        /* Form styling */
        .form-group {
          margin-bottom: 15px;
        }

        .form-group label {
          font-weight: 600;
          display: block;
          margin-bottom: 6px;
        }

        .form-group input,
        .form-group textarea {
          width: 100%;
          padding: 10px;
          border-radius: 6px;
          border: 1px solid #ccc;
          font-size: 15px;
        }

        textarea {
          height: 120px;
        }

        .submit-btn {
          background: var(--brand-yellow);
          color: white;
          padding: 12px 20px;
          border: none;
          border-radius: 6px;
          cursor: pointer;
          width: 100%;
          font-size: 16px;
        }
        .studio-address p{
          display: flex;
          align-items: flex-start;
        }
        .studio-address p img{
          margin-right: 10px;
        }
        .outer-container {
          display: flex;
          align-items: center;
        }

        .testimonial-slider {
          width: 100%;
          overflow: hidden;
        }

        .slider-wrapper {
          display: flex;
          transition: transform 0.5s ease;
        }

        .reviews-container {
          min-width: 100%;
          box-sizing: border-box;
        }
        .slider-btn{
          background: #000;
          color: #fff;
          border: none;
          padding: 5px 10px;
          cursor: pointer;
          z-index: 10;
        }
         @media all and (max-width: 980px){
            .profile-section .col{
                justify-content: center;
            }
            .profile-image{
                width: 200px;
                height: 200px;
            }
            .profile-section .col{
                margin: 0;
            }
            .hero-section{
                height: 30vh;
            }
            .profile-section .col.empty-col{
                display: none;
            }
            .profile-name h1{
                font-size: 30px;
            }
             .profile-section button{
              font-size: 16px;
              margin-top: 10px;
            }
        }
        

        @media all and (max-width: 480px){
            .btn-call{
                font-size: 12px;
            }
             .profile-name h1{
                font-size: 24px;
            }
            .list-tab li,.style.list-tab li{
              display: block;
              margin-bottom: 10px;
              width: 100%;
            }
        }
        @media all and (max-width: 767px){
          .profile-section .col{
            width: 100%;
            justify-content: flex-start;
            align-items: flex-start;
          }
          .reviews-container{
            width: 100%;
            margin-bottom: 10px;
          }
          .reviews-container{
            flex-direction: column;
          }
          .review-image{
            width: 100px;
            height: 100px;
          }
        }
  </style>
</head>
<body>
   <?php require_once('partials/html/global-header.php'); ?>
   <section class="hero-section">
       
   </section>
  <section class="section profile-section">
    <div class="row">
      <div class="col col-xs-12 col-lg-3 col-1">
        <div class="profile-image">
          <img src="<?php echo $imageUrl ?>">
        </div>
      </div>
        <div class="col col-xs-8 col-lg-3 col-2">
        <div class="profile-name">
          <h1><?php echo $fullName; ?></h1>
          <p><strong>Teacher Training Expert</strong></p>
          <p>Language: <?php echo $language; ?></p>
          <p class="icon-p"><span class="icon"><img src="<?php echo $cdn_url?>/media/icons/location-black.svg"></span>Brussels</p>
          <div class="social-media-container">
              <ul>
                  <li class="list facebook"><a target="_blank" rel="noopener noreferrer nofollow" href="https://www.facebook.com/groups/189149714567631?_rdr"><img src="<?php echo $cdn_url?>/media/icons/facebook-white.svg"></a></li>
                  <li class="list instagram"><a target="_blank" rel="noopener noreferrer nofollow" href="https://www.instagram.com/yogalifeinternational"><img src="<?php echo $cdn_url?>/media/icons/instagram-white.svg"></a></li>
                  <li class="list twitter"><a target="_blank" rel="noopener noreferrer nofollow" href="https://x.com/YogalifeWorld"><img src="<?php echo $cdn_url?>/media/icons/twitter-white.svg"></a></li>
              </ul>
          </div>
        </div>
      </div>
       <div class="col col-xs-6 col-lg-3 col-3 empty-col">

      </div>
       <div class="col col-xs-4 col-lg-3 col-4">
          <button id="openPopupBtn" class="btn btn-blue btn-call">Send Message</a>
      </div>
    </div>
  </section>
  <section class="section profile-description">
    <div class="row">
      <div class="col col-xs-12 col-lg-6">
        <div class="about container">
          <h2>About Me</h2>
          <p>To say that Manoj was driven and guided by the universe to teach yoga would not be an overstatement. However, that does not mean he took the shortcut on the path towards yoga teaching. The seed of yoga was planted very early on by being born into a yoga family, gaining insight into the scriptures, interacting with great teachers and renowned writers.</p>

        </div>
        <div class="about container">
          <h2>Teaching Styles</h2>
          <p>Finally landing in his true roots as a Yogateacher, Manoj now teaches as an expert in human energy and chakras. Manoj’s profound understanding of Yoga Nidra, as a student of Bihar School of Yoga, created a one of a kind Nidra training in Belgium. Manoj is one of those rare teachers who can implement knowledge of ancient scriptures into practical everyday life. His natural ability to see people and connect with students through his honesty and sense of humour, makes him everyone’s favourite teacher and mentor.</p>
          
        </div>
        <div class="studio-address container">
            <h2>Contact Me</h2>
            <p><img src="<?php echo $cdn_url?>/media/icons/mail-blue.svg">manoj@yogalife.org</p>
            <p><img src="<?php echo $cdn_url?>/media/icons/phone-blue.svg">+32 493 811 813</p>
            <p><img src="<?php echo $cdn_url?>/media/icons/location-blue.svg">Yogalife Studio<br>
            Rue du Houblon:Hopstraat 40<br>
            1000 Bruxelles/Brussel</p>
        </div>
      </div>
      <div class="col col-xs-12 col-lg-6">
        <div class="style list-tab container">
           <h2>Teaching Styles & Focus</h2>
           <ul>
             <li>Yoga TTC</li>
             <li>Yoga Nidra</li>
             <li>Hatha Yoga</li>
           </ul>         
        </div>
        <div class="training list-tab container">
           <h2>Training and Certifications</h2>
           <ul>
             <li>Yoga Alliance Assitance</li>
           </ul>         
        </div>
        <div class="reviews container">
          <h2>Student Reviews</h2>
          <div class="outer-container">
            
            <button class="slider-btn prev">&#10094;</button>

            <div class="testimonial-slider">
              <div class="slider-wrapper">

                <!-- Slide 1 -->
                <div class="reviews-container">
                  <div class="left">
                    <img class="review-image" src="<?php echo $cdn_url?>/media/uploads/portrait-white.webp" />
                  </div>
                  <div class="right">
                    <div class="review-star">★★★★★</div>
                    <div class="review-text">I learned a lot, the teachers are really inspiring and they really encourage you to take up teaching yoga yourself. I think back to Yogalife with a lot of warmth and gratefulness.</div>
                  </div>
                </div>

                <!-- Slide 2 -->
                <div class="reviews-container">
                  <div class="left">
                    <img class="review-image" src="<?php echo $cdn_url?>/media/uploads/testimonial-image-2.webp">
                  </div>
                  <div class="right">
                    <div class="review-star">★★★★★</div>
                    <div class="review-text">Yogalife Belgium is a must-visit for anyone in Brussels! The team is fantastic—welcoming, passionate, and incredibly skilled. A class with Manoj is an absolute highlight; his calming presence and expert guidance make every session special.</div>
                  </div>
                </div>

                <!-- Slide 3 -->
                <div class="reviews-container">
                  <div class="left">
                     <img class="review-image" src="<?php echo $cdn_url?>/media/uploads/testimonial-image-3.jpg">
                  </div>
                  <div class="right">
                    <div class="review-star">★★★★★</div>
                    <div class="review-text">Going through Yogalife Teacher Training Course has been a life changing experience. Coordinated by well-organized, professional and passionate group of people.</div>
                  </div>
                </div>

              </div>
            </div>

            <button class="slider-btn next">&#10095;</button>

          </div>
        </div>


      </div>
    </div>
  </section>

    <div id="popupOverlay" class="overlay">
      <div class="popup">
        <span id="closePopupBtn" class="close-btn">&times;</span>

        <h2>Contact Form</h2>

        <form id="popupForm"  method="POST" action="send-mail">
          <div class="form-group">
            <label>Name</label>
            <input type="text" name='name' required>
          </div>

          <div class="form-group">
            <label>Email</label>
            <input type="email" name='email' required>
          </div>
          <div class="form-group">
            <label>Phone Number</label>
            <input type="phone" name='phone' required>
          </div>
          <div class="form-group">
            <label>Message</label>
            <textarea name='message' required></textarea>
          </div>
          <div><input type="hidden" name="email-send" value="hemant.gaba21@gmail.com"></div>
          <div><input type="hidden" name="url" value="<?php echo $currentUrl ?>"></div>
          <button type="submit" class="submit-btn">Submit</button>
        </form>
      </div>
    </div>

  <?php require_once('partials/html/global-footer.php'); ?>   
    <script>
        //Local Critical
    </script>
   <script>
    document.getElementById("openPopupBtn").addEventListener("click", () => {
      document.getElementById("popupOverlay").style.display = "flex";
      setTimeout(() => {
        document.getElementById("popupOverlay").classList.add("active");
      }, 10);
    });

    document.getElementById("closePopupBtn").addEventListener("click", () => {
      document.getElementById("popupOverlay").classList.remove("active");
      setTimeout(() => {
        document.getElementById("popupOverlay").style.display = "none";
      }, 200);
    });

    // Close popup when clicking outside the box
    document.getElementById("popupOverlay").addEventListener("click", (e) => {
      if (e.target === document.getElementById("popupOverlay")) {
        document.getElementById("closePopupBtn").click();
      }
    });
    </script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const sliderWrapper = document.querySelector(".slider-wrapper");
        const slides = document.querySelectorAll(".reviews-container");
        const prev = document.querySelector(".slider-btn.prev");
        const next = document.querySelector(".slider-btn.next");

        let index = 0;

        function updateSlider() {
          sliderWrapper.style.transform = `translateX(-${index * 100}%)`;
        }

        next.addEventListener("click", () => {
          index = (index + 1) % slides.length;
          updateSlider();
        });

        prev.addEventListener("click", () => {
          index = (index - 1 + slides.length) % slides.length;
          updateSlider();
        });
      });


    </script>
</body>
</html>
