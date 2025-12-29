function notify(text,type) {

    const DISPLAY_TIME = 3000;
    const TRANSITION_TIME = 500;

    let $notification = $('<div>')
	        .addClass('notification-item')
	        .text(text);

    if(type == 'success'){
    	$notification.addClass('notification-success');
	}
	else if(type == 'danger'){
		$notification.addClass('notification-danger');
	}
	else{
		
	}
    

    $('#notification-area').append($notification);

    setTimeout(() => {
        $notification.addClass('show');
    }, 50);

    setTimeout(() => {
        $notification.removeClass('show');
    }, DISPLAY_TIME + 50);

    setTimeout(() => {
        $notification.remove();
    }, DISPLAY_TIME + TRANSITION_TIME + 100); 
}


   
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


   
