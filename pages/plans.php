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
        .hero-section{
            padding-bottom: 0;
        }
        h1{
            text-align: center;
        }
        li{
            list-style: none;
        }
        .pricing-container{
            display: flex;
            justify-content: center;
            border-radius: 4px;
            overflow: hidden;
        }
        .pricing-card{
            border: 1px solid #eee;
            background: #fff;
            width: 50%;
            max-width: 400px;
            text-align: center;
            padding: 20px;   
        }

        .pricing-card.free{
            border-top-left-radius: 8px;
            border-bottom-left-radius: 8px;
        }

        .pricing-card.paid{
            background: var(--brand-yellow);
            border-top-right-radius: 8px;
            border-bottom-right-radius: 8px;
        }
        .price {
          font-weight: 800;
          color: var(--brand-yellow);
          margin-bottom: 20px;
        }
        .price p{
            font-size: 72px;
        }
        .pricing-card.paid .price{
            color: #fff;
        }
        .price .currency {
          font-size: 32px;
          vertical-align: super;
          color: #eee;
        }

        .price .per {
          font-size: 22px;
          color: #eee;
        }
        .features{
            padding: 20px;
            border:  1px solid #eee;
        }
        .features h2{
            color: var(--brand-alternate);
            font-size: 24px;
        }

         .pricing-card a.btn{
            display: inline-flex;
            width: fit-content;
            padding: 10px 30px;
            margin-top: 30px;
         }
         .pricing-card li{
            font-size: 18px;
         }
         .pricing-card.paid .features li{
            list-style: none;
            color:  #fff;
         }
         @media all and (max-width: 767px){
            .pricing-container{
                flex-direction: column;
                align-items: center;
            }
            .pricing-card{
                width: 100%;
                border-radius: 8px;
                margin-bottom: 40px;
            }
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
            <h1>Select the Listing Type</h1>
        </div>
    </div>
</section>
<section class="section">
    <div class="row">
        <div class="col col-xs-12">
            <div class='pricing-container'>
                <div class="pricing-card free">
                    <div class="price"><p>Free</p></div>  
                    <div class="features">
                        <h2>Features</h2>
                        <ul><li>✓ Profile Basic Information</li></ul>
                    </div>
                    <a class='btn btn-blue' href="<?php echo $site_url; ?>/plans/free-listing">Get Started</a>
                         
                </div>
                 <div class="pricing-card paid">
                    <div class="price"><p>
                            <span class="currency">€</span class='rate'>50<span class="per"> /Year</span>
                        </p>
                    </div>
                     <div class="features">
                        <h2>Features</h2>
                        <ul><li>✓ Separate Listing Page</li></ul>
                    </div>
                    <a class='btn btn-blue' href="<?php echo $site_url; ?>/plans/paid-listing">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</section>                                    
<?php require_once('partials/html/global-footer.php'); ?>   
    
</body>
</html> 