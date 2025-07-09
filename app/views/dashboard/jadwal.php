<?php $current_page = 'jadwal'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal - UACAD</title>
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
                <h2>Aktivitas Anda</h2>
            </header>

            <div class="custom-tabs">
                <a href="#" class="tab-item active">Jadwal Anda</a>
                <a href="#" class="tab-item">Riwayat</a>
            </div>

            <div class="row mt-4">
                <div class="col-lg-7">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                         <h4 class="section-title mb-0">Kalendar</h4>
                         <div class="calendar-actions">
                             <a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M10 18h4v-2h-4v2zM3 6v2h18V6H3zm3 7h12v-2H6v2z"/></svg></a>
                             <a href="#" class="ms-2"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"/></svg></a>
                         </div>
                    </div>
                    <div class="widget-card calendar-widget">
                         <div class="calendar-header">August</div>
                         <div class="calendar-grid">
                            <div class="day-name">Mo</div><div class="day-name">Tu</div><div class="day-name">We</div><div class="day-name">Th</div><div class="day-name">Fr</div><div class="day-name">Sa</div><div class="day-name">Su</div>
                            <div class="calendar-day other-month">28</div><div class="calendar-day other-month">29</div><div class="calendar-day other-month">30</div><div class="calendar-day other-month">31</div><div class="calendar-day">1</div><div class="calendar-day">2</div><div class="calendar-day">3</div>
                            <div class="calendar-day">4</div><div class="calendar-day">5</div><div class="calendar-day">6</div><div class="calendar-day">7</div><div class="calendar-day">8</div><div class="calendar-day">9</div><div class="calendar-day">10</div>
                            <div class="calendar-day">11</div><div class="calendar-day">12</div><div class="calendar-day">13</div><div class="calendar-day">14</div><div class="calendar-day">15</div><div class="calendar-day">16</div><div class="calendar-day">17</div>
                            <div class="calendar-day">18</div><div class="calendar-day">19</div><div class="calendar-day">20</div><div class="calendar-day">21</div><div class="calendar-day">22</div><div class="calendar-day">23</div><div class="calendar-day">24</div>
                            <div class="calendar-day">25</div><div class="calendar-day">26</div><div class="calendar-day">27</div><div class="calendar-day">28</div><div class="calendar-day">29</div><div class="calendar-day">30</div><div class="calendar-day today">31</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <h4 class="section-title mb-3">Daftar Agenda</h4>
                    <div class="agenda-list row">
                        <?php for($i=0; $i<8; $i++): ?>
                        <div class="col-md-6 mb-3">
                            <div class="card event-card-sm h-100">
                                <div class="card-body">
                                    <h6 class="card-title">Event Organizer Staff</h6>
                                    <p class="card-text"><small>19:00 - 20:00</small></p>
                                    <p class="card-text"><small>2 Januari 2025</small></p>
                                    <p class="card-text"><small>Learning Space 2</small></p>
                                    <a href="#" class="btn btn-primary btn-sm stretched-link mt-2">Detail</a>
                                </div>
                            </div>
                        </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<?php require_once '_script.php'; ?>
</body>
</html>