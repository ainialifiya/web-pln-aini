<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?php echo URL; ?>layouts/assets/images/icon.ico" rel="shortcut icon">
	<link rel="stylesheet" href="<?php echo URL; ?>/layouts/assets/css/bootstrap.css">
	<title>PLN</title>
</head>

<body>
	<main>
		<header>
			<h2>PLN-AINI SUKSES</h2>
		</header>
		<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">PLN</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo URL; ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URL; ?>/golongan">Golongan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URL; ?>/pelanggan">User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URL; ?>/login">Logout</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>

  <div class="container">
    <div class="card-body">
      <p class="card-title"></p>
      <?php require_once ROOT . "app/views/" . $view . ".php"; ?>
      
    </div>
		<footer>
			copyright &copy; 2022
		</footer>

	</main>
</body>

</html>