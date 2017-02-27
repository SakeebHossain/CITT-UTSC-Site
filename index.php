<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome to CITT UTSC</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Modern Business CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

        <!-- Custom CSS -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <?php include 'navbar.php';?>

    <!--header-->
    <div class="wide large">
            <div class="col-lg-5 main-logo">
                <img src="img/citt_logo_white.png">
                    <p>CANADIAN INTERCOLLEGIATE THINK TANK</p>
                    <h4>University of Toronto Scarborough</h4>
            </div>
            <div class="col-lg-7 main-logo">
                <br>
                <br>
                <button type="button" class="btn btn-primary" href="#bottom">Learn More <i class="fa fa-caret-down" aria-hidden="true"></i>
                </button>
            </div>
    </div>


    <!-- Page Content -->
    <div class="container top-buffer">


        <!-- Features Section -->
<div class="row">
            <div class="col-lg-12">
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-calendar-check-o fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Events</h4>
                        <p>Learn all about our upcoming and previous events.</p>
                        <a href="blog-home-1.php" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-newspaper-o fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Publications</h4>
                        <p>Learn about what students voice for in their education, their community, and their lives.</p>
                        <a href="publications.php" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-user-plus fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Register</h4>
                        <p>Become a CITT Member and expose yourself to a bigger platform for open thinking.</p>
                        <a href="sign-up.php" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- /.row -->
        <hr>

        <!-- Footer -->
        <?php include 'footer.php';?>
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $("button[href='#bottom']").click(function() {
      $("html, body").animate({ scrollTop: $(document).height() }, "slow");
      return false;
    });
    </script>


</body>

</html>
