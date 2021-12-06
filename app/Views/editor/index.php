<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">DAFTAR KOMIK</h1>
            <a href="/komik/create" class="btn btn-primary mb-3">Tambah</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Sampul</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($komik as $k) : ?>
                        <tr>
                            <th scope="row">1</th>
                            <td><img src="/img/<?= $k['sampul']; ?>" class="sampul" alt=""></td>
                            <td> <?= $k['judul_komik']; ?></td>
                            <td><a href="/komik/<?= $k['slug']; ?>" class="btn btn success">Detail</a></td>
                        </tr>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>