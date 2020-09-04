<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url();?>asset/icon.png">

    <title>Signin PastorRoiSipahelut.com</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>asset/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>asset/css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
   
           <form class="form-signin" action="<?php echo base_url().'auth/login';?>" method="post">
              <img class="mb-4" src="<?php echo base_url().'asset/icon.png' ?>" alt="" width="72" height="72" onContextMenu='return false;'>

              <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
              
              <?php echo $this->session->flashdata('pesan'); ?>
              <label for="inputUsername" class="sr-only">Username</label>
              <input type="text" id="inputUsername" class="form-control" name="username" placeholder="Username" autofocus>
              <?php echo form_error('username','<div class="text-danger small">','</div>'); ?>
              

              <label for="inputPassword" class="sr-only">Password</label>
              <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password">
              <?php echo form_error('password','<div class="text-danger small">','</div>'); ?>
              <div class="checkbox mb-3">
                <label>
                  <input type="checkbox" value="remember-me"> Remember me
                </label>
              </div>
              <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Sign in</button>
              <p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>
            </form>
     
</body>
</html>
