
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
     <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>/layouts/assets/css/bootstrap.css">
    <title>Login</title>
  </head>
  <div class="container">
      <div class="box-login">
    <h2>Login - PLN AINI SUKSES</h2>
    <form action="<?php echo URL; ?>/pelanggan" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="user_email">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="user_password">
  </div>
  <button type="submit" class="btn btn-primary" name="btn_login">Submit</button>
</form>
</div>
    <br>
  </body>
</html>