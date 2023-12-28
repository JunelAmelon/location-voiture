<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Bienvenu chez AutoCar</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->

  <?php require '../views/index-views-bf-connection.php'; //this line is for front before connected?>

  <!-- ====Header end ======== -->

  <!-- Connection card -->

    <form action="" class="container mt-5" style="width:50%; margin-bottom:4%; padding:0%; ">
        <div class="row">
          <div class="mb-5 text-center" style="color:#00b371; font-weight: bold; font-size:38px" >Connexion</div>
          <!-- <div style="background-color:#00b371; width: 50%; height:1vh;" class="mb-5 pl-0"></div> -->
        <div class=" form-group ">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your email" required> <br>
        </div><br>
        <div class="form-group ">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your password" required> <br>
        </div><br><br>
        </div>
         <button class="btn mt-1 w-25 " style="background-color:#00b371; color:white;">Se connecter</button> <br><br>
         Vous n'avez pas encore un compte ? <a href="" style="color:#00b371; font-style: none;">Inscrivez-vous !</a>
        
    </form>

  <!-- end connection card -->


</body>
<?php require '../views/common-footer.php'?>
</html>