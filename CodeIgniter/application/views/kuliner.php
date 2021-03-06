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
                <a class="navbar-brand" href="<?php echo base_url('index.php/kuliner') ?>">Tugas Besar</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="<?php echo base_url('index.php/kuliner') ?>">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/Login/logout') ?>">Logout</a>
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
    
        <div class="row">
            
            <div class="col-sm-offset-1 col-sm-10">
            <ul class="nav navbar-nav navbar-left">
            <li>
                <a href="<?php echo base_url('index.php/kuliner') ?>"><h2>Daftar Kuliner</h2></a>
            </li>
            <li>
                <a href="<?php echo base_url('index.php/user') ?>"><h2>Daftar User</h2></a>
            </li>
            <br>
            </ul>
            
                <ul class="nav navbar-right">
                <br><a href="<?php echo base_url('index.php/kuliner/create') ?>" class="btn btn-warning my-3"><b>TAMBAH DATA</b></a>
                </ul>
                  <br>
                  <table class="table table-hover">
                    <br>
                    <thead>
                      <th>ID</th>
                      <th>Nama Tempat</th>
                      <th>Alamat Tempat</th>
                      <th>Keterangan</th>
                      <th>Didirikan</th>
                      <th>Foto</th>
                      <th>Aksi</th>
                    </thead>
                    <tbody>
                      <?php foreach ($kuliner_list as $key => $value): ?>
                        <tr>
                          <td><?php echo $value['idKuliner'] ?></td>
                          <td width="15%"><?php echo $value['nama'] ?></td>
                          <td width="15%"><?php echo $value['alamat'] ?></td>
                          <td width="35%"><?php echo $value['keterangan'] ?></td>
                          <td><?php echo $value['tanggal'] ?></td>
                          <td><img src="<?php echo base_url()?>assets/uploads/<?php echo $value['foto']?>" alt="" width=100 height=100></td>
                          <td>
                            <a href="<?php echo base_url("index.php/kuliner/update/".$value['idKuliner']) ?>" class="btn btn-sm btn-success">Edit</a>
                            <a href="<?php echo base_url("index.php/kuliner/deleteData/".$value['idKuliner']) ?>" class="btn btn-sm btn-danger">Hapus</a>
                          </td>
                        </tr>
                        
                      <?php endforeach ?>
                </tbody>
              </table>             
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


