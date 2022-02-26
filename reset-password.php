<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="css/styles.css">

    <title>Responsive Register & Login UI - Bootstrap 5</title>
  </head>
  <body>
   
    <div class="container py-5 my-5 mx-5 rounded">
      <div class="row g-0 shadow rounded">
        <div class="col-lg-5">
          <img class="img-fluid background-image" src="./images/bg-birds.jpg" alt="">
        </div>
        <div class="col-lg-7 pt-5 px-5 login">
          <h4 class="h4-resonsive fw-bold h4"><img src="images/logo.svg" class="img-fluid icon w-25 pt-3" alt=""></h4>
          <h5 class="h5-resonsive h5">Reset your password</h5>
          <form action="" method="POST">
            <div class="form-row mb-2">
              <input class="form-control w-50 p-2" type="email" name="email" placeholder="Confirm email address" id="email" autocomplete="off" autofocus>
            </div>
            <div class="form-row mb-2">
              <input class="form-control w-50 p-2" type="password" name="new-password" placeholder="New password" id="new-password" autocomplete="off">
            </div>
            <div class="form-row mb-2">
              <button type="submit" class="btn btn-dark w-50 p-2" name="reset-btn">Reset Password</button>
            </div>
            <div class="form-row mb-3">
              <p class="">Go back to <a class="text-decoration-none mx-1 text-dark fw-bold" href="index.php"> &rarr; Login </a></p>  
            </div>
         
          </form>
        </div>
      </div>
    </div>






















    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
