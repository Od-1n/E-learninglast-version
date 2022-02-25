
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sign In</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/sign.css">
</head>
<body class="bg-body" style="width: 100%; height: 100vh;">
    <main class="d-flex justify-content-start mt-5">
        <div class="container-fluid">
          <div class="d-flex justify-content-center">
              <div class="col-md-4 shadow col-sm-12 p-4 bg-white" style="border-radius: 20px;">
                <div class="border-start border-info border-5 col-12 mb-3 ms-3">
                  <h1 class="ms-2">E-classe</h1>
                </div>
                  <div class="text-center">
                      <h2 class="text-uppercase h4 mt-4">Sign In</h2>
                      <p class="text-muted small">
                          Enter your credentials to access your account 
                      </p>
                  </div>
                  <?php
      if (isset($_GET['error'])) {   ?>
        <div class="alert alert-danger">
          <?php echo $_GET['error'];  ?>
        </div>
      <?php }; ?>
                  <form action="usercontrole.php" method="POST">
                      <div class="p-4">
                          <div class="mb-3">
                              <label for="email" class="form-label">Email</label>
                              <input type="email" class="form-control" placeholder="Enter your email" id="email" name="email"  required >
                          </div>
                          <div class="mb-3">
                              <label for="password" class="form-label">Password</label>
                              <input type="password" class="form-control" placeholder="Enter your password" id="password" name="password" required value=<?php  get_cookie('user_pass');?> >
                          </div>
                          <div>
                          <div>
        <input type="checkbox" id="check" name="check"><label for="check">remember me</label></div>
  <input type="submit" value="Sign IN"   class="btn bg-button text-white text-center mt-2 w-100 d-flex align-items-center justify-content-center bg-info">
                          <div>
                            

                         
                          <div class="d-flex justify-content-around mt-2">
                            <p class=" text-muted ">
                              Forgot your password?
                            </p>
                            
                          </div>
                          
                      </div>
                  </form>
              </div>
          </div>
        </div>
    </main>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
  </html>