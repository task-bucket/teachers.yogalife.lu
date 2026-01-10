<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/x-icon" href="<?php echo $cdn_url; ?>/favicon.ico">
  <title>Certified Yoga Teachers in Luxembourg – Yogalife Instructors</title>
  <meta name="description" content="Find certified Yogalife yoga teachers in Luxembourg. Explore profiles, training background, teaching style, and specialties. Connect with trusted and experienced yoga instructors near you." />
	<?php require_once('partials/html/global-header-includes.php') ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Yogalife Teachers</title>
	<style>
		<?php require_once('partials/css/spark-grid.php') ?>
		<?php require_once('partials/css/global-critical.php') ?>
		<?php require_once('partials/css/global-header.php') ?>
		.hero-section{
		   /* background-image: url('<?php echo $cdn_url; ?>/media/pages/home/yoga-group.webp');*/
		    background-size: cover;
		    position: relative;
		    background-position: center;
		}
/*		section.section.hero-section:after {
		    content: " ";
		    background: #000;
		    position: absolute;
		    width: 100%;
		    height: 100%;
		    top: 0;
		    opacity: 0.4;
		}*/
		.hero-section .row{
		    width: 90%;
		    
		    justify-content: center;
		    align-items: center;
		}
		.hero-section .row h1{
	      color: var(--brand-blue);
		    font-size: 60px;
		    z-index: 9;
		    text-align: center;
		    display: flex;
		    flex-direction: column;
		    align-items: center;
		    margin-bottom: 10px;
		}
		.hero-section .row h1 img{
			margin:  10px 0;
		}
		.grid{
		    width: calc(33% - 20px);
		    border: 1px solid #eee;
		    margin-right: 30px;
        border-radius: 4px;
        display: inline-grid;
        	margin-bottom:30px;
        position: relative;

		}
		.grid:nth-child(3n)
		 {
		    margin-right: 0;
		}
		@media all and (max-width: 980px) and (min-width: 481px){
		.grid{
		    width: calc(50% - 40px);
		    margin-right: 30px;}
		    .grid:nth-child(2n)
		 		{
		    	margin-right: 0;
				}
				.hero-section .row h1{
					font-size: 40px;
				}
		}
	
		@media all and (max-width: 480px){
		.grid{
		    width: 100%;
		    margin-right: 0}
		    .hero-section .row h1{
					font-size: 34px;
				}
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
		.teacher-image img{
			 width:  100%;
			 height: auto;
		}
		.search-bar {
		  width: 100%;
		  max-width: 600px;
		  padding: 15px;
		  border: 1px solid #ddd;
		  border-radius: 8px;
		  margin-bottom: 20px;
		}
		.pagination {
		  display: flex;
		  justify-content: center;
		  gap: 8px;
		  margin-top: 20px;
		}

		.pagination button {
		  padding: 6px 12px;
		  border: none;
		  background: #ddd;
		  cursor: pointer;
		  border-radius: 4px;
		}

		.pagination button.active {
		  background: #f4b400;
		  color: white;
		  font-weight: bold;
		}
		.search-col{
			text-align: center;
		}
		.search-col span{
	    font-size: 30px;
	    color: var(--brand-yellow);
	    display: block;
	    margin-bottom: 20px;
		}
		.btn-container{
			text-align: center;
			margin: 40px 0;
		}
		.ribbon {
		  font-size: 22px;
		  font-weight: bold;
		  color: #fff;
		}
		.ribbon {
		  --f: .5em; /* control the folded part */
		  position: absolute;
		  left: 0;
		  line-height: 1.8;
		  padding-inline: 1lh;
		  padding-bottom: var(--f);
		  border-image: conic-gradient(#0008 0 0) 51%/var(--f);
		  clip-path: polygon(
		    100% calc(100% - var(--f)),100% 100%,calc(100% - var(--f)) calc(100% - var(--f)),var(--f) calc(100% - var(--f)), 0 100%,0 calc(100% - var(--f)),999px calc(100% - var(--f) - 999px),calc(100% - 999px) calc(100% - var(--f) - 999px));
		  transform: translate(calc((cos(45deg) - 1)*100%), -100%) rotate(-45deg);
		  transform-origin: 100% 100%;
		  background-color: #F07818; /* the main color  */
		}
		<?php require_once('partials/css/global-footer.php') ?>
	</style>
</head>
<body>
	<?php require_once('partials/html/global-header.php'); ?>	
<section class='section hero-section'>
    <div class='row'>
        <h1>Yoga Teachers in Luxembourg
        		<img src="<?php echo $cdn_url; ?>/media/pages/home/fancy-title-img.webp">
        </h1>
    </div>
    <div class="row">
    <div class="col col-xs-12 col-lg-12 search-col">
    	<span>Seach your Yoga teacher</span>
      <input type="text" id="searchInput" placeholder="Search by name, address, course, or language..." class="search-bar"/>
    </div>
  </div>
</section>
<section class='section'>
    <div class='row'>
        <div class='col col-xs-12 col-lg-12'>
          <div id="teacher-list" class="grid-container">
					        <?php
					        $sql = "SELECT * FROM teacher_applications WHERE approved = 1";
					        $sql .= " ORDER BY FIELD(listing_type, 'paid', 'free'), id ASC";
					        $result = mysqli_query($conn, $sql);

					        while ($row = mysqli_fetch_assoc($result)) {
					        	$image = $row['image'] ?: 'default-image.png';
										$imageUrl = "$site_url/public/media/uploads/$image";
					        ?>

					            <div class="grid">

					                <div class="teacher-image">
					                    <img src="<?php echo $imageUrl ?>" alt="<?php echo $row['full_name']; ?>" />
					                </div>

					                <h2><?php echo $row['full_name']; ?></h2>

					                <p class="location">
					                    <img alt="location" src="<?php echo $cdn_url; ?>/media/icons/location-yellow.svg">
					                    <?php echo $row['address']; ?>
					                </p>

					                <p class="classes">
					                    <img alt="Course" src="<?php echo $cdn_url; ?>/media/icons/course-yellow.svg">
					                    <?php echo $row['course']; ?>
					                </p>

					                <p class="email">
					                    <img alt="mail" src="<?php echo $cdn_url; ?>/media/icons/mail-yellow.svg">
					                    <?php echo $row['email']; ?>
					                </p>

					                <p class="language">
					                    <img alt="language" src="<?php echo $cdn_url; ?>/media/icons/language-yellow.svg">
					                    <?php echo $row['language']; ?>
					                </p>

					                <p class="description">
					                    <?php echo nl2br($row['description']); ?>
					                </p>
					                <?php if ($row['listing_type'] == 'paid') { ?>
													    <div class="btn-container">
													        <a class="btn btn-blue full-page-btn" href="<?php echo $site_url . '/' . $row['slug']; ?>">View Full Profile</a>
													    </div>
													<?php } ?>
					            </div>
					       			<?php
					       			}

					        ?>
						</div>
        </div>
    </div>
    <div id="pagination" class="pagination"></div>
</section>

<?php require_once('partials/html/global-footer.php'); ?>	

<script>
document.addEventListener("DOMContentLoaded", function () {
  const container = document.getElementById("teacher-list");
  const searchInput = document.getElementById("searchInput");
  const paginationContainer = document.getElementById("pagination");

  let currentPage = 1;
  const limit = 3;
  let debounceTimer;

  function loadTeachers(search = "", page = 1) {
    fetch(`backend/read-teacher.php?search=${encodeURIComponent(search)}&page=${page}&limit=${limit}`)
      .then((response) => response.json())
      .then((data) => {
        container.innerHTML = "";

        if (data.status === "success" && data.data.length > 0) {
          data.data.forEach((teacher) => {
            const imageUrl = teacher.image
              ? `public/media/uploads/${teacher.image}`
              : `public/media/uploads/default-image.png`;

          const teacherSlug = teacher.full_name
					  .normalize("NFD")                 
					  .replace(/[\u0300-\u036f]/g, "")  
					  .toLowerCase()
					  .replace(/[^a-z0-9]+/g, "-")
					  .replace(/(^-|-$)/g, "");

            const fullPageButton =
              teacher.listing_type === "paid"
                ? `<div class="btn-container"><a href="<?php echo $site_url ?>/${teacherSlug}" class="btn btn-blue full-page-btn">View Full Profile</a></div>`
                : "";

             const ribbon =
              teacher.listing_type === "paid"
                ? `<div class="ribbon">Featured</div>`
                : "";   
            const html = `
              <div class="grid">
              ${ribbon}
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
                ${fullPageButton}
              </div>`;
            
            container.insertAdjacentHTML("beforeend", html);
          });

          renderPagination(data.total_pages, data.current_page, search);
        } else {
          container.innerHTML = "<p>No teachers found.</p>";
          paginationContainer.innerHTML = "";
        }
      })
      .catch((err) => console.error("AJAX Error:", err));
  }

  // Load initial list
  loadTeachers();

  // Debounced search event
  searchInput.addEventListener("keyup", function () {
    clearTimeout(debounceTimer);

    debounceTimer = setTimeout(() => {
      const searchValue = searchInput.value.trim();
      currentPage = 1;
      loadTeachers(searchValue, currentPage);
    }, 300); // wait 300ms after typing stops
  });
});
</script>




	<script>
		//Local Critical
	</script>

</body>
</html>