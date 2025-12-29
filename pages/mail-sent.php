<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/x-icon" href="<?php echo $cdn_url; ?>/favicon.ico">
    <?php require_once('partials/html/global-header-includes.php') ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mail Sent</title>
    <style>
        <?php require_once('partials/css/spark-grid.php') ?>
        <?php require_once('partials/css/global-critical.php') ?>
        <?php require_once('partials/css/global-header.php') ?>
        <?php require_once('partials/css/global-footer.php') ?>

        .hero-section h1{
            text-align: center;
        }
        .hero-section p{
            text-align: center;
            font-size: 24px;
        }
        .hero-section a{
            font-size: 24px;
        }
        .hero-section a.btn{
            font-size: 16px;
        }
        .main{
            min-height: calc(90vh - 58px);
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
            .hero-section p{
                text-align: center;
                font-size: 18px;
            }
            .hero-section a{
                font-size: 18px;
            }
        }

    </style>
</head>
<body>
    <?php require_once('partials/html/global-header.php'); ?>
    <div class="main">   
    <section class='section hero-section'>
        <div class='row main-row'>
            <div class='col col-xs-12'>
                <div class="thankyou-container">
                    <h1>Thank You!</h1>
                    <p>Your mail has been sent!</p>
                    <a href="<?php echo $site_url?>" class="btn">Go Back to Home</a>
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