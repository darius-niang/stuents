<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <title>CONNEXION</title>
  </head>
  <body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	
	<div class="col-md-3 p-0 row-cols-1 container justify-content-center">
	  <div class="text-primary col bg-secondary text-light pt-auto pb-auto h3" style="height: 55px; text-align: center;" >
		Signez votre presence
	  </div>
		<div class="container row d-flex flex-row justify-content-center">
		<div class="admin-form shadow p-4">
			<form class="" action="trait_attendance.php" method="POST" id="presence">
				<div id="message"></div>
				  <div class="form-group  mb-3">
					<label for="" class="form-label text-bold text-danger"> Votre Email:</label>
					<input type="text" name="email" id="" value="" class="form-control " autocomplete="off">
				  </div>
				  <div class="form-group mb-3">
					<label for="" class="form-label text-bold text-danger">Mot de Passe:</label>
					<input type="password" name="mdp" id="" value="" class="form-control" autocomplete="off">
				  </div>
				  <input type="submit" class="btn btn-secondary" name="submit" value="connexion"><br>
				  <a href="#">J'ai oublié mon mot de passe</a>
				</div>
			</form>
		</div>
	</div>
 </body>
</html>	

<!-- <div class="col-md-8 row  justify-content-center " id="form">
<?php if (isset($message) and !empty($message)) {?>

<div class="alert alert-success alert-dismissible fade show " role ="alert" id="alert" >
<?=$message?>
	<button type="button" class="close" data-dismiss="alert" aria-label="close" >&times;</button>

</div>
<?php  } ?>
</div> -->

 