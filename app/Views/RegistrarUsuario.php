<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Registar Usuario</title>

    <link href="css/regitrarUsuario.css" rel="stylesheet" />
    <?php include 'include/linkHEAD.php';?>
</head>

<body class="sb-nav-fixed">
    <?php include 'include/navBar.php';?>
    <!-- contenido -->
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="text-center">REGISTRAR USUARIO</h1>
                <form class="formulario">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Nombre completo</label>
                            <input type="text" class="form-control" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Apellido Paterno</label>
                            <input type="text" class="form-control" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Apellido Materno</label>
                            <input type="text" class="form-control" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Usuario</label>
                            <input type="text" class="form-control" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Contraseña</label>
                            <input type="password" class="form-control" id="inputPassword4">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Confirmar contraseña</label>
                            <input type="password" class="form-control" id="inputPassword4">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputAddress">Número de DNI</label>
                            <input type="text" class="form-control" id="inputAddress">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputAddress2">Número de celular</label>
                            <input type="text" class="form-control" id="inputAddress2">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">Correo</label>
                            <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState">Tipo de usuario <i class="fa-solid fa-crown"></i> </label>
                            <select id="inputState" class="form-control">
                                <option selected>--Seleccionar opción--</option>
                                <option>Adminitrador</option>
                                <option>Empleado</option>
                            </select>
                        </div>
                    </div>

                    <button type="reset" class="btn btn-warning float-end "><i class="fa-solid fa-brush"></i> Limpiar </button>
                    <button type="submit" class="btn btn-success float-end me-2"><i class="fa-solid fa-address-card"></i> Registrar</button>
                    

                </form>
            </div>
        </main>
    </div>
    </div>
    <!-- insertar link foot -->
    <?php include 'include/linkFOOT.php';?>
</body>

</html>

</html>