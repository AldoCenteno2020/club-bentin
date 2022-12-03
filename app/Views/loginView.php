<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Club Bentín</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/login.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="img/user3.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form method="post" action="<?=base_url('login')?>">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text h-100"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="usuario" class="form-control input_user" value="" placeholder="Usuario">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text h-100"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="password" class="form-control input_pass" value="" placeholder="Contraseña">
						</div>
						
						<div class="d-flex justify-content-center mt-3 login_container">
                            <input type="submit" value="Iniciar sesión" class="btn login_btn">                                
                            <!-- <button type="button" name="button" class="btn login_btn">Iniciar sesión</button> -->
                        </div>
					</form>
				</div>
		
				<div class="mt-4">
					<div class="d-flex justify-content-center links text-center">
						Estimado usuario, recuerda no compartir tu contraseña
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>