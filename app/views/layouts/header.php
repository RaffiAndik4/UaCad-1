<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UACAD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/style.css">
    <style>
        body { background-color: #f8f9fa; }
        .card-img-top {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-white shadow-sm">
    <div class="container-fluid homepage">
        <a class="navbar-brand fw-bold" href="<?php echo BASE_URL; ?>/home">UACAD</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link" href="#">Fakultas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Organisasi</a>
                </li>
                <li class="nav-item ms-lg-3">
                    <a class="nav-link" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                    </a>
                </li>
                <li class="nav-item ms-lg-3">
                    <a class="nav-link" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                            <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.654-.451 4.085a.772.772 0 0 0 .522.699h1.352a.772.772 0 0 0 .522-.699c-.317-1.431-.451-3.457-.451-4.085 0-.217.016-.42.041-.61a1.99 1.99 0 0 0-.347-.687l-.29-.162c.112-.33.291-.654.557-.961V2H5a1 1 0 0 0-1 1v1h1.964a1 1 0 0 0-.898 1.978l-.122.2C2.682 6.121 2 7.234 2 8s.682 1.879 2.682 3.879c.199.228.459.54.68.84A5 5 0 0 0 8 13c.207-.007.414-.019.615-.043a3 3 0 0 0 .618-.215c.215-.164.434-.37.608-.608a3 3 0 0 0 .215-.618c.024-.201.036-.407.043-.615a5 5 0 0 0 2.318-3.079c.221-.3.481-.612.68-.84C14 9.879 14.682 8 14 6s-.682-1.879-2.682-3.879l-.122-.2A1 1 0 0 0 10.036 3H12V2a1 1 0 0 0-1-1H8v.961c.266.307.445.631.557.961l-.29.162a1.99 1.99 0 0 0-.347.687c.025.21.041.413.041.61 0 .695-.167 1.35-4.084 1.35-4.084 0-4.084-1.35-4.084-1.35S4.008 6.695 4 6c0-.355.04-.697.121-1.012l.797-.161z"/>
                        </svg>
                    </a>
                </li>
                <li class="nav-item dropdown ms-lg-3">
                    <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="public\images\profile.png" alt="User Avatar" class="rounded-circle me-2" width="30" height="30">
                        <div class="d-flex flex-column align-items-start">
                            <span class="fw-bold"><?php echo htmlspecialchars($_SESSION['user_name']); ?></span>
                            <small class="text-muted">Mahasiswa</small>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down ms-2" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                        </svg>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                        <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>/dashboard">Dashboard</a></li> 
                        <li><a class="dropdown-item" href="#">Jadwal</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>/logout">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main class="container mt-4"></main>