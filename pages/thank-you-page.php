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

        h1{
            text-align: center;
        }
        p{
            text-align: center;
        }
        .thankyou-container{
            background: var(--brand-yellow);
            width: 50%;
            padding: 20px;
            text-align: center;
            border-radius: 4px;
            color: #fff;
        }
        .main-row .col{
            display: flex;
            justify-content: center;
        }

    </style>
<!--     <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
 -->
</head>
<body>
    <?php require_once('partials/html/global-header.php'); ?>   
<section class='section hero-section'>
    <div class='row main-row'>
        <div class='col col-xs-12'>
            <div class="thankyou-container">
                <h1>Thank You!</h1>
                <p>Your application has been submitted!<br> In case you do not receive a response, please contact <a href="mailto:shweta@yogalife.org";>shweta@yogalife.org</a></p>

                <a href="/" class="btn">Go Back Home</a>
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