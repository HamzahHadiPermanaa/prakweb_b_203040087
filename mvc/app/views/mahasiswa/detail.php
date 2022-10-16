<div class="container mt-5">
<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title text-light"><?= $data['mhs']['nama']; ?></h5>
      <h6 class="card-subtitle mb-2 text-light"><?= $data['mhs']['nrp']; ?></h6>
      <p class="card-text text-light text-light"><?= $data['mhs']['email']; ?></p>
      <p class="card-text text-light"><?= $data['mhs']['jurusan']; ?></p>
      <a href="<?= BASEURL; ?>/mahasiswa" class="btn btn-info text-dark
      ">Kembali</a>

    </div>
  </div>
</div>