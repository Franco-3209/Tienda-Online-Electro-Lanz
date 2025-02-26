<?php session_start();
if (empty($_SESSION['id'])) {
    header('Location: ./');
} ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="El Rincon Del Electricista">
    <meta name="keywords" content="Electro Lanz, Electricista, Electricidad, Calculos electricos, Ley de Ohm, Calculo Potencia Electrica, Conocimientos en Electricidad, Calculo de Mano de Obra Electricidad">
    <meta name="author" content="Franco Libertini">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="imgage/png" href="../assets/img/Logo_ferreteria.png">
    <title>Tienda Online</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/styles.css">


</head>

<body id="page-top">
<header class="tienda py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <a href="../index.php#tienda"><img src="../assets/img/Logo_ferreteria.png" alt=""></a>
                <?php if (isset($_SESSION['active']) && $_SESSION['active']): ?>
        <?php $nombre = isset($_SESSION['user']) ? htmlspecialchars($_SESSION['user']) : 'Usuario'; ?>
        <p>Bienvenido al Gestor de Articulos y categorias, <?php echo $nombre; ?>!</p>
                <?php endif; ?>
            </div>
        </div>
    </header>
    <div id="wrapper">
        <ul class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center " href="./index.php">
                    <img src="../assets/img/Logo_ferreteria.png" class=" w-50" alt="">
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Menús</span></a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link" href="categorias.php">
                    <i class="fas fa-tag"></i>
                    <span>Categorias</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="productos.php">
                    <i class="fas fa-list"></i>
                    <span>Productos</span></a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<tr></tr>
<br>
<br>
<li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle d-flex flex-column justify-content-center align-items-center" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sesion-admin">
                                    <?php if (isset($_SESSION['active']) && $_SESSION['active']): ?>
        <?php $nombre = isset($_SESSION['user']) ? htmlspecialchars($_SESSION['user']) : 'Usuario'; ?>
        <p>Bienvenido</p>
        <p><?php echo $nombre; ?>!</p>
                <a href="../logout.php" class="btn btn-danger">Cerrar Sesión</a>
                                    <?php endif; ?></span> 
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="../salir.php">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Salir
                                </a>
                            </div>
                        </li>
        </ul>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        

                    </ul>

                </nav>

</body>     