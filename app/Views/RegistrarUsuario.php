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
                <form class="formulario" action="insertar-usuario" method="post">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Nombre completo</label>
                            <input type="text" class="form-control" id="nombre" name="nombre">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Apellido Paterno</label>
                            <input type="text" class="form-control" id="apellidoP" name="apellidoP">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Apellido Materno</label>
                            <input type="text" class="form-control" id="apellidoM" name="apellidoM">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Usuario</label>
                            <input type="text" class="form-control" id="usuario" name="usuario">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Contraseña</label>
                            <input type="password" class="form-control" id="contra1" name="contra1">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Confirmar contraseña</label>
                            <input type="password" class="form-control" id="contra2" name="contra2">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputAddress">Número de DNI</label>
                            <input type="text" class="form-control" id="dni" name="dni">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputAddress2">Número de celularss</label>
                            <input type="text" class="form-control" id="fono" name="fono">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">Correo</label>
                            <input type="email" class="form-control" id="correo" name="correo">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState">Tipo de usuario <i class="fa-solid fa-crown"></i> </label>
                            <select class="form-control" id="select-rol" name="select-rol">
                                <option value="0" selected>--Seleccionar opción--</option>
                                <?php foreach($rol as $roles):?>
                                    <option value="<?= $roles['ID_Tipo_Usuarios'] ?>" ><?= $roles['Nombre_Tipo_Usuarios'] ?></option>
                                <?php endforeach; ?>

                                <!-- validar para que no cambien el rol -->
                            </select>
                        </div>
                    </div>

                    <button type="reset" class="btn btn-warning float-end "><i class="fa-solid fa-brush"></i> Limpiar </button>
                    <button type="submit" class="btn btn-success float-end me-2"><i class="fa-solid fa-address-card"></i> Registrar</button>
                    <!-- <input type="submit" class="btn btn-success float-end me-2" value="Registrar"> -->

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