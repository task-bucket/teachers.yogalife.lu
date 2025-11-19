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
        <?php require_once('partials/css/global-footer.php') ?>

        .free-container,.paid-container{
            display: none;
            margin-top: 20px;
        }
        .free-container.show,.paid-container.show{
            display: block;
        }
         .radio-group p{
            font-size: 24px;
         }
        .radio-group label{
            display: block;
            margin-bottom: 5px;
            font-size: 24px;
        }
    </style>
    <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>

</head>
<body>
    <?php require_once('partials/html/global-header.php'); ?>   
<section class='section hero-section'>
    <div class='row main-row'>
        <div class='col col-xs-12'>
            <h1>Please fill the form</h1>
             
                    
       <div class="radio-group">
        <p>Which Listing Type do you need?</p>
          <label>
            <input type="radio" name="listing" value="free">
           Free
          </label>

          <label>
            <input type="radio" name="listing" value="paid">
            Paid
          </label>
        </div>
    
        <div class='free-container'>
            <form class='form' action='create-teacher' method='post' enctype="multipart/form-data">
            <input type='hidden' name='form-name' value='Teacher Form'>
                <div class='row form-row'>
                    <div class='col col-xs-12'>
                        <div class='form-group'>
                            <label for='teacher-fname' class='required-mark'>Full Name</label>
                            <input id='teacher-fname' name='full-name' type='text' placeholder='Your Full name' required>
                        </div>
                    </div>
                </div>

                <div class='row form-row'>
                    <div class='col col-xs-12'>
                        <div class='form-group'>
                            <label for='teacher-address' class='required-mark'>Address</label>
                            <input id='teacher-address' name='address' type='text' placeholder='Your address' required>
                        </div>
                    </div>
                </div>
                <div class='row form-row'>
                    <div class='col col-xs-12'>
                        <div class='form-group'>
                            <label for='teacher-course' class='required-mark'>Course</label>
                            <input id='teacher-course' name='course' type='text' placeholder='Your Course' required>
                        </div>
                    </div>
                </div>
                <div class='row form-row'>
                    <div class='col col-xs-12'>
                        <div class='form-group'>
                            <label for='teacher-email' class='required-mark'>Email</label>
                            <input id='teacher-email' name='email' type='email' placeholder='Your Email address' required>
                        </div>
                    </div>
                </div>
                <div class='row form-row'>
                    <div class='col col-xs-12'>
                        <div class='form-group'>
                            <label for='teacher-language' class='required-mark'>Language</label>
                            <input id='teacher-language' name='language' type='text' placeholder='Language' required>
                        </div>
                    </div>
                </div>
                <div class='row form-row'>
                    <div class='col col-xs-12'>
                        <div class='form-group'>
                            <label for='teacher-description'>Description</label>
                            <textarea id='teacher-description' name='description' placeholder='Tell us about yourself'></textarea>
                        </div>
                    </div>
                </div>
                <div class='row form-row'>
                    <div class='col col-xs-12'>
                        <div class='form-group'>
                            <label for='teacher-image'>Upload Image</label>
                            <input id='teacher-image' name='image' type='file' accept="image/*">
                        </div>
                    </div>
                </div>
    
                <div class='row form-row'>
                     <div class='col col-xs-12'>
                        <div class='form-group'>
                            <label>Agree to our <a class ='yellow-link' href='https://yogalife.lu/terms-and-conditions' target='_blank'>Terms</a> ?<span class='required-mark'></span></label>
                            <div class='form-inline-element'>
                                <label><input name='terms-acceptance' type='radio' value='Yes' required> Yes</label>
                            </div>
                        </div>
                    </div>
                </div>
                 <input id='listing-type' name='listing-type' type='hidden' value='free'>
               <div class="cf-turnstile"
                    data-sitekey="<?php echo $_ENV['TURNSTILE_SITE_KEY']; ?>"
                    data-theme="light"
                    data-size="invisible">
                </div>
                <div class='form-group'>
                    <button type='submit' class='btn btn-yellow'>Submit Application</button>
                </div>
            </form>
          </div>
           <div class='paid-container'>
            <form class='form' action='create-teacher' method='post' enctype="multipart/form-data">
            <input type='hidden' name='form-name' value='Teacher Form'>
                <div class='row form-row'>
                    <div class='col col-xs-12'>
                        <div class='form-group'>
                            <label for='teacher-fname' class='required-mark'>Full Name</label>
                            <input id='teacher-fname' name='full-name' type='text' placeholder='Your Full name' required>
                        </div>
                    </div>
                </div>

                <div class='row form-row'>
                    <div class='col col-xs-12'>
                        <div class='form-group'>
                            <label for='teacher-email' class='required-mark'>Email</label>
                            <input id='teacher-email' name='email' type='email' placeholder='Your Email address' required>
                        </div>
                    </div>
                </div>
                 <div class='row form-row'>
                     <div class='col col-xs-12'>
                        <div class='form-group'>
                            <label>Agree to our <a class ='yellow-link' href='https://yogalife.lu/terms-and-conditions' target='_blank'>Terms</a> ?<span class='required-mark'></span></label>
                            <div class='form-inline-element'>
                                <label><input name='terms-acceptance' type='radio' value='Yes' required> Yes</label>
                            </div>
                        </div>
                    </div>
                </div>
                 <input id='listing-type' name='listing-type' type='hidden' value='paid'>
               <div class="cf-turnstile"
                    data-sitekey="<?php echo $_ENV['TURNSTILE_SITE_KEY']; ?>"
                    data-theme="light"
                    data-size="invisible">
                </div>
                <div class='form-group'>
                    <button type='submit' class='btn btn-yellow'>Submit Application</button>
                </div>
            </form>
          </div>
        </div>
    </div>
</section>   

<?php require_once('partials/html/global-footer.php'); ?>   
    <script>
        //Local Critical
    </script>
    <script><?php require_once('partials/js/global-critical.php') ?>
            <?php require_once('partials/js/global-footer.php'); ?>
    </script>
    <script>
    const radios = document.querySelectorAll('input[name="listing"]');
    const targetDiv = document.querySelector('.free-container');
     const targetDiv1 = document.querySelector('.paid-container');

    radios.forEach(radio => {
      radio.addEventListener('change', function () {
        if (this.value === 'free') {
          targetDiv.classList.add('show');
        } else {
          targetDiv.classList.remove('show');
        }
         if (this.value === 'paid') {
          targetDiv1.classList.add('show');
        } else {
          targetDiv1.classList.remove('show');
        }
      });
    });
    </script>
</body>
</html>