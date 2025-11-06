<!DOCTYPE html>
<html>
<head>
	<?php require_once('partials/html/global-header-includes.php') ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Yogalife Teacehers</title>
	<style>
		<?php require_once('partials/css/spark-grid.php') ?>
		<?php require_once('partials/css/global-critical.php') ?>
		<?php require_once('partials/css/global-header.php') ?>
		.hero-section{
		    background-image: url('<?php echo $cdn_url; ?>/media/pages/home/yoga-group.webp');
		    height: 250px;
		    background-size: cover;
		    position: relative;
		    background-position: center;
		}
		section.section.hero-section:after {
		    content: " ";
		    background: #000;
		    position: absolute;
		    width: 100%;
		    height: 100%;
		    top: 0;
		    opacity: 0.4;
		}
		.hero-section .row{
		    width: 100%;
		    height: 100%;
		    justify-content: center;
		    align-items: center;
		}
		.hero-section .row h1{
		    color: #fff;
		    font-size: 80px;
		    z-index: 9;
		}
		.grid-container{
		    display: flex;
		    justify-content: flex-start;
		}
		.grid{
		    width: calc(33% - 40px);
		    border: 1px solid #eee;
		    margin-right: 20px;
		}
		.grid h2{
		    padding: 20px 20px 0 20px;
		}
		.grid p{
		    display: flex;
		    padding: 0 20px;
		}
		.grid p > img{
		  margin-right: 10px;
		}
		<?php require_once('partials/css/global-footer.php') ?>
	</style>
</head>
<body>
	<?php require_once('partials/html/global-header.php'); ?>	
<section class='section hero-section'>
    <div class='row'>
        <h1>Yoga Teachers</h1>
    </div>
</section>
<section class='section'>
    <div class='row'>
        <div class='col col-xs-12 col-lg-12'>
            <div id="teacher-list" class='grid-container'>
               
            </div>
        </div>
    </div>
</section>
<?php require_once('partials/html/global-footer.php'); ?>	
<script>
document.addEventListener("DOMContentLoaded", function () {
  fetch("backend/read-teacher.php")
    .then((response) => response.json())
    .then((data) => {
      if (data.status === "success") {
        const container = document.getElementById("teacher-list");
        container.innerHTML = "";
        data.data.forEach((teacher) => {
          const imageUrl = teacher.image
            ? `public/media/uploads/${teacher.image}`
            : `public/media/uploads/default-image.png`;


          const html = `
            <div class="grid">
              <div class="teacher-image">
                <img src="${imageUrl}" alt="${teacher.full_name}" />
              </div>
              <h2>${teacher.full_name}</h2>
              <p class='location'>
                <img alt="location" src="<?php echo $cdn_url; ?>/media/icons/location-yellow.svg">
                ${teacher.address}
              </p>
              <p class='classes'>
                <img alt="Course" src="<?php echo $cdn_url; ?>/media/icons/course-yellow.svg">
                ${teacher.course}
              </p>
              <p class='email'>
                <img alt="mail" src="<?php echo $cdn_url; ?>/media/icons/mail-yellow.svg">
                ${teacher.email}
              </p>
              <p class='language'>
                <img alt="language" src="<?php echo $cdn_url; ?>/media/icons/language-yellow.svg">
                ${teacher.language}
              </p>
              <p class='description'>${teacher.description}</p>
            </div>`;
          container.insertAdjacentHTML("beforeend", html);
        });
      } else {
        console.error("Error loading teachers:", data.message);
      }
    })
    .catch((err) => console.error("AJAX Error:", err));
});
</script>
	<script>
		//Local Critical
	</script>

</body>
</html>