<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <?php include 'include/linkHEAD.php';?>


</head>

<body class="sb-nav-fixed">
    <?php include 'include/navBar.php';?>
        <!-- contenido -->
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Bienvenido <?=session('nombre')?> </h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Panel de control</li>
                    </ol>
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">Productos</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">Ver detalles</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-warning text-white mb-4">
                                <div class="card-body">Alumnos</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">Ver detalles</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body">Ventas</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">Ver detalles</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-danger text-white mb-4">
                                <div class="card-body">Soporte Técnico</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">Ver detalles</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- contenido -->
                <div class="container-fluid px-4">
                    <div class="row">
                        <div class="col">
                            <table id="dataTable" class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre</th>
                                        <th>Precio</th>
                                        <th>Stock</th>
                                    </tr>
                                </thead>
                                <tbody id="tableBody"></tbody>
                            </table>
                            <!-- asdasd -->
                            <table id="tabla2" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Job</th>
                                        <th>Created at</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <<th>id</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Job</th>
                                        <th>Created at</th>
                                    </tr>
                                </tfoot>
                            </table>
                            <!-- asdas -->
                        </div>
                    </div>
                </div>
                <!-- fin contenido -->
            </main>
            <?php include 'include/footer.php';?>
        </div>
    </div>
    <!-- insertar link foot -->
    <?php include 'include/linkFOOT.php';?>
</body>

</html>

</html>