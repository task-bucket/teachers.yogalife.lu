p,a,button,label,input,select,textarea,li{
  font-size: 16px;
}
@media all and (min-width: 768px){
  p,a,button,label,input,select,textarea,li{
    font-size: 18px;}
}
  @media all and (max-width: 980px){
  .row{
    width: 90%;}
  }
  li{
    list-style-type: none;
    margin: 10px 0;
    display: flex;
    gap: 10px;
  }
  .section.profile-description{
    padding-top: 0;
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
  margin-bottom: 12px;
}
.style{
  margin-bottom: 50px;
}
.style li{
  margin-bottom: 12px;
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

.location-item {
  display: flex;
  align-items: flex-start;
  gap: 10px;
}

.location-text {
  line-height: 1.5;
}
.review-star {
    font-size: 24px;
    margin-bottom: 8px;
}