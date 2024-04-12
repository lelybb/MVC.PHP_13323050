<div class="container mt-3">


<div class="row">
  <div class="col-lg-6">
    <?php Flasher::flash(); ?>
</div>
</div>

<div class="row">
<div class="col-6">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
        Tambah Data Mahasiswa
        </button>
        <br></br>
</div>
</div>

<div class="row">
    <div class="col-6">
        <div class="col-lg-6">
          <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
          <div class="input-group mb-2 ">
              <input type="text" class="form-control" placeholder="Cari Data Mahasiswa" name="keyword" id="keyword" autocomplete="off">
              <div class="input-group-append">
              <button class="btn btn-primary" type="submit" id="tombolCari">cari</button>
          </div>
        </div>
    </div>

        <h3>Daftar Mahasiswa</h3>
        <ul class="list-group">
        <?php foreach( $data['mhs'] as $mhs ) : ?>
            <li class="list-group-item"><?= $mhs['nama']; ?>
            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id'];
            ?>" class="badge badge-primary float-right ml-2">Detail</a>
            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id'];
            ?>" class="badge badge-success float-right ml-2 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $mhs['id']; ?>">Ubah</a>

            <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id'];
            ?>" class="badge badge-danger float-right ml-2" onclick="return confirm('yakin?');">Hapus</a>
        
        </li>
            <?php endforeach; ?>
        </ul>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="juduModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
        <input type="hidden" name="id" id="id">
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