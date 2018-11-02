


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Error404-Shop Homepage</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<!-- Facebook like button-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=1637320483230244";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!--Facebook follow button-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=1637320483230244";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <td><img src="img/page-404-icon.png" style="max-height: 3em" style="color:white;">Error404</td>
                <!--<a class="navbar-brand" href="#">404 Store</a>-->
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="home.php">Shop</a>
                    </li>
                    <li>
                        <!--<a href="#">Cart</a>-->
                        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="business" value="404 Store">
                            <input type="hidden" name="cmd" value="_cart">
                            <input type="hidden" name="display" value="1">
                            <input type="image" src="img/cart.png" name="submit" value="View Cart">
                        </form>
                    </li>
                    <li>
                        <a href="login.php">Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Components</p>
                <div class="list-group">
                    <a href="#" class="list-group-item active">CPU</a>
                    <a href="Mainboard.html" class="list-group-item">Mainboard</a>
                    <a href="#" class="list-group-item">Storage</a>
                </div>
            </div>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img class="img-responsive" src="img/product/cpu/intel_i3.jpg" alt="intel i3-7100">
                            <div class="caption">
                                <h4 class="pull-right" style="color: green">฿4,550</h4>
                                <h4><a href="product/cpu/i3-7100.php">Intel Core i3-7100</a></h4>
                                <form method="post" action="https://www.sandbox.paypal.com/cgi-bin/webscr">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="business" value="404 Store">
                                    <input type="hidden" name="item_name" value="Intel Core i3-7100">
                                    <input type="hidden" name="item_number" value="37100">
                                    <input type="hidden" name="amount" value="4550">
                                    <input type="hidden" name="currency_code" value="THB">
                                    <input type="hidden" name="return" value="">
                                    <input type="submit" class="btn btn-success pull-right" name="submit" value="Add to Cart">
                                </form>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                         <img class="img-responsive" src="img/product/cpu/intel_i3.jpg" alt="intel i3-7100">
                           <!-- <img src="http://placehold.it/320x150" alt=""> -->
                            <div class="caption">
                                <h4 class="pull-right">฿6,990</h4>
                                <h4><a href="#">Intel Core i3-7350K</a></h4>
								<form method="post" action="https://www.sandbox.paypal.com/cgi-bin/webscr">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="business" value="404 Store">
                                    <input type="hidden" name="item_name" value="Intel Core i3-7350K">
                                    <input type="hidden" name="item_number" value="37350">
                                    <input type="hidden" name="amount" value="6990">
                                    <input type="hidden" name="currency_code" value="THB">
                                    <input type="hidden" name="return" value="">
                                    <input type="submit" class="btn btn-success pull-right" name="submit" value="Add to Cart">
                                </form>
                               
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">฿16,100</h4>
                                <h4><a href="#">Intel core i7-6800K</a></h4>
                                <form method="post" action="https://www.sandbox.paypal.com/cgi-bin/webscr">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="business" value="404 Store">
                                    <input type="hidden" name="item_name" value="TBD">
                                    <input type="hidden" name="item_number" value="000">
                                    <input type="hidden" name="amount" value="0">
                                    <input type="hidden" name="currency_code" value="THB">
                                    <input type="hidden" name="return" value="">
                                    <input type="submit" class="btn btn-success pull-right" name="submit" value="Add to Cart">
                                </form>
                            
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$84.99</h4>
                                <h4><a href="#">Fourth Product</a></h4>
								<form method="post" action="https://www.sandbox.paypal.com/cgi-bin/webscr">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="business" value="404 Store">
                                    <input type="hidden" name="item_name" value="TBD">
                                    <input type="hidden" name="item_number" value="000">
                                    <input type="hidden" name="amount" value="0">
                                    <input type="hidden" name="currency_code" value="THB">
                                    <input type="hidden" name="return" value="">
                                    <input type="submit" class="btn btn-success pull-right" name="submit" value="Add to Cart">
                                </form>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$94.99</h4>
                                <h4><a href="#">Fifth Product</a></h4>
								<form method="post" action="https://www.sandbox.paypal.com/cgi-bin/webscr">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="business" value="404 Store">
                                    <input type="hidden" name="item_name" value="TBD">
                                    <input type="hidden" name="item_number" value="000">
                                    <input type="hidden" name="amount" value="0">
                                    <input type="hidden" name="currency_code" value="THB">
                                    <input type="hidden" name="return" value="">
                                    <input type="submit" class="btn btn-success pull-right" name="submit" value="Add to Cart">
                                </form>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <h4><a href="#">Like this template?</a>
                        </h4>
                        <p>If you like this template, then check out <a target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this tutorial</a> on how to build a working review system for your online store!</p>
                        <a class="btn btn-primary" target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">View Tutorial</a>
                    </div>

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; 404 Store 2017. All Rights Reserved</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/minicart/3.0.6/minicart.min.js"></script>
<script>paypal.minicart.render();</script>
<!-- facebook follow button-->
<div class="fb-follow" data-href="https://www.facebook.com/zuck" data-layout="standard" data-size="small" data-show-faces="true"></div>
<!--Facebook Like button -->
<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
  <!-- Twitter-->
<a class="twitter-follow-button"
  href="https://twitter.com/TwitterDev"
  data-size="large">
Follow @TwitterDev</a>

</body>
</html>
