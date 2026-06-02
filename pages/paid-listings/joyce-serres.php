<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" type="image/x-icon" href="<?php echo $cdn_url; ?>/favicon.ico">  
  <title>Yogalife Yoga Teachers in Luxembourg – Joyce Serres</title>
  <meta name="description" content="Discover Joyce Serres, a versatile Yoga instructor at Yogalife specializing in Hatha, Vinyasa, Yin, and Prenatal Yoga, focused on anatomy-informed, compassionate practice." />
  <?php require_once('partials/html/global-header-includes.php') ?>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <style>
      <?php require_once('partials/css/spark-grid.php') ?>
       <?php require_once('partials/css/global-critical.php') ?>
      <?php require_once('partials/css/global-header.php') ?>
      <?php require_once('partials/css/global-footer.php') ?>
      <?php require_once('partials/css/full-listing.php') ?>
        .hero-section{
            background-image: url(<?php echo $cdn_url ?>/media/teachers/6/cover-image.webp);
            height: 34vw;
            background-size: contain;
            background-repeat: no-repeat;
            background-position-y: 28px;
        }
        .profile-section {
          margin-top:20px;
      }
      .profile-image{
        width: auto;
        height: auto;
      }
  
      .profile-image img {
          width: 100%;
          border-radius: 50%;
          padding: 10px;
          width: 300px;
          height: 300px;
          object-fit: cover;
      }
      @media all and (max-width:  767px){
        .hero-section{
          background-size: contain; 
          height: 45vw;}
          .profile-image img {
            width: 200px;
            height: 200px;
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
          <img src="<?php echo $cdn_url ?>/media/teachers/6/profile-image.webp">
        </div>
      </div>
        <div class="col col-xs-8 col-lg-3 col-2">
        <div class="profile-name">
          <h1>Joyce Serres</h1>
          <p><strong>Hatha and Yin Yoga Teacher</strong></p>
          <p>English, French, Luxemburgish and German</p>
          <p class="icon-p"><span class="icon"><img src="<?php echo $cdn_url?>/media/icons/location-black.svg"></span>Luxembourg, online</p>
          <div class="social-media-container">
              <ul>
                 <!--  <li class="list facebook"><a target="_blank" rel="noopener noreferrer nofollow" href="https://www.facebook.com/share/1EKZMteHGD/"><img src="<?php echo $cdn_url?>/media/icons/facebook-white.svg"></a></li> -->
                  <li class="list instagram"><a target="_blank" rel="noopener noreferrer nofollow" href="https://instagram.com/joy_yoga_lux"><img src="<?php echo $cdn_url?>/media/icons/instagram-white.svg"></a></li>
                  <!-- <li class="list twitter"><a target="_blank" rel="noopener noreferrer nofollow" href="https://x.com/YogalifeWorld"><img src="<?php echo $cdn_url?>/media/icons/twitter-white.svg"></a></li> -->
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

    <!-- LEFT COLUMN -->
    <div class="col col-xs-12 col-lg-6">

      <div class="about container">
        <h2>About Me</h2>
        <p>
        I am fascinated by the body’s endless possibilities for movement, its strength, adaptability, and subtle intelligence. Through my own active engagement in sports and movement practices I have come to appreciate the importance of functional strength immensely, the kind that supports everyday life while allowing fluidity and ease, strength, and softness.
          <br><br>
         Yoga has been part of my life since my first pregnancy, and in the years that followed, I returned to it again and again. But it was during my teacher training in 2021/2022 with “YogaLife” that I truly dove deeper, exploring the 8 limbs of yoga and beginning to embody and live the practice beyond the mat.
          <br><br>
          Since then, yoga has become part of my everyday life, offering me tools to navigate the challenges life throws at us, stay grounded, and meet life fully aware.
        </p>
      </div>

      <div class="about container">
        <h2>Teaching Styles</h2>
        <p>
       Joyce Serres is a versatile yoga instructor and wellness practitioner with a vast repertoire of certifications. Her teaching is grounded in Hatha Yoga, Vinyasa, and Movement Education, balancing structural alignment with fluid motion. With advanced training in Pranayama and Yoga Nidra, she specializes in breathwork and deep conscious relaxation, complemented by the restorative stillness of Yin Yoga.
          <br><br>
          With over 20 years of experience as a primary school teacher, Joyce also works as a kids yoga teacher. Her approach combines education with mindful and playful movement, supporting children’s concentration, emotional balance, and body awareness in a holistic and engaging way.
            <br><br>
          Joyce’s expertise extends into specialized therapeutic care, including Prenatal Yoga and her role as a Menopause Coach, supporting women through critical life transitions and hormonal health. Her approach is further enriched by her background in Traditional Thai Yoga Massage, allowing her to integrate bodywork into her holistic sessions. Committed to technical precision, she is currently completing an advanced 100-hour Anatomy certification to further advance her understanding of the precision of movement and the body’s limits and potential.
          <br><br>Whether guiding students through a dynamic flow or a meditative recovery, Joyce offers an anatomy-informed, compassionate practice dedicated to total physical and mental well-being.
        </p>
      </div>

      <div class="studio-address container">
        <h2>Contact Me</h2>
        <ul>
        <li>
          <img src="<?php echo $cdn_url; ?>/media/icons/mail-blue.svg" alt="Email">
          joy.yoga.lux@gmail.com
        </li>

        <li>
          <img src="<?php echo $cdn_url; ?>/media/icons/phone-blue.svg" alt="Phone">
          +352 661770121
        </li>

        <li class="location-item">
          <img src="<?php echo $cdn_url; ?>/media/icons/location-blue.svg" alt="Location">
          <div class="location-text">
           <span class="address">
              Yoga am Minett (YAM)<br>
              76 Rue de l'Alzette<br>
              L-4140 Esch-sur-Alzette<br>
              Luxembourg
            </span>
          </div>
        </li>
        </ul>
      </div>

    </div>
    <!-- END LEFT COLUMN -->

    <!-- RIGHT COLUMN -->
    <div class="col col-xs-12 col-lg-6">

      <div class="style list-tab container">
        <h2>Teaching Styles & Focus</h2>
        <ul>
          <li>Hatha Yoga</li>
          <li>Kids Yoga</li>
          <li>Vinyasa Yoga</li>
          <li>Yin Yoga</li>
          <li>Yoga Nidra</li>
          <li>Prenatal Yoga</li>
          <li>Meditation and Pranayama</li>
          <li>Hormon Balancing Yoga</li>
        </ul>
      </div>

        <div class="training list-tab container">
          <h2>Training and Certifications</h2>
          <ul>
            <li>Hatha Yoga - Yoga Alliance 200 hours certification with Yogalife </li>
            <li>Vinyasa & Mouvement Education - 200 hours Yoga Teacher Training with Alicia Cheung (Samdhana Yoga)</li>
            <li>Pranayama -  Yoga Alliance 40 hours certification with Yogalife </li>
            <li>Yoga Nidra - Yoga Alliance 60 hours certification with Yogalife </li>
            <li>Yin Yoga / Yoga Nidra - Yoga Alliance 60 hours Teacher Training certification with Alicia Cheung (Samdhana Yoga) </li>
            <li>Prenatal Yoga Teacher Training 85 hours with Ahimsawellness</li>
            <li>Anatomy - Yoga Alliance 100 hours Advanced Teacher Training certification (ongoing)</li>
            <li>Traditional Thai Yoga Massage 60 hours </li>
            <li>200 hours of Yoga Menobalancing Coach</li>
          </ul>
        </div>

        <div class="reviews container">
          <h2>Student Reviews</h2>

          <div class="outer-container">

            <button class="slider-btn prev" aria-label="Previous review">&#10094;</button>

            <div class="testimonial-slider">
              <div class="slider-wrapper">

                <div class="reviews-container">
                  <div class="left">
                   <img class="review-image"
                         src="<?php echo $cdn_url; ?>/media/uploads/blank-profile.webp"
                         alt="Student review">
                  </div>
                  <div class="right">
                    <div class="review-star">★★★★★</div>
                    <div class="review-text">
                      <p>
                     Big thanks to Joyce for this marvelous experience combining relaxingpostures, heartfelt meditation sequences and her wonderful essential oils - all you can ask for to unwind on a Sunday Evening
                      <br><br>- Monique R</p>

                    </div>
                  </div>
                </div>

                <div class="reviews-container">
                  <div class="left">
                    <img class="review-image"
                         src="<?php echo $cdn_url; ?>/media/uploads/blank-profile.webp"
                         alt="Student review">
                  </div>
                  <div class="right">
                    <div class="review-star">★★★★★</div>
                    <div class="review-text">
                        <p>It was my first class with Joyce and I was really happy. I feel so good now, physically as well as mentally. I do have somebody issues and hesitate sometimes to register to a new class, but Joyce helped me find variations in different postures so that I could participate during the whole class. Thank you so much.
                        <br><br>- Manette H.</p>
                    </div>
                  </div>
                </div>

                <div class="reviews-container">
                  <div class="left">
                    <img class="review-image" src="<?php echo $cdn_url; ?>/media/uploads/blank-profile.webp" alt="Student review">
                  </div>
                  <div class="right">
                    <div class="review-star">★★★★★</div>
                    <div class="review-text">
                        <p>Joyce's classes are well structured. I like that she chooses a clear main focus, such as the seasons, and explains it thoughtfully. She integrates light, music, and essential oils, which immediately create a welcoming atmosphere. She offers alternatives and ensures that everyone feels comfortable and can practice without pressure. She speaks with a pleasant voice.
                        <br><br>- Nathalie A.</p>
                    </div>
                  </div>
                </div>
                 <div class="reviews-container">
                  <div class="left">
                    <img class="review-image" src="<?php echo $cdn_url; ?>/media/uploads/blank-profile.webp" alt="Student review">
                  </div>
                  <div class="right">
                    <div class="review-star">★★★★★</div>
                    <div class="review-text">
                        <p>For me, Joyce's classes are a time to disconnect from everyday life. She integrates elements of her own practice as well as inspirations from her travels, which makes each session unique. Her classes are thoughtfully designed, allowing everyone to choose the adaptation that suits them best. Her essential oils, her warmth, and her energy make her class something special, which is why I almost always take part.
                        <br><br>- Carole G.</p>
                    </div>
                  </div>
                </div>
                <div class="reviews-container">
                  <div class="left">
                    <img class="review-image" src="<?php echo $cdn_url; ?>/media/uploads/blank-profile.webp" alt="Student review">
                  </div>
                  <div class="right">
                    <div class="review-star">★★★★★</div>
                    <div class="review-text">
                        <p>A big thank you for your kind and caring teaching. Each class is unique, creative, and offers new discoveries, allowing us to progress without ever getting bored. The spiritual grounding, the intentions set at the beginning of each session, and the final meditation add a real sense of depth.
                        <br><br>- Sonia D.S.</p>
                    </div>
                  </div>
                </div>
                <div class="reviews-container">
                  <div class="left">
                    <img class="review-image" src="<?php echo $cdn_url; ?>/media/uploads/blank-profile.webp" alt="Student review">
                  </div>
                  <div class="right">
                    <div class="review-star">★★★★★</div>
                    <div class="review-text">
                        <p>A highly dedicated yoga teacher, open to suggestions and feedback. She takes into account the needs and wishes of her clients. The little extras make the classes even more appealing: essential oils, guest teachers, and sharing general knowledge about health. She is not intrusive, but empathetic.
                        <br><br>- Nadia F.</p>
                    </div>
                  </div>
                </div>
                <div class="reviews-container">
                  <div class="left">
                    <img class="review-image" src="<?php echo $cdn_url; ?>/media/uploads/blank-profile.webp" alt="Student review">
                  </div>
                  <div class="right">
                    <div class="review-star">★★★★★</div>
                    <div class="review-text">
                        <p>I feel very comfortable in your classes—it starts with the warm welcome. Everyone can come as they are; it's not about performance. It's about feeling your body and accepting yourself as you are. The pace isn't too fast, and the exercises (asanas) can be adapted to your own level of fitness. One simply feels good when one leaves your class.
                        <br><br>- Josiane S.</p>
                    </div>
                  </div>
                </div>
            </div>
              </div>
            <button class="slider-btn next" aria-label="Next review">&#10095;</button>
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
          <div><input type="hidden" name="email-send" value="joy.yoga.lux@gmail.com"></div>
          <div><input type="hidden" name="sent-to" value="Joyce Serres"></div>
          <button type="submit" class="submit-btn">Submit</button>
        </form>
      </div>
    </div>

  <?php require_once('partials/html/global-footer.php'); ?>   
    <script>
       <?php require_once('partials/js/global-critical.php'); ?>   
    </script>

</body>
</html>
