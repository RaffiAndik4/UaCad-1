<?php 
// Di bagian atas file view ini, Anda biasanya akan memanggil header
require_once '../app/views/layouts/header.php'; 
?>

<div class="container-fluid homepage">
    <section class="hero-section bg-warning-custom rounded-4 p-4 p-md-5 mb-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="display-4 fw-bold text-dark">Your studies, <br>your way</h1>
                <p class="lead my-4 text-dark">
                    With UACAD, your studies are fully in your hands - personalize your schedule, keep track of campus events, and get recommendations that match your academic journey. Experience a smarter, more flexible way to manage your academic life, designed to support your goals and help you stay ahead.
                </p>
                <a href="#" class="btn btn-dark btn-lg fw-bold">Recommend Event</a>
            </div>
            <div class="col-lg-6 text-center d-none d-lg-block">
                <img src="public/images/hero-illustration.png" alt="Hero Illustration" class="img-fluid">
            </div>
        </div>
    </section>

    <h2 class="section-title text-center fw-bold">Never miss a moment on Campus</h2>

    <section class="event-section my-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-bold"><span class="highlight-yellow">On Going</span> Event</h3>
            <div class="carousel-controls fw-bold">
                &larr; 99/99 &rarr;
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="card event-card h-100">
                    <div class="card-img-container">
                        <img src="public\images\event-image.jpg" class="card-img-top" alt="Event Image">
                        <span class="category-tag">Informatika</span>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold">Komisi A PORSEMATIK 2024</h5>
                        <a href="#" class="btn btn-custom-dark mt-auto">Daftar Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card event-card h-100">
                    <div class="card-img-container">
                        <img src="public\images\event-image.jpg" class="card-img-top" alt="Event Image">
                        <span class="category-tag">FTI</span>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold">PDD FTI FEST 2025</h5>
                        <a href="#" class="btn btn-custom-yellow mt-auto">Daftar Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card event-card h-100">
                     <div class="card-img-container">
                        <img src="public\images\event-image.jpg" class="card-img-top" alt="Event Image">
                        <span class="category-tag">Informatika</span>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold">Sosial Media Designer Student Staff</h5>
                        <a href="#" class="btn btn-custom-dark mt-auto">Daftar Sekarang</a>
                    </div>
                </div>
            </div>
             <div class="col-lg-3 col-md-6">
                <div class="card event-card h-100">
                     <div class="card-img-container">
                        <img src="public\images\event-image.jpg" class="card-img-top" alt="Event Image">
                        <span class="category-tag">Informatika</span>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold">Event Organizer Student Staff</h5>
                        <a href="#" class="btn btn-custom-dark mt-auto">Daftar Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <h2 class="section-title text-center fw-bold">Where your <span class="text-warning-custom">academic vision</span> <br> becomes a reality</h2>

    <section class="event-section my-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <ul class="nav nav-pills event-tabs">
              <li class="nav-item">
                <a class="nav-link active" href="#">Upcoming Event (999)</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Recommend Event (999)</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Past Event (999)</a>
              </li>
            </ul>
            <div class="carousel-controls fw-bold d-none d-md-block">
                &larr; 99/99 &rarr;
            </div>
        </div>
         <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                 <div class="card event-card h-100">
                    <div class="card-img-container">
                        <img src="public\images\event-image.jpg" class="card-img-top" alt="Event Image">
                        <span class="category-tag">Informatika</span>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold">Komisi A PORSEMATIK 2024</h5>
                        <a href="#" class="btn btn-custom-yellow mt-auto">Daftar Sekarang</a>
                    </div>
                </div>
            </div>
             <div class="col-lg-3 col-md-6">
                <div class="card event-card h-100">
                    <div class="card-img-container">
                        <img src="public\images\event-image.jpg" class="card-img-top" alt="Event Image">
                        <span class="category-tag">FTI</span>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold">PDD FTI FEST 2025</h5>
                        <a href="#" class="btn btn-custom-dark mt-auto">Daftar Sekarang</a>
                    </div>
                </div>
            </div>
            </div>
    </section>

</div>

<?php 
// Di bagian bawah, panggil footer
require_once '../app/views/layouts/footer.php'; 
?>