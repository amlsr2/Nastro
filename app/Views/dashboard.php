<?= $this->extend('theme/index'); ?>
<?= $this->section('content'); ?>

<script src="<?= base_url('asset/js/jquery-3.6.1.min.js') ?>"></script>
<script src="<?= base_url('asset/js/apexcharts.js') ?>"></script>

<div class="bio">
    <div class="foto">
        <div class="profile">
        </div>
    </div>
    <div class="kotak">
        <div class="keterangan">
            <p>Selamat Datang di Website Nastro!<br>
                Kami menawarkan jasa fotografi untuk kendaraan anda!<br>
                Jika anda berminat maka anda dapat memilih paket dengan harga terjangkau<br>
                dan langsung hubungi kami pada menu <a href="about.html">about!</a>
                <br>
                <br>
                <b>Automotive Photographer</b><br>
                <i class="fa-solid fa-location-dot"></i> Tangerang - Jakarta - PIK, Indonesia
            </p>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>