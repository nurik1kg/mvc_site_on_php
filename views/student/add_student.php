
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Form</title>

    <!-- Bootstrap Core CSS -->
    <link href="/template/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/template/css/shop-item.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

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
                <a class="navbar-brand" href="#">Local Host</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
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
                <p class="lead">Local Host</p>
                <div class="list-group">
                    <a href="http://localhost" class="list-group-item">Home</a>
                    <a href="#" class="list-group-item active">Form</a>
                    <a href="http://localhost/student/search" class="list-group-item">Search</a>
                    <a href="#" class="list-group-item">Login in</a>
                </div>
            </div>

            <div class="col-md-9">

                <div class="thumbnail">
                    <div class="caption-full">
                       <p><h3>Insert, Update, Delete!!!</h3></p>
    <form role="form" action="#" method="post">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" name="name" placeholder="Enter your name">
    </div>
      <div class="form-group">
          <label for="text">Age:</label>
          <input type="text" class="form-control" name="age" placeholder="Enter you age">
      </div>
      <div class="form-group">
          <label for="text">Facultet:</label>
          <select name='facultet'>       
             <?php foreach ($f_name as $name): ?>
             <option><?php echo $name['name']; ?></option>
             <?php endforeach; ?>
          </select>
      </div>
      <div class="form-group">
          <label for="text">Bolum:</label>
          <select name='bolum'>       
             <?php foreach ($b_name as $name): ?>
             <option value="<?php echo $name['id']; ?>"><?php echo $name['name']; ?></option>
             <?php endforeach; ?>
          </select>
      </div>
      <h4>Only to be deleted or updated Student on table.</h4>
      <div class="form-group">
      <label for="text">ID Student:</label>
      <input type="text" class="form-control" name="d_id" placeholder="Enter id student">
    </div>
    <button type="submit" class="btn btn-success" name="save">Save</button>
    <button type="submit" class="btn btn-primary" name="update">Update</button>
    <button type="submit" class="btn btn-danger" name="delete">Delete</button>
  </form>
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
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

