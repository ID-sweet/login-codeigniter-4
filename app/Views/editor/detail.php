<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
<h2>Detail Komik</h2>
<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="/assets/img/<?= $komik['sampul']; ?>" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= $komik['judul_komik']; ?></h5>
        <p class="card-text"><b>Penulis :</b><?= $komik['penulis']; ?></p>
        <p class="card-text"><i>Penerbit :</i><?= $komik['penerbit']; ?></p>

        <a href="" class="btn btn-warning">Edit</a>
        <a href="" class="btn btn-danger">Delete</a>
        <br><br>
        <a href="/komik" class="btn btn-warning">Kembali Ke Daftar Komik</a>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>