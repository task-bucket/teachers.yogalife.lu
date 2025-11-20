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
            font-size: 24px;
        }
        a{
            font-size: 24px;
        }
        a.btn{
            font-size: 16px;
        }
        .main{
            min-height: calc(90vh - 65px);
        }
        .thankyou-container{
            width: 50%;
            padding: 20px;
            text-align: center;
            border-radius: 4px;
            color: #000;
            font-size: 24px;
        }
        .main-row .col{
            display: flex;
            justify-content: center;
        }
        .brand-yellow{
            color: var(--brand-yellow);
        }
        @media all and (max-width: 980px){
             .thankyou-container{
                width: 100%;
            }
            p{
                text-align: center;
                font-size: 18px;
            }
            a{
                font-size: 18px;
            }
        }

    </style>
<!--     <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
 -->
</head>
<body>
    <?php require_once('partials/html/global-header.php'); ?>
    <div class="main">   
    <section class='section hero-section'>
        <div class='row main-row'>
            <div class='col col-xs-12'>
                <div class="thankyou-container">
                    <h1>Thank You!</h1>
                    <p>Your application has been submitted!<br>We usually respond within 24 hours. In case you do not receive a response,  please contact <a class='brand-yellow' href="mailto:support@taskbucket.com">Support@taskbucket.com</a></p>

                    <a href="<?php echo $site_url?>" class="btn">Go Back to Listing Page</a>
                </div>
            </div>
        </div>
    </section>
    </div>   
<?php require_once('partials/html/global-footer.php'); ?>   
    <script>
        //Local Critical
    </script>

</body>
</html>