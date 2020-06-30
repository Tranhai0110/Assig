 <?php
// session_start();
require_once('database.php');

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>TNH-Shop</title>
<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<style type="text/css">
		body{
			margin-top: 100px;
		}
		a.btn.btn-danger {
		    margin-left: 15px;
		}
		p.btn.btn-success {
		    margin-top: 16px;
		}
		span.btn.btn-primary {
	    margin-left: 15px;
	}
	</style>
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-white bg-red fixed-top" style="background-color: #e3f2fd;">
    <div class="container">
      <a class="navbar-brand" href="index.php">TNH-Shop</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Danh muc</h1>
        <div class="list-group">
          <a href="#" class="list-group-item">Đồ Nam</a>
          <a href="#" class="list-group-item">Đồ Nữ</a>
          <a href="#" class="list-group-item">Trung Niên</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="https://cdn.nhanh.vn/cdn/store/7136/bn/sb_1591771471_149.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="https://cdn.nhanh.vn/cdn/store/7136/bn/sb_1591086139_744.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="https://cdn.nhanh.vn/cdn/store/7136/bn/sb_1591086062_184.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row">
		<?php
			$sql = 'select * from product ';
			$productList = executeResult($sql);
			foreach ($productList as $prd) {
				echo '<div class="col-lg-4 col-md-6 mb-4">
        		<div class="card h-100">
        			<a href="#"><img class="card-img-top" src='.$prd['link'].' alt=""></a>
        			<div class="card-body">
        				<h4 class="card-title">
        					<a href="#" name="nameproduct1">'.$prd['nameproduct'].'</a>
        				</h4>
        				<h5 name = "price1">'.$prd['price'].'₫</h5>
        				<p class="card-text" name = "title1">'.$prd['title'].'</p>
        			</div>
        			<div class="card-footer">
        				<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
        				<span class="btn btn-danger">New</span>
        			</div>
        		</div>
        	</div>';
			}
		 ?>

        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class=" bg-light fixed-bottom">
    <div class="container">
      <p class="m-0 text-center text-black">Copyright by &copy; TNH 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
