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

    <title>Document</title>
</head>
<body style="overflow-y: hidden;">
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
      
                      <form action="validation.php" method="post">
      
                        <h2 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Login to your account</h5>
      
                        <div class="form-outline mb-4">
                          <label class="" for="">Username</label>
                          <input type="text" id="form2Example17" name="user" class="form-control" required >
                        </div>
      
                        <div class="form-outline mb-4">
                          <label class="" for="form2Example27">Password</label>
                          <input type="password" id="form2Example27" name="password" class="form-control" required >                          
                        </div>
      
                        <div class="pt-1 mb-4">
                          <button class="btn btn-dark btn-lg btn-block" type="submit">Next</button>
                        </div>
      
                        <p class="mb-5 pb-lg-2" style="color: #000;">Don't have an account? <a href="http://localhost/Matrimonial%20-%20Copy/register.php"
                            style="color: #393f81;">Register here</a></p>
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