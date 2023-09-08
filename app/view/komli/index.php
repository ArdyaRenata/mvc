<body>
  <div class="container mt-5">
    <div class="row">
      <?php Flasher::flash();?>
      <div class="col-6">
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Data Komli
                
            </button>
            <br>
          </br>
            <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
        <h2 class="fw-bold">Data komli</h2>
        <ul class="list-group">
          <?php foreach ($data['komli'] as $siswa): ?>
            <li style="width:700px;"class="col-15 list-group-item">
                        <?= $siswa['nama']; ?>
                        <a style="margin-left: 5px; float:right;" href="<?= BASE_URL; ?>/guru/hapus/<?= $siswa['id']; ?>" class="btn btn-danger float-right" onclick="return confirm('yakin?');">Hapus</a>
                        <a style="margin-left: 0px; float:right;" href="<?= BASE_URL; ?>/guru/ubah/<?= $siswa['id']; ?>" class="btn btn-success float-right tampilModalUbah" data-toggle="modal" data-target="#exampleModal" data-id="<?= $siswa['id']; ?>">Ubah</a>
                        
                    </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Komli</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
            </div>
            <div class="modal-body">
                <form action="<?= BASE_URL; ?>/komli/tambah" method="post">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>  
                    
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary " data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
        </div>
    </div>
</div>

</body>