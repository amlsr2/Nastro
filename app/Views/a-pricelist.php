<?= $this->extend('theme/index'); ?>
<?= $this->section('content'); ?>

<script src="<?= base_url('asset/js/jquery-3.6.1.min.js') ?>"></script>
<script src="<?= base_url('asset/js/apexcharts.js') ?>"></script>

<!-- <a href="<?= site_url('/admin/insert') ?>" class="btn btn-insert"><i class="fas fa-plus"></i> Insert</a>
<br><br> -->

<div class="badan">
    <h2>PILIH PAKET</h2>
    <div class="tabel-harga">
        <div class="header header-gratis">
            <span class="paket">PAKET STAY SHOOT</span>
            <span class="harga">Rp. 1.000.000,-</span>
        </div>

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <td>
                        Batas waktu 2 JAM
                    </td>
                </tr>
                <tr>
                    <td>
                        Video diedit secara detail
                    </td>
                </tr>
                <tr>
                    <td>
                        Bisa request 2 Lokasi
                    </td>
                </tr>
                <tr>
                    <td>
                        Potrait / Landscape video
                    </td>
                </tr>
            </thead>
        </table>

        <div class="ruang-tombol">
            <div class="tengah">
                <a href="/pricelist/pesan" class="btn btn-insert">Edit Pesanan</a>
            </div>
        </div>
    </div>

    <div class="tabel-harga">
        <div class="header header-gratis">
            <span class="paket">PAKET ROLLING SHOOT</span>
            <span class="harga">Rp. 1.000.000,-</span>
        </div>

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <td>
                        Batas waktu 2 JAM
                    </td>
                </tr>
                <tr>
                    <td>
                        Video diedit secara detail
                    </td>
                </tr>
                <tr>
                    <td>
                        Bisa request 2 Lokasi
                    </td>
                </tr>
                <tr>
                    <td>
                        Potrait / Landscape video
                    </td>
                </tr>
            </thead>
        </table>

        <div class="ruang-tombol">
            <a href="/pricelist/pesan" class="btn btn-insert">Edit Pesanan</a>
        </div>
    </div>

    <div class="tabel-harga">
        <div class="header header-gratis">
            <span class="paket">PAKET STAY & ROLL</span>
            <span class="harga">Rp. 1.000.000,-</span>
        </div>

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <td>
                        Batas waktu 2 JAM
                    </td>
                </tr>
                <tr>
                    <td>
                        Video diedit secara detail
                    </td>
                </tr>
                <tr>
                    <td>
                        Bisa request 2 Lokasi
                    </td>
                </tr>
                <tr>
                    <td>
                        Potrait / Landscape video
                    </td>
                </tr>
            </thead>
        </table>

        <div class="ruang-tombol">
            <a href="/pricelist/pesan" class="btn btn-insert">Edit Pesanan</a>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>