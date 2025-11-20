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

    
    </style>
    <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>

</head>
<body>
    <?php require_once('partials/html/global-header.php'); ?>   
<section class='section hero-section'>
    <div class='row main-row'>
        <div class='col col-xs-12'>
            <h1>Please fill the form</h1>
           <div class='paid-container'>
            <form class='form' action='<?php echo $site_url; ?>/create-teacher-free' method='post' enctype="multipart/form-data">
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

</body>
</html>