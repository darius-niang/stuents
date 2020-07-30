

<!doctype html>
<html lang="en"> 
	<head>	
	  <title>formulaire ajax</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	  <script src="insert.js"></script>

	</head>
	<body>
		<div class="col-md-5 p-0 row-cols-1 container justify-content-center">
			<div class="text-success col bg-info text-light pt-auto pb-auto h3" style="height: 60px; text-align: center;" >
				Veuillez vous enregistrer
			</div>

			<div class="container admin-form shadow p-4">
				<div class="row">
				<div class="col-10-md-6 offset-3">
					 
					<form action="trait_register.php" id="register-form" method="POST" >
						<div id="message"></div>
						<div class="form-group">
							<label for="" class="form-label text-bold text-dark">nom</label>
							<input type="text" name="nom" id="fullname" class="form-control" placeholder="votre nom">
							
						</div>
						<div class="form-group">
							<label for="" class="form-label text-bold text-dark">prenoms</label>
							<input type="text" name="prenoms" id="fullprenoms" class="form-control" placeholder="votre prenoms">
							
						</div>
						<div class="form-group">
							<label for="" class="form-label text-bold text-dark">email</label>
							<input type="email" name="email" id="email" class="form-control" placeholder="votre email">
							
						</div>

						<div class="form-group">
							<label for="" class="form-label text-bold text-dark">Mot de passe</label>
							<input type="password" name="mdp" id="mdp" class="form-control" placeholder="votre Mot de passe">
							
						</div>

						<div class="form-group">
							<label for="" class="form-label text-bold text-dark">Mot de passe</label>
							<input type="password" name="mdp2" id="mdp_c" class="form-control" placeholder="Reprendre le mot de passe">
							
						</div>

						 
							<button type="submit" class=" btn btn-success" id="mysubmit" name="send" value="send"> Valider </button> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <button type="submit" class=" btn btn-primary" id="mysubmit" name="send" value="send"> se connecter </button>
							   
					</form>
				</div>
			</div>
	    </div>
    </body>
</html>