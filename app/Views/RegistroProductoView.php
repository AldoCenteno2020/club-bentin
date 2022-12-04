<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!--    Datatables  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.dataTables.min.css" />

    <title>Document</title>
</head>
<!-- <body>
    <H1>esto es un h1 del PanelController</H1>
    hola <session('nombre') 

</body> -->
<!DOCTYPE html>


<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="navbar/css/styles.css" rel="stylesheet" />
    <link href="css/RegistroProductostyle.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">Club Bentín</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <div class="form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?= session('nombre') ?> <i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Perrfil</a></li>
                        <li><a class="dropdown-item" href="#!">Configuración</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="<?= base_url('cerrar-sesion') ?>">Cerrar sesión</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Control</div>
                        <a class="nav-link" href="<?= 'panel' ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Opciones</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Productos
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?= base_url('Registro-Producto') ?>">Registrar producto</a>
                                <a class="nav-link" href="#">Stock de productos</a>
                                <a class="nav-link" href="#">Venta de productos</a>
                            </nav>
                        </div>

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Matrículas
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="#">Matricular alumno</a>
                                <a class="nav-link" href="#">Lista de matriculados</a>
                                <a class="nav-link" href="#">Realizar pago</a>
                            </nav>
                        </div>

                        <div class="sb-sidenav-menu-heading">Privilegios</div>
                        <a class="nav-link" href="charts.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Agregar usuario
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Navegador</div>
                    Club Bentín
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">

            <!-- cuerpo de la página -->
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Registro de Productos</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Panel de control</li>
                    </ol>



                    <div class="row Tabla-Productos ">


                        <div class="col-lg-12">
                            <table id="tabla-responsive" class="table table-striped display nowrap " style="width:100%">
                                <thead class=" cabecera-tabla ">
                                    <tr>
                                        <th class="celda-principal">Producto</th>
                                        <th>P. unitario</th>
                                        <th>Stock</th>
                                        <th>Categoría</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class="cuerpo-tabla">
                                    <?php foreach ($datos as $key) : ?>
                                        <tr>
                                            <td> <?php echo $key->Nombre_Productos ?> </td>
                                            <td> <?php echo $key->Precio_Productos ?> </td>
                                            <td> <?php echo $key->Stock_Productos ?> </td>
                                            <td> <?php echo $key->Categorías_productos_ID_Categorias ?></td>
                                            <td>
                                                <div class="d-grid mx-auto"> <a href="<?= base_url() . '/ObtenerUsuario/$key->ID_Productos' ?>" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></a></div>
                                            </td>
                                            <td>
                                                <div class="d-grid mx-auto"> <a href="" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a></div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>


                                </tbody>
                            </table>

                        </div>


                    </div>

                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Realizado por Aldo Centeno y Jorge Velasquez</div>
                        <div>
                            <a href="#">Política privada</a>
                            &middot;
                            <a href="#">Términos &amp; Condiciones</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="bootstrap/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="navbar/js/scripts.js"></script>
    <script src="navbar/assets/demo/chart-area-demo.js"></script>
    <script src="navbar/assets/demo/chart-bar-demo.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


    <!--    Datatables-->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>



    <script>
        const dataTableOptions = {
            scrollX: "1400px", //le pone una barra de desplazamiento suponiendo que sea una data grande
            // lengthMenu: [5, 10, 15, 20, 100, 200, 500],
            columnDefs: [{
                    className: "centered",
                    targets: [0, 1, 2]
                },
                {
                    orderable: false,
                    targets: [2]
                }, // es para cancelar el ordenamiento de las columnas indicadas, inicia en 0
                // { searchable: false, targets: [0,2] }//para indicar que no busque en estas columnas
                //{ width: "50%", targets: [0] }
            ],
            // pageLength: 3,
            destroy: true,
            language: {
                
                Show: "mostrar",
                //lengthMenu: "Mostrar MENU registros por página",
                zeroRecords: "Ningún usuario encontrado",
                //info: "Mostrando de START a END de un total de TOTAL registros",
                infoEmpty: "Ningún usuario encontrado",
                infoFiltered: "(filtrados desde MAX registros totales)",
                search: "Buscar:",
                loadingRecords: "Cargando...",
                paginate: {
                    first: "Primero",
                    last: "Último",
                    next: "Siguiente",
                    previous: "Anterior"
                }
            }
        };
        $(document).ready(function() {
            $('#tabla-responsive').DataTable(dataTableOptions);
        });
    </script>


</body>

</html>

</html>