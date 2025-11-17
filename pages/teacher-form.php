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
</head>
<body>
    <?php require_once('partials/html/global-header.php'); ?>   
<section class='section hero-section'>
    <div class='row main-row'>
        <div class='col col-xs-12'>
            <h1>Please fill the form</h1>
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
                            <label for='teacher-image'>Which Listing type do you need?</label>
                            <div class='form-inline-element'>
                                <label><input name='listing-type' type='radio' value='free' required>Free</label>
                                <label><input name='listing-type' type='radio' value='paid' required>Paid</label>
                            </div>
                        </div>
                    </div>
                </div>
         <!--        <div class="hide">
                    <div class='row form-row'>
                        <div class='col col-xs-12'>
                            <div class='form-group'>
                                <label for='yoga-style' class='required-mark'>Yoga style</label>
                                <input id='yoga-style' name='yoga-style' type='text' placeholder='Yoga Style' required>
                            </div>
                        </div>
                    </div>
                      <div class='row form-row'>
                        <div class='col col-xs-12'>
                            <div class='form-group'>
                                <label for='classes'>Classes</label>
                                <textarea id='classes' name='classes' placeholder='Classes'></textarea>
                            </div>
                        </div>
                    </div>
                     <div class='row form-row'>
                        <div class='col col-xs-12'>
                            <div class='form-group'>
                                <label for='workshops'>Workshops</label>
                                <textarea id='workshops' name='workshops' placeholder='Workshops'></textarea>
                            </div>
                        </div>
                    </div>
                    <div class='row form-row'>
                        <div class='col col-xs-12'>
                            <div class='form-group'>
                                <label for='retreats'>Retreats</label>
                                <textarea id='retreats' name='retreats' placeholder='Retreats'></textarea>
                            </div>
                        </div>
                    </div>
                    <div class='row form-row'>
                        <div class='col col-xs-12'>
                            <div class='form-group'>
                                <label for='corporate-yoga'>Corporate Yoga</label>
                                <textarea id='corporate-yoga' name='corporate-yoga' placeholder='Corporate yoga'></textarea>
                            </div>
                        </div>
                    </div>
                     <div class='row form-row'>
                        <div class='col col-xs-12'>
                            <div class='form-group'>
                                <label for='teacher-phone' class='required-mark'>Phone Number</label>
                                <input id='teacher-phone' name='teacher-phone' type='text' placeholder='Phone Number' required>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class='row form-row'>
                     <div class='col col-xs-12'>
                        <div class='form-group'>
                            <label>Agree to our <a class ='yellow-link' href='https://yogalife.lu/terms-and-conditions' target='_blank'>Terms</a> and <a class ='yellow-link' href='<@site_url>/terms-and-conditions' target='_blank'>Privacy Policy</a>?<span class='required-mark'></span></label>
                            <div class='form-inline-element'>
                                <label><input name='terms-acceptance' type='radio' value='Yes' required> Yes</label>
                                <label><input name='terms-acceptance' type='radio' value='No' required> No</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class='form-group'>
                    <button type='submit' class='btn btn-yellow'>Submit</button>
                </div>
            </form>
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
</body>
</html>