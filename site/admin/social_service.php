<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <link rel="icon" href="../images/favicon.png" type="image/x-icon">
    <title>Edit Social Services</title>

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>


    <body>
    <!-- container section start -->
    <section id="container" class="">


        <header class="header dark-bg">
              <div class="toggle-nav">
                  <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
              </div>

              <!--logo start-->
              <a href="index.html" class="logo"><span class="lite">Admin</span></a>
              <!--logo end-->

              <div class="top-nav notification-row">
                  <!-- notificatoin dropdown start-->
                  <ul class="nav pull-right top-menu">

                      <!-- user login dropdown start-->
                      <li class="dropdown">
                          <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                              <span class="profile-ava">
                                  <img alt="" style="width:50px; height:30px;" src="img/admin.jpg">
                              </span>
                              <span class="username">Ajith Rajapaksha</span>
                              <b class="caret"></b>
                          </a>
                          <ul class="dropdown-menu extended logout">
                              <div class="log-arrow-up"></div>
                              <li class="eborder-top">
                                  <a href="#"><i class="icon_profile"></i> My Profile</a>
                              </li>
                              <li>
                                  <a href="login.html"><i class="icon_key_alt"></i> Log Out</a>
                              </li>
                      </li>
                      <!-- user login dropdown end -->
                  </ul>
                  <!-- notificatoin dropdown end-->
              </div>
        </header>
        <!--header end-->

        <!--sidebar start-->
        <aside>
            <div id="sidebar"  class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu">
                  <li>
                        <a class="" href="index.php">
                            <i class="icon_house_alt"></i>
                            <span>Company</span>
                        </a>
                    </li>
  				          <li>
                        <a href="product.php" class="">
                            <i class="icon_table"></i>
                            <span> Add Products</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <li class="active">
                        <a href="javascript:;" class="">
                            <i class="icon_documents_alt"></i>
                            <span>Add Services</span>
                            <span class="menu-arrow arrow_carrot-right"></span>
                        </a>
                        <ul class="sub">
                            <li><a class="" href="welfare.php">Employee Welfare</a></li>
                            <li><a class="" href="social_service.php">Social Services</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="" href="award.php">
                            <i class="icon_genius"></i>
                            <span>Add Awards</span>
                        </a>
                    </li>
                    <li>
                        <a class="" href="widgets.html">
                            <i class="icon_desktop"></i>
                            <span>Edit Contact</span>
                        </a>
                    </li>
                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->

        <!--main content start-->
        <section id="main-content">
        <section class="wrapper">
  		  <div class="row">
  				<div class="col-lg-12">
  					<h3 class="page-header"><i class="fa fa-files-o"></i> Edit Social Services</h3>
  					<ol class="breadcrumb">
  						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
  						<li><i class="icon_document_alt"></i>Edit Social Services</li>
  					</ol>
  				</div>
  			</div>

        <!-- Content-->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Add Services
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <form class="form-validate form-horizontal" id="feedback_form" method="get" action="">
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-2">Event Name :<span class="required">*</span></label>
                                        <div class="col-lg-10">
                                            <input class="form-control" id="pname" name="pname" type="text" required />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cemail" class="control-label col-lg-2">Date : <span class="required">*</span></label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="sno" type="date" name="sno" required />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-2">Description :</label>
                                        <div class="col-lg-10">
                                            <textarea rows="4" cols="50"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-2">Image : <span class="required">*</span></label>
                                        <div class="col-lg-10">
                                            <input class="form-control" id="subject" name="img" type="text" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <button class="btn btn-primary" type="submit">Save</button>
                                            <button class="btn btn-default" type="button">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </section>
                </div>
            </div>
            <!-- page end-->
        </section>
    </section>
    <!--main content end-->

  </section>
  <!-- container section end -->

    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- jquery validate js -->
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>

    <!-- custom form validation script for this page-->
    <script src="js/form-validation-script.js"></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>


  </body>
</html>
