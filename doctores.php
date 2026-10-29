<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Panel administrativo de gestión de citas médicas">
    <title>MediCitas - Panel Administrativo</title>

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-heartbeat"></i>
                </div>
                <div class="sidebar-brand-text mx-3">MediCitas</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Panel</span></a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">Gestión médica</div>
            <li class="nav-item">
                <a class="nav-link" href="pacientes.php">
                    <i class="fas fa-fw fa-user-injured"></i>
                    <span>Pacientes</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="doctores.php">
                    <i class="fas fa-fw fa-user-md"></i>
                    <span>Doctores</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="agendar-cita.php">
                    <i class="fas fa-fw fa-calendar-plus"></i>
                    <span>Agendar Cita</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="historial-clinico.php">
                    <i class="fas fa-fw fa-notes-medical"></i>
                    <span>Historial Clínico</span></a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar paciente o cita..."
                                aria-label="Buscar">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button"><i class="fas fa-search fa-sm"></i></button>
                            </div>
                        </div>
                    </form>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link" href="agendar-cita.php" title="Agendar cita">
                                <i class="fas fa-bell fa-fw"></i>
                                <span class="badge badge-danger badge-counter">3</span>
                            </a>
                        </li>
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Administración</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg" alt="Perfil">
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Doctores</h1>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card shadow h-100">
                                <div class="card-body text-center">
                                    <img class="rounded-circle mb-3" src="img/undraw_profile_1.svg" width="80" alt="Dra. Patricia Núñez">
                                    <h5 class="font-weight-bold text-gray-800 mb-1">Dra. Patricia Núñez</h5>
                                    <p class="text-primary mb-1">Cardiología</p>
                                    <p class="small text-gray-600 mb-2"><i class="far fa-clock"></i> Lun - Mié - Vie</p>
                                    <span class="badge badge-success">Disponible</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card shadow h-100">
                                <div class="card-body text-center">
                                    <img class="rounded-circle mb-3" src="img/undraw_profile_2.svg" width="80" alt="Dr. Manuel Castillo">
                                    <h5 class="font-weight-bold text-gray-800 mb-1">Dr. Manuel Castillo</h5>
                                    <p class="text-primary mb-1">Pediatría</p>
                                    <p class="small text-gray-600 mb-2"><i class="far fa-clock"></i> Lun a Vie</p>
                                    <span class="badge badge-success">Disponible</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card shadow h-100">
                                <div class="card-body text-center">
                                    <img class="rounded-circle mb-3" src="img/undraw_profile_3.svg" width="80" alt="Dra. Elena Vargas">
                                    <h5 class="font-weight-bold text-gray-800 mb-1">Dra. Elena Vargas</h5>
                                    <p class="text-primary mb-1">Dermatología</p>
                                    <p class="small text-gray-600 mb-2"><i class="far fa-clock"></i> Mar - Jue</p>
                                    <span class="badge badge-warning">En consulta</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card shadow h-100">
                                <div class="card-body text-center">
                                    <img class="rounded-circle mb-3" src="img/undraw_profile_1.svg" width="80" alt="Dr. Andrés Polanco">
                                    <h5 class="font-weight-bold text-gray-800 mb-1">Dr. Andrés Polanco</h5>
                                    <p class="text-primary mb-1">Medicina General</p>
                                    <p class="small text-gray-600 mb-2"><i class="far fa-clock"></i> Lun a Sáb</p>
                                    <span class="badge badge-success">Disponible</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card shadow h-100">
                                <div class="card-body text-center">
                                    <img class="rounded-circle mb-3" src="img/undraw_profile_2.svg" width="80" alt="Dra. Sofía Reyes">
                                    <h5 class="font-weight-bold text-gray-800 mb-1">Dra. Sofía Reyes</h5>
                                    <p class="text-primary mb-1">Ginecología</p>
                                    <p class="small text-gray-600 mb-2"><i class="far fa-clock"></i> Lun - Mié</p>
                                    <span class="badge badge-secondary">De vacaciones</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card shadow h-100">
                                <div class="card-body text-center">
                                    <img class="rounded-circle mb-3" src="img/undraw_profile_3.svg" width="80" alt="Dr. Ricardo Peña">
                                    <h5 class="font-weight-bold text-gray-800 mb-1">Dr. Ricardo Peña</h5>
                                    <p class="text-primary mb-1">Traumatología</p>
                                    <p class="small text-gray-600 mb-2"><i class="far fa-clock"></i> Mar - Jue - Sáb</p>
                                    <span class="badge badge-warning">En consulta</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>MediCitas &copy; 2026 · Panel administrativo de citas médicas</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
