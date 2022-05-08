<?php

declare(strict_types=1);
require 'vendor/autoload.php';

$secret = 'XVQ2UIGO75XRUKJO';
$link = \Sonata\GoogleAuthenticator\GoogleQrUrl::generate('ishika', $secret, 'Matrimonial - Copy');
$g = new \Sonata\GoogleAuthenticator\GoogleAuthenticator();
if(isset($_POST['submit'])){
  $code = $_POST['pass-code'];

  if ($g->checkCode($secret, $code)) {
    header("location: index1.php");
  } else {
    header("location: login_auth.php");
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
rel="stylesheet"/>
<link
href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
rel="stylesheet"/>
<link
href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.css"
rel="stylesheet"/>
<link rel="stylesheet" href="css/register.css">

    <title>Document</title>
    <style>
        .auth{
            display: flex;
            justify-content: left;
            align-items: center;
        }
    </style>
</head>
<body>
    <section class="vh-100" style="background-color: rgb(243, 86, 112);">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                  <div class="col-md-6 col-lg-5 d-none d-md-block">
                    <img src="images/img1.webp"
                      alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                  </div>
                  <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">
      
                      <form>
      
                        <h2 class="fw-normal mb-3 pb-2" style="letter-spacing: 1px;">Sign Up your account</h5>

                        <div class="auth form-outline mb-2">
                            <div class="image">
                                <img src="<?=$link;?>" alt="scanner" class="scanner" width="30%">
                            </div>
                            <div class="text">
                                <label class="" for="">Enter Code</label>
                                <input type="text" id="form2Example17" name="pass-code" class="form-control" required>
                            </div>
                        </div>
      
                        <div class="pt-1 mb-2">
                          <input class="btn btn-dark btn-lg btn-block" name="submit" type="submit" value="Login">
                      </form>
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>