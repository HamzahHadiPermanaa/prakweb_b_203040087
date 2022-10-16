<div class="container mt-5">

    <div class="row">
        <div class="col-6">
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group mt-5">
            <?php foreach( $data['mhs'] as $mhs ) :?>
                
            <li class="list-group-item list-group-item-secondary d-flex justify-content-between align-items-center text-light">
            <?= $mhs['nama']; ?>
            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id'] ?>" class="btn btn-primary text-light" >detail</a>

            </li>
            
            <?php endforeach; ?>
         </ul>
        </div>
    </div>
</div>