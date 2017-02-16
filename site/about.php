<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title>ABOUT</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Links -->
    <link rel="stylesheet" href="css/search.css">


    <!--JS-->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/rd-smoothscroll.min.js"></script>


    <!--[if lt IE 9]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
    <script src='js/device.min.js'></script>
  </head>
  <body>
  <div class="page">
  <!--========================================================
                            HEADER
  =========================================================-->
  <header>
    <div class="container top-sect">
      <div class="navbar-header">
        <img src="images/logo.jpg" alt="">
      </div>

      <div class="help-box text-right">
        <p>Phone : </p>
        <a href="callto:#">+94 -773 938 772</a>
        <small><span>Email:</span>  midayapackaging@gmail.com</small>
      </div>
    </div>


    <div id="stuck_container" class="stuck_container">
      <div class="container">
      <nav class="navbar navbar-default navbar-static-top pull-left">

          <div class="">
            <ul class="nav navbar-nav sf-menu" data-type="navbar">
              <li>
                <a href="./">HOME</a>
              </li>
              <li class="active">
                <a href="about.php">ABOUT</a>
              </li>
              <li>
                <a href="product.php">PRODUCTS</a>
              </li>
              <li class="dropdown">
                <a href="service.php">SERVICES<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="#">Service 1</a>
                  </li>
                  <li>
                    <a href="#">Service 2  </a>
                  </li>
                  <li>
                    <a href="#">Service 3 </a>
                      <ul class="dropdown-menu">
                        <li>
                          <a href="#">Latest</a>
                        </li>
                        <li>
                          <a href="#">Archive</a>
                        </li>
                      </ul>
                  </li>
                </ul>
              </li>
              <li>
                <a href="product.php">SOCIAL SERVICES</a>
              </li>

              <li>
                <a href="contact.php">CONTACTS</a>
              </li>
            </ul>
          </div>
      </nav>
      <!-- <form class="search-form" action="search.php" method="GET" accept-charset="utf-8">
        <label class="search-form_label">
          <input class="search-form_input" type="text" name="s" autocomplete="off" placeholder=""/>
          <span class="search-form_liveout"></span>
        </label>
        <button class="search-form_submit fa-search" type="submit"></button>
      </form> -->

      </div>

    </div>
  </header>
  <!--========================================================
                            CONTENT
  =========================================================-->

    <main>

      <section class="well well4">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12">
              <h2>
                about
                <small>
                  us
                </small>
              </h2>
              <img class="" src="images/page-2_img1.jpg" alt="">
              <p class="lead">
                Star is a complete sourcing and distribution solution.
              </p>
              <p>

                Star Packaging Solutions is the premium provider for retail and franchise operations seeking a seamless sourcing and distribution network.
                <br /><br />
                As a market leader in the field we offer increased buying power across a national platform and pride ourselves on delivering increased efficiencies, quality service and competitive pricing.
              </p>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
              <h2>
               Awards
              </h2>

              <article class='media offs2'>
                <div class="media-left text-center">
                  <time datetime='2015'>1994 -</time>
                </div>
                <div class="media-body">
                  <p>NATIONAL GREEN AWARDS AWARDS</p>
                  <img class="" src="images/aw1.jpg" alt="">
                </div>
              </article>

              <article class='media'>
                <div class="media-left text-center">
                  <time datetime='2015'>2000 -</time>
                </div>
                <div class="media-body">
                  <p>NATIONAL BUSINESS EXCELLENCE AWARDS</p>
                  <img class="" src="images/aw2.jpg" alt="">
                </div>
              </article>

              <article class='media'>
                <div class="media-left text-center">
                  <time datetime='2015'>2009 -</time>
                </div>
                <div class="media-body">
                  <p>CEYLON NATIONAL CHAMBER OF INDUSTRIES AWARDS</p>
                  <img class="" src="images/aw3.jpg" alt="">
                </div>
              </article>

              <article class='media'>
                <div class="media-left text-center">
                  <time datetime='2015'>2015 -</time>
                </div>
                <div class="media-body">
                  <p>NATIONAL CHAMBER OF EXPORTS EXPORT AWARDS </p>
                  <img class="" src="images/aw4.jpg" alt="">
                </div>
              </article>

            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
              <h2>
                solutions
              </h2>
              <ul class="index-list">
                <li>
                  Highest levels of customer service & specialist provider of franchise solutions
                </li>
                <li>
                  Partnering with the best and most reputable manufacturers both nationally and internationally
                </li>
                <li>
                  Flexibility to provide your business with solutions that are individual to your needs
                </li>
                <li>
                  Understanding of the importance of your brand
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>

    </main>

    <!--========================================================
                          FOOTER
  =========================================================-->
        <?php include("footer.php") ?>
  </div>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/tm-scripts.js"></script>

  </body>
</html>
