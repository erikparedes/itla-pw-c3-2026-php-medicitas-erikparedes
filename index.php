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
            <li class="nav-item active">
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
                        <h1 class="h3 mb-0 text-gray-800">Panel de control</h1>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Citas de hoy</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">24</div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-calendar-check fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pacientes registrados</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">1,248</div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-user-injured fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Doctores activos</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-user-md fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Citas pendientes</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">7</div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-clock fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Citas atendidas por mes</h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area"><canvas id="graficoCitas"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Citas por especialidad</h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2"><canvas id="graficoEspecialidades"></canvas></div>
                                    <div class="mt-4 text-center small">
                                        <span class="mr-2"><i class="fas fa-circle text-primary"></i> Medicina General</span>
                                        <span class="mr-2"><i class="fas fa-circle text-success"></i> Pediatría</span>
                                        <span class="mr-2"><i class="fas fa-circle text-info"></i> Cardiología</span>
                                        <span class="mr-2"><i class="fas fa-circle text-warning"></i> Otras</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary">Próximas citas de hoy</h6>
                            <a href="agendar-cita.php" class="btn btn-sm btn-primary"><i class="fas fa-plus fa-sm"></i> Agendar cita</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="tablaCitas" width="100%" cellspacing="0">
                                    <thead><tr><th>Hora</th><th>Paciente</th><th>Doctor</th><th>Especialidad</th><th>Estado</th></tr></thead>
                                    <tbody>
                                    <tr><td>08:30</td><td>María Rodríguez</td><td>Dra. Patricia Núñez</td><td>Cardiología</td><td><span class="badge badge-success">Confirmada</span></td></tr>
                                    <tr><td>09:15</td><td>Ana Pérez</td><td>Dra. Elena Vargas</td><td>Dermatología</td><td><span class="badge badge-success">Confirmada</span></td></tr>
                                    <tr><td>10:00</td><td>Luis Fernández</td><td>Dr. Ricardo Peña</td><td>Traumatología</td><td><span class="badge badge-warning">En espera</span></td></tr>
                                    <tr><td>11:30</td><td>Laura Díaz</td><td>Dr. Andrés Polanco</td><td>Medicina General</td><td><span class="badge badge-info">Pendiente</span></td></tr>
                                    <tr><td>14:00</td><td>Rafael Jiménez</td><td>Dra. Patricia Núñez</td><td>Cardiología</td><td><span class="badge badge-info">Pendiente</span></td></tr>
                                    </tbody>
                                </table>
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
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script>
        Chart.defaults.global.defaultFontFamily = 'Nunito';
        new Chart(document.getElementById('graficoCitas'), {
            type: 'line',
            data: {
                labels: ['May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct'],
                datasets: [{ label: 'Citas', data: [312, 348, 330, 365, 402, 428], lineTension: 0.3,
                    backgroundColor: 'rgba(78, 115, 223, 0.08)', borderColor: 'rgba(78, 115, 223, 1)',
                    pointBackgroundColor: 'rgba(78, 115, 223, 1)', pointRadius: 4 }]
            },
            options: { maintainAspectRatio: false, legend: { display: false } }
        });
        new Chart(document.getElementById('graficoEspecialidades'), {
            type: 'doughnut',
            data: {
                labels: ['Medicina General', 'Pediatría', 'Cardiología', 'Otras'],
                datasets: [{ data: [40, 25, 20, 15], backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc', '#f6c23e'] }]
            },
            options: { maintainAspectRatio: false, legend: { display: false }, cutoutPercentage: 75 }
        });
    </script>
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script>
        $(function () {
            $('.table').DataTable({ language: { search: 'Buscar:', lengthMenu: 'Mostrar _MENU_ registros',
                info: 'Mostrando _START_ a _END_ de _TOTAL_', paginate: { previous: 'Anterior', next: 'Siguiente' } } });
        });
    </script>
</body>

</html>
