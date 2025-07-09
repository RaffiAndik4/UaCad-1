<h1 class="mb-4">Daftar Event Tersedia</h1>
<div class="row">
    <?php foreach ($events as $event): ?>
    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
            <img src="https://via.placeholder.com/400x250.png?text=Poster" class="card-img-top" alt="<?php echo htmlspecialchars($event['nama_event']); ?>">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title"><?php echo htmlspecialchars($event['nama_event']); ?></h5>
                <p class="card-text text-muted"><small><?php echo date('d F Y', strtotime($event['tanggal_event'])); ?> - <?php echo htmlspecialchars($event['lokasi']); ?></small></p>
                <p class="card-text flex-grow-1"><?php echo substr(htmlspecialchars($event['deskripsi']), 0, 100); ?>...</p>
                <a href="<?php echo BASE_URL; ?>/events/detail/<?php echo $event['id']; ?>" class="btn btn-primary mt-auto">Lihat Detail</a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>