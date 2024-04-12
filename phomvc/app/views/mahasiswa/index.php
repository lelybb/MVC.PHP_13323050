<div class="container mt-3">


<div class="row">
  <div class="col-lg-6">
    <?php Flasher::flash(); ?>
</div>
</div>

<div class="row">
    <div class="col-6">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
        Tambah Data Mahasiswa
        </button>
        <br></br>
        <h3>Daftar Mahasiswa</h3>
        <ul class="list-group">
        <?php foreach( $data['mhs'] as $mhs ) : ?>
            <li class="list-group-item d-flex justify-content-between align-items-center"><?= $mhs['nama']; ?>
            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id'];
            ?>" class="badge badge-success ">detail</a>
        
        </li>
            <?php endforeach; ?>
        </ul>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulodal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="form-group">
            <label for="nim">Nim</label>
            <input type="number" class="form-control" id="nim" name="nim">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="jurusan">Prodi</label>
            <select class="form-control" id="jurusan" name="jurusan">
            <option value="Teknologi Komputer">Teknologi Komputer</option>
            <option value="Teknologi Komputer">Teknologi Rekayasa Perangkat Lunak</option>
            <option value="Teknologi Komputer">Teknologi Informasi</option>
            <option value="Teknologi Komputer">Manajemen Rekayasa</option>
            <option value="Teknologi Komputer">Teknik Metalurgi</option>
            <option value="Teknologi Komputer">Bioproses</option>
            <option value="Teknologi Komputer">Sistem Informasi</option>
            <option value="Teknologi Komputer">Informatika</option>
            </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div> 
</div>