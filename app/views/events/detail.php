<div class="card shadow">
    <div class="card-body">
        <div class="row">
            <div class="col-md-4">
                <img src="https://via.placeholder.com/400x300.png?text=Poster" class="img-fluid rounded" alt="<?php echo htmlspecialchars($event['nama_event']); ?>">
            </div>
            <div class="col-md-8">
                <h2><?php echo htmlspecialchars($event['nama_event']); ?></h2>
                <p class="text-muted">
                    <strong>Tanggal:</strong> <?php echo date('d F Y', strtotime($event['tanggal_event'])); ?><br>
                    <strong>Lokasi:</strong> <?php echo htmlspecialchars($event['lokasi']); ?>
                </p>
                <hr>
                <h4>Deskripsi Event</h4>
                <p><?php echo nl2br(htmlspecialchars($event['deskripsi'])); ?></p>
                
                <?php if (isset($_SESSION['success'])): ?>
                    <div class="alert alert-success"><?php echo $_SESSION['success']; unset($_SESSION['success']); ?></div>
                <?php endif; ?>
                <?php if (isset($_SESSION['error'])): ?>
                    <div class="alert alert-danger"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></div>
                <?php endif; ?>

                <form action="<?php echo BASE_URL; ?>/events/register/<?php echo $event['id']; ?>" method="POST">
                    <button type="submit" class="btn btn-success btn-lg mt-3">Daftar Event Ini</button>
                </form>
            </div>
        </div>
    </div>
</div>