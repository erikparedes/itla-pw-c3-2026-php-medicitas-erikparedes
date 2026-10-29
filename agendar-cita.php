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
            <li class="nav-item">
                <a class="nav-link" href="doctores.php">
                    <i class="fas fa-fw fa-user-md"></i>
                    <span>Doctores</span></a>
            </li>
            <li class="nav-item active">
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
                        <h1 class="h3 mb-0 text-gray-800">Agendar Cita</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3"><h6 class="m-0 font-weight-bold text-primary">Nueva cita</h6></div>
                                <div class="card-body">
                                    <form>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="paciente">Paciente</label>
                                                <select id="paciente" class="form-control">
                                                    <option>María Rodríguez</option>
                                                    <option>José Martínez</option>
                                                    <option>Ana Pérez</option>
                                                    <option>Luis Fernández</option>
                                                    <option>Carmen Santos</option>
                                                    <option>Pedro Gómez</option>
                                                    <option>Laura Díaz</option>
                                                    <option>Rafael Jiménez</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="doctor">Doctor</label>
                                                <select id="doctor" class="form-control">
                                                    <option>Dra. Patricia Núñez – Cardiología</option>
                                                    <option>Dr. Manuel Castillo – Pediatría</option>
                                                    <option>Dra. Elena Vargas – Dermatología</option>
                                                    <option>Dr. Andrés Polanco – Medicina General</option>
                                                    <option>Dra. Sofía Reyes – Ginecología</option>
                                                    <option>Dr. Ricardo Peña – Traumatología</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="fecha">Fecha</label>
                                                <input type="date" id="fecha" class="form-control" value="2026-11-03">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="hora">Hora</label>
                                                <input type="time" id="hora" class="form-control" value="09:30">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="motivo">Motivo de la consulta</label>
                                            <textarea id="motivo" class="form-control" rows="3">Control de presión arterial</textarea>
                                        </div>
                                        <button type="button" class="btn btn-primary"><i class="fas fa-calendar-plus"></i> Agendar cita</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card shadow mb-4 border-left-info">
                                <div class="card-body">
                                    <h6 class="font-weight-bold text-info">Horario de atención</h6>
                                    <p class="mb-1">Lunes a viernes: 7:00 a. m. – 7:00 p. m.</p>
                                    <p class="mb-0">Sábados: 8:00 a. m. – 12:00 m.</p>
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
