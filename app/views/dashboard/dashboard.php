<?php
// Menandai halaman ini sebagai halaman 'dashboard' aktif untuk sidebar
$current_page = 'dashboard';

// Mengambil nama depan user dari session untuk sapaan
$nama_depan = isset($_SESSION['user_name']) ? explode(' ', htmlspecialchars($_SESSION['user_name']))[0] : 'User';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - UACAD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/dashboard.css">
</head>
<body>

<div class="d-flex" id="dashboard-wrapper">
    <?php require_once '_sidebar.php'; ?>

    <main class="main-content">
        <header class="mobile-header d-lg-none">
            <button class="sidebar-toggler" type="button" id="sidebarToggler">
                <svg xmlns="http://www.w3.org/2000/svg" height="28px" viewBox="0 0 24 24" width="28px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/></svg>
            </button>
            <h1 class="mobile-logo">UACAD</h1>
        </header>

        <div class="container-fluid">
            <header class="content-header">
                <h2>Selamat Pagi, <?php echo $nama_depan; ?>!</h2>
                <div class="header-actions">
                    <a href="#" class="header-icon"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg></a>
                    <a href="#" class="header-icon"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg></a>
                </div>
            </header>

            <section class="my-4">
                <h4 class="section-title">Acara Terdekat Anda</h4>
                <div class="event-carousel d-flex">
                    <?php for($i=0; $i<5; $i++): ?>
                    <div class="card event-card-sm">
                        <div class="card-body d-flex flex-column">
                            <div>
                                <h6 class="card-title">Event Organizer Student Staff</h6>
                                <p class="card-text text-muted">
                                    <svg class="icon-sm" viewBox="0 0 24 24"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/><path d="M12.5 7H11v6l5.25 3.15.75-1.23-4.5-2.67z"/></svg>
                                    <span>19:00 - 20:00</span>
                                </p>
                                <p class="card-text text-muted">
                                    <svg class="icon-sm" viewBox="0 0 24 24"><path d="M20 3h-1V1h-2v2H7V1H5v2H4c-1.1 0-2 .9-2 2v15c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 17H4V8h16v12z"/></svg>
                                    <span>2 Januari 2025</span>
                                </p>
                                <p class="card-text text-muted">
                                    <svg class="icon-sm" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                                    <span>Learning Space 2</span>
                                </p>
                            </div>
                            <a href="#" class="btn btn-dark btn-sm w-100 mt-auto">Detail</a>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
            </section>

            <div class="row">
                <div class="col-lg-7">
                    <section class="my-4">
                        <h4 class="section-title">Jadwal Anda</h4>
                        <div class="widget-card calendar-widget">
                            <div class="calendar-header">August</div>
                            <div class="calendar-grid">
                                <div class="day-name">Mo</div><div class="day-name">Tu</div><div class="day-name">We</div><div class="day-name">Th</div><div class="day-name">Fr</div><div class="day-name">Sa</div><div class="day-name">Su</div>
                                <div class="calendar-day other-month">28</div><div class="calendar-day other-month">29</div><div class="calendar-day other-month">30</div><div class="calendar-day other-month">31</div><div class="calendar-day">1</div><div class="calendar-day">2</div><div class="calendar-day">3</div>
                                <div class="calendar-day">4</div><div class="calendar-day">5</div><div class="calendar-day">6</div><div class="calendar-day">7</div><div class="calendar-day">8</div><div class="calendar-day">9</div><div class="calendar-day">10</div>
                                <div class="calendar-day">11</div><div class="calendar-day">12</div><div class="calendar-day">13</div><div class="calendar-day">14</div><div class="calendar-day">15</div><div class="calendar-day">16</div><div class="calendar-day">17</div>
                                <div class="calendar-day">18</div><div class="calendar-day">19</div><div class="calendar-day">20</div><div class="calendar-day">21</div><div class="calendar-day">22</div><div class="calendar-day">23</div><div class="calendar-day">24</div>
                                <div class="calendar-day">25</div><div class="calendar-day">26</div><div class="calendar-day">27</div><div class="calendar-day">28</div><div class="calendar-day">29</div><div class="calendar-day">30</div><div class="calendar-day today">31</div>
                                <div class="calendar-day">1</div><div class="calendar-day">2</div><div class="calendar-day">3</div><div class="calendar-day">4</div><div class="calendar-day">5</div><div class="calendar-day">6</div><div class="calendar-day">7</div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-lg-5">
                    <section class="my-4">
                         <h4 class="section-title">Soft Skill Anda</h4>
                         <div class="widget-card placeholder-widget"></div>
                    </section>
                     <section class="my-4">
                         <h4 class="section-title">Dibuat Untuk Anda</h4>
                         <div class="widget-card placeholder-widget"></div>
                    </section>
                </div>
            </div>
        </div>
    </main>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<?php require_once '_script.php'; ?>
</body>
</html>