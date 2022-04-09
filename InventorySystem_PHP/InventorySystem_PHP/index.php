<?php
  ob_start();
  require_once('includes/load.php');
  if($session->isUserLoggedIn(true)) { redirect('home.php', false);}
?>
<section class="vh-100" >
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
         
          <?php include_once('layouts/header.php'); ?>

            <div class="login-page">
                <div class="card-body p-5 text-center">
                  <h1 class="mb-5">Admin Login </h1>
                </div>

                <?php echo display_msg($msg); ?>

                  <form method="post" action="auth.php" class="clearfix">

                    <div class="form-group">
                          <label for="username" class="control-label"></label>
                          <input type="name" class="form-control" name="username" placeholder="username">
                    </div>
                    
                    <div class="form-group">
                        <label for="Password" class="control-label"></label>
                        <input type="password" name= "password" class="form-control" placeholder="password">
                    </div>
                    <div class="form-group">
                            <button type="submit" class="btn btn-info" style="border-radius:0%">Login</button>
                    </div>
                </form>
            </div>
            <?php include_once('layouts/footer.php'); ?>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

