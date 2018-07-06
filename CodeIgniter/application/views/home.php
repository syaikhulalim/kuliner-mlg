<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tugas Besar</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="<?php echo base_url() ?>assets/css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url() ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="<?php echo base_url('index.php/Home') ?>">Tugas Besar</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="<?php echo base_url('index.php/Home') ?>">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/Login') ?>">Login / Register</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('<?php echo base_url() ?>assets/img/bg-back.png')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Kuliner Malang</h1>
                        <hr class="small">
                        <span class="subheading">Malang Punya Ciri Khasnya</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-preview">
                    <a href="<?php echo base_url('index.php/Home') ?>">
                        <h2 class="post-title">
                            Sego Ceker Pedas Glintung
                        </h2>
                        <h3 class="post-subtitle">
                            A must try buat penyuka makanan pedas
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#">Admin</a> on September 12, 2017</p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="<?php echo base_url('index.php/Home') ?>">
                        <h2 class="post-title">
                            Soto Banjar Acil Galuh
                        </h2>
                    </a>
                    <p class="post-meta">Posted by <a href="#">Admin</a> on Desember 18, 2017</p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="<?php echo base_url('index.php/Home') ?>">
                        <h2 class="post-title">
                            Cwie Mie Hok Lay Malang
                        </h2>
                        <h3 class="post-subtitle">
                            Depot yang seakan berbisik tentang sejarahnya lewat bangunan yang berkesan vintage
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#">Admin</a> on January 24, 2018</p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="<?php echo base_url('index.php/Home') ?>">
                        <h2 class="post-title">
                            Ronde Titoni
                        </h2>
                        <h3 class="post-subtitle">
                            Menikmati sejuknya Malang di malam hari dengan Ronde Titoni
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#">Admin</a> on July 8, 2018</p>
                </div>
                <hr>
                
            </div>
        </div>
    </div>

    <hr>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-muted">Copyright &copy; Kuy-Liner 2018</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="<?php echo base_url() ?>assets/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo base_url() ?>assets/js/jqBootstrapValidation.js"></script>
    <script src="<?php echo base_url() ?>assets/js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="<?php echo base_url() ?>assets/js/clean-blog.min.js"></script>

</body>

</html>