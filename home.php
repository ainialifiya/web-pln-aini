<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?php echo URL; ?>/layouts/assets/images/icon.ico" rel="shortcut icon">
	<link rel="stylesheet" href="<?php echo URL; ?>/layouts/assets/css/bootstrap.css">
	<title>PLN</title>
</head>

<body>
	<main>
		<header>
			<h2>PLN-AINI SUKSES</h2>
		</header>
		<div class="card text-left">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" aria-current="true" href="<?php echo URL; ?>">Home</a>
      </li>
      <li class="nav-item">
         <a class="nav-link " aria-current="true" href="<?php echo URL; ?>/golongan">Golongan</a>
      </li>
     <li class="nav-item">
         <a class="nav-link " aria-current="true" href="<?php echo URL; ?>/pelanggan">Pelanggan</a>
      </li>
      <li class="nav-item">
         <a class="nav-link " aria-current="true" href="<?php echo URL; ?>/user">User</a>
      </li>
      <li class="nav-item">
         <a class="nav-link " aria-current="true" href="<?php echo URL; ?>/login">Logout</a>
      </li>
    </ul>
  </div>
  <div class="container">
    <div class="card-body">
      <p class="card-title"></p>
      <?php require_once ROOT . "app/views/" . $view . ".php"; ?>
      
    </div>
  </div>
  <div class="card-footer text-muted" >
    copyright &copy; 2022
  </div>

	</main>
</body>

</html>