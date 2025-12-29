<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/x-icon" href="<?php echo $cdn_url; ?>/favicon.ico">
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
		    margin-bottom:30px;
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
		  max-width: 400px;
		  padding: 10px;
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
			font-size: 20px;
			color: var(--brand-yellow);
		}
		.full-page-btn{
			margin-top: 20px;
			display: block;
		}
		#listing_results .col-lg-4:nth-child(3n) {
    	margin-right: 0;
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
<section class="section">
  <div class="row">
    <div class="col col-xs-12 col-lg-12 search-col">
    	<span>Seach your yogalife teacher</span>
      <input type="text" id="searchInput" placeholder="Search by name, address, course, or language..." class="search-bar"/>
    </div>
  </div>
</section>
<section class='section'>
    <div class='row'>
        <div class='col col-xs-12 col-lg-12'>
            <div id="teacher-list" class='grid-container'>
               
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
    const cdnUrl = <?php echo json_encode($cdn_url); ?>;

    function loadTeachers(search = "") {
        // Removed page and limit parameters
        const url = `backend/read-teacher.php?search=${encodeURIComponent(search)}`;
        
        fetch(url)
            .then(response => response.json())
            .then(data => {
                if (!container) return;
                container.innerHTML = "";

                if (data.status === "success" && data.data.length > 0) {
                    data.data.forEach(teacher => {
                        const imageUrl = teacher.image
                            ? `public/media/uploads/${teacher.image}`
                            : `public/media/uploads/default-image.png`;

                        const teacherSlug = teacher.full_name
                            .toLowerCase()
                            .replace(/[^a-z0-9]+/g, "-")
                            .replace(/(^-|-$)/g, "");

                        const fullPageButton = teacher.listing_type === "paid"
                            ? `<a href="pages/teacher.php?slug=${teacherSlug}" class="btn btn-blue full-page-btn">View Full Profile</a>`
                            : "";

                        const html = `
                            <div class="grid">
                                <div class="teacher-image">
                                    <img src="${imageUrl}" alt="${teacher.full_name}" />
                                </div>
                                <h2>${teacher.full_name}</h2>
                                <p class='location'>
                                    <img alt="location" src="${cdnUrl}/media/icons/location-yellow.svg">
                                    ${teacher.address}
                                </p>
                                <p class='classes'>
                                    <img alt="Course" src="${cdnUrl}/media/icons/course-yellow.svg">
                                    ${teacher.course}
                                </p>
                                <p class='email'>
                                    <img alt="mail" src="${cdnUrl}/media/icons/mail-yellow.svg">
                                    ${teacher.email}
                                </p>
                                <p class='language'>
                                    <img alt="language" src="${cdnUrl}/media/icons/language-yellow.svg">
                                    ${teacher.language}
                                </p>
                                <p class='description'>${teacher.description}</p>
                                ${fullPageButton}
                            </div>`;
                        
                        container.insertAdjacentHTML("beforeend", html);
                    });
                } else {
                    container.innerHTML = "<p>No teachers found.</p>";
                }
            })
            .catch(err => console.error("AJAX Error:", err));
    }

    // Initial load
    loadTeachers();

    // Search event
    if(searchInput) {
        searchInput.addEventListener("keyup", function () {
            loadTeachers(this.value.trim());
        });
    }
});
</script>



	<script>
		//Local Critical
	</script>

</body>
</html>