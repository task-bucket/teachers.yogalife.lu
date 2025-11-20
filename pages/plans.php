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
       .main{
            min-height: calc(90vh - 65px);
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
            width: 30%;
            max-width: 300px;
            padding: 25px;   
            margin-right: 20px;
            border-radius: 30px;
        }
        .pricing-card h2{
            font-size: 24px;
            margin-bottom: 0;
        }
        .pricing-card .subtitle{
            color: #808080;
        }
        .pricing-card.paid{
            border: 6px solid var(--brand-yellow);
            border-top-width: 40px;
            position: relative;
        }
        .price {
          font-weight: 700;
        }
        .price p{
            font-size: 48px;
        }
        .price .currency {
          font-size: 32px;
          vertical-align: super;

        }

        .price .per {
          font-size: 22px;
        }
      
        .features h2{
            color: var(--brand-alternate);
            font-size: 24px;
        }
        .top{
            text-align: center;
            position: absolute;
            right: 0;
            left: 0;
            top: -32px;
            font-weight: 700;
            color: #fff;
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
         }
         @media all and (max-width: 767px){
            .pricing-container{
                flex-direction: column;
                align-items: center;
            }
            .pricing-card{
                width: 80%;
                border-radius: 30px;
                margin-bottom: 40px;
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
                    <h1>Select the Listing Type</h1>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="row">
                <div class="col col-xs-12">
                    <div class='pricing-container'>
                        <div class="pricing-card free">
                            <h2>Starter</h2>
                            <p class="subtitle">Ideal For Small Projects</p>
                            <div class="price"><p>Free</p></div>  
                            <div class="features">
                                <ul><li>✓  &nbsp;Profile Basic Information</li></ul>
                            </div>
                            <a class='btn btn-blue' href="<?php echo $site_url; ?>/plans/free-listing">Get Started</a>
                                 
                        </div>
                         <div class="pricing-card paid">
                            <div class="inner-content">
                                <p class="top">Most Popular Plan</p>
                                <h2>Professional</h2>
                                <p class="subtitle">For Freelancers and Projects</p>
                                <div class="price"><p>
                                        <span class="currency">€</span class='rate'>50<span class="per"> /Year</span>
                                    </p>
                                </div>
                                 <div class="features">
                                    <ul>
                                        <li>✓  &nbsp;Separate Listing Page</li>
                                        <li>✓  &nbsp;Separate Listing Page</li>
                                        <li>✓  &nbsp;Separate Listing Page</li>
                                        <li>✓  &nbsp;Separate Listing Page</li>
                                        <li>✓  &nbsp;Separate Listing Page</li>
                                        <li>✓  &nbsp;Separate Listing Page</li>
                                    </ul>
                                </div>
                                <a class='btn btn-blue' href="<?php echo $site_url; ?>/plans/paid-listing">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>             
    </div>                   
    <?php require_once('partials/html/global-footer.php'); ?>   
    
</body>
</html> 